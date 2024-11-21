<!DOCTYPE html>
<html lang="vi">
<head>
    @include('partials.head')
    <title>@yield('title', 'My Persona')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    @include('partials.header')

    @yield('content')

    @include('partials.footer')
</body>
</html>