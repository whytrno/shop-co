<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="text/javascript"
            src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="{{config('midtrans.client_key')}}"></script>
    <title>@yield('title')</title>
</head>
<body>
@include('components.ad')
<div class="px-[100px]">
    @include('components.main-navbar')
    @yield('content')
    @include('components.footer')
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
@stack('scripts')
</body>
</html>
