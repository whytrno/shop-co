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
        <div class="rounded-[20px] h-[530px] relative">
            <div
                class="animate-pulse h-full w-full rounded-[20px] bg-gray-200 absolute top-0 left-0 w-full -z-10"></div>
            <img src="{{$product->image}}" alt="Store Item"
                 class="w-full rounded-[20px] h-[530px] object-cover">
        </div>
    </div>
</div>
