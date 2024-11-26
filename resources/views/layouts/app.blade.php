<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <link rel="shortcut icon" href="@yield('favicon', asset('favicon.ico'))">
    <title>@yield('title', env('APP_NAME'))</title>
    <meta name="description" content="@yield('description', env('APP_DESC'))">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @stack('styles')
    
    {{-- @include('layouts.resources.yandex') --}}
    @include('layouts.resources.metatags')
    @include('layouts.resources.fonts')
    @include('layouts.resources.extensions')
    @include('layouts.resources.styles')
</head>

<body class="back-color-main over-x-hidden">
    @yield('page')
    
    @stack('scripts')

    @include('layouts.resources.scripts')
</body>

</html>
