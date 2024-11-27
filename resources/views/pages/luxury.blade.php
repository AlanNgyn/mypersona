@extends('layouts.app')

<style>
.container {
    color: #1C1C1C;
}
.luxury .banner {
    width: 100%;
    display: flex;
    height: 140px;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    margin-bottom: 15px;
    align-items: center;
    justify-content: center;
    position: relative;
}

.luxury .content {
    padding: 10px 15px 50px 15px;
}
.luxury .banner img {
    display: inline-block;
    z-index: 1;
}
.luxury .banner .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.3);
    z-index: 0;
}
</style>

@section('content')
    <div class="container luxury">
        <div class="content">
            <a class="banner" href="/brand/3" style="background-image: url('{{ asset('images/luxury-banner/banner.png') }}');">
                <div class="overlay"></div>
                <img src="{{ asset('images/luxury-banner/logo1.png') }}" style="height: 24px;" alt="">
            </a>
            <a class="banner" href="/brand/4" style="background-image: url('{{ asset('images/luxury-banner/banner1.png') }}');">
                <div class="overlay"></div>
                <img src="{{ asset('images/luxury-banner/logo2.png') }}" width="140" height="52" alt="">
            </a>
            <a class="banner" href="/brand/11" style="background-image: url('{{ asset('images/luxury-banner/banner2.png') }}');">
                <div class="overlay"></div>
                <img src="{{ asset('images/luxury-banner/logo3.png') }}" style="height: 35px;" alt="">
            </a>
            <a class="banner" href="/brand/13" style="background-image: url('{{ asset('images/luxury-banner/banner3.png') }}');">
                <div class="overlay"></div>
                <img src="{{ asset('images/luxury-banner/logo4.png') }}" style="width: 140px;" alt="">
            </a>
            <a class="banner" href="/brand/26" style="background-image: url('{{ asset('images/luxury-banner/banner4.png') }}');">
                <div class="overlay"></div>
                <img src="{{ asset('images/luxury-banner/logo5.png') }}" width="140" height="105" alt="">
            </a>
        </div>
    </div>
@endsection
