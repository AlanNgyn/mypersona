@extends('layouts.app')

<style>
.title {
    font-size: 18px;
    font-weight: 600;
    padding: 20px 15px;
}

.content .item {
    font-size: 16px;
    font-weight: 600;
    border-bottom: 1px solid #AAA;
    display: flex;
    padding: 26px 15px;
    align-items: center;
}

.container {
    color: #1C1C1C;
}
.content .item img {
    padding-right: 10px;
}
</style>

@section('content')
    <div class="container">
        <div class="title"><span>Hi there, Kim</span></div>
        <div class="content">
            <div class="item">
                <img src="{{ asset('images/my-account/cart.png') }}" alt="">
                <a href="/my-account/order-history">Your order</a>
            </div>
            <div class="item">
                <img src="{{ asset('images/my-account/profile.png') }}" alt="">
                <a href="/my-account/profile">Profile & security</a>
            </div>
            <div class="item">
                <img src="{{ asset('images/my-account/star.png') }}" alt="">
                <a href="/my-account/brand">Favorite brand</a>
            </div>
            <div class="item">
                <img src="{{ asset('images/my-account/help.png') }}" alt="">
                <a href="#">Help</a>
            </div>
        </div>
    </div>
@endsection
