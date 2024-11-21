@extends('layouts.app')

<style>
.container {
    color: #1C1C1C;
}
.banner {
    width: 100%;
    display: block;
    height: 140px;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    margin-bottom: 15px
}

.content {
    padding: 10px 15px 50px 15px;
}
</style>

@section('content')
    <div class="container">
        <div class="content">
            <a class="banner" href="/brand" style="background-image: url('{{ asset('images/luxury-banner/banner.png') }}');">
            </a>
            <a class="banner" href="/brand" style="background-image: url('{{ asset('images/luxury-banner/banner1.png') }}');">
            </a>
            <a class="banner" href="/brand" style="background-image: url('{{ asset('images/luxury-banner/banner2.png') }}');">
            </a>
            <a class="banner" href="/brand" style="background-image: url('{{ asset('images/luxury-banner/banner3.png') }}');">
            </a>
            <a class="banner" href="/brand" style="background-image: url('{{ asset('images/luxury-banner/banner4.png') }}');">
            </a>
        </div>
    </div>
@endsection