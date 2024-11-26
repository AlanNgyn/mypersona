<!DOCTYPE html>
<html lang="vi">
<head>
    @include('partials.head')
    <title>@yield('title', 'My Persona')</title>
</head>
<body>
    @if (!isset($hideHeaderFooter) || !$hideHeaderFooter)
        @include('partials.header')
    @endif
    @yield('content')
    @if (!isset($hideHeaderFooter) || !$hideHeaderFooter)
        @include('partials.footer')
    @endif
</body>
</html>
