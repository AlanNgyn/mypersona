@extends('layouts.app')

@section('title', 'Home')

<style>
    .slider {
        width: 100%;
        max-width: 100%;
        height: 740px;
        overflow: hidden;
        position: relative;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .slides {
        display: flex;
        height: 100%;
        animation: slide 12s infinite;
    }

    .slide {
        width: 100%;
        /* transition: transform 1s ease; */
    }

    .slide img {
        width: 100%;
        object-fit: contain;
    }

    .dots {
        display: flex;
        justify-content: center;
        position: absolute;
        bottom: 15px;
        left: 50%;
        transform: translateX(-50%);
    }

    .dots span {
        display: block;
        width: 10px;
        height: 10px;
        margin: 0 5px;
        background-color: #ddd;
        border-radius: 50%;
    }

    .dots span.active {
        background-color: #333;
    }

    .home-block.section_2 {
        width: 100%;
        margin: 0;
        /*padding: 40px 60px 0 60px;*/
    }

    .home-block.section_3 {
        /*padding: 40px 60px 0 60px;*/
        display: flex;
        position: relative;
    }

    .home-block.section_4 {
        display: flex;
        flex-direction: column;
        /*padding: 40px 60px 0 60px;*/
    }

    .home-block .block-list {
        display: flex;
        flex-direction: row;
        column-gap: 20px;
    }

    .block-list .list-item {
        overflow: hidden;
        height: 700px;
        flex-basis: calc(100% / 3);
    }

    .block-list .list-item .item-image {
        height: 100%;
        display: flex;
        flex-direction: column;
        position: relative;
    }

    .block-list .list-item .item-image img:nth-child(2) {
        height: 30%;
        position: absolute;
        width: 30%;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -75%);
        mix-blend-mode: screen;
    }

    .block-list .list-item img {
        width: 100%;
        height: 89%;
        object-fit: cover;
    }

    .home-block .title {
        display: flex;
        flex-direction: column;
        line-height: 1.5;
    }
/*
* custom
 */
    @media only screen and (min-width: 0px) and (max-width: 640px){
        /* Slider Container */
        .slider {
            position: relative;
            overflow: hidden;
            width: 800px;
            height: fit-content;
        }

        /* Slides Wrapper */
        .slides {
            display: flex;
            flex-direction: row-reverse; /* RTL Direction */
            width: 100%;
            height: 100%;
            transform: translateX(0);
            transition: transform 0.5s ease-in-out; /* Smooth transition */
        }

        /* Individual Slide */
        .slide {
            min-width: 100%;
            height: 100%;
        }

        /* Dots Navigation */
        .dots {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 10px;
        }

        .dot {
            width: 15px;
            height: 15px;
            background-color: #ddd;
            border-radius: 50%;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .dot.active {
            background-color: #333;
        }

        /**
        section
         */
        .home-block.section_3 {
            display: block;
            #image {
                width: 100%;
                height: auto;
            }
        }
        .home-block.section_4 .block-list {
            display: flex;
            overflow-x: auto;
            gap: 20px;
            padding: 10px;
            scroll-snap-type: x mandatory;
            .list-item {
                flex: 0 0 calc(100% / 3 - 20px);
                min-width: 300px;
                scroll-snap-align: start;
                background: #f8f8f8;
                border: 1px solid #e0e0e0;
                border-radius: 8px;
                padding: 10px;
                .item-image {
                    text-decoration: none;
                }
                .title h3{
                    font-size: 14px;
                    color: #1c1c1c;
                    line-height: 18.2px;
                    font-weight: 600;
                }
                #Frame_297, #Frame_297_0, #Frame_297_1 {
                    flex-flow: row;
                    justify-content: space-between;
                }
                #__44, #__47, #__50 {
                    font-size: 14px !important;
                    font-weight: 400;
                    line-height: 18.2px;
                }
                .price {
                    #__45, #__51 {
                        color: #36717E;
                    }
                }
            }
        }
        .home-block {
            padding: 20px 16px;
            gap: 20px;
            .title {
                gap: 4px;
                h2 {
                    font-weight: 600;
                    font-size: 18px;
                    line-height: 23.4px;
                    margin: 10px 0;
                }
                span {
                    font-weight: 300;
                    font-size: 14px;
                    line-height: 18.2px;
                    color: #717171;
                }
            }
        }
        .home-block.section_2 {
            .block-list .list-item img {
                height: auto;
            }
            .block-list .list-item {
                position: relative;
                width: 100%;
                max-width: 600px;
                margin: auto;
                overflow: hidden;
            }

            .block-list .list-item .item-image {
                position: relative;
                display: block;
            }

            .block-list .list-item .item-image img {
                width: 100%;
                height: auto;
                display: block;
            }

            .block-list .list-item .item-image .description {
                position: absolute;
                bottom: 20px;
                left: 20px;
                color: white;
                padding: 10px 15px;
                border-radius: 8px;
                text-align: left;
            }

            .block-list .list-item .item-image .description p {
                margin: 0;
                line-height: 1.5;
                font-size: 14px;
            }

            .block-list .list-item .item-image .description .brand-name {
                font-weight: bold;
                font-size: 16px;
            }

        }

        .home-block.section_5, .home-block.section_2 {
            .block-list {
                display: grid;
                gap: 16px;
                margin-top: 10px;
                .list-item {
                    flex-basis: 100%;
                    height: 224px;
                    width: auto;
                    object-fit: contain;
                }
            }
        }

        .section-branch {
            display: flex;
            justify-content: center;
            padding: 20px 16px;
            .brand-list {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 20px;
                width: 100%;
                max-width: 800px;
                text-align: center;
            }

            .brand-container {
                display: flex;
                flex-direction: column;
                justify-content: flex-start;
                align-items: center;
                background-color: #F2F2F2;
            }

            .brand-item {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 150px;
            }

            .brand-item img {
                max-width: 60px;
                max-height: 100%;
                object-fit: contain;
            }

            label {
                margin-top: 10px;
                font-size: 14px;
                font-weight: 500;
                text-align: center;
                min-height: 2.5em;
                width: 100%;
                background-color: #ffffff;
            }
        }
    }
</style>
@section('content')
    <div class="slider">
        <div class="slides">
            <div class="slide"><img src="https://annalise-ejwgdmcpx3.figweb.site/cdn-cgi/imagedelivery/s-dfVpmPR-aKHmwFNwAgnQ/annalise-ejwgdmcpx3.figweb.site-e712066d87a15f1a00bffaadcfd0046f0fb4fad9/w=1850,f=auto,fit=cover" alt="Slide 1"></div>
            <div class="slide"><img src="https://annalise-ejwgdmcpx3.figweb.site/cdn-cgi/imagedelivery/s-dfVpmPR-aKHmwFNwAgnQ/annalise-ejwgdmcpx3.figweb.site-8aa5945d99bbd7b93003f4b3f193b6d7e356b2f0/w=1200" alt="Slide 2"></div>
            <div class="slide"><img src="https://annalise-ejwgdmcpx3.figweb.site/cdn-cgi/imagedelivery/s-dfVpmPR-aKHmwFNwAgnQ/annalise-ejwgdmcpx3.figweb.site-e712066d87a15f1a00bffaadcfd0046f0fb4fad9/w=1850,f=auto,fit=cover" alt="Slide 3"></div>
        </div>
        <div class="dots">
            <span class="dot active"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </div>
    <div class="header">
        @include('partials.banner')
    </div>
    <div class="section-branch">
        <div class="brand-list">
            <div class="brand-container">
                <div class="brand-item">
                    <a class="item-image-brand" href="/my-account/brand">
                        <img src="{{ asset('images/section/brand/Clothing.png') }}" alt="Clothing">
                    </a>
                </div>
                <label>Clothing</label>
            </div>

            <div class="brand-container">
                <div class="brand-item">
                    <a class="item-image-brand" href="/my-account/brand">
                        <img src="{{ asset('images/section/brand/Shoes.png') }}" alt="Shoes">
                    </a>
                </div>
                <label>Shoes</label>
            </div>

            <div class="brand-container">
                <div class="brand-item">
                    <a class="item-image-brand" href="/my-account/brand">
                        <img src="{{ asset('images/section/brand/Sportswear.png') }}" alt="Sportswear">
                    </a>
                </div>
                <label>Sportswear</label>
            </div>

            <div class="brand-container">
                <div class="brand-item">
                    <a class="item-image-brand" href="/my-account/brand">
                        <img src="{{ asset('images/section/brand/Accessories.png') }}" alt="Accessories">
                    </a>
                </div>
                <label>Accessories</label>
            </div>

            <div class="brand-container">
                <div class="brand-item">
                    <a class="item-image-brand" href="/my-account/brand">
                        <img src="{{ asset('images/section/brand/Skincare_Makeup.png') }}" alt="Skincare & Makeup">
                    </a>
                </div>
                <label>Skincare & Makeup</label>
            </div>

            <div class="brand-container">
                <div class="brand-item">
                    <a class="item-image-brand" href="/my-account/brand">
                        <img src="{{ asset('images/section/brand/Persona-Thrifts.png') }}" alt="Persona-Thrifts">
                    </a>
                </div>
                <label>Persona-Thrifts</label>
            </div>
        </div>
    </div>

    <div class="home-block section_2">
        <div class="title">
            <div><h2>Brand Focus</h2></div>
            <div><span>Don't miss out on these brands</span></div>
        </div>
        <div class="block-list">
            <div class="list-item ">
                <a class="item-image" href="#">
                    <img src="{{ asset('images/section/e85e0d3a9005ef4db440790c670f2c29.png') }}"
                         alt="">
                    <div class="description">
                        <p>Irresistible Autumn</p>
                        <p class="brand-name">Vero Moda</p>
                    </div>
                </a>
            </div>
            <div class="list-item ">
                <a class="item-image" href="#">
                    <img src="{{ asset('images/section/eb5367cfa7c8fc7f8ea8f961e7658794.png') }}"
                         alt="">
                    <div class="description">
                        <p>UNLEASH YOUR CHAOS</p>
                        <p class="brand-name">CONVERSE</p>
                    </div>
                </a>
            </div>
            <div class="list-item ">
                <a class="item-image" href="#">
                    <img src="{{ asset('images/section/cfed8adfb453392c16a68b65d0ae8ddd.png') }}"
                         alt="">
                    <div class="description">
                        <p>Workout Wardrobe</p>
                        <p class="brand-name">adidas by Stella McCartney</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="home-block section_4">
        <div class="title">
            <div><h2>Brand Focus</h2></div>
            <div><span>Don't miss out on these brands</span></div>
        </div>
        <div class="block-list">
            <div class="list-item">
                <a class="item-image" href="#"><img
                            src="https://annalise-ejwgdmcpx3.figweb.site/cdn-cgi/imagedelivery/s-dfVpmPR-aKHmwFNwAgnQ/annalise-ejwgdmcpx3.figweb.site-e6142762acbaec5d35567c9130bfd93ae69452da/w=1180,f=auto,fit=cover"
                            alt="">
                    <div id="Frame_24" bis_skin_checked="1">
                        <div id="Frame_297" bis_skin_checked="1">
                            <span id="_4364_102917" class="pointer-events-none"><span
                                        id="__44">BAGGY DAD WOMEN'S JEANS</span></span>
                            <span id="_4364_102918" class="pointer-events-none price"><span
                                        id="__45">₦ 303.602,14</span></span>
                        </div>
                        <div id="Frame_27" bis_skin_checked="1">
                            <div id="Frame_28" class="pointer-events-none" bis_skin_checked="1">
                            </div>
                            <div id="Frame_29" class="pointer-events-none" bis_skin_checked="1">
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="list-item">
                <a class="item-image" href="#"><img
                            src="https://annalise-ejwgdmcpx3.figweb.site/cdn-cgi/imagedelivery/s-dfVpmPR-aKHmwFNwAgnQ/annalise-ejwgdmcpx3.figweb.site-2b7a46a6e54b493fc67b1cdb312ba9a8037c5cad/w=1412,f=auto,fit=cover"
                            alt="">
                    <div id="Frame_24_0" bis_skin_checked="1">
                        <div id="Frame_297_0" bis_skin_checked="1">
                            <span id="_4364_102930" class="pointer-events-none"><span
                                        id="__47">Kids' Classic Lined Clog</span></span>
                            <div id="Frame_298" bis_skin_checked="1">
                                <span id="_4364_102932" class="pointer-events-none price"><span id="__48">₦ 303.602,14</span></span>
                                <span id="_4364_102933" class="pointer-events-none price"><span id="__49">₦ 303.602,14</span></span>
                            </div>
                        </div>
                        <div id="Frame_27_0" bis_skin_checked="1">
                            <div id="Frame_28_0" class="pointer-events-none" bis_skin_checked="1">
                            </div>
                            <div id="Frame_29_0" class="pointer-events-none" bis_skin_checked="1">
                            </div>
                            <div id="Frame_30" class="pointer-events-none" bis_skin_checked="1">
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="list-item">
                <a class="item-image" href="#"><img
                            src="https://annalise-ejwgdmcpx3.figweb.site/cdn-cgi/imagedelivery/s-dfVpmPR-aKHmwFNwAgnQ/annalise-ejwgdmcpx3.figweb.site-28f7315f56d1cf11225053f714ab5d66e1d316b1/w=500,h=600"
                            alt="">
                    <div id="Frame_25" bis_skin_checked="1">
                        <div id="Frame_297_1" bis_skin_checked="1">
                            <span id="_4364_102944" class="pointer-events-none"><span
                                        id="__50">Sweatshirt 'Essentials'</span></span>
                            <span id="_4364_102945" class="pointer-events-none price"><span
                                        id="__51">₦ 303.602,14</span></span>
                        </div>
                        <div id="Frame_298_0" bis_skin_checked="1">
                            <div id="Frame_28_1" class="pointer-events-none" bis_skin_checked="1">
                            </div>
                            <div id="Frame_29_1" class="pointer-events-none" bis_skin_checked="1">
                            </div>
                            <div id="Frame_30_0" class="pointer-events-none" bis_skin_checked="1">
                            </div>
                            <div id="Frame_31" class="pointer-events-none" bis_skin_checked="1">
                            </div>
                            <div id="Frame_32" bis_skin_checked="1">
                                <span id="_4364_102952" class="pointer-events-none"><span id="__52">+5</span></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="home-block section_4">
        <div class="title">
            <div><h2>Brand Focus</h2></div>
            <div><span>Don't miss out on these brands</span></div>
        </div>
        <div class="block-list">
            <div class="list-item">
                <a class="item-image" href="#"><img
                        src="https://annalise-ejwgdmcpx3.figweb.site/cdn-cgi/imagedelivery/s-dfVpmPR-aKHmwFNwAgnQ/annalise-ejwgdmcpx3.figweb.site-50c93854a360b6ec1a954a90f104d1804a16a59a/w=1200"
                        alt="">
                    <div class="title">
                        <span>Irresistible Autumn</span>
                        <h3>LEVI'S</h3>
                    </div>
                </a>
            </div>
            <div class="list-item">
                <a class="item-image" href="#"><img
                        src="https://annalise-ejwgdmcpx3.figweb.site/cdn-cgi/imagedelivery/s-dfVpmPR-aKHmwFNwAgnQ/annalise-ejwgdmcpx3.figweb.site-8aa5945d99bbd7b93003f4b3f193b6d7e356b2f0/w=1200"
                        alt="">
                    <div class="title">
                        <span>UNLEASH YOUR CHAOS</span>
                        <h3>CROCS</h3>
                    </div>
                </a>
            </div>
            <div class="list-item">
                <a class="item-image" href="#"><img
                        src="https://annalise-ejwgdmcpx3.figweb.site/cdn-cgi/imagedelivery/s-dfVpmPR-aKHmwFNwAgnQ/annalise-ejwgdmcpx3.figweb.site-a3505aedcfe5c217503a50f74cb5f7a31dfced9e/w=700"
                        alt="">
                    <div class="title">
                        <span>Workout Wardrobe</span>
                        <h3>ADIDAS</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="home-block section_5">
        <div class="title">
            <div><h2>Popular brands</h2></div>
            <div><span>Our favorite brands for you</span></div>
        </div>
        <div class="block-list">
            <div class="list-item">
                <a class="item-image" href="#">
                    <img src="https://annalise-ejwgdmcpx3.figweb.site/cdn-cgi/imagedelivery/s-dfVpmPR-aKHmwFNwAgnQ/annalise-ejwgdmcpx3.figweb.site-997ae033b992538391439c264f797a1f9aa7f4fb/w=852"
                         alt="">
                    <img src="https://annalise-ejwgdmcpx3.figweb.site/cdn-cgi/imagedelivery/s-dfVpmPR-aKHmwFNwAgnQ/annalise-ejwgdmcpx3.figweb.site-aa16b83c58be3f77a1871e1dd46f1e996b77fefd/w=400"
                         alt=""
                         srcset="https://annalise-ejwgdmcpx3.figweb.site/cdn-cgi/imagedelivery/s-dfVpmPR-aKHmwFNwAgnQ/annalise-ejwgdmcpx3.figweb.site-aa16b83c58be3f77a1871e1dd46f1e996b77fefd/w=400">

                </a>
            </div>
            <div class="list-item">
                <a class="item-image" href="#">
                    <img src="https://annalise-ejwgdmcpx3.figweb.site/cdn-cgi/imagedelivery/s-dfVpmPR-aKHmwFNwAgnQ/annalise-ejwgdmcpx3.figweb.site-370ad270ea2f681573902737a843f17e407a0960/w=2056,f=auto,fit=cover"
                         alt="">
                    <img style="height: 22%; width: 48%" src="https://annalise-ejwgdmcpx3.figweb.site/cdn-cgi/imagedelivery/s-dfVpmPR-aKHmwFNwAgnQ/annalise-ejwgdmcpx3.figweb.site-7f1b7235de0f9bb44bda2afbe3cd4163024cdc52/w=712"
                         alt=""
                         srcset="https://annalise-ejwgdmcpx3.figweb.site/cdn-cgi/imagedelivery/s-dfVpmPR-aKHmwFNwAgnQ/annalise-ejwgdmcpx3.figweb.site-7f1b7235de0f9bb44bda2afbe3cd4163024cdc52/w=712">
                </a>
            </div>
            <div class="list-item">
                <a class="item-image" href="#"><img
                            src="https://annalise-ejwgdmcpx3.figweb.site/cdn-cgi/imagedelivery/s-dfVpmPR-aKHmwFNwAgnQ/annalise-ejwgdmcpx3.figweb.site-5681b3ff027dddf28fa857888a7195964cc8587f/w=852,f=auto,fit=cover"
                            alt="">
                </a>
            </div>
        </div>
    </div>
    @include('components.modal')
    <script src="{{ asset('js/modal.js') }}"></script>

@endsection
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const slides = document.querySelector('.slides');
        const dots = document.querySelectorAll('.dot');
        const slideCount = dots.length;
        let currentIndex = 0;
        const autoSlideInterval = 4000;
        let sliderInterval;

        const updateSlidePosition = () => {
            slides.style.transform = `translateX(+${currentIndex * 100}%)`;
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === currentIndex);
            });
        };


        const moveToNextSlide = () => {
            currentIndex = (currentIndex + 1) % slideCount;
            updateSlidePosition();
        };


        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                currentIndex = index;
                updateSlidePosition();
                clearInterval(sliderInterval);
                // sliderInterval = startAutoSlide();
            });
        });

        // Auto-slide logic
        // const startAutoSlide = () => setInterval(moveToNextSlide, autoSlideInterval);

        updateSlidePosition();
        // sliderInterval = startAutoSlide();
    });
</script>
