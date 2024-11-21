<style>
    .header {
        display: flex;
        flex-flow: column;
    }

    .header-section-1 {
        background-color: #f2f2f2;
    }

    .header-section-1 > div {
        border-left: 1px solid black;
        border-right: 1px solid black;
        margin-left: 60px;
        padding: 0 10px;
        display: inline-flex;
        height: 32px;
        justify-content: center;
        align-items: center;
    }

    .header-section-2 {
        display: flex;
        flex-flow: row;
        justify-content: space-between;
        border-bottom: 1px solid black;
        height: 65px;
        align-items: center;
        padding: 0 80px;
    }

    .header-section-2-left,
    .header-section-2-right {
        display: flex;
        flex-flow: row;
        column-gap: 20px;
        height: 100%;
    }

    .header-section-2-left > a, .header-section-2-right > a {
        display: flex;
        flex-direction: column;
        justify-content: center;
        position: relative;
    }


    .header-section-2-left > a.active::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 50%;
        border-bottom: 2px solid #000000;
        transform: translateX(50%);
    }

    .header-section-2 .logo {
        height: 25px;
        position: relative;
        width: 150px;
    }

    .navigation {
        display: inline-flex;
        justify-content: center;
        height: 52px;
        align-items: center;
        position: relative;
    }

    .navigation .group-menu {
        display: flex;
        flex-direction: row;
        height: 100%;
        list-style-type: none;
        justify-content: space-between;
        width: 50%;
    }

    .item.level0 {
        align-content: center;
        height: 100%;
        padding: 0;
    }

    .group-menu > .item.level0:hover > .menu {
        display: grid;
        z-index: 99;
    }
</style>

<div class="header">
    <div class="header-section-1">
        <div><i class="fa-regular fa-circle-question"></i>&nbsp;Contact & Help</div>
    </div>
    <div class="header-section-2">
        <div class="header-section-2-left">
            <a class="active" href="#"><span>Women</span></a>
            <a href="#"><span>Men</span></a>
            <a href="#"><span>Kids</span></a>
        </div>
        <a href="/" class="logo">
            <svg preserveAspectRatio="none" id="Layer_1" class="pointer-events-none" width="150" height="26"
                 viewBox="0 0 150 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.64196 14.7149V25.1974H0V0.739258H11.3908C15.8981 0.739258 18.5534 3.18459 18.5534 7.55233C18.5534 12.023 15.7931 14.7149 11.2506 14.7149H1.64196ZM1.64196 13.4225H11.216C14.5352 13.4225 16.8064 11.5008 16.8064 7.58755C16.8064 3.84842 14.6747 2.03305 11.0413 2.03305H1.64196V13.4225Z"
                      fill="black"></path>
                <path d="M20.2812 0.739258H36.9129V2.10147H21.9232V11.1858H35.1998V12.5487H21.9232V23.8345H36.9129V25.1974H20.2812V0.739258Z"
                      fill="black"></path>
                <path d="M40.0287 14.7149V25.1974H38.3867V0.739258H49.7768C54.2841 0.739258 56.9394 3.18459 56.9394 7.55233C56.9394 11.6403 54.7041 14.1906 50.8254 14.6099C51.7683 15.0292 52.5026 15.6585 52.9212 16.4619L57.2192 25.2001H55.437L51.2447 16.7064C50.5457 15.2738 49.0432 14.7149 47.3308 14.7149H40.0287ZM40.0287 13.4225H49.6021C52.9212 13.4225 55.1925 11.5008 55.1925 7.58755C55.1925 3.84842 53.0614 2.03305 49.4273 2.03305H40.0287V13.4225Z"
                      fill="black"></path>
                <path d="M80.435 6.73338L76.8557 6.67851C71.6149 6.67851 73.5014 25.1974 63.3691 25.1974H58.4778L55.6328 19.2053L61.6249 19.2574C66.8658 19.2574 64.9793 0.739258 75.1115 0.739258L86.1196 0.774481C85.1895 1.31638 83.6065 2.23288 82.3777 3.68721C81.5956 4.61022 80.9421 5.63492 80.435 6.73338Z"
                      fill="black"></path>
                <path d="M92.5764 0.388672C99.739 0.388672 104.806 5.62955 104.806 12.9669C104.806 20.3043 99.739 25.5451 92.5764 25.5451C85.4138 25.5451 80.3477 20.3036 80.3477 12.9676C80.3477 5.63158 85.4165 0.388672 92.5764 0.388672ZM92.5764 19.2564C96.0357 19.2564 98.3415 16.4263 98.3415 12.9317C98.3415 9.50822 96.0384 6.67745 92.5764 6.67745C89.1143 6.67745 86.8112 9.50822 86.8112 12.9317C86.8112 16.427 89.1177 19.257 92.5764 19.257V19.2564Z"
                      fill="black"></path>
                <path d="M119.704 0.739554V12.3038L105.764 0.388672H105.414V8.66285C105.847 10.0565 106.063 11.5084 106.054 12.9676C106.062 14.4266 105.847 15.8782 105.414 17.2717V25.197H111.704V13.6307L125.645 25.5458H125.993V0.739554H119.704Z"
                      fill="black"></path>
                <path d="M138.399 0.804688H138.749L149.999 25.6123H143.536L142.627 23.2367H134.521L133.613 25.6123H127.148L138.399 0.804688ZM140.46 17.6463L138.574 12.7543L136.687 17.6463H140.46Z"
                      fill="black"></path>
            </svg>
        </a>
        <div class="header-section-2-right">
            <a href="#"><i class="fa-lg fa-solid fa-magnifying-glass"></i></a>
            <a href="#"><i class="fa-lg fa-regular fa-circle-user"></i></a>
            <a href="#"><i class="fa-lg fa-regular fa-heart"></i></a>
            <a href="#"><i class="fa-lg fa-solid fa-cart-shopping"></i></a>
        </div>
    </div>

    @include('partials.menu.menu-navigation')

    @include('partials.banner')
</div>