<style>
    .left-navigation {
        display: flex;
        height: 1000px;
        line-height: 2.3;
    }

    .categories ul > span {
        margin-right: 10px;
    }

    .categories .level0 > span {
        font-size: 18px;
        color: #717171;
    }

    .categories .level1 {
        margin-left: 15px;
    }

    .categories .level1 > li {
        margin-left: 15px;
    }

    .categories .level1 > li > span {
        font-size: 14px;
    }

    @media (max-width: 768px) {
        .left-navigation {
            display: none;
        }
    }
</style>

<div class="categories">
    <ul class="level0"><span>Clothing</span><i class="fa-solid fa-angle-down"></i></ul>
    <ul class="level0"><span>Shoes</span><i class="fa-solid fa-angle-down"></i></ul>
    <ul class="level0"><span>Sportswear</span><i class="fa-solid fa-angle-down"></i></ul>
    <ul class="level0"><span>Accessories</span><i class="fa-solid fa-angle-down"></i></ul>
    <ul class="level0"><span>Skincare</span><i class="fa-solid fa-angle-down"></i></ul>
    <ul class="level0"><span>Makeup</span><i class="fa-solid fa-angle-down"></i></ul>
    <ul class="level0"><span>Persona Thrift</span><i class="fa-solid fa-angle-down"></i></ul>
</div>