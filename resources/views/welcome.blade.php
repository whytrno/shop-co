@extends('layouts.main')

@section('title', 'Home')
@section('content')
    @include('components.hero')
    @include('components.brands')
    <div class="py-[72px] space-y-[55px]">
        <h1 class="text-center text-[48px] font-extrabold">OUR PRODUCTS</h1>
        <div class="grid grid-cols-4 gap-[20px]">
            @include('components.shop-item')
            @include('components.shop-item')
            @include('components.shop-item')
            @include('components.shop-item')
        </div>
    </div>
@endsection
