@extends('layouts.main')

@section('title', 'Detail')
@section('content')
    <div>
        @php
            $breadcrumbs = ["History Detail", $transaction->transaction_code]
        @endphp
        @include('components.breadcrumb')
        <div class="grid grid-cols-12 gap-[20px] mb-[80px]">
            <div class="col-span-7 py-[20px] px-[24px] border border-black/10 h-min rounded-[20px] space-y-[24px]">
                @if(count($transaction->items) == 0)
                    <h1 class="text-[20px] font-bold">Cart is Empty</h1>
                @else
                    @foreach($transaction->items as $item)
                        @include('components.history.history-detail-item')

                        @if(count($transaction->items) > 1)
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
                        <p class="font-bold">Rp. {{ number_format(($transaction->total - 25000), 0, ',', '.') }}</p>
                    </div>
                    <div class="flex justify-between">
                        <p class="text-black/60">Delivery Fee</p>
                        <p class="font-bold">Rp. 25.000</p>
                    </div>
                </div>
                <hr>
                <div class="flex justify-between text-[20px]">
                    <p>Total</p>
                    <p class="font-bold">Rp. {{ number_format($transaction->total, 0, ',', '.') }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
