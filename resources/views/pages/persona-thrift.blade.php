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

</style>

@section('content')
    <div class="container">
        <div class="title"><span>Persona Thrift</span></div>
        <div class="content">
            <div>
                <img src="{{ asset('images/persona-thrift/persona-thrift.png') }}" alt="">
                <p class="label">Coming soon!</p>
                <p class="coming-soon">We’re launching this service soon</p>
            </div>
        </div>
    </div>
@endsection