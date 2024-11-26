<!DOCTYPE html>
<html lang="vi">
<head>
    @include('partials.head')
    <title>@yield('title', 'My Persona')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<script src="{{ secure_asset('js/app.js') }}"></script>
<script src="{{ secure_asset('js/owl.carousel.min.js') }}"></script>

    @if (!isset($hideHeaderFooter) || !$hideHeaderFooter)
        @include('partials.header')
    @endif
    @yield('content')
    @if (!isset($hideHeaderFooter) || !$hideHeaderFooter)
        @include('partials.footer')
    @endif
</body>
</html>
