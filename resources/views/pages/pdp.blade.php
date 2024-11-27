@extends('layouts.app')

<style>
.container {
    width: 100%;
    font-size: 14px;
    background-color: #e7e7e7;
}
.product-container {
    background-color: #fff;
    margin-bottom: 15px;
    padding: 0 15px;
    padding-bottom: 5px;
}
.product-image {
    margin: 0 -15px;
    position: relative;
}
.product-image img {
    width: 100%;
    height: auto;
}

.product-details {
    padding: 20px 0;
    text-align: left;
}

.dots {
    display: flex;
    justify-content: center;
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
}
.dots span {
    display: block;
    width: 8px;
    height: 8px;
    margin: 0 5px;
    background-color: #aaa;
    border-radius: 50%;
}
.dots span.active {
    background-color: #1C1C1C;
}

.product-price {
    font-size: 18px;
    font-weight: 600;
    margin: 0;
    color: #000;
}

.product-color {
    margin: 10px 0;
    font-weight: 600;
    color: #000;
}

.product-color span {
    font-weight: 400;
}

.product-details .color-options {
    display: flex;
    margin: 8px 0;
}

.color-swatch {
    width: 52px;
    height: 52px;
    border-radius: 8px;
    border: 1px solid #ccc;
    cursor: pointer;
    margin-right: 8px;
    overflow: hidden;
}

.color-swatch img {
    max-width: 100%;
}

.size-selector {
    margin: 18px 0;
}

.size-selector label {
    display: block;
    margin-bottom: 10px;
    font-weight: 600;
    color: #1C1C1C;
}

.size-selector select {
    width: 100%;
    padding: 8px 20px 8px 9px;
    font-size: 16px;
    border: 1px solid #aaa;
    color: #aaa;
    height: 56px;
    -webkit-appearance: none;
    -moz-appearance: none;
    background: transparent;
    background-image: url("{{ asset('images/pdp/icon/chevron-down.png') }}");
    background-repeat: no-repeat;
    background-position-x: 95%;
    background-position-y: 23px;
}

.add-to-cart-form .add-to-cart {
    width: 342px;
    padding: 14px;
    background-color: black;
    color: #F2F2F2;
    border: none;
    font-weight: 600;
    cursor: pointer;
    font-size: 16px;
}

.add-to-cart:hover {
    background-color: #333;
}

.product-image .nav {
    font-size: 16px;
    display: inline-block;
    position: absolute;
    padding: 44px 15px;
    background-color: #fff;
    opacity: 0.7;
    right: 0;
    top: 40%;
}

.price-block-info {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 18px;
}

.price-block-info .brand-logo {
    height: 32px;
}
.price-block-info .brand-logo img {
    height: 100%;
    width: auto;
}

.add-to-cart-form {
    display: flex;
    justify-content: space-between;
}

.add-to-cart-form .favorite {
    width: 44px;
    border: 1px solid #1C1C1C;
    display: flex;
    justify-content: center;
    align-items: center;
}

.delivery-info .delivery {
    padding: 18px 10px;
}

.delivery-info .return-policy {
    padding: 18px 10px;
    border-top: 1px solid #AAA;
}

.delivery-info {
    border: 1px solid #AAA;
    font-size: 12px;
    position: relative;
    margin-top: 16px;
    color: #000;
}
.delivery-info .flex {
    display: flex;
    align-items: center;
}
.delivery-info .flex img {
    padding-right: 8px;
}
.fast-delivery {
    color: #fff;
    background-color: #008000;
    font-weight: 400;
    font-size: 12px;
    padding: 7px 34px;
    border-radius: 999px;
    position: absolute;
    right: 8px;
    top: 12px;
}
.breadcrumb-title-block .breadcrumb {
    color: #555;
    font-size: 10px;
    line-height: 13px;
    margin-bottom: 10px
}
.breadcrumb-title-block .breadcrumb .chevron-right {
    font-size: 10px;
    padding-left: 5px;
    padding-right: 5px;
}

.breadcrumb-title-block .breadcrumb .current {
    font-weight: 700;
}

.breadcrumb-title-block .product-title {
    color: #1C1C1C;
    text-transform: uppercase;
}
.breadcrumb-title-block  {
    margin-bottom: 25px;
}

/* Accordion styles */
.accordion {
    margin-bottom: 32px;
}
.accordion .accordion-item:last-child {
    border-bottom: 0;
}
.accordion-item {
    border-bottom: 1px solid #aaa;
    padding: 18px 0;
    background-color: #fff;
    cursor: pointer;
    position: relative;
}

.accordion-item h3 {
    margin: 0;
    font-weight: 600;
    color: #1C1C1C;
}

.accordion-item i {
    position: absolute;
    right: 0;
    top: 23px;
}

/* Similar products section */
.similar-products {
    background-color: #fff;
    padding: 20px 15px;
}

.similar-products h3,
.similar-products h4 {
    text-align: center;
    margin: 0;
    color: #333;
}
.similar-products h3 {
    color: #aaa;
    font-size: 12px;
    text-transform: uppercase;
    font-weight: 300;
}
.similar-products h4 {
    margin-top: 8px;
    font-weight: 600;
    font-size: 18px;
    color: #1C1C1C;
}

.products-list {
    display: flex;
    padding: 15px 0;
    margin: 0 -6px;
}

.product-card {
    background-color: #fff;
    text-align: center;
    margin: 0 6px;
    position: relative;
}

.product-card img {
    width: 100%;
    border-radius: 8px;
    margin-bottom: 8px;
}

.discount-tag {
    position: absolute;
    background-color: #DA0202;
    color: #fff;
    font-size: 12px;
    padding: 3px 7px;
    border-radius: 0 4px 4px 0;
    top: 12px;
    left: 0;
    font-weight: 600;
}

.product-card .brand {
    font-size: 10px;
    color: #717171;
    margin: 4px 0;
    text-transform: uppercase;
    font-weight: 300;
}

.product-card .product-name {
    font-size: 12px;
    color: #1C1C1C;
    margin: 4px 0;
    text-transform: uppercase;
}

.product-card .price {
    font-weight: 600;
    color: #36717E;
    margin-bottom: 5px;
}

.product-card .price .old-price {
    text-decoration: line-through;
    font-size: 12px;
    color: #aaa;
    padding-left: 3px;
}

.color-dot {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    display: inline-block;
    margin: 0 2px;
    border: 1px solid #ccc;
}

.color-dot.green { background-color: #008000; }
.color-dot.black { background-color: #000000; }
.color-dot.pink { background-color: #E1B6C1; }

.more-brand-products {
    margin-top: 15px;
    background-color: #fff;
    padding: 20px 15px;
    position: relative;
    margin-bottom: 240px;
}

.more-brand-products .brand-banner {
    margin: 0 -15px;
}
.more-brand-products .products-list{
    position: absolute;
    bottom: -200px;
    padding: 0;
    max-width: 100%;
    left: 6px;
    padding-left: 10px;
    padding-right: 10px;
}
.more-brand-products .product-card {
    background-color: transparent;
}
.product-card .favorite {
    position:absolute;
    top: 22px;
    right: 13px;
    color: #aaa;
    cursor: pointer;
}
.product-card .favorite i {
    font-size: 24px;
}
.product-card .favorite i.fa-solid, .add-to-cart-form .favorite i.fa-solid {
    color: #DA0202;
}

.add-to-cart-modal.hidden {
    display: none;
}
.modal-content {
    position: fixed;
    z-index: 999;
    background-color: #fff;
    border-radius: 16px 16px 0 0;
    bottom: 0;
    left: 0;
    overflow: hidden;
    width: 100%;
}
.modals-overlay {
    background-color: rgba(51,51,51,0.55);
    position: fixed;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 991;
}

.modal-header {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 16px;
    border-bottom: 1px solid #e7e7e7;
}

.modal-header h2 {
    font-size: 18px;
    margin: 0;
    color: #1C1C1C;
    font-weight: 600;
}
.add-to-cart-modal .modal-header .modal-icon {
    width: 18px;
    height: 18px;
    display: inline-block;
    background-color: #008000;
    color: #fff;
    border-radius: 50%;
    margin-right: 7px;
    font-size: 13px;
    text-align: center;
}
.add-to-cart-modal .modal-header .modal-icon i {
    padding-top: 3px;
}

.modal-footer {
    padding: 20px 15px 25px;
    font-size: 16px;
    display: flex;
    justify-content: space-between
}

.modal-footer .continue-btn {
    border: 1px solid #1C1C1C;
    padding: 10px 10px;
    width: 195px;
    height: 48px;
    color: #1C1C1C;
}
.modal-footer .go-to-cart-btn {
    border: 1px solid #1C1C1C;
    background-color: #1C1C1C;
    color: #fff;
    display: block;
    padding: 14px 60px;
}

.product-image.fixed {
    position: fixed;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 991;
    background-color: #1C1C1C;
    display: flex;
    align-items: center;
    margin: 0;
}
.product-image.fixed .dots {
    bottom: 20%;
}
.product-image .close-fullsize-image {
    display: none;
}
.product-image.fixed .close-fullsize-image {
    display: block;
}
.close-fullsize-image {
    background: none;
    border: none;
    font-size: 36px;
    color: #fff;
    cursor: pointer;
    position: fixed;
    top: 40px;
    left: 20px;
}
.product-image.fixed .dots span.active {
    background-color: #fff;
}

.product-item-image {
    height: 200px;
    background-color: #fff;
}
</style>

@section('content')
<div class="container">
    <div class="product-container">
        <div class="product-image">
            <button class="close-fullsize-image" id="closeFullsizeImage">&times;</button>
            <div class="image">
                <img id="mainImage" src="{{ $mainImage }}" alt="Product Image">
            </div>
            <div class="dots">
                <span class="active"></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="nav">
                <i class="fa-solid fa-angle-right"></i>
            </div>
        </div>

        <div class="product-details">
            <div class="price-block-info">
                <h2 class="product-price">₦ 582.146,70</h2>
                <div class="brand-logo">
                    <img src="{{ $brandLogo }}" alt="Brand image">
                </div>
            </div>


            @if($hasSwatchColor)
                <p class="product-color">Color: <span id="colorselectedValue"></span></p>
                <div class="color-options">
                    @foreach ($swatchImages as $swatchImage)
                        <div class="color-swatch {{ $swatchImage['label'] }}" data-label="{{ $swatchImage['label'] }}" data-image="{{ $swatchImage['image'] }}">
                            <img src="{{ $swatchImage['swatch'] }}" alt="Swatch {{ $swatchImage['label'] }}">
                        </div>
                    @endforeach
                </div>
            @endif

            <div class="size-selector">
                <label for="sizeSelect">Size: <span id="selectedValue"></span></label>
                <select id="sizeSelect">
                    <option value="">Select size</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                </select>
            </div>
            <div class="add-to-cart-form">
                <button class="add-to-cart"><span>Add to cart</span></button>
                <div class="favorite"><i class="fa-lg fa-regular fa-heart"></i></div>
            </div>

            <div class="delivery-info">
                <div class="delivery">
                    <p class="fast-delivery-des flex"><img src="{{ asset('images/pdp/icon/delivery.png') }}" alt="">2 - 5 working days</p>

                    <span class="fast-delivery flex">
                        <img src="{{ asset('images/pdp/icon/delivery-truck.png') }}" alt="">Fast delivery
                    </span>

                </div>
                <div class="return-policy">
                    <p class="flex"><img src="{{ asset('images/pdp/icon/return.png') }}" alt=""> 24h return policy</p>
                </div>
            </div>
        </div>

        <div class="breadcrumb-title-block">
            <div class="breadcrumb">
                <span>Women</span>
                <span class="chevron-right">
                    <i class="fa-solid fa-chevron-right"></i>
                </span>
                <span>...</span>
                <span class="chevron-right">
                    <i class="fa-solid fa-chevron-right"></i>
                </span>
                <span>Dad jeans</span>
                <span class="chevron-right">
                    <i class="fa-solid fa-chevron-right"></i>
                </span>
                <span class="current">{{ $productName }}</span>
            </div>
            <div class="product-title">{{ $productName }}</div>
        </div>

        <div class="accordion">
            <div class="accordion-item">
                <h3>Design & Extras</h3>
                <i class="fa-solid fa-angle-down"></i>
            </div>
            <div class="accordion-item">
                <h3>Size & Fit</h3>
                <i class="fa-solid fa-angle-down"></i>
            </div>
            <div class="accordion-item">
                <h3>Material & Care Instruction</h3>
                <i class="fa-solid fa-angle-down"></i>
            </div>
            <div class="accordion-item">
                <h3>Shipping & Returns</h3>
                <i class="fa-solid fa-angle-down"></i>
            </div>
        </div>
    </div>
    <!-- Similar Products Section -->
    <div class="similar-products">
        <h3>You Might Also Like</h3>
        <h4>Similar Product</h4>
        <div class="products-list">
            @foreach ($similarProductImages as $similarImage)
                <div class="product-card">
                    <div class="favorite">
                        <i class="fa-lg fa-regular fa-heart"></i>
                    </div>
                    <div class="discount-tag">10%</div>
                    <div class="product-item-image"><img src="{{ $similarImage }}" alt="Product Image"></div>

                    <p class="brand">Levi's</p>
                    <p class="product-name">Ribcage Straight Ankle Women's Jeans</p>
                    <p class="price">
                        ₦ 582.146,70 <span class="old-price">₦ 634.90</span>
                    </p>
                    <div class="color-options">
                        <span class="color-dot green"></span>
                        <span class="color-dot gray"></span>
                        <span class="color-dot pink"></span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- More brand Products Section -->
    <div class="more-brand-products">
        <div class="brand-banner"><img src="{{ $brandBanner }}" alt="Brand baner image"></div>
        <div class="products-list">
            @foreach ($moreProductImages as $moreImage)
                <div class="product-card">
                    <div class="discount-tag">10%</div>
                    <div class="favorite">
                        <i class="fa-lg fa-regular fa-heart"></i>
                    </div>
                    <div class="product-item-image"><img src="{{ $moreImage }}" alt="Product Image"></div>
                    <p class="brand">BRAND’S NAME</p>
                    <p class="product-name">Levi’s XX Chino standard Taper Fit Corduroy Men’s Pant</p>
                    <p class="price">
                        30.90 € <span class="old-price">34.90 €</span>
                    </p>
                    <div class="color-options">
                        <span class="color-dot green"></span>
                        <span class="color-dot gray"></span>
                        <span class="color-dot pink"></span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="add-to-cart-modal hidden" id="addToCartModal">
        <div class="modals-overlay" bis_skin_checked="1"></div>
        <div class="modal-content">
            <div class="modal-header">
                <h2><span class="modal-icon"><i class="fas fa-check"></i></span>Successfully added to your cart!</h2>
            </div>
            <div class="modal-footer">
                <button class="continue-btn">Continue shopping</button>
                <a href="/cart" class="go-to-cart-btn">Go to cart</a>
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


        const selectElement = document.getElementById("sizeSelect");
        const selectedValueLabel = document.getElementById("selectedValue");

        selectElement.addEventListener("change", function () {
            const selectedValue = selectElement.value;
            selectedValueLabel.textContent = selectedValue;
        });

        const colorButtons = document.querySelectorAll(".color-swatch");
        const mainImage = document.getElementById("mainImage");
        const colorselectedValue = document.getElementById("colorselectedValue");

        colorButtons.forEach(button => {
            button.addEventListener("click", () => {
                const newImage = button.getAttribute("data-image");
                const label = button.getAttribute("data-label");
                mainImage.src = newImage;
                colorselectedValue.textContent = label;
            });
        });


        const addToCartBtn = document.querySelector('.add-to-cart');
        const addToCartModal = document.getElementById('addToCartModal');
        const modalsOverlay = document.querySelector('.modals-overlay');
        const continueBtn = document.querySelector('.continue-btn');

        addToCartBtn.addEventListener('click', () => {
            addToCartModal.classList.remove('hidden');
        });

        continueBtn.addEventListener('click', () => {
            sortModal.classList.add('hidden');
        });

        modalsOverlay.addEventListener('click', (event) => {
            addToCartModal.classList.add('hidden');
        });


        const imageBlock = document.querySelector('.product-image');
        const closeFullsizeBtn = document.getElementById("closeFullsizeImage");
        imageBlock.addEventListener('click', () => {
            imageBlock.classList.add('fixed');
        });
        closeFullsizeBtn.addEventListener('click', (event) => {
            event.stopPropagation();
            imageBlock.classList.remove('fixed');
        });
    });
</script>
