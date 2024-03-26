<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Midtrans\Config;
use Midtrans\Snap;
use Throwable;

class MainController extends Controller
{
    public function index()
    {
        $products = Product::paginate(12);

        return view('index', compact('products'));
    }

    public function detail($id)
    {
        $product = Product::find($id);

        return view('detail', compact('product'));
    }

    public function cart()
    {
        $carts = Cart::where('user_id', Auth::user()->id)
            ->with('product')
            ->get();
        $subTotal = $carts->sum('total');
        $total = $subTotal + 25000;

        return view('cart', compact('carts', 'subTotal', 'total'));
    }

    public function addToCart(Request $request)
    {
        try {
            $product = Product::find($request->product_id);
            $discountPrice = $product->price - ($product->price * $product->discount / 100);
            $total = $request->quantity * $discountPrice;
            $cart = Cart::where('user_id', Auth::user()->id)
                ->where('product_id', $request->product_id)
                ->first();

            if ($cart) {
                $cart->quantity += $request->quantity;
                $cart->total += $total;
                $cart->save();

                return redirect(route('cart'))->with('success', 'Product added to cart!');
            } else {
                Cart::create([
                    'user_id' => Auth::user()->id,
                    'product_id' => $request->product_id,
                    'quantity' => $request->quantity,
                    'total' => $total
                ]);

                return redirect(route('cart'))->with('success', 'Product added to cart!');
            }
        } catch (Throwable $th) {
            return redirect()->back()->with('error', 'Failed to add product to cart!');
        }
    }

    public function removeCart($id)
    {
        try {
            $cart = Cart::find($id);
            $cart->delete();

            return redirect(route('cart'))->with('success', 'Product removed from cart!');
        } catch (Throwable $th) {
            return redirect()->back()->with('error', 'Failed to remove product from cart!');
        }
    }

    public function updateCart(Request $request, $id)
    {
        try {
            $cart = Cart::find($id);
            $product = Product::find($cart->product_id);
            $discountPrice = $product->price - ($product->price * $product->discount / 100);
            $total = $request->quantity * $discountPrice;
            $cart->quantity = $request->quantity;
            $cart->total = $total;
            $cart->save();

            return redirect(route('cart'))->with('success', 'Cart updated!');
        } catch (Throwable $th) {
            return redirect()->back()->with('error', 'Failed to update cart!');
        }
    }

    public function checkout(Request $request)
    {
        try {
            $carts = Cart::where('user_id', $request->user_id)
                ->with('product')
                ->get();
            $transaction_code = 'TRX-' . $request->user_id . '-' . time();

            Config::$serverKey = config('midtrans.server_key');
            Config::$isProduction = false;
            Config::$isSanitized = true;
            Config::$is3ds = true;

            $params = array(
                'transaction_details' => array(
                    'order_id' => $transaction_code,
                    'gross_amount' => $request->total,
                ),
                'customer_details' => array(
                    'name' => $request->user_name,
                ),
                'test_type_tt' => 'checkout',
            );
            $snapToken = Snap::getSnapToken($params);

            if ($snapToken) {
                $transaction = Transaction::create([
                    'user_id' => $request->user_id,
                    'transaction_code' => $transaction_code,
                    'total' => $request->total
                ]);

                foreach ($carts as $cart) {
                    TransactionItem::create([
                        'transaction_id' => $transaction->id,
                        'transaction_code' => $transaction_code,
                        'product_id' => $cart->product_id,
                        'quantity' => $cart->quantity,
                        'price' => $cart->product->price,
                        'discount' => $cart->product->discount,
                        'total' => $cart->total
                    ]);

                    $cart->delete();
                }
            }

            return $snapToken;
        } catch (Throwable $th) {
            return $th;
        }
    }

    public function history()
    {
        $transactions = Transaction::where('user_id', Auth::user()->id)
            ->orderBy('id', 'DESC')
            ->get();

        return view('history', compact('transactions'));
    }

    public function historyDetail($id)
    {
        $transaction = Transaction::find($id);
        $items = TransactionItem::where('transaction_id', $id)
            ->with('product')
            ->get();

        return view('history-detail', compact('transaction', 'items'));
    }
}
