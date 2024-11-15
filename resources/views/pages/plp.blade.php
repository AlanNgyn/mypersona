@extends('layouts.app')

<style>
    .plp-container {
        display: grid;
        grid-template-rows: 1fr auto;
        grid-template-columns: 0.5fr 2fr;
        gap: 10px;
    }

    .plp-container .banner {
        height: 600px;
        background-color: #FFD700;
        grid-column: 1 / -1;
    }

    .main-content {
        background-color: #32CD32;
    }

</style>

@section('content')
    <div class="plp-container">
        <div class="banner">
            @include('partials.listingpage.banner')
        </div>
        <div class="left-navigation">
            @include('partials.listingpage.left-navigation')
        </div>
        <div class="main-content">

        </div>
    </div>
@endsection