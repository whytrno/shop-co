<a class="space-y-[16px] block" href="{{route('detail', $product->id)}}">
    <div class="aspect-square rounded-[20px] relative">
        <div class="aspect-square animate-pulse rounded-[20px] bg-gray-200 absolute top-0 left-0 w-full -z-10"></div>
        <img src="{{$product->image}}" alt="Store Item"
             class="rounded-[20px] object-cover aspect-square">
    </div>
    <div class="space-y-[8px]">
        <p class="text-[20px] font-bold">{{$product->name}}</p>
        @include('components.rating')
        <p class="text-[24px] font-bold">Rp. {{ number_format($product->price, 0, ',', '.') }}</p>
    </div>
</a>
