<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title')</title>
</head>
<body>
@include('components.ad')
<div class="px-[100px]">
    @include('components.main-navbar')
    @yield('content')
    @include('components.footer')
</div>
</body>
</html>
