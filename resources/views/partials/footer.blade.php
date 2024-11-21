<style>
    @media only screen and (min-width: 0px) and (max-width: 640px){
        body {
            margin: 0;
            padding: 0;
            color: #333;
        }

        span {
            font-size: 16px;
        }

        .newsletter-section {
            text-align: center;
            flex-flow: column;
            justify-content: center;
            grid-row-gap: 70px;
            border-bottom: 1px solid #e7e7e7;
            font-size: large;
            padding: 20px 16px;
            background-color: #ffffff;
            h2 {
                margin: 0 0 10px;
                font-size: 24px;
                line-height: 31.2px;
                font-weight: 600;
            }
            span {
                margin: 0 0 10px;
                font-size: 14px;
                line-height: 18.2px;
                font-weight: 400;
            }
        }



        .newsletter-section button {
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .newsletter-section button:hover {
            background-color: #555;
        }

        .newsletter-options {
            margin-top: 15px;
            gap: 24px;
            input {
                width: 20px;
                height: 20px;
            }
            label {
                font-size: 16px;
                line-height: 20.8px;
                font-weight: 300;
            }
        }
        .newsletter-section .form-email {
            display: flex;
            width: 100%;
            gap: 10px;
            padding-top: 10px;
            input[type="email"] {
                padding: 10px;
                margin-right: 10px;
                border: 1px solid #ccc;
                height: 56px;
                flex: 1;
                box-sizing: border-box;
            }
            button {
                padding: 16px 20px;
                height: 56px;
                box-sizing: border-box;
            }
        }

        /**
        footer
         */
        footer {
            background-color: #f9f9f9;
        }
        .footer-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
            padding: 20px 16px;
            height: 782px;
            .footer-row {
                display: flex;
                flex-direction: column;
                gap: 20px;
                height: 432px;
                .column {
                    display: grid;
                    grid-template-columns: repeat(2, 1fr);
                    justify-content: space-between;
                }
                .column ul {
                    margin: 0;
                    padding: 0;
                    list-style: none;
                }

                .column ul li {
                    margin-bottom: 5px;
                }

                .column ul li a {
                    text-decoration: none;
                    color: #8e8e8e;
                    font-size: 12px;
                    font-weight: 400;
                    line-height: 15.6px;
                }
            }
        }

        .footer-social {
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .footer-bottom {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
        }

        .footer-container .title {
            font-weight: bold;
            font-size: 14px;
            line-height: 18.2px;
            padding-bottom: 15px;
            font-weight: 600;
        }

        .footer-container li {
            line-height: 2.1;
            font-size: 12px;
        }

        .footer-column {
            flex: 1;
            min-width: 200px;
            margin: 20px 0;
        }

        .footer-column h4 {
            margin-bottom: 15px;
            font-weight: bold;
        }

        .footer-column ul {
            list-style: none;
            padding: 0;
        }

        .footer-column ul li {
            margin-bottom: 10px;
        }

        .footer-column ul li a {
            text-decoration: none;
            color: #555;
        }

        .footer-column ul li a:hover {
            text-decoration: underline;
        }

        .footer-social {
            text-align: center;
            margin: 20px 0;
        }

        .footer-social a {
            margin: 0 10px;
            font-size: 20px;
            color: #333;
            text-decoration: none;
        }

        .footer-social i {
            font-weight: 1000;
        }

        .footer-social a:hover {
            color: #555;
        }

        .footer-bottom {
            text-align: center;
            padding: 12px 20px;
            background-color: #f2f2f2;
            font-size: 14px;
            gap: 10px;
            color: #8e8e8e;
        }

        .footer-banner {
            display: flex;
        }

        .footer-info {
            grid-column-gap: 8px;
            --f2w-order: 0;
            background-color: #36717e;
            flex-flow: row;
            flex-grow: 1;
            flex-basis: 0;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 40px;
            margin: 0 auto 0 0;
            padding: 8px 150px;
            display: flex;
            position: relative;
            overflow: hidden;
        }

        .icon {
            aspect-ratio: 1;
            --f2w-order: 0;
            flex-shrink: 0;
            width: 20px;
            height: 20px;
            margin: 0;
            position: relative;
            overflow: hidden;
        }

        .icon-text {
            color: #ffffff;
        }

        .newsletter-form-section {
            justify-content: center;
        }

        .newsletter-notice {
            justify-content: flex-start;
            width: 100%;
        }

        .newsletter-quote {
            color: #AAAAAA;
            text-align: center;
            span {
                font-size: 12px;
                line-height: 15.6px;
            }
        }
        #Frame_98 {
            padding: 40px 16px;
            max-width: 100%;
            .footer-social {
                gap: 16px;
            }
        }
    }
</style>


<div class="footer">
    @include('partials.banner')

    <div class="newsletter-section">
        <div class="newsletter-form-section">
            <div class="newsletter-notice">
                <h2 class="text">Don't miss a thing!</h2>
                <span class="text">
                    Sign up for the newsletter and receive exclusive offers
                </span>
            </div>
            <div class="newsletter-form">
                <form>
                    <div class="newsletter-options">
                        <input type="radio" id="women" name="category" value="women" checked>
                        <label for="women">For women</label>
                        <input type="radio" id="men" name="category" value="men">
                        <label for="men">For men</label>
                    </div>
                    <div class="form-email">
                        <input type="email" placeholder="Type your email address here" required>
                        <button type="submit">Sign up</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="newsletter-quote">
        <span>
            <span>
                I would like to receive newsletters from PERSONA about current trends, offers and vouchers in accordance with the [Privacy Policy]. You can withdraw your consent at any time with effect for the future by sending a message to [Email] or using the unsubscribe option at the end of each newsletter.
            </span>
        </span>
        </div>
    </div>

    <footer>
        <div class="footer-container">
            <div class="footer-row">
                <div class="title"><span>WOMEN</span></div>
                <div class="column">
                    <ul>
                        <li><a href="#">Air Jordan 1 low</a></li>
                        <li><a href="#">NIKE Air Max Sneakers</a></li>
                        <li><a href="#">Handbag</a></li>
                        <li><a href="#">Lingerie</a></li>
                        <li><a href="#">Nike Air Max 270</a></li>
                    </ul>
                    <ul>
                        <li><a href="#">Leather jackets</a></li>
                        <li><a href="#">CategoraDenim jacketsy</a></li>
                        <li><a href="#">Denim jackets</a></li>
                        <li><a href="#">Leather pants</a></li>
                        <li><a href="#">Hoodie</a></li>
                    </ul>
                    <ul>
                        <li><a href="#">Between seasons jackets</a></li>
                        <li><a href="#">Adidas Sneakers</a></li>
                        <li><a href="#">Cowboy boots</a></li>
                        <li><a href="#">Trenchcoats</a></li>
                        <li><a href="#">Adidas Superstar</a></li>
                    </ul>
                    <ul>
                        <li><a href="#">Skinny jeans</a></li>
                        <li><a href="#">Leggings</a></li>
                        <li><a href="#">Ankle boots</a></li>
                        <li><a href="#">Swim suits</a></li>
                        <li><a href="#">Summer dresses</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-row">
                <div class="title"><span>BRANDS FOR WOMEN</span></div>
                <div class="column">
                    <ul>
                        <li><a href="#">ADIDAS</a></li>
                        <li><a href="#">ALDO</a></li>
                        <li><a href="#">ASHLUXE</a></li>
                        <li><a href="#">BOSS</a></li>
                    </ul>
                    <ul>
                        <li><a href="#">CERAVE</a></li>
                        <li><a href="#">CLARKS</a></li>
                        <li><a href="#">CROCS</a></li>
                        <li><a href="#">CHARLES TYRWHITT</a></li>
                    </ul>
                    <ul>
                        <li><a href="#">DEJIANDKOLA</a></li>
                        <li><a href="#">FENTY BEAUTY</a></li>
                        <li><a href="#">HIGH FASHION BY JOL</a></li>
                        <li><a href="#">KILENTAR</a></li>
                    </ul>
                    <ul>
                        <li><a href="#">LEVI'S</a></li>
                        <li><a href="#">MAC</a></li>
                        <li><a href="#">MANGO</a></li>
                        <li><a href="#">MAYBELINE</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="Frame_98">
            <div id="Frame_291" bis_skin_checked="1">
                <svg preserveAspectRatio="none" id="Vector_17" class="pointer-events-none" width="150" height="121" viewBox="0 0 150 121" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M122.031 29.8231L104.42 29.5532C78.6344 29.5532 87.9163 120.669 38.0641 120.669H13.9978L0 91.1869L29.4821 91.4436C55.2681 91.4436 45.9862 0.331055 95.8384 0.331055L150 0.504361C145.424 3.17061 137.635 7.67991 131.59 14.8355C127.741 19.3768 124.526 24.4186 122.031 29.8231Z" fill="black"></path></svg>
            </div>
            <!-- Social Media Links -->
            <div class="footer-social">
                <a href="#"><i class="fa-brands fa-facebook fa-lg"></i></a>
                <a href="#"><i class="fa-brands fa-instagram fa-lg"></i></a>
                <a href="#"><i class="fa-brands fa-tiktok fa-lg"></i></a>
                <a href="#"><i class="fa-brands fa-youtube fa-lg"></i></a>
            </div>
        </div>
        <!-- Bottom Footer -->
        <div class="footer-bottom">
            &copy; 2024 PERSONA
        </div>
    </footer>
</div>
