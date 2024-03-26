<div class="col-span-6 flex flex-col justify-between">
    <div class="space-y-[20px]">
        <div class="space-y-[14px]">
            <h1 class="text-[40px] font-extrabold">{{$product->name}}</h1>
            @include('components.rating')
            <div class="text-[32px] font-bold flex gap-[12px]">
                @php
                    $discountPrice = $product->price - ($product->price * $product->discount / 100);
                @endphp
                <h1>Rp. {{ number_format($discountPrice, 0, ',', '.') }}</h1>
                <h1 class="text-black/30 line-through">Rp. {{ number_format($product->price, 0, ',', '.') }}</h1>
            </div>
        </div>
        <p class="text-black/60">{{$product->description}}</p>
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
    <form class="flex gap-[20px]" method="POST" action="{{route('cart')}}">
        @csrf
        <input type="hidden" required name="product_id" value="{{$product->id}}">
        @include('components.item-increase-decrease')
        <button type="submit" class="py-[16px] px-[54px] bg-black text-white grow rounded-[62px]">
            Add to Cart
        </button>
    </form>
</div>
