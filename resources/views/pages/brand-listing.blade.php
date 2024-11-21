@extends('layouts.app')

<style>
.container {
    padding: 20px 15px;
    color: #1C1C1C;
}

h1 {
    color: #1C1C1C;
    font-size: 24px;
    font-weight: 600;
    text-align: center;
    margin-bottom: 10px;
}

.search-bar {
    position: relative;
    margin-bottom: 20px;
}
.search-bar input {
    width: 100%;
    padding: 15px;
    border: 1px solid #aaa;
    height: 56px;
    font-size: 14px;
    font-weight: 300;
}
.search-bar button {
    padding: 17px;
    position: absolute;
    right: 0;
    height: 100%;
    color: #717171;
}

.all-brands {
    display: inline-block;
    width: 100%;
    text-align: center;
    background-color: #1C1C1C;
    color: #fff;
    padding: 11px 0;
}

.brand-section {
    margin-top: 20px;
}
.brand-section h2 {
    font-size: 16px;
    font-weight: 600;
    color: #1C1C1C;
    margin-bottom: 15px;
}

.top-brands-list .brand-item {
    width: 100%;
    height: 88px;
    display: inline-block;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    margin-bottom: 8px;
}
.brand-of-week .brand-item {
    width: 100%;
    height: 224px;
    display: inline-block;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}
.all-brands-section.brand-section {
    margin-top: 35px;
}
.alphabel-section .label {
    display: inline-block;
    font-weight: 600;
    background-color: #F2F2F2;
    padding: 3px 6px;
}
.alphabel-section .content {
    border-left: 3px solid #F2F2F2;
    margin-left: 10px;
    margin-bottom: 20px;
}
.alphabel-section .content > a {
    display: flex;
    padding: 10px 15px;
    font-size: 20px;
    justify-content: space-between;
    color: #717171;
}
.alphabel-section .content > a:last-child {
    padding-bottom: 5px;
}
.alphabel-section .content .name {
    color: #1C1C1C;
}

</style>

@section('content')
    <div class="container">
        <h1>Brands</h1>
        <div class="search-bar">
            <input type="text" placeholder="Search for a brand">
            <button><span><i class="fas fa-magnifying-glass"></i></span></button>
        </div>
        <a href="#" class="all-brands">
            All brands from A-Z
        </a>
        <div class="top-brands-list brand-section">
            <h2>Top brands</h2>
            <div>
                <a class="brand-item" href="/brand/1" style="background-image: url('{{ asset('images/brand-listing/top-brand.png') }}');">
                </a>
                <a class="brand-item" href="/brand/14" style="background-image: url('{{ asset('images/brand-listing/top-brand1.png') }}');">
                </a>
                <a class="brand-item" href="/brand/20" style="background-image: url('{{ asset('images/brand-listing/top-brand2.png') }}');">
                </a>
                <a class="brand-item" href="/brand/23" style="background-image: url('{{ asset('images/brand-listing/top-brand3.png') }}');">
                </a>
                <a class="brand-item" href="/brand/6" style="background-image: url('{{ asset('images/brand-listing/top-brand4.png') }}');">
                </a>
            </div>

        </div>
        <div class="brand-of-week brand-section">
            <h2>Top brands</h2>
            <div>
                <a class="brand-item" href="/brand/1" style="background-image: url('{{ asset('images/brand-listing/brandofweek.png') }}');">
                </a>
            </div>
        </div>

        <div class="all-brands-section brand-section">
            <h2>Discover all brands on PERSONA</h2>
            <div>
                <div class="alphabel-section">
                    <p class="label">A</p>
                    <div class="content">
                        <a href="/brand/1"><span class="name">ADIDAS</span> <span class="count">5</span></a>
                        <a href="/brand/2"><span class="name">ALDO</span> <span class="count">543</span></a>
                        <a href="/brand/3"><span class="name">ASHLUXE</span> <span class="count">9</span></a>
                    </div>
                </div>
                <div class="alphabel-section">
                    <p class="label">B</p>
                    <div class="content">
                        <a href="/brand/4"><span class="name">BOSS</span> <span class="count">81</span></a>
                    </div>
                </div>
                <div class="alphabel-section">
                    <p class="label">C</p>
                    <div class="content">
                        <a href="/brand/5"><span class="name">CERAVE</span> <span class="count">5</span></a>
                        <a href="/brand/6"><span class="name">CLARKS</span> <span class="count">543</span></a>
                        <a href="/brand/7"><span class="name">CROCS</span> <span class="count">9</span></a>
                        <a href="/brand/8"><span class="name">CHARLES TYRWHITT</span> <span class="count">9</span></a>
                    </div>
                </div>
                <div class="alphabel-section">
                    <p class="label">D</p>
                    <div class="content">
                        <a href="/brand/9"><span class="name">DEJIANDKOLA</span> <span class="count">5</span></a>
                    </div>
                </div>
                <div class="alphabel-section">
                    <p class="label">F</p>
                    <div class="content">
                        <a href="/brand/10"><span class="name">FENTY BEAUTY</span> <span class="count">5</span></a>
                    </div>
                </div>
                <div class="alphabel-section">
                    <p class="label">H</p>
                    <div class="content">
                        <a href="/brand/11"><span class="name">HIGH FASHION BY JOL</span> <span class="count">5</span></a>
                    </div>
                </div>
                <div class="alphabel-section">
                    <p class="label">K</p>
                    <div class="content">
                        <a href="/brand/12"><span class="name">KILENTAR</span> <span class="count">5</span></a>
                    </div>
                </div>
                <div class="alphabel-section">
                    <p class="label">L</p>
                    <div class="content">
                        <a href="/brand/13"><span class="name">LACOSTE</span> <span class="count">5</span></a>
                        <a href="/brand/14"><span class="name">LEVI’S</span> <span class="count">543</span></a>
                    </div>
                </div>
                <div class="alphabel-section">
                    <p class="label">M</p>
                    <div class="content">
                        <a href="/brand/15"><span class="name">MAC</span> <span class="count">5</span></a>
                        <a href="/brand/16"><span class="name">MANGO</span> <span class="count">543</span></a>
                        <a href="/brand/17"><span class="name">MAYBELLINE</span> <span class="count">543</span></a>
                    </div>
                </div>
                <div class="alphabel-section">
                    <p class="label">N</p>
                    <div class="content">
                        <a href="/brand/18"><span class="name">NARS</span> <span class="count">5</span></a>
                        <a href="/brand/19"><span class="name">NIKE</span> <span class="count">543</span></a>
                    </div>
                </div>
                <div class="alphabel-section">
                    <p class="label">O</p>
                    <div class="content">
                        <a href="/brand/20"><span class="name">ONLY</span> <span class="count">5</span></a>
                        <a href="/brand/21"><span class="name">ORANGE CULTURE</span> <span class="count">543</span></a>
                    </div>
                </div>
                <div class="alphabel-section">
                    <p class="label">P</p>
                    <div class="content">
                        <a href="/brand/22"><span class="name">POPWAVE</span> <span class="count">5</span></a>
                        <a href="/brand/23"><span class="name">PUMA</span> <span class="count">543</span></a>
                    </div>
                </div>
                <div class="alphabel-section">
                    <p class="label">S</p>
                    <div class="content">
                        <a href="/brand/24"><span class="name">SEVERE NATURE</span> <span class="count">5</span></a>
                        <a href="/brand/25"><span class="name">SKETCHERS</span> <span class="count">543</span></a>
                    </div>
                </div>
                <div class="alphabel-section">
                    <p class="label">T</p>
                    <div class="content">
                        <a href="/brand/26"><span class="name">TOMMY HILFIGER</span> <span class="count">543</span></a>
                    </div>
                </div>
                <div class="alphabel-section">
                    <p class="label">U</p>
                    <div class="content">
                        <a href="/brand/27"><span class="name">UNCOVER</span> <span class="count">543</span></a>
                    </div>
                </div>
                <div class="alphabel-section">
                    <p class="label">w</p>
                    <div class="content">
                        <a href="/brand/28"><span class="name">WAFFLESNCREAM</span> <span class="count">543</span></a>
                    </div>
                </div>
                <div class="alphabel-section">
                    <p class="label">Y</p>
                    <div class="content">
                        <a href="/brand/29"><span class="name">YOMI CASUAL</span> <span class="count">543</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
