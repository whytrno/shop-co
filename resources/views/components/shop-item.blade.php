<a class="space-y-[16px] block" href="{{route('detail', 1)}}">
    <img src="{{asset('images/store-item.png')}}" alt="Store Item"
         class="rounded-[20px] object-cover aspect-square">
    <div class="space-y-[8px]">
        <p class="text-[20px] font-bold">T-SHIRT WITH TAPE DETAILS</p>
        @include('components.rating')
        <p class="text-[24px] font-bold">$120</p>
    </div>
</a>
