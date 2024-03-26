<a href="{{route('historyDetail', $transaction->id)}}"
   class="flex justify-between  border border-black/10 h-min rounded-[20px] py-4 px-8">
    <div class="space-y-2 w-full">
        <div class="space-y-[2px] flex justify-between w-full">
            <h1 class="text-[20px] font-bold">{{$transaction->transaction_code}}</h1>
            <p class="text-[20px]">{{$transaction->created_at}}</p>
        </div>
        <h1 class="font-bold text-[16px]" id="total-price-{{$transaction->id}}">
            Rp. {{ number_format($transaction->total, 0, ',', '.') }}</h1>
    </div>
</a>
