<style>
    .header .banner {
        background-color: #ffffff;
    }

    .footer .banner {
        background-color: #36717e;
    }

    .banner {
        display: flex;
    }

    .banner-info {
        grid-column-gap: 8px;
        --f2w-order: 0;
        flex-flow: row;
        flex-grow: 1;
        flex-basis: 0;
        justify-content: center;
        align-items: center;
        width: 480px;
        height: 52px;
        margin: 0 auto 0 0;
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

    .icon #Vector_15{
        --f2w-order: 0;
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
    }

    .icon-text {
        color: #1c1c1c;
        font-weight: 400;
        line-height: 18.2px;
    }
    @media only screen and (max-width: 680px) {
        .banner-info {
            grid-column-gap: 8px;
            --f2w-order: 0;
            flex-flow: row;
            flex-grow: 1;
            flex-basis: 0;
            justify-content: center;
            align-items: center;
            width: 480px;
            height: 52px;
            margin: 0 auto 0 0;
            display: flex;
            position: relative;
            overflow: hidden;
            gap: 8px;
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

        .icon #Vector_15{
            --f2w-order: 0;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
        }

        .icon-text {
            color: #ffffff;
            font-weight: 400;
            line-height: 18.2px;
        }
        /*
        * auto banner
         */
        .header {
            .icon-text {
                color: #1c1c1c;
            }
            .banner-info .icon {
                svg{
                    stroke: #1c1c1c;
                    fill: #1c1c1c;
                }
            }
        }
        .banner {
            display: flex;
            overflow: hidden;
            width: 100%;
            position: relative;
        }

        .banner-info {
            flex: 0 0 100%;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100px; /* Adjust as needed */
            position: absolute;
            left: 0;
            top: 0;
        }

        .banner-info.active {
            opacity: 1;
            position: relative;
        }

    }
</style>
<div class="banner">
    <div class="banner-info">
        <div class="icon">
            <svg preserveAspectRatio="none" id="Group_0" class="pointer-events-none" width="20" height="19"
                 viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.8307 7.00008C15.8307 8.20842 15.4724 9.31675 14.8557 10.2417C13.9557 11.5751 12.5307 12.5167 10.8724 12.7584C10.5891 12.8084 10.2974 12.8334 9.9974 12.8334C9.6974 12.8334 9.40573 12.8084 9.1224 12.7584C7.46406 12.5167 6.03906 11.5751 5.13906 10.2417C4.5224 9.31675 4.16406 8.20842 4.16406 7.00008C4.16406 3.77508 6.7724 1.16675 9.9974 1.16675C13.2224 1.16675 15.8307 3.77508 15.8307 7.00008Z"
                      stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M17.7073 14.8917L16.3323 15.2167C16.024 15.2917 15.7823 15.525 15.7156 15.8333L15.424 17.0583C15.2656 17.725 14.4156 17.925 13.974 17.4L9.99896 12.8333L6.02393 17.4083C5.58226 17.9333 4.73226 17.7333 4.57393 17.0667L4.28226 15.8417C4.20726 15.5333 3.96559 15.2917 3.66559 15.225L2.29059 14.9C1.65726 14.75 1.43226 13.9583 1.89059 13.5L5.14059 10.25C6.04059 11.5833 7.46559 12.525 9.12396 12.7667C9.40729 12.8167 9.69896 12.8417 9.99896 12.8417C10.299 12.8417 10.5906 12.8167 10.874 12.7667C12.5323 12.525 13.9573 11.5833 14.8573 10.25L18.1073 13.5C18.5656 13.95 18.3406 14.7417 17.7073 14.8917Z"
                      stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M10.4837 4.4835L10.9753 5.46682C11.042 5.60015 11.217 5.7335 11.3753 5.7585L12.267 5.90849C12.8337 6.00015 12.967 6.41683 12.5587 6.82516L11.867 7.51681C11.7503 7.63348 11.6837 7.8585 11.7253 8.02516L11.9253 8.8835C12.0837 9.5585 11.7253 9.82516 11.1253 9.46683L10.292 8.97516C10.142 8.8835 9.89199 8.8835 9.74199 8.97516L8.90866 9.46683C8.30864 9.81683 7.9503 9.5585 8.10864 8.8835L8.30864 8.02516C8.34199 7.86683 8.28364 7.63348 8.16697 7.51681L7.4753 6.82516C7.06697 6.41683 7.2003 6.00849 7.76697 5.90849L8.65866 5.7585C8.80866 5.7335 8.98366 5.60015 9.05033 5.46682L9.54199 4.4835C9.78366 3.95016 10.217 3.95016 10.4837 4.4835Z"
                      stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
        </div>
        <div class="icon-text">AUTHENTIC BRANDS</div>
    </div>
    <div class="banner-info">
        <div class="icon">
            <svg preserveAspectRatio="none" id="Vector_15" class="pointer-events-none" width="20" height="17"
                 viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 7.5H2V13.5H1C0.868635 13.5002 0.738528 13.4744 0.617131 13.4242C0.495734 13.374 0.385432 13.3003 0.292542 13.2075C0.199652 13.1146 0.125999 13.0043 0.0758 12.8829C0.0256012 12.7615 -0.000156957 12.6314 7.19542e-07 12.5V8.5C-0.000156957 8.36863 0.0256012 8.23853 0.0758 8.11713C0.125999 7.99573 0.199652 7.88543 0.292542 7.79254C0.385432 7.69965 0.495734 7.626 0.617131 7.5758C0.738528 7.5256 0.868635 7.49984 1 7.5ZM17 6V14.5C16.9995 15.0303 16.7886 15.5387 16.4136 15.9136C16.0387 16.2886 15.5303 16.4995 15 16.5H5C4.46973 16.4995 3.96132 16.2886 3.58637 15.9136C3.21141 15.5387 3.00052 15.0303 3 14.5V6C2.99989 5.67167 3.06449 5.34653 3.19008 5.04317C3.31568 4.7398 3.49983 4.46416 3.732 4.23199C3.96416 3.99983 4.2398 3.81568 4.54317 3.69008C4.84653 3.56448 5.17167 3.49989 5.5 3.5H9V1.5C9 1.23478 9.10536 0.98043 9.29289 0.792893C9.48043 0.605357 9.73478 0.5 10 0.5C10.2652 0.5 10.5196 0.605357 10.7071 0.792893C10.8946 0.98043 11 1.23478 11 1.5V3.5H14.5C14.8283 3.49989 15.1535 3.56448 15.4568 3.69008C15.7602 3.81568 16.0358 3.99983 16.268 4.23199C16.5002 4.46416 16.6843 4.7398 16.8099 5.04317C16.9355 5.34653 17.0001 5.67167 17 6ZM8.25 8.5C8.25 8.25277 8.17669 8.0111 8.03934 7.80554C7.90199 7.59998 7.70676 7.43976 7.47836 7.34515C7.24995 7.25054 6.99861 7.22579 6.75614 7.27402C6.51366 7.32225 6.29093 7.4413 6.11612 7.61612C5.9413 7.79093 5.82225 8.01366 5.77402 8.25614C5.72579 8.49861 5.75054 8.74995 5.84515 8.97835C5.93976 9.20676 6.09998 9.40199 6.30554 9.53934C6.5111 9.67669 6.75277 9.75 7 9.75C7.16416 9.75001 7.32671 9.71769 7.47837 9.65487C7.63003 9.59206 7.76784 9.49999 7.88391 9.38391C7.99999 9.26784 8.09206 9.13003 8.15488 8.97837C8.21769 8.82671 8.25001 8.66416 8.25 8.5ZM8 12.5H6V13.5H8V12.5ZM11 12.5H9V13.5H11V12.5ZM14.25 8.5C14.25 8.25277 14.1767 8.0111 14.0393 7.80554C13.902 7.59998 13.7068 7.43976 13.4784 7.34515C13.2499 7.25054 12.9986 7.22579 12.7561 7.27402C12.5137 7.32225 12.2909 7.4413 12.1161 7.61612C11.9413 7.79093 11.8223 8.01366 11.774 8.25614C11.7258 8.49861 11.7505 8.74995 11.8452 8.97835C11.9398 9.20676 12.1 9.40199 12.3055 9.53934C12.5111 9.67669 12.7528 9.75 13 9.75C13.1642 9.75001 13.3267 9.71769 13.4784 9.65487C13.63 9.59206 13.7678 9.49999 13.8839 9.38391C14 9.26784 14.0921 9.13003 14.1549 8.97837C14.2177 8.82671 14.25 8.66416 14.25 8.5ZM14 12.5H12V13.5H14V12.5ZM20 8.5V12.5C20.0002 12.6314 19.9744 12.7615 19.9242 12.8829C19.874 13.0043 19.8003 13.1146 19.7075 13.2075C19.6146 13.3003 19.5043 13.374 19.3829 13.4242C19.2615 13.4744 19.1314 13.5002 19 13.5H18V7.5H19C19.1314 7.49984 19.2615 7.5256 19.3829 7.5758C19.5043 7.626 19.6146 7.69965 19.7075 7.79254C19.8003 7.88543 19.874 7.99573 19.9242 8.11713C19.9744 8.23853 20.0002 8.36863 20 8.5Z"
                      fill="white"></path>
            </svg>
        </div>
        <div class="icon-text">POWERED BY AI</div>
    </div>
    <div class="banner-info">
        <div class="icon">
            <svg preserveAspectRatio="none" id="Vector_16" class="pointer-events-none" width="20" height="21"
                 viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.871094 8.99287H19.2102V20.3825H0.871094V8.99287ZM17.4711 10.6865H2.61021V18.6889H17.4711V10.6865ZM10.045 0.905762C13.7315 0.910098 16.7188 3.81923 16.7233 7.40888V10.6441H3.36676V7.40932C3.37119 3.81925 6.35848 0.910098 10.0446 0.905781L10.045 0.905762ZM14.9841 8.95053V7.40932C14.9841 4.75287 12.7728 2.59942 10.045 2.59942C7.31723 2.59942 5.1059 4.75289 5.1059 7.40932V8.95053H14.9841ZM9.20934 17.4974L6.1085 14.4777L7.33807 13.2803L9.21111 15.1043L12.7529 11.6603L13.9816 12.8594L9.20934 17.4974Z"
                      fill="white"></path>
            </svg>
        </div>
        <div class="icon-text">SECURE PAYMENT</div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const banners = document.querySelectorAll('.footer .banner-info');
        let currentIndex = 1;

        function showNextBanner() {
            banners[currentIndex].classList.remove('active');
            currentIndex = (currentIndex + 1) % banners.length;
            banners[currentIndex].classList.add('active');
        }
        banners[currentIndex].classList.add('active');
        console.log(currentIndex);
        setInterval(showNextBanner, 3000);
    });
    document.addEventListener('DOMContentLoaded', () => {
        const banners = document.querySelectorAll('.header .banner-info');
        let index = 1;

        function showNextBanner() {
            banners[index].classList.remove('active');
            index = (index + 1) % banners.length;
            banners[index].classList.add('active');
        }
        banners[index].classList.add('active');
        setInterval(showNextBanner, 3000);
    });
</script>
