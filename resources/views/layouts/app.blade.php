<!DOCTYPE html>
<html lang="vi">
<head>
    @include('partials.head')
    <title>@yield('title', 'My Persona')</title>
</head>
<body>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>

    @if (!isset($hideHeaderFooter) || !$hideHeaderFooter)
        @include('partials.header')
    @endif
    @yield('content')
    @if (!isset($hideHeaderFooter) || !$hideHeaderFooter)
        @include('partials.footer')
    @endif
</body>
</html>
