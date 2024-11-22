@extends('layouts.app')

<style>
.title {
    font-size: 18px;
    font-weight: 600;
    padding: 20px 15px;
}
.container {
    color: #1C1C1C;
}

.content {
    padding: 0 15px;
    text-align: center;
    padding-top: 90px;
}
.content img {
    max-width: 100%;
    width: 346px;
    display: inline-block;
}

.content .label {
    font-size: 20px;
    font-weight: 600;
    color: #000;
    line-height: 26px;
}

.content .coming-soon {
    color: #555;
    font-weight: 300;
    margin-top: 10px;
}
.button-discover {
    width: 100%;
    background-color: #1C1C1C;
    display: inline-block;
    color: #fff;
    font-size: 16px;
    font-weight: 600;
    padding: 21px 0;
    margin-top: 15px;
}
</style>

@section('content')
    <div class="container">
        <div class="title"><span>Your cart</span></div>
        <div class="content">
            <div>
                <img src="{{ asset('images/my-account/no-order.png') }}" alt="">
                <p class="label">Your cart is empty!</p>
                <p class="coming-soon">Discover our product and pick your favourite</p>
                <a href="#" class="button-discover"><span>Discover</span></a>
            </div>
        </div>
    </div>
@endsection