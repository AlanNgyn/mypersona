<style>
    .left-navigation {
        display: flex;
        height: 1000px;
        line-height: 2.3;
    }
    .categories {
        width: 100%;
    }

    .categories ul > span {
        margin-right: 10px;
    }

    .categories .level0 > span {
        font-size: 18px;
        color: #717171;
    }
    .categories .level0 i {
        color: #8E8E8E;
        font-size: 13px;
    }
    .categories .level0.active > span,
    .categories .level0.active > i {
        color: #36717E;
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
    <ul class="level0 active"><span>Clothing</span><i class="fa-solid fa-angle-down"></i>
        @for($i=1;$i<=4;$i++)
            <ul class="level1"><span>Sub-category {{$i}}</span><i class="fa-solid fa-angle-down"></i>
                @for($j=1;$j<=3;$j++)
                    <li><span>Sub-category {{ $i . '.' . $j }}</span></li>
                @endfor
            </ul>
        @endfor
    </ul>
    <ul class="level0"><span>Shoes</span><i class="fa-solid fa-angle-down"></i></ul>
    <ul class="level0"><span>Sportswear</span><i class="fa-solid fa-angle-down"></i></ul>
    <ul class="level0"><span>Accessories</span><i class="fa-solid fa-angle-down"></i></ul>
    <ul class="level0"><span>Skincare</span><i class="fa-solid fa-angle-down"></i></ul>
    <ul class="level0"><span>Makeup</span><i class="fa-solid fa-angle-down"></i></ul>
    <ul class="level0"><span>Persona Thrift</span><i class="fa-solid fa-angle-down"></i></ul>
</div>