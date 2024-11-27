@extends('layouts.app')

<style>
.plp-container {
    width: 100%;
    padding: 0 15px;
}

.plp-container .banner {
    height: 184px;
    background-position: top center;
    background-repeat: no-repeat;
    background-size: cover;
    display: block;
    margin: 0 -15px;
    width: auto;
}

.producs-container {
    padding: 20px 0;
    font-size: 14px;
}

.products {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 15px;
}
.product-card {
    text-align: center;
    position: relative;
    display: block;
}
.product-card img {
    max-width: 100%;
    margin-bottom: 10px;
    width: 100%;
    height: auto;
}
.product-card .product-brand {
    color: #717171;
    font-size: 12px;
    font-weight: 300;
}
.product-name {
    font-weight: 400;
    margin: 2px 0;
    display: block;
    color: #1C1C1C;
}
.product-price {
    color: #36717E;
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 5px;
    margin-top: 5px;
    padding-left: 5px;
}
.old-price {
    text-decoration: line-through;
    color: #aaa;
    font-weight: 400;
    font-size: 14px;
}
.favorite {
    position: absolute;
    top: 25px;
    right: 13px;
    color: #aaa;
    cursor: pointer;
}
.favorite i {
    font-size: 21px;
}
.favorite:hover {
    color: red;
}

.category-title {
    margin-top: 20px;
    position: relative;
    text-align: center;
    padding-bottom: 20px;
    font-size: 16px;
    font-weight: 600;
}
.category-title i {
    color: #555;
    font-size: 15px;
}

.category-title .chevron-left {
    position: absolute;
    left: 0;
}

.color-options {
    display: flex;
    justify-content: center;
    gap: 5px;
    align-items: center;
    margin-bottom: 5px;
}

.color-dot {
    width: 14px;
    height: 14px;
    border-radius: 50%;
    border: 1px solid #ccc;
    display: inline-block;
}

.color-dot.brown {
    background-color: #663300;
}

.color-dot.black {
    background-color: #000;
}

.color-dot.blue {
    background-color: #6495EC;
}
.color-dot.gray {
    background-color: #464A31;
}

.additional-colors {
    font-size: 12px;
    color: #717171;
    display: inline-block;
    margin-top: 0px;
}

.sub-categories .category-item {
    font-size: 16px;
    display: inline-block;
    padding: 6px 11px;
    background-color: #F2F2F2;
    border: 1px solid #F2F2F2;
    color: #8E8E8E;
    margin-right: 5px;
}
.sub-categories .category-item a {
    color: #8E8E8E;
}
.sub-categories .category-item.current {
    color: #1C1C1C;
    border: 1px solid #1C1C1C;
    background-color: #fff;
}

.sub-categories {
    padding-bottom: 20px;
}
.discount-tag {
    position: absolute;
    background-color: #DA0202;
    color: #fff;
    font-size: 12px;
    padding: 3px 7px;
    border-radius: 0 4px 4px 0;
    top: 210px;
    left: 0;
    font-weight: 600;
}

.special-tag {
    position: absolute;
    background-color: #fff;
    color: #1C1C1C;
    font-size: 12px;
    padding: 3px 13px;
    border-radius: 0 4px 4px 0;
    top: 183px;
    left: 0;
    font-weight: 400;
}
.product-card .favorite i.fa-solid{
    color: #DA0202;
}
.product-item-image {
    height: 287px;
    background-color: #fff;
    margin-bottom: 12px;
}
</style>

@section('content')
    <div class="plp-container">
        <div class="main-content">
            <a class="banner" href="/brand/1" style="background-image: url('{{ $brandBanner }}');">
            </a>
            <div class="producs-container">
                <div class="category-title">
                    <span class="chevron-left">
                        <i class="fa-solid fa-chevron-left"></i>
                    </span>
                    <p>{{ $name }}</p>

                </div>

                <div class="sub-categories">
                    @foreach ($subCategories as $key => $name)
                        @if ($key == $currentSubCategories)
                            <div class="current category-item"><span>{{ $name }}</span></div>
                        @else
                            <div class="category-item "><a href="/category-page/3">{{ $name }}</a></div>
                        @endif
                    @endforeach
                </div>

                <div class="products">
                    @foreach ($productImages as $key => $image)
                        <a href="/pdp/{{ $productId }}" class="product-card">
                            <div class="favorite">
                                <i class="fa-lg fa-regular fa-heart"></i>
                            </div>
                            <div class="special-tag">Tip</div>
                            <div class="discount-tag">10%</div>
                            <div class="product-item-image"><img src="{{ $image }}" alt="product 1"></div>
                            <div class="product-brand">{{ $productNames[$key - 1]['brand'] }}</div>
                            <p class="product-name">{{ $productNames[$key - 1]['name'] }}</p>
                            <div class="product-price">₦ 303.602,14 <span class="old-price">₦ 120.000,00</span></div>
                            @if ($haveSwatchOptions)
                                <div class="color-options">
                                    <span class="color-dot brown"></span>
                                    <span class="color-dot blue"></span>
                                    <span class="color-dot black"></span>
                                    <span class="color-dot gray"></span>
                                    <span class="additional-colors">+12</span>
                                </div>
                            @endif

                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const wishlistBtn = document.getElementsByClassName('fa-regular fa-heart');

        Array.from(wishlistBtn).forEach((item) => {
            item.addEventListener("click", function () {
                item.classList.remove('fa-regular');

                item.classList.add('fa-solid');
            });
        });
    });
</script>
