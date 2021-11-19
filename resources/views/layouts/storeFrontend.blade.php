<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    @livewireStyles
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/scroll.css') }}">
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css" rel="stylesheet">
</head>
<body>


@livewire('storefront.navigation.home-navi')

<div class="">

    @yield('content')

    {{--    @livewire('storefront.frontend.footer')--}}
</div>

<div>

    @livewire('storefront.frontend.tiles')

    @livewire('storefront.frontend.products')


</div>

@livewire('storefront.frontend.footer')

@livewireScripts
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>
