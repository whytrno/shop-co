@extends('layouts.main')

@section('title', 'Detail')
@section('content')
    <div>
        @php
            $breadcrumbs = ["Cart"]
        @endphp
        @include('components.breadcrumb')
        <div class="grid grid-cols-12 gap-[20px] mb-[80px]">
            <div class="col-span-7 py-[20px] px-[24px] border border-black/10 h-min rounded-[20px] space-y-[24px]">
                @if(count($carts) == 0)
                    <h1 class="text-[20px] font-bold">Cart is Empty</h1>
                @else
                    @foreach($carts as $cart)
                        @include('components.cart.cart-item')

                        @if(count($carts) > 1)
                            <hr>
                        @endif
                    @endforeach
                @endif
            </div>
            <div
                class="col-span-5 flex flex-col justify-between space-y-[24px] py-[20px] px-[24px] border border-black/10 rounded-[20px]">
                <h1 class="text-[24px] font-bold">Order Summary</h1>
                <div class="space-y-[20px] text-[20px]">
                    <div class="flex justify-between">
                        <p class="text-black/60">Subtotal</p>
                        <p class="font-bold">Rp. {{ number_format($subTotal, 0, ',', '.') }}</p>
                    </div>
                    <div class="flex justify-between">
                        <p class="text-black/60">Delivery Fee</p>
                        <p class="font-bold">Rp. 25.000</p>
                    </div>
                </div>
                <hr>
                <div class="flex justify-between text-[20px]">
                    <p>Total</p>
                    <p class="font-bold">Rp. {{ number_format($total, 0, ',', '.') }}</p>
                </div>
                <button onclick="checkout()"
                        class="cursor-pointer py-[16px] px-[54px] text-center bg-black rounded-[62px] text-white font-medium flex items-center justify-center gap-[12px]">
                    <p>Go to Checkout</p>
                    <div class="size-[24px] items-center justify-center flex">
                        <svg width="19" height="16" viewBox="0 0 19 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.7959 0.454104L18.5459 7.2041C18.6508 7.30862 18.734 7.43281 18.7908 7.56956C18.8476 7.7063 18.8768 7.85291 18.8768 8.00098C18.8768 8.14904 18.8476 8.29565 18.7908 8.4324C18.734 8.56915 18.6508 8.69334 18.5459 8.79785L11.7959 15.5479C11.5846 15.7592 11.2979 15.8779 10.9991 15.8779C10.7002 15.8779 10.4135 15.7592 10.2022 15.5479C9.99084 15.3365 9.87211 15.0499 9.87211 14.751C9.87211 14.4521 9.99084 14.1654 10.2022 13.9541L15.0313 9.12504L1.25 9.12504C0.951632 9.12504 0.665483 9.00651 0.454505 8.79554C0.243527 8.58456 0.125 8.29841 0.125 8.00004C0.125 7.70167 0.243527 7.41552 0.454505 7.20455C0.665483 6.99357 0.951632 6.87504 1.25 6.87504L15.0313 6.87504L10.2013 2.04598C9.98991 1.83463 9.87117 1.54799 9.87117 1.2491C9.87117 0.950218 9.98991 0.663574 10.2013 0.45223C10.4126 0.240885 10.6992 0.122151 10.9981 0.122151C11.297 0.122151 11.5837 0.240885 11.795 0.45223L11.7959 0.454104Z"
                                fill="white"/>
                        </svg>
                    </div>
                </button>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        function checkout() {
            $.ajax({
                url: '{{ route('checkout') }}',
                method: 'POST',
                data: {
                    user_id: '{{ auth()->user()->id }}',
                    user_name: '{{ auth()->user()->name }}',
                    total: '{{ $total }}'
                },
                success: function (response) {
                    console.log(response)
                    snap.pay(response, {
                        onSuccess: function (result) {
                            window.location.href = '/cart';
                        },
                        onPending: function (result) {
                            alert("wating your payment!");
                            console.log(result);
                        },
                        onError: function (result) {
                            alert("payment failed!");
                            console.log(result);
                        },
                        onClose: function () {
                            alert('you closed the popup without finishing the payment');
                        }
                    });
                }
            });
        }
    </script>
@endpush
