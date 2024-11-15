<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        color: #333;
    }

    span {
        font-size: 16px;
    }

    .newsletter-section {
        padding: 40px 310px;
        text-align: center;
        display: flex;
        flex-flow: column;
        justify-content: center;
        grid-row-gap: 70px;
        border-bottom: 1px solid #e7e7e7;
        font-size: large;
    }

    .newsletter-section h2 {
        margin: 0 0 10px;
    }

    .newsletter-section input[type="email"] {
        padding: 10px;
        width: 500px;
        margin-right: 10px;
        border: 1px solid #ccc;
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
        display: flex;
        margin-top: 15px;
    }

    .newsletter-options label {
        margin: 0 15px;
    }

    footer {
        /*background-color: #f9f9f9;*/
    }

    .footer-container {
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        padding: 0 20px;
        flex-flow: column;
        border-bottom: 1px solid #e7e7e7;
        padding: 40px 310px;
        row-gap: 30px;
    }

    .footer-container .footer-row {
        flex-basis: 50%;
    }

    .footer-container .column {
        display: flex;
    }

    .footer-container .column > ul {
        flex-basis: 25%;
        list-style-type: none;
    }

    .footer-container .title {
        font-weight: bold;
        font-size: 16px;
        padding-bottom: 15px;
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
        padding: 20px;
        background-color: #e9e9e9;
        font-size: 14px;
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
        display: flex;
        flex-flow: row;
        justify-content: space-between;
    }

    .newsletter-notice {
        display: flex;
        flex-flow: column;
        justify-content: flex-start;
        width: 20%;
    }

    .newsletter-notice > span.text {
        text-align: center;
        overflow-wrap: break-word;
        font-size: 16px;
    }

    .newsletter-quote {
        color: #aaa;
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
                    <div class="">
                        <input type="email" placeholder="Type your email address here" required>
                        <button type="submit">Sign up</button>
                    </div>
                    <div class="newsletter-options">
                        <input type="radio" id="women" name="category" value="women" checked>
                        <label for="women">For women</label>
                        <input type="radio" id="men" name="category" value="men">
                        <label for="men">For men</label>
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