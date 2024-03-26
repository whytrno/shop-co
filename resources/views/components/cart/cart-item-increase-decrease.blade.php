<div
    class="py-[16px] px-[20px] justify-between flex w-[170px] items-center rounded-[62px] bg-[#F0F0F0]">
    <button type="button" id="decrease" class="size-[24px]">
        <svg width="20" height="4" viewBox="0 0 20 4" fill="none"
             xmlns="http://www.w3.org/2000/svg">
            <path
                d="M19.375 2C19.375 2.29837 19.2565 2.58452 19.0455 2.79549C18.8345 3.00647 18.5484 3.125 18.25 3.125H1.75C1.45163 3.125 1.16548 3.00647 0.954505 2.79549C0.743526 2.58452 0.625 2.29837 0.625 2C0.625 1.70163 0.743526 1.41548 0.954505 1.2045C1.16548 0.993526 1.45163 0.875 1.75 0.875H18.25C18.5484 0.875 18.8345 0.993526 19.0455 1.2045C19.2565 1.41548 19.375 1.70163 19.375 2Z"
                fill="black"/>
        </svg>
    </button>
    <p id="value">{{$cart->quantity}}</p>
    <input name="quantity" type="hidden" id="inputValue" readonly value="{{$cart->quantity}}">
    <button type="button" id="increase" class="size-[24px]">
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
             xmlns="http://www.w3.org/2000/svg">
            <path
                d="M19.375 10C19.375 10.2984 19.2565 10.5845 19.0455 10.7955C18.8345 11.0065 18.5484 11.125 18.25 11.125H11.125V18.25C11.125 18.5484 11.0065 18.8345 10.7955 19.0455C10.5845 19.2565 10.2984 19.375 10 19.375C9.70163 19.375 9.41548 19.2565 9.2045 19.0455C8.99353 18.8345 8.875 18.5484 8.875 18.25V11.125H1.75C1.45163 11.125 1.16548 11.0065 0.954505 10.7955C0.743526 10.5845 0.625 10.2984 0.625 10C0.625 9.70163 0.743526 9.41548 0.954505 9.2045C1.16548 8.99353 1.45163 8.875 1.75 8.875H8.875V1.75C8.875 1.45163 8.99353 1.16548 9.2045 0.954505C9.41548 0.743526 9.70163 0.625 10 0.625C10.2984 0.625 10.5845 0.743526 10.7955 0.954505C11.0065 1.16548 11.125 1.45163 11.125 1.75V8.875H18.25C18.5484 8.875 18.8345 8.99353 19.0455 9.2045C19.2565 9.41548 19.375 9.70163 19.375 10Z"
                fill="black"/>
        </svg>
    </button>
</div>

@push('scripts')
    <script>
        const decrease = $('#decrease');
        const increase = $('#increase');
        const value = $('#value');
        const inputValue = $('#inputValue');
        const totalPriceId = $('#total-price-{{$cart->id}}');
        const discountPrice = {{$cart->product->price - ($cart->product->price * $cart->product->discount / 100)}};

        decrease.click(() => {
            let currentValue = parseInt(inputValue.val());
            if (currentValue > 1) {
                inputValue.val(currentValue - 1);
                value.text(currentValue - 1);
                totalPriceId.text('Rp. ' + new Intl.NumberFormat('id-ID').format(discountPrice * (currentValue - 1)));
            }
        });

        increase.click(() => {
            let currentValue = parseInt(inputValue.val());
            inputValue.val(currentValue + 1);
            value.text(currentValue + 1);
            totalPriceId.text('Rp. ' + new Intl.NumberFormat('id-ID').format(discountPrice * (currentValue + 1)));
        });
    </script>
@endpush
