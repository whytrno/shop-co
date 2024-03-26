@extends('layouts.main')

@section('title', 'Detail')
@section('content')
    <div>
        @php
            $breadcrumbs = ["Detail", $product->name]
        @endphp
        @include('components.breadcrumb')
        <div class="space-y-[80px]">
            <div class="grid grid-cols-12 gap-[40px]">
                @include('components.detail.item-overview')
                @include('components.detail.item-detail')
            </div>
            <div class="py-[72px] space-y-[55px]">
                <h1 class="text-center text-[48px] font-extrabold">YOU MIGHT ALSO LIKE</h1>
                <div class="grid grid-cols-4 gap-[20px]">
                    @include('components.shop-item')
                    @include('components.shop-item')
                    @include('components.shop-item')
                    @include('components.shop-item')
                </div>
            </div>
        </div>
    </div>
@endsection
