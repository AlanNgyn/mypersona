@extends('layouts.app')

<style>
body {
    background-color: #e7e7e7;
}
.title {
    font-size: 18px;
    font-weight: 600;
    padding: 20px 15px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.container {
    color: #1C1C1C;
    background-color: #fff;
}
.list-brands {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    padding: 0 15px 25px 15px;
    gap: 15px;
}
.list-brands img {
    max-width: 100%;
    display: inline-block;
}
.add-more-brand {
    font-size: 16px;
    font-weight: 400;
    border: 1px solid #1C1C1C;
    padding: 14px 28px;
}

.list-brands > div {
    border: 0.5px solid #E7E7E7;
    text-align: center;
    padding: 28px 0;
    border-radius: 4px;
}

</style>

@section('content')
    <div class="container">
        <div class="title">
            <span>Favorite brand</span>
            <a class="add-more-brand" href="#">Add more brand</a>
        </div>
        <div class="list-brands">
            <div>
                <img src="{{ asset('images/my-account/brand-1.png') }}" width="120" height="49" alt="">
            </div>
            <div>
                <img src="{{ asset('images/my-account/brand-2.png') }}" width="92" height="61" alt="">
            </div>
            <div>
                <img src="{{ asset('images/my-account/brand-3.png') }}" width="108" height="72" alt="">
            </div>
            <div>
                <img src="{{ asset('images/my-account/brand-4.png') }}" width="92" height="61" alt="">
            </div>
        </div>
    </div>
@endsection