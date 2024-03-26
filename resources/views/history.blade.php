@extends('layouts.main')

@section('title', 'Detail')
@section('content')
    <div>
        @php
            $breadcrumbs = ["History"]
        @endphp
        @include('components.breadcrumb')
        <div class="gap-[20px] mb-[80px]">
            <div
                class="py-[20px] px-[24px] space-y-[24px]">
                @if(count($transactions) == 0)
                    <h1 class="text-[20px] font-bold">Cart is Empty</h1>
                @else
                    <div class="grid grid-cols-2 gap-5">
                        @foreach($transactions as $transaction)
                            @include('components.history.history-item')
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
