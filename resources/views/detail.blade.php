@extends('layouts.main')

@section('title', 'Detail')
@section('content')
    <div>
        <div class="mt-[24px] mb-[36px] flex gap-[12px]">
            <p>Home</p>
            <p>></p>
            <p>Item Detail</p>
        </div>
        <div class="space-y-[80px]">
            <div class="grid grid-cols-12 gap-[40px]">
                <div class="flex col-span-6 grid grid-cols-12 gap-[14px] h-[530px]">
                    <div class="grid grid-rows-3 col-span-3 gap-[14px]">
                        <div class="cursor-pointer">
                            <img src="{{asset('images/store-item.png')}}" alt="Store Item"
                                 class="w-full rounded-[20px] h-[167px] object-cover border-[1px] border-black">
                        </div>
                        <div class="cursor-pointer">
                            <img src="{{asset('images/store-item.png')}}" alt="Store Item"
                                 class="w-full rounded-[20px] h-[167px] object-cover">
                        </div>
                        <div class="cursor-pointer">
                            <img src="{{asset('images/store-item.png')}}" alt="Store Item"
                                 class="w-full rounded-[20px] h-[167px] object-cover">
                        </div>
                    </div>
                    <div class="col-span-9">
                        <img src="{{asset('images/store-item.png')}}" alt="Store Item"
                             class="w-full rounded-[20px] h-[530px] object-cover">
                    </div>
                </div>
                <div class="col-span-6 flex flex-col justify-between">
                    <div class="space-y-[20px]">
                        <div class="space-y-[14px]">
                            <h1 class="text-[40px] font-extrabold">One Life Graphic T-shirt</h1>
                            @include('components.rating')
                            <div class="text-[32px] font-bold flex gap-[12px]">
                                <h1>$260</h1>
                                <h1 class="text-black/30 line-through">$300</h1>
                            </div>
                        </div>
                        <p class="text-black/60">This graphic t-shirt which is perfect for any occasion. Crafted from a
                            soft
                            and breathable
                            fabric, it
                            offers superior comfort and style.</p>
                    </div>
                    <hr>
                    <div class="space-y-[16px]">
                        <h1 class="text-black/60">Select Colors</h1>
                        <div class="flex gap-[16px]">
                            <div
                                class="cursor-pointer rounded-full bg-[#4F4631] size-[37px] flex items-center justify-center">
                                <div>
                                    <svg width="14" height="11" viewBox="0 0 14 11" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.5306 2.03063L5.5306 10.0306C5.46092 10.1005 5.37813 10.156 5.28696 10.1939C5.1958 10.2317 5.09806 10.2512 4.99935 10.2512C4.90064 10.2512 4.8029 10.2317 4.71173 10.1939C4.62057 10.156 4.53778 10.1005 4.4681 10.0306L0.968098 6.53063C0.898333 6.46087 0.842993 6.37804 0.805236 6.28689C0.76748 6.19574 0.748047 6.09804 0.748047 5.99938C0.748047 5.90072 0.76748 5.80302 0.805236 5.71187C0.842993 5.62072 0.898333 5.53789 0.968098 5.46813C1.03786 5.39837 1.12069 5.34302 1.21184 5.30527C1.30299 5.26751 1.40069 5.24808 1.49935 5.24808C1.59801 5.24808 1.69571 5.26751 1.78686 5.30527C1.87801 5.34302 1.96083 5.39837 2.0306 5.46813L4.99997 8.4375L12.4693 0.969379C12.6102 0.828483 12.8013 0.749329 13.0006 0.749329C13.1999 0.749329 13.391 0.828483 13.5318 0.969379C13.6727 1.11028 13.7519 1.30137 13.7519 1.50063C13.7519 1.69989 13.6727 1.89098 13.5318 2.03188L13.5306 2.03063Z"
                                            fill="white"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="cursor-pointer rounded-full bg-[#314F4A] size-[37px]"></div>
                            <div class="cursor-pointer rounded-full bg-[#31344F] size-[37px]"></div>
                        </div>
                    </div>
                    <hr>
                    <div class="space-y-[16px]">
                        <h1 class="text-black/60">Choose Size</h1>
                        <div class="flex gap-[12px]">
                            <button
                                class="py-[12px] px-[24px] rounded-[62px] flex items-center justify-center bg-[#F0F0F0] text-black/60">
                                Small
                            </button>
                            <button
                                class="py-[12px] px-[24px] rounded-[62px] flex items-center justify-center bg-[#F0F0F0] text-black/60">
                                Medium
                            </button>
                            <button
                                class="py-[12px] px-[24px] rounded-[62px] flex items-center justify-center bg-black text-white font-medium">
                                Large
                            </button>
                            <button
                                class="py-[12px] px-[24px] rounded-[62px] flex items-center justify-center bg-[#F0F0F0] text-black/60">
                                X-Large
                            </button>
                        </div>
                    </div>
                    <hr>
                    <div class="flex gap-[20px]">
                        <div
                            class="py-[16px] px-[20px] justify-between flex w-[170px] items-center rounded-[62px] bg-[#F0F0F0]">
                            <button class="size-[24px]">
                                <svg width="20" height="4" viewBox="0 0 20 4" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19.375 2C19.375 2.29837 19.2565 2.58452 19.0455 2.79549C18.8345 3.00647 18.5484 3.125 18.25 3.125H1.75C1.45163 3.125 1.16548 3.00647 0.954505 2.79549C0.743526 2.58452 0.625 2.29837 0.625 2C0.625 1.70163 0.743526 1.41548 0.954505 1.2045C1.16548 0.993526 1.45163 0.875 1.75 0.875H18.25C18.5484 0.875 18.8345 0.993526 19.0455 1.2045C19.2565 1.41548 19.375 1.70163 19.375 2Z"
                                        fill="black"/>
                                </svg>
                            </button>
                            <p>1</p>
                            <button class="size-[24px]">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19.375 10C19.375 10.2984 19.2565 10.5845 19.0455 10.7955C18.8345 11.0065 18.5484 11.125 18.25 11.125H11.125V18.25C11.125 18.5484 11.0065 18.8345 10.7955 19.0455C10.5845 19.2565 10.2984 19.375 10 19.375C9.70163 19.375 9.41548 19.2565 9.2045 19.0455C8.99353 18.8345 8.875 18.5484 8.875 18.25V11.125H1.75C1.45163 11.125 1.16548 11.0065 0.954505 10.7955C0.743526 10.5845 0.625 10.2984 0.625 10C0.625 9.70163 0.743526 9.41548 0.954505 9.2045C1.16548 8.99353 1.45163 8.875 1.75 8.875H8.875V1.75C8.875 1.45163 8.99353 1.16548 9.2045 0.954505C9.41548 0.743526 9.70163 0.625 10 0.625C10.2984 0.625 10.5845 0.743526 10.7955 0.954505C11.0065 1.16548 11.125 1.45163 11.125 1.75V8.875H18.25C18.5484 8.875 18.8345 8.99353 19.0455 9.2045C19.2565 9.41548 19.375 9.70163 19.375 10Z"
                                        fill="black"/>
                                </svg>
                            </button>
                        </div>
                        <button class="py-[16px] px-[54px] bg-black text-white grow rounded-[62px]">
                            Add to Cart
                        </button>
                    </div>
                </div>
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
