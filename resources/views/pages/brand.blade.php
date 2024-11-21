@extends('layouts.app')

<style>
.brand-container {
    width: 100%;
    padding: 0 15px;
}

.brand-container .banner {
    height: 400px;
    margin: 0 -15px;
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
    height: auto;
    margin-bottom: 10px;
}
.product-card .product-brand {
    color: #717171;
    font-size: 12px;
    font-weight: 300;
}
.product-name {
    font-weight: 600;
    margin: 2px 0;
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
    display: flex;
    justify-content: space-between;
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

.color-dot.green {
    background-color: #008000;
}

.color-dot.black {
    background-color: #000;
}

.color-dot.pink {
    background-color: #E1C1CB;
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
.filter-block {
    display: flex;
    color: #717171;
    font-weight: 400;
    font-size: 14px;
    align-items: center;
    border: 1px solid #E7E7E7;
    padding: 9px 19px;
}
.filter-block span {
    padding-left: 8px;
}

.filter-modal.hidden {
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
    max-height: 735px;
    overflow-y: scroll;
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
    justify-content: space-between;
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

.close-btn {
    background: none;
    border: none;
    font-size: 1.5em;
    color: #666;
    cursor: pointer;
}

.modal-body {
    padding: 0;
    display: flex;
    flex-direction: column;
}

.modal-footer {
    font-size: 16px;
    display: flex;
    justify-content: space-between;
    padding: 15px;
}
.cancel-btn {
    width: 100px;
    padding: 15px;
    font-size: 16px;
    color: #1C1C1C;
    background-color: #fff;
    border: none;
    cursor: pointer;
    border: 1px solid #1C1C1C;
}
.show-items-btn {
    width: 290px;
    padding: 15px;
    font-size: 16px;
    color: #fff;
    background-color: #1C1C1C;
    border: none;
    cursor: pointer;
    border: 1px solid #1C1C1C;
}
.filter-modal .filter-item {
    padding: 15px;
    border-bottom: 4px solid #e7e7e7;
}
.filter-modal .filter-item:last-child {
    border: 0;
}
.filter-modal .filter-label {
    font-weight: 600;
    margin-bottom: 15px;
    font-size: 14px;
}

.filter-item .no-filtered {
    border: 1px solid #E7E7E7;
    color:#AAA;
    padding: 9px 18px;
    display: inline-block;
}

.view.filter-item .view-content {
    display: flex;
    justify-content: space-between;
}
.view-content .left a {
    background-color: #F2F2F2;
    border: 1px solid #F2F2F2;
    display: inline-block;
    padding: 10px 14px;
    margin-right: 4px;
    color: #717171;
}
.view-content .left a.current {
    border: 1px solid #1C1C1C;
    background-color: #fff;
    color: #1C1C1C;
}

.view-content  .right {
    display: flex;
}
.view-content  .right a {
    width: 40px;
    border: 1px solid #F2F2F2;
    background-color: #F2F2F2;
    margin-right: 8px;
    display: flex;
    justify-content: center;
    align-items: center;
}
.view-content .right a:last-child {
    margin: 0;
}
.view-content  .right a.current {
    border: 1px solid #1C1C1C;
    background-color: #fff;
}

.sort.filter-item a {
    border: 1px solid #F2F2F2;
    background-color: #F2F2F2;
    display: inline-block;
    padding: 10px 25px;
    margin-right: 5px;
}
.sort.filter-item a.current {
    border: 1px solid #1C1C1C;
    background-color: #fff;
}

.sale.filter-item .filter-label {
    margin-bottom: 0;
}

.sale.filter-item .toggle {
    width: 40px;
    height: 20px;
    background-color: #AAA;
    border-radius: 999px;
    position: relative;
}
.sale.filter-item .toggle .circle {
    width: 16px;
    height: 16px;
    display: inline-block;
    background-color: #fff;
    border-radius: 50%;
    position: absolute;
    left: 2px;
    top: 2px;
}

.sale.filter-item {
    display: flex;
    justify-content: space-between
}

.size.filter-item {
    display: flex;
    justify-content: space-between;
}
.size.filter-item .filter-label {
    margin-bottom: 0;
}
.color.filter-item > div {
    display: flex;
    flex-wrap:wrap;
}
.color.filter-item .color-option-item {
    display: inline-block;
    width: 56px;
    height: 56px;
}
.color.filter-item .color-option-item.green {
    background-color: #008000;
}
.color.filter-item .color-option-item.black {
    background-color: #000;
}
.color.filter-item .color-option-item.blue {
    background-color: #0000FF;
}
.color.filter-item .color-option-item.gray {
    background-color: #B7B7B7;
}
.color.filter-item .color-option-item.white {
    background-color: #fff;
}
.slider-range {
    position: relative;
    height: 5px;
    width: 93%;
    margin-left: 5px;
    background-color: #5EAABA;
    margin-bottom: 10px;
    margin-top: 25px;
}
.slider-range div {
    position: absolute;
    height: 100%;
    width: 100%;
    left: 0;
}
.slider-range span {
    display: inline-block;
    width: 24px;
    height: 24px;
    border-radius: 50%;
    position: absolute;
    border: 1px solid #E6F2F4;
    background-color: #fff;
    top: -10px;
    box-shadow: 0px 2px 2px 0px rgba(5, 13, 19, 0.08);
}
.slider-range .left {
    left: 0;
    margin-left: -5px;
}
.slider-range .right {
    left: 100%;
}
.product-card .favorite i.fa-solid{
    color: #DA0202;
}
</style>

@section('content')
    <div class="brand-container">
        <div class="main-content">
            <div class="banner">
                <img src="{{ $banner }}" alt="banner">
            </div>
            <div class="producs-container">
                <div class="category-title">
                    <p>{{ $title }}</p>
                    <div class="filter-block">
                        <img src="{{ asset('images/brand/filter.png') }}" alt="" width="15">
                        <span>Filter</span>
                    </div>
                </div>

                <div class="sub-categories">
                    <div class="current category-item"><span>All</span></div>
                    <div class="category-item"><a ref="#">Skinny fit</a></div>
                    <div class="category-item"><a ref="#">Wide leg</a></div>
                    <div class="category-item"><a ref="#">Mom jeans</a></div>
                </div>

                <div class="products">
                    <div class="product-card">
                        <div class="favorite">
                            <i class="fa-lg fa-regular fa-heart"></i>
                        </div>
                        <div class="special-tag">Tip</div>
                        <div class="discount-tag">10%</div>
                        <img src="{{ asset('images/plp/product1.png') }}" alt="product 1">
                        <div class="product-brand">Brand's name</div>
                        <a href="/pdp" class="product-name">Product’s name </a>
                        <div class="product-price">₦ 303.602,14 <span class="old-price">₦ 120.000,00</span></div>
                        <div class="color-options">
                            <span class="color-dot green"></span>
                            <span class="color-dot black"></span>
                            <span class="color-dot pink"></span>
                            <span class="additional-colors">+12</span>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="favorite">
                            <i class="fa-lg fa-regular fa-heart"></i>
                        </div>
                        <img src="{{ asset('images/plp/product2.png') }}" alt="product 2">
                        <div class="product-brand">Brand's name</div>
                        <a href="/pdp" class="product-name">Product’s name </a>
                        <div class="product-price">₦ 303.602,14 <span class="old-price">₦ 120.000,00</span></div>
                        <div class="color-options">
                            <span class="color-dot green"></span>
                            <span class="color-dot black"></span>
                            <span class="color-dot pink"></span>
                            <span class="additional-colors">+12</span>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="favorite">
                            <i class="fa-lg fa-regular fa-heart"></i>
                        </div>
                        <div class="special-tag">Tip</div>
                        <div class="discount-tag">10%</div>
                        <img src="{{ asset('images/plp/product3.png') }}" alt="product 3">
                        <div class="product-brand">Brand's name</div>
                        <a href="/pdp" class="product-name">Product’s name </a>
                        <div class="product-price">₦ 303.602,14 <span class="old-price">₦ 120.000,00</span></div>
                        <div class="color-options">
                            <span class="color-dot green"></span>
                            <span class="color-dot black"></span>
                            <span class="color-dot pink"></span>
                            <span class="additional-colors">+12</span>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="favorite">
                            <i class="fa-lg fa-regular fa-heart"></i>
                        </div>
                        <img src="{{ asset('images/plp/product4.png') }}" alt="product 4">
                        <div class="product-brand">Brand's name</div>
                        <a href="/pdp" class="product-name">Product’s name </a>
                        <div class="product-price">₦ 303.602,14 <span class="old-price">₦ 120.000,00</span></div>
                        <div class="color-options">
                            <span class="color-dot green"></span>
                            <span class="color-dot black"></span>
                            <span class="color-dot pink"></span>
                            <span class="additional-colors">+12</span>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="favorite">
                            <i class="fa-lg fa-regular fa-heart"></i>
                        </div>
                        <img src="{{ asset('images/plp/product5.png') }}" alt="product 5">
                        <div class="product-brand">Brand's name</div>
                        <a href="/pdp" class="product-name">Product’s name </a>
                        <div class="product-price">₦ 303.602,14 <span class="old-price">₦ 120.000,00</span></div>
                        <div class="color-options">
                            <span class="color-dot green"></span>
                            <span class="color-dot black"></span>
                            <span class="color-dot pink"></span>
                            <span class="additional-colors">+12</span>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="favorite">
                            <i class="fa-lg fa-regular fa-heart"></i>
                        </div>
                        <img src="{{ asset('images/plp/product6.png') }}" alt="product 6">
                        <div class="product-brand">Brand's name</div>
                        <a href="/pdp" class="product-name">Product’s name </a>
                        <div class="product-price">₦ 303.602,14 <span class="old-price">₦ 120.000,00</span></div>
                        <div class="color-options">
                            <span class="color-dot green"></span>
                            <span class="color-dot black"></span>
                            <span class="color-dot pink"></span>
                            <span class="additional-colors">+12</span>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="favorite">
                            <i class="fa-lg fa-regular fa-heart"></i>
                        </div>
                        <img src="{{ asset('images/plp/product7.png') }}" alt="product 7">
                        <div class="product-brand">Brand's name</div>
                        <a href="/pdp" class="product-name">Product’s name </a>
                        <div class="product-price">₦ 303.602,14 <span class="old-price">₦ 120.000,00</span></div>
                        <div class="color-options">
                            <span class="color-dot green"></span>
                            <span class="color-dot black"></span>
                            <span class="color-dot pink"></span>
                            <span class="additional-colors">+12</span>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="favorite">
                            <i class="fa-lg fa-regular fa-heart"></i>
                        </div>
                        <img src="{{ asset('images/plp/product8.png') }}" alt="product 8">
                        <div class="product-brand">Brand's name</div>
                        <a href="/pdp" class="product-name">Product’s name </a>
                        <div class="product-price">₦ 303.602,14 <span class="old-price">₦ 120.000,00</span></div>
                        <div class="color-options">
                            <span class="color-dot green"></span>
                            <span class="color-dot black"></span>
                            <span class="color-dot pink"></span>
                            <span class="additional-colors">+12</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="filter-modal hidden" id="filterModal">
            <div class="modals-overlay" bis_skin_checked="1"></div>
            <div class="modal-content">
                <div class="modal-header">
                    <h2>Filter categories</h2>
                    <button class="close-btn" id="closeModal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="filtered filter-item">
                        <p class="filter-label">Filtered with</p>
                        <div><span class="no-filtered">No filter selected</span></div>
                    </div>
                    <div class="view filter-item">
                        <p class="filter-label">View</p>
                        <div class="view-content">
                            <div class="left">
                                <a class="current" href="#">Item</a>
                                <a href="#">Model</a>
                            </div>
                            <div class="right">
                                <a class="current" href="#"><img src="{{ asset('images/brand/grid-view.png') }}" alt="" width="14"></a>
                                <a href="#"><img src="{{ asset('images/brand/list-view.png') }}" alt="" width="20"></a>
                            </div>
                        </div>
                    </div>
                    <div class="sort filter-item">
                        <p class="filter-label">Sort</p>
                        <div>
                            <a class="current" href="#">Top seller</a>
                            <a href="#">Maximum reduction</a>
                        </div>
                    </div>
                    <div class="price filter-item">
                        <p class="filter-label">Price</p>
                        <div class="slider-range">
                            <div></div>
                            <span class="left"></span>
                            <span class="right"></span>
                        </div>
                    </div>
                    <div class="sale filter-item">
                        <p class="filter-label">Sale</p>
                        <div class="toggle">
                            <span class="circle"></span>
                        </div>
                    </div>
                    <div class="size filter-item">
                        <p class="filter-label">Size</p>
                        <span class="chevron-right">
                            <i class="fa-solid fa-chevron-right"></i>
                        </span>
                    </div>
                    <div class="color filter-item">
                        <p class="filter-label">Color</p>
                        <div>
                            <span class="color-option-item green"></span>
                            <span class="color-option-item black"></span>
                            <span class="color-option-item blue"></span>
                            <span class="color-option-item gray"></span>
                            <span class="color-option-item white"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="cancel-btn">Cancel</button>
                    <button class="show-items-btn">Show items</button>
                </div>
            </div>

        </div>
    </div>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const openFilterBtn = document.querySelector('.filter-block');
        const filterModal = document.getElementById('filterModal');
        const closeModalBtn = document.getElementById('closeModal');
        const modalsOverlay = document.querySelector('.modals-overlay');

        openFilterBtn.addEventListener('click', () => {
            filterModal.classList.remove('hidden');
        });

        closeModalBtn.addEventListener('click', () => {
            filterModal.classList.add('hidden');
        });

        modalsOverlay.addEventListener('click', (event) => {
            filterModal.classList.add('hidden');
        });


        const wishlistBtn = document.getElementsByClassName('fa-regular fa-heart');

        Array.from(wishlistBtn).forEach((item) => {
            item.addEventListener("click", function () {
                item.classList.remove('fa-regular');

                item.classList.add('fa-solid');
            });
        });
    });
</script>
