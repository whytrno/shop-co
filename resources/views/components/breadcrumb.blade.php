<div class="mt-[24px] mb-[36px] flex gap-[12px]">
    <p>Home</p>
    @foreach($breadcrumbs as $breadcrumb)
        <p>></p>
        <p>{{$breadcrumb}}</p>
    @endforeach
</div>
