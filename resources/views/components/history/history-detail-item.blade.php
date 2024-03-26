<div class="flex justify-between">
    <div class="flex gap-[16px]">
        <img src="{{$item->product->image}}" alt="Store Item"
             class="size-[124px] rounded-[8px] object-cover">
        <div class="flex justify-between">
            <div class="flex flex-col justify-between">
                <div class="space-y-[2px]">
                    <h1 class="text-[20px] font-bold">{{$item->product->name}}</h1>
                    <div class="flex flex-col gap-[4px]">
                        <p>Size: <span class="text-black/60">Large</span></p>
                        <p>Color: <span class="text-black/60">White</span></p>
                    </div>
                </div>
                <h1 class="font-bold text-[24px]" id="total-price-{{$item->id}}">
                    Rp. {{ number_format($item->total, 0, ',', '.') }}</h1>
            </div>
        </div>
    </div>
</div>
