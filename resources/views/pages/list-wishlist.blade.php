@extends('layouts.app')

<style>
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
}

.content {
    padding: 0 15px;
    text-align: center;
    padding-top: 90px;
}
.toolbar {
    display: flex;
}
.view-type .grid {
    text-align: center;
    padding: 14px 14px;
    border: 1px solid #1C1C1C;
}
.view-type .list {
    border: 1px solid #1C1C1C;
    background-color: #1C1C1C;
    text-align: center;
    padding: 15px 13px;
}

.view-type {
    display: flex;
    margin-left: 18px;
}

.sort {
    padding-top: 12px;
}

.product-list {
    margin: 15px auto;
    padding: 0px 15px;
    padding-bottom: 50px;
}

.product-item {
    display: flex;
    align-items: flex-start;
    background-color: #fff;
    border-bottom: 1px solid #aaa;
    padding: 10px 0;
    position: relative;
}

.product-image {
    width: 80px;
    height: auto;
    border-radius: 4px;
}

.product-details {
    flex: 1;
    margin-left: 16px;
    max-width: 195px;
}

.brand-name {
    font-size: 10px;
    color: #717171;
    margin-bottom: 5px;
    font-weight: 300;
}

.product-name {
    font-size: 12px;
    color: #1C1C1C;
    margin-bottom: 5px;
}

.product-price {
    display: flex;
    align-items: center;
    gap: 8px;
}

.current-price {
    font-size: 14px;
    font-weight: 600;
    color: #36717E;
}

.old-price {
    font-size: 12px;
    color: #AAAAAA;
    text-decoration: line-through;
}

.discount-tag {
    font-size: 16px;
    background-color: #DA0202;
    color: #fff;
    padding: 3px 3px;
    border-radius: 4px;
    font-weight: 600;
}

.color-options {
    display: flex;
    align-items: center;
    gap: 8px;
}

.color-dot {
    width: 10px;
    height: 10px;
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
    font-size: 0.9em;
    color: #666;
}
.favorite {
    position: absolute;
    right: 0;
    top: 40%;
}
.favorite i {
    color: #DA0202;
    font-size: 26px;
}


.sort-modal.hidden {
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
    justify-content: space-between;
    align-items: center;
    padding: 16px;
    border-bottom: 8px solid #e7e7e7;
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
    padding: 16px;
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.radio-option {
    display: flex;
    align-items: center;
    font-size: 14px;
    color: #555;
    cursor: pointer;
}

.radio-option input {
    margin-right: 8px;
    width: 18px;
    height: 18px;
    cursor: pointer;
}

.radio-option span {
    flex-grow: 1;
}

.modal-footer {
    padding: 16px;
    text-align: center;
}

.confirm-btn {
    width: 100%;
    padding: 15px;
    font-size: 16px;
    color: #fff;
    background-color: #000;
    border: none;
    cursor: pointer;
}

.confirm-btn:hover {
    background-color: #333;
}
</style>

@section('content')
    <div class="container">
        <div class="title">
            <span>Your Wishlist (12)</span>
            <div class="toolbar">
                <div class="sort"><img src="{{ asset('images/wishlist/sort.png') }}" alt=""></div>
                <div class="view-type">
                    <div class="type-item grid"><img src="{{ asset('images/wishlist/grid.png') }}" alt=""></div>
                    <div class="type-item list"><img src="{{ asset('images/wishlist/list.png') }}" alt=""></div>
                </div>
            </div>
        </div>
        <div class="product-list">
            <div class="product-item">
                <img src="{{ asset('images/wishlist/product.png') }}" alt="Product Image" class="product-image">
                <div class="product-details">
                    <p class="brand-name">BRAND'S NAME</p>
                    <p class="product-name">Levi's XX Chino standard Taper Fit Corduroy Men's Pant</p>
                    <div class="product-price">
                        <span class="current-price">₦ 57.152,00</span>
                        <span class="old-price">₦ 57.152,00</span>
                        <span class="discount-tag">10%</span>
                    </div>
                    <div class="color-options">
                        <span class="color-dot green"></span>
                        <span class="color-dot black"></span>
                        <span class="color-dot pink"></span>
                        <span class="additional-colors">+5</span>
                    </div>
                </div>
                <div class="favorite">
                    <a href="#"><i class="fa-lg fa-solid fa-heart"></i></a>
                </div>
            </div>
            <div class="product-item">
                <img src="{{ asset('images/wishlist/product.png') }}" alt="Product Image" class="product-image">
                <div class="product-details">
                    <p class="brand-name">BRAND'S NAME</p>
                    <p class="product-name">Levi's XX Chino standard Taper Fit Corduroy Men's Pant</p>
                    <div class="product-price">
                        <span class="current-price">₦ 57.152,00</span>
                        <span class="old-price">₦ 57.152,00</span>
                        <span class="discount-tag">10%</span>
                    </div>
                    <div class="color-options">
                        <span class="color-dot green"></span>
                        <span class="color-dot black"></span>
                        <span class="color-dot pink"></span>
                        <span class="additional-colors">+5</span>
                    </div>
                </div>
                <div class="favorite">
                    <a href="#"><i class="fa-lg fa-solid fa-heart"></i></a>
                </div>
            </div>
            <div class="product-item">
                <img src="{{ asset('images/wishlist/product.png') }}" alt="Product Image" class="product-image">
                <div class="product-details">
                    <p class="brand-name">BRAND'S NAME</p>
                    <p class="product-name">Levi's XX Chino standard Taper Fit Corduroy Men's Pant</p>
                    <div class="product-price">
                        <span class="current-price">₦ 57.152,00</span>
                        <span class="old-price">₦ 57.152,00</span>
                        <span class="discount-tag">10%</span>
                    </div>
                    <div class="color-options">
                        <span class="color-dot green"></span>
                        <span class="color-dot black"></span>
                        <span class="color-dot pink"></span>
                        <span class="additional-colors">+5</span>
                    </div>
                </div>
                <div class="favorite">
                    <a href="#"><i class="fa-lg fa-solid fa-heart"></i></a>
                </div>
            </div>
            <div class="product-item">
                <img src="{{ asset('images/wishlist/product.png') }}" alt="Product Image" class="product-image">
                <div class="product-details">
                    <p class="brand-name">BRAND'S NAME</p>
                    <p class="product-name">Levi's XX Chino standard Taper Fit Corduroy Men's Pant</p>
                    <div class="product-price">
                        <span class="current-price">₦ 57.152,00</span>
                        <span class="old-price">₦ 57.152,00</span>
                        <span class="discount-tag">10%</span>
                    </div>
                    <div class="color-options">
                        <span class="color-dot green"></span>
                        <span class="color-dot black"></span>
                        <span class="color-dot pink"></span>
                        <span class="additional-colors">+5</span>
                    </div>
                </div>
                <div class="favorite">
                    <a href="#"><i class="fa-lg fa-solid fa-heart"></i></a>
                </div>
            </div>
            <div class="product-item">
                <img src="{{ asset('images/wishlist/product.png') }}" alt="Product Image" class="product-image">
                <div class="product-details">
                    <p class="brand-name">BRAND'S NAME</p>
                    <p class="product-name">Levi's XX Chino standard Taper Fit Corduroy Men's Pant</p>
                    <div class="product-price">
                        <span class="current-price">₦ 57.152,00</span>
                        <span class="old-price">₦ 57.152,00</span>
                        <span class="discount-tag">10%</span>
                    </div>
                    <div class="color-options">
                        <span class="color-dot green"></span>
                        <span class="color-dot black"></span>
                        <span class="color-dot pink"></span>
                        <span class="additional-colors">+5</span>
                    </div>
                </div>
                <div class="favorite">
                    <a href="#"><i class="fa-lg fa-solid fa-heart"></i></a>
                </div>
            </div>
            <div class="product-item">
                <img src="{{ asset('images/wishlist/product.png') }}" alt="Product Image" class="product-image">
                <div class="product-details">
                    <p class="brand-name">BRAND'S NAME</p>
                    <p class="product-name">Levi's XX Chino standard Taper Fit Corduroy Men's Pant</p>
                    <div class="product-price">
                        <span class="current-price">₦ 57.152,00</span>
                        <span class="old-price">₦ 57.152,00</span>
                        <span class="discount-tag">10%</span>
                    </div>
                    <div class="color-options">
                        <span class="color-dot green"></span>
                        <span class="color-dot black"></span>
                        <span class="color-dot pink"></span>
                        <span class="additional-colors">+5</span>
                    </div>
                </div>
                <div class="favorite">
                    <a href="#"><i class="fa-lg fa-solid fa-heart"></i></a>
                </div>
            </div>
            <div class="product-item">
                <img src="{{ asset('images/wishlist/product.png') }}" alt="Product Image" class="product-image">
                <div class="product-details">
                    <p class="brand-name">BRAND'S NAME</p>
                    <p class="product-name">Levi's XX Chino standard Taper Fit Corduroy Men's Pant</p>
                    <div class="product-price">
                        <span class="current-price">₦ 57.152,00</span>
                        <span class="old-price">₦ 57.152,00</span>
                        <span class="discount-tag">10%</span>
                    </div>
                    <div class="color-options">
                        <span class="color-dot green"></span>
                        <span class="color-dot black"></span>
                        <span class="color-dot pink"></span>
                        <span class="additional-colors">+5</span>
                    </div>
                </div>
                <div class="favorite">
                    <a href="#"><i class="fa-lg fa-solid fa-heart"></i></a>
                </div>
            </div>
            <div class="product-item">
                <img src="{{ asset('images/wishlist/product.png') }}" alt="Product Image" class="product-image">
                <div class="product-details">
                    <p class="brand-name">BRAND'S NAME</p>
                    <p class="product-name">Levi's XX Chino standard Taper Fit Corduroy Men's Pant</p>
                    <div class="product-price">
                        <span class="current-price">₦ 57.152,00</span>
                        <span class="old-price">₦ 57.152,00</span>
                        <span class="discount-tag">10%</span>
                    </div>
                    <div class="color-options">
                        <span class="color-dot green"></span>
                        <span class="color-dot black"></span>
                        <span class="color-dot pink"></span>
                        <span class="additional-colors">+5</span>
                    </div>
                </div>
                <div class="favorite">
                    <a href="#"><i class="fa-lg fa-solid fa-heart"></i></a>
                </div>
            </div>
        </div>
        <div class="sort-modal hidden" id="sortModal">
            <div class="modals-overlay" bis_skin_checked="1"></div>
            <div class="modal-content">
                <div class="modal-header">
                    <h2>Sort</h2>
                    <button class="close-btn" id="closeModal">&times;</button>
                </div>
                <div class="modal-body">
                    <label class="radio-option">
                        <input type="radio" name="sort" value="recently-added">
                        <span>Recently added</span>
                    </label>
                    <label class="radio-option">
                        <input type="radio" name="sort" value="maximum-reduction">
                        <span>Maximum reduction</span>
                    </label>
                    <label class="radio-option">
                        <input type="radio" name="sort" value="highest-price">
                        <span>Highest price</span>
                    </label>
                    <label class="radio-option">
                        <input type="radio" name="sort" value="lowest-price" checked>
                        <span>Lowest price</span>
                    </label>
                    <label class="radio-option">
                        <input type="radio" name="sort" value="low-stock">
                        <span>Low stock</span>
                    </label>
                </div>
                <div class="modal-footer">
                    <button class="confirm-btn">Confirm</button>
                </div>
            </div>
            
        </div>
    </div>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const openSortBtn = document.querySelector('.sort');
        const sortModal = document.getElementById('sortModal');
        const closeModalBtn = document.getElementById('closeModal');
        const modalsOverlay = document.querySelector('.modals-overlay');

        openSortBtn.addEventListener('click', () => {
            sortModal.classList.remove('hidden');
        });

        closeModalBtn.addEventListener('click', () => {
            sortModal.classList.add('hidden');
        });

        modalsOverlay.addEventListener('click', (event) => {
            sortModal.classList.add('hidden');
        });
    });
</script>