<style>
    .header .main-header {
        padding: 15px;
        display: flex;
        justify-content: space-between;
        box-shadow: 0px 3px 10px 0px #2121211A;
    }

    .main-header .left-content {
        display: flex;
        align-items: center;
    }

    .main-header .logo {
        display: block;
    }

    .left-content .menu-button {
        margin-right: 15px;
    }

    .main-header .right-content {
        display: flex;
        gap: 18px;
        align-items: center;
    }

    .menu-drawer-modal.hidden {
        display: none;
    }
    .menu-drawer-modal .modal-content {
        position: fixed;
        z-index: 999;
        background-color: #fff;
        bottom: 0;
        left: 0;
        overflow: hidden;
        width: 100%;
        height: 100%;
        max-height: unset;
        border-radius: 0;
    }
    .menu-drawer-modal .menu-modal-header {
        display: flex;
        position: relative;
        padding: 16px 15px;
        gap: 15px;
        border-bottom: 1px solid #E7E7E7;
    }
    .menu-drawer-modal .menu-modal-header > a {
        display: block;
        background-color: #F2F2F2;
        width: 108px;
        height: 32px;
        text-align: center;
        border-radius: 4px;
        padding-top: 4px;
    }
    .menu-drawer-modal .menu-modal-header img {
        display: inline-block;
        padding-top: 2px;
    }
    .menu-drawer-modal .close-btn {
        position: absolute;
        right: 17px;
        top: 18px;
        font-size: 26px;
    }
    .tabs-block {
        border-bottom: 1px solid #E7E7E7;
    }
    .tabs-block > div {
        padding: 0 15px;
        display: flex;
        gap: 15px;
        padding-top: 8px;
    }

    .tabs-block .tab-item {
        color: #717171;
        font-size: 14px;
        padding: 10px 10px;
    }
    .tabs-block .tab-item.current {
        color: #1C1C1C;
        font-weight: 600;
        display: inline-block;
        border-bottom: 2px solid #1C1C1C;
    }



    .menu-drawer-modal .tab-item-content {
        padding: 12px 15px;
    }

    .search-box {
        position: relative;
    }
    .search-box i {
        position: absolute;
        right: 20px;
        top: 20px;
        color: #717171;
    }

    .search-box input {
        width: 100%;
        height: 56px;
        border: 1px solid #AAA;
        padding: 15px;
    }

    .tab-item-content .categories {
        padding: 20px 0;
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 10px;
    }
    .tab-item-content .categories a {
        display: inline-block;
        background-color: #F2F2F2;
        width: 100%;
        padding: 21px 0;
        text-align: center;
    }

    .tab-item-content .top-brands {
        margin-left: -15px;
        margin-right: -15px;
        padding: 20px 15px 0;
        border-top: 1px solid #E7E7E7;
        text-align: center;
    }

    .tab-item-content .top-brands .label {
        font-size: 14px;
        color: #AAA;
        font-weight: 600;
        margin-bottom: 5px;
    }

    .tab-item-content .top-brands .description {
        font-size: 20px;
        line-height: 26px;
        font-weight: 600;
        padding-bottom: 12px;
    }

    .tab-item-content .top-brands .view-all-brands {
        font-size: 14px;
        display: inline-flex;
        align-items: center;
    }

    .tab-item-content .top-brands .list-brand {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 10px;
        padding-top: 15px;
    }
    .tab-item-content .top-brands .list-brand a {
        display: block;
        height: 64px;
        width: 195px;
    }
    .tab-item-content .top-brands .view-all-brands i {
        font-size: 9px;
        padding-left: 10px;
    }

    .search-block.hidden {
        display: none;
    }
    .search-block {
        position: fixed;
        z-index: 999;
        background-color: #fff;
        width: 100%;
        top: 66px;
        padding: 15px;
        border-top: 1px solid #E7E7E7;
        border-bottom: 1px solid #E7E7E7;
    }

    .search-block .categories {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 10px;
        padding-top: 20px;
    }
    .search-block .categories a {
        display: block;
        height: 64px;
        width: 195px;
    }
</style>

<div class="header">
    <div class="main-header">
        <div class="left-content">
            <div class="menu-button" id="menu-button"><img src="{{ asset('images/header/icon/menu.png') }}"></div>
            <a href="/" class="logo"><img src="{{ asset('images/header/logo.png') }}"></a>
        </div>
        <div class="right-content">
            <div class="search-button" id="search-button"><img src="{{ asset('images/header/icon/search.png') }}"></div>
            <a href="/list-wishlist" class="wishlist-button"><img src="{{ asset('images/header/icon/wishlist.png') }}"></a>
            <a href="/cart" class="cart-button"><img src="{{ asset('images/header/icon/cart.png') }}"></a>
        </div>
    </div>

    <div class="menu-drawer-modal hidden" id="menu-drawer-modal">
        <div class="modal-content">
            <div class="menu-modal-header">
                <a href="/my-account" class="cart-button"><img src="{{ asset('images/header/icon/profile.png') }}"></a>
                <a href="/list-wishlist" class="wishlist-button"><img src="{{ asset('images/header/icon/wishlist.png') }}"></a>
                <a href="/cart" class="cart-button"><img src="{{ asset('images/header/icon/cart.png') }}"></a>
                <span id="menu-closeModal" class="close-btn">&times;</span>
            </div>
            <div class="menu-modal-body">
                <div class="tabs-block">
                    <div>
                    <span class="tab-item current">Women</span>
                    <span class="tab-item">Men</span>
                    <span class="tab-item">Kids</span>
                    </div>
                </div>
                <div class="tab-item-content">
                    <div class="search-box"><input type="text" placeholder="Search for items, brands and more..."><i class="fa fa-magnifying-glass"></i></div>
                    <div class="categories">
                        <a href="/category-page/1">Clothing</a>
                        <a href="/category-page/2">Shoes</a>
                        <a href="/category-page/3">Sportswear</a>
                        <a href="/category-page/1">Accessories</a>
                        <a href="/category-page/2">Skincare & Makeup</a>
                        <a href="/category-page/3">Persona Thrift</a>
                        <a href="/category-page/1">Luxury</a>
                    </div>
                    <div class="top-brands">
                        <p class="label">Brands</p>
                        <p class="description">Our Top Brands</p>
                        <a href="/brand-listing" class="view-all-brands">All brands<i class="fa-solid fa-chevron-right"></i></a>

                        <div class="list-brand">
                            <a href="/brand/20" class="brand-item" style="background-image: url('{{ asset('images/header/brand1.png') }}');"></a>
                            <a href="/brand/23" class="brand-item" style="background-image: url('{{ asset('images/header/brand2.png') }}');"></a>
                            <a href="/brand/14" class="brand-item" style="background-image: url('{{ asset('images/header/brand3.png') }}');"></a>
                            <a href="/brand/6" class="brand-item" style="background-image: url('{{ asset('images/header/brand4.png') }}');"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="search-block hidden" id="search-block">
        <div class="search-box">
            <input type="text" placeholder="Search for items, brands and more...">
            <i class="fa fa-magnifying-glass"></i>
        </div>

        <div class="categories">
            <a href="/category-page/1" style="background-image: url('{{ asset('images/header/search/category1.png') }}');"></a>
            <a href="/category-page/2" style="background-image: url('{{ asset('images/header/search/category2.png') }}');"></a>
            <a href="/category-page/3" style="background-image: url('{{ asset('images/header/search/category3.png') }}');"></a>
            <a href="/category-page/1" style="background-image: url('{{ asset('images/header/search/category4.png') }}');"></a>
            <a href="/category-page/2" style="background-image: url('{{ asset('images/header/search/category5.png') }}');"></a>
            <a href="/category-page/3" style="background-image: url('{{ asset('images/header/search/category6.png') }}');"></a>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const openMenuBtn = document.getElementById('menu-button');
        const menuModal = document.getElementById('menu-drawer-modal');
        const closeMenuModalBtn = document.getElementById('menu-closeModal');


        openMenuBtn.addEventListener('click', () => {
            menuModal.classList.remove('hidden');
        });

        closeMenuModalBtn.addEventListener('click', () => {
            menuModal.classList.add('hidden');
        });


        const openSearchBtn = document.getElementById('search-button');
        const searchBlock = document.getElementById('search-block');

        openSearchBtn.addEventListener('click', (event) => {
            event.stopPropagation();
            if (searchBlock.classList.contains('hidden')) {
                searchBlock.classList.remove('hidden');
            } else {
                searchBlock.classList.add('hidden');
            }
        });
        document.addEventListener('click', (event) => {
            if (!searchBlock.contains(event.target)) {
                if (!searchBlock.classList.contains('hidden')) {
                    searchBlock.classList.add('hidden');
                }
            }
        });
        searchBlock.addEventListener('click', (event) => {
            event.stopPropagation();
        });


        const tabitems = document.querySelectorAll('.tabs-block .tab-item');

        tabitems.forEach(item => {
            item.addEventListener('click', () => {
                tabitems.forEach(i => i.classList.remove('current'));

                item.classList.add('current');
            });
        });
    });
</script>
