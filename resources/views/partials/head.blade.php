<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous" referrerpolicy="no-referrer"/>
<script src="https://cdn.jsdelivr.net/npm/heroicons-css@0.1.1/heroicons.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/heroicons-css@0.1.1/heroicons.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
<link rel="stylesheet" href="{{ asset('css/owl.theme.default.css') }}">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<style>
    *,
    :before,
    :after {
        box-sizing: border-box
    }

    a {
        text-decoration: none;
    }

    body {
        -webkit-font-smoothing: antialiased;
        width: 100%;
        overflow-x: auto;
    }

    ul {
        list-style-type: none;
    }

    @view-transition {
        navigation: auto;
    }

    @media (prefers-reduced-motion) {
        @view-transition {
            navigation: none;
        }
    }

    textarea:focus-visible {
        outline: none
    }

    button {
        -webkit-font-smoothing: inherit;
        -moz-osx-font-smoothing: inherit;
        -webkit-appearance: none
    }

    * {
        margin: 0;
        padding: 0
    }

    a {
        color: inherit;
        -webkit-text-decoration: inherit;
        text-decoration: inherit
    }

    input {
        font: inherit;
        background-color: inherit;
        border: none;
        outline: none
    }

    button {
        font: inherit;
        background: 0 0;
        background-color: inherit;
        color: inherit;
        border-style: none;
        width: auto;
        line-height: normal;
        overflow: visible
    }

    textarea,
    select {
        font: inherit;
        background-color: inherit
    }

    img,
    picture,
    video,
    canvas,
    svg {
        display: block
    }

    [data-reaction-click] {
        cursor: pointer
    }

    [data-visible=false] {
        display: none !important
    }

    .before-hidden:before,
    .after-hidden:after {
        display: none
    }

    .before-visible:before,
    .after-visible:after {
        content: ""
    }

    ::placeholder {
        color: inherit;
        opacity: .54
    }

    body * {
        scrollbar-width: none
    }

    body ::-webkit-scrollbar {
        display: none
    }

    [name=honey-pot-field] {
        display: none !important
    }

    .pointer-events-none {
        pointer-events: none
    }

    body {
        --4: 4;
        --G-Color-Neutral-Neutral-90: #151515;
        --12: 12;
        --16: 16;
        --0: 0
    }

    #_ {
        min-height: 100vh;
        display: grid
    }

    #When_hovering_brands {
        width: 1440px;
        min-width: 1440px;
        max-width: 1440px;
        min-height: 6510px;
        max-height: 6510px;
        margin: 0 auto;
        position: relative
    }

    #Homepage {
        grid-row-gap: 0px;
        --f2w-order: 0;
        background-color: #fff;
        flex-flow: column;
        justify-content: flex-start;
        align-items: center;
        width: 1440px;
        height: 5664px;
        padding: 0;
        display: flex;
        position: absolute;
        top: 0;
        left: 0;
        overflow: hidden
    }

    #Navigation {
        grid-row-gap: 0px;
        --f2w-order: 0;
        background-color: #fff;
        flex-flow: column;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: start;
        width: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative
    }

    #Frame_124 {
        grid-row-gap: 10px;
        --f2w-order: 0;
        background-color: #f2f2f2;
        flex-flow: column;
        flex-shrink: 0;
        justify-content: center;
        align-items: start;
        width: 100%;
        margin: 0;
        padding: 0 0 0 60px;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #Button_On_White {
        grid-column-gap: calc(1px * var(--4));
        --f2w-order: 0;
        border: 0 solid #1c1c1c;
        border-width: 0 1px;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: center;
        align-items: center;
        margin: 0;
        padding: 4px 7px;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #Question {
        --f2w-order: 0;
        flex-shrink: 0;
        width: 16px;
        height: 16px;
        margin: 0;
        position: relative
    }

    #Vector {
        --f2w-order: 0;
        width: 87.5%;
        height: 87.5%;
        position: absolute;
        top: 6.3%;
        left: 6.2%
    }

    #Text {
        grid-column-gap: 8px;
        --f2w-order: 1;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: center;
        align-items: center;
        height: 24px;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative
    }

    #I4364_103018_30_38781_30_38676 {
        text-align: center;
        overflow-wrap: break-word;
        color: #1c1c1c;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__0 {
        overflow-wrap: break-word;
        color: #1c1c1c;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%
    }

    #Frame_125 {
        grid-column-gap: 0px;
        --f2w-order: 1;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: center;
        align-items: center;
        width: 100%;
        margin: 0;
        padding: 0 60px;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #Frame_127 {
        grid-column-gap: 0px;
        --f2w-order: 0;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: center;
        width: 250px;
        margin: 0 auto 0 0;
        padding: 0;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #Navigation_0 {
        grid-row-gap: 10px;
        --f2w-order: 0;
        flex-flow: column;
        flex-shrink: 0;
        justify-content: center;
        align-items: center;
        width: 84px;
        margin: 0;
        padding: 23px 14px;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #I4364_103018_20_28853_19_28355 {
        text-align: center;
        overflow-wrap: break-word;
        color: #1c1c1c;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__1 {
        overflow-wrap: break-word;
        color: #1c1c1c;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%
    }

    #Line_1 {
        --f2w-order: 1;
        border: 0 solid #1c1c1c;
        border-top-width: 2.5px;
        width: 28px;
        height: 2.5px;
        position: absolute;
        top: calc(100% - 2.5px);
        left: calc(50% - 14px)
    }

    #Navigation_1 {
        grid-row-gap: 10px;
        --f2w-order: 1;
        flex-flow: column;
        flex-shrink: 0;
        justify-content: center;
        align-items: center;
        width: 58px;
        margin: 0;
        padding: 23px 14px;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #I4364_103018_20_28854_19_28362 {
        text-align: center;
        overflow-wrap: break-word;
        color: #717171;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__2 {
        overflow-wrap: break-word;
        color: #717171;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%
    }

    #Navigation_2 {
        grid-row-gap: 10px;
        --f2w-order: 2;
        flex-flow: column;
        flex-shrink: 0;
        justify-content: center;
        align-items: center;
        width: 57px;
        margin: 0;
        padding: 23px 14px;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #I4364_103018_20_28855_19_28362 {
        text-align: center;
        overflow-wrap: break-word;
        color: #717171;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__3 {
        overflow-wrap: break-word;
        color: #717171;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%
    }

    #Logo_Black {
        aspect-ratio: 3.26;
        --f2w-order: 1;
        flex-shrink: 0;
        width: 150px;
        height: 46px;
        margin: 0 auto 0 0;
        position: relative;
        overflow: hidden
    }

    #Layer_2 {
        aspect-ratio: 5.95;
        --f2w-order: 0;
        width: 100%;
        height: 54.8%;
        position: absolute;
        top: 22.6%;
        left: 0
    }

    #Layer_1 {
        --f2w-order: 0;
        position: absolute;
        top: 0;
        left: -.3%
    }

    #Frame_128 {
        grid-column-gap: 24px;
        --f2w-order: 2;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: flex-end;
        align-items: center;
        width: 250px;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #MagnifyingGlass {
        aspect-ratio: 1;
        --f2w-order: 0;
        flex-shrink: 0;
        width: 24px;
        height: 24px;
        margin: 0;
        position: relative
    }

    #Vector_0 {
        --f2w-order: 0;
        width: 83.3%;
        height: 83.3%;
        position: absolute;
        top: 8.5%;
        left: 8.5%
    }

    #UserCircle {
        aspect-ratio: 1;
        --f2w-order: 1;
        flex-shrink: 0;
        width: 24px;
        height: 24px;
        margin: 0;
        position: relative
    }

    #Vector_1 {
        --f2w-order: 0;
        width: 83.3%;
        height: 83.3%;
        position: absolute;
        top: 8.5%;
        left: 8.5%
    }

    #Heart {
        aspect-ratio: 1;
        --f2w-order: 2;
        flex-shrink: 0;
        width: 24px;
        height: 24px;
        margin: 0;
        position: relative
    }

    #Vector_2 {
        --f2w-order: 0;
        width: 91.7%;
        height: 75%;
        position: absolute;
        top: 10.4%;
        left: 6.3%
    }

    #Frame_286 {
        --f2w-order: 3;
        flex-shrink: 0;
        width: 24px;
        height: 24px;
        margin: 0;
        position: relative
    }

    #ShoppingCart {
        aspect-ratio: 1;
        --f2w-order: 0;
        width: 24px;
        height: 24px;
        position: absolute;
        top: 0;
        left: 0
    }

    #Vector_3 {
        --f2w-order: 0;
        width: 87.5%;
        height: 87.5%;
        position: absolute;
        top: 4.6%;
        left: 1.5%
    }

    #Frame_287 {
        --f2w-order: 1;
        background-color: #1c1c1c;
        border-radius: 20px;
        width: 10px;
        height: 10px;
        position: absolute;
        top: 0;
        left: calc(100% - 10px);
        overflow: hidden
    }

    #I4364_103018_241_20422 {
        text-align: center;
        overflow-wrap: break-word;
        color: #fff;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        width: 2px;
        font-family: Inter;
        font-size: 8px;
        font-weight: 500;
        line-height: 120%;
        display: inline;
        position: absolute;
        top: calc(50% - 5px);
        left: calc(50% - 1px)
    }

    #__4 {
        overflow-wrap: break-word;
        color: #fff;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Inter;
        font-size: 8px;
        font-weight: 500;
        line-height: 120%
    }

    #Frame_132 {
        display: flex;
        justify-content: center;
        --f2w-order: 2;
        border: 0 solid #f2f2f2;
        border-top-width: 1px;
        flex-shrink: 0;
        width: 100%;
        height: 52px;
        margin: 0;
        position: relative;
        overflow: hidden
    }

    #Frame_133 {
        --f2w-order: 0;
        width: 1320px;
        height: 52px;
        top: -1px;
        left: 60px;
        overflow: hidden
    }

    #Frame_134 {
        grid-column-gap: 0px;
        --f2w-order: 0;
        flex-flow: row;
        justify-content: flex-start;
        align-items: center;
        padding: 0;
        display: flex;
        position: absolute;
        top: 0;
        left: calc(50% - 422.5px);
        overflow: hidden
    }

    #Categories {
        grid-column-gap: 10px;
        --f2w-order: 0;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: center;
        align-items: center;
        height: 52px;
        margin: 0;
        padding: 16px;
        display: flex;
        position: relative;
        /*overflow: hidden*/
    }

    #Categories:hover #Frame_2085664422 {
        display: flex;
        z-index: 99;
    }

    #I4364_103018_20_28868_19_28381 {
        text-align: left;
        overflow-wrap: break-word;
        color: #1c1c1c;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__5 {
        overflow-wrap: break-word;
        color: #1c1c1c;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%
    }

    #Categories_0 {
        grid-column-gap: 10px;
        --f2w-order: 0;
        background-color: #e6f2f4;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: center;
        align-items: center;
        height: 52px;
        margin: 0;
        padding: 16px;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #I4364_103018_20_28868_2079_18248 {
        text-align: left;
        overflow-wrap: break-word;
        color: #36717e;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__6 {
        overflow-wrap: break-word;
        color: #36717e;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%
    }

    #Categories_1 {
        grid-column-gap: 10px;
        --f2w-order: 1;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: center;
        align-items: center;
        height: 52px;
        margin: 0;
        padding: 16px;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #I4364_103018_20_28869_19_28381 {
        text-align: left;
        overflow-wrap: break-word;
        color: #1c1c1c;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__7 {
        overflow-wrap: break-word;
        color: #1c1c1c;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%
    }

    #Categories_2 {
        grid-column-gap: 10px;
        --f2w-order: 1;
        background-color: #e6f2f4;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: center;
        align-items: center;
        height: 52px;
        margin: 0;
        padding: 16px;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #I4364_103018_20_28869_2079_18248 {
        text-align: left;
        overflow-wrap: break-word;
        color: #36717e;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__8 {
        overflow-wrap: break-word;
        color: #36717e;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%
    }

    #Categories_3 {
        grid-column-gap: 10px;
        --f2w-order: 2;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: center;
        align-items: center;
        height: 52px;
        margin: 0;
        padding: 16px;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #I4364_103018_20_28870_19_28381 {
        text-align: left;
        overflow-wrap: break-word;
        color: #1c1c1c;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__9 {
        overflow-wrap: break-word;
        color: #1c1c1c;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%
    }

    #Categories_4 {
        grid-column-gap: 10px;
        --f2w-order: 2;
        background-color: #e6f2f4;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: center;
        align-items: center;
        height: 52px;
        margin: 0;
        padding: 16px;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #I4364_103018_20_28870_2079_18248 {
        text-align: left;
        overflow-wrap: break-word;
        color: #36717e;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__10 {
        overflow-wrap: break-word;
        color: #36717e;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%
    }

    #Categories_5 {
        grid-column-gap: 10px;
        --f2w-order: 3;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: center;
        align-items: center;
        height: 52px;
        margin: 0;
        padding: 16px;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #I4364_103018_20_28871_19_28381 {
        text-align: left;
        overflow-wrap: break-word;
        color: #1c1c1c;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__11 {
        overflow-wrap: break-word;
        color: #1c1c1c;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%
    }

    #Categories_6 {
        grid-column-gap: 10px;
        --f2w-order: 3;
        background-color: #e6f2f4;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: center;
        align-items: center;
        height: 52px;
        margin: 0;
        padding: 16px;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #I4364_103018_20_28871_2079_18248 {
        text-align: left;
        overflow-wrap: break-word;
        color: #36717e;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__12 {
        overflow-wrap: break-word;
        color: #36717e;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%
    }

    #Categories_7 {
        grid-column-gap: 10px;
        --f2w-order: 4;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: center;
        align-items: center;
        height: 52px;
        margin: 0;
        padding: 16px;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #I4364_103018_20_28875_19_28381 {
        text-align: left;
        overflow-wrap: break-word;
        color: #1c1c1c;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__13 {
        overflow-wrap: break-word;
        color: #1c1c1c;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%
    }

    #Categories_8 {
        grid-column-gap: 10px;
        --f2w-order: 4;
        background-color: #e6f2f4;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: center;
        align-items: center;
        height: 52px;
        margin: 0;
        padding: 16px;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #I4364_103018_20_28875_2079_18248 {
        text-align: left;
        overflow-wrap: break-word;
        color: #36717e;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__14 {
        overflow-wrap: break-word;
        color: #36717e;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%
    }

    #Categories_9 {
        grid-column-gap: 10px;
        --f2w-order: 5;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: center;
        align-items: center;
        height: 52px;
        margin: 0;
        padding: 16px;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #I4364_103018_20_28872_19_28381 {
        text-align: left;
        overflow-wrap: break-word;
        color: #1c1c1c;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__15 {
        overflow-wrap: break-word;
        color: #1c1c1c;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%
    }

    #Categories_10 {
        grid-column-gap: 10px;
        --f2w-order: 5;
        background-color: #e6f2f4;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: center;
        align-items: center;
        height: 52px;
        margin: 0;
        padding: 16px;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #I4364_103018_20_28872_2079_18248 {
        text-align: left;
        overflow-wrap: break-word;
        color: #36717e;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__16 {
        overflow-wrap: break-word;
        color: #36717e;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%
    }

    #Categories_11 {
        grid-column-gap: 10px;
        --f2w-order: 6;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: center;
        align-items: center;
        height: 52px;
        margin: 0;
        padding: 16px;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #I4364_103018_20_28873_19_28381 {
        text-align: left;
        overflow-wrap: break-word;
        color: #1c1c1c;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__17 {
        overflow-wrap: break-word;
        color: #1c1c1c;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%
    }

    #Categories_12 {
        grid-column-gap: 10px;
        --f2w-order: 6;
        background-color: #e6f2f4;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: center;
        align-items: center;
        height: 52px;
        margin: 0;
        padding: 16px;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #I4364_103018_20_28873_2079_18248 {
        text-align: left;
        overflow-wrap: break-word;
        color: #36717e;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__18 {
        overflow-wrap: break-word;
        color: #36717e;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%
    }

    #Categories_13 {
        grid-column-gap: 10px;
        --f2w-order: 7;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: center;
        align-items: center;
        height: 52px;
        margin: 0;
        padding: 16px;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #I4364_103018_20_28874_19_28381 {
        text-align: left;
        overflow-wrap: break-word;
        color: #1c1c1c;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__19 {
        overflow-wrap: break-word;
        color: #1c1c1c;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%
    }

    #Categories_14 {
        grid-column-gap: 10px;
        --f2w-order: 7;
        background-color: #e6f2f4;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: center;
        align-items: center;
        height: 52px;
        margin: 0;
        padding: 16px;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #I4364_103018_20_28874_2079_18248 {
        text-align: left;
        overflow-wrap: break-word;
        color: #36717e;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__20 {
        overflow-wrap: break-word;
        color: #36717e;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%
    }

    #Frame_133_0 {
        grid-column-gap: 0px;
        --f2w-order: 3;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: center;
        align-items: start;
        width: 100%;
        height: 40px;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #Info {
        grid-column-gap: 8px;
        --f2w-order: 0;
        background-color: #000;
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
        overflow: hidden
    }

    #Medal {
        aspect-ratio: 1;
        --f2w-order: 0;
        flex-shrink: 0;
        width: 20px;
        height: 20px;
        margin: 0;
        position: relative
    }

    #Vector_4 {
        --f2w-order: 0;
        width: 70%;
        height: 100%;
        position: absolute;
        top: 2.6%;
        left: 12.6%
    }

    #I4364_103018_20_29271_20_29180 {
        text-align: left;
        overflow-wrap: break-word;
        color: #fff;
        --f2w-order: 1;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__21 {
        overflow-wrap: break-word;
        color: #fff;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%
    }

    #Info_0 {
        grid-column-gap: 8px;
        --f2w-order: 1;
        background-color: #000;
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
        overflow: hidden
    }

    #Robot {
        --f2w-order: 0;
        flex-shrink: 0;
        width: 20px;
        height: 20px;
        margin: 0;
        position: relative
    }

    #Vector_5 {
        --f2w-order: 0;
        width: 90%;
        height: 90%;
        position: absolute;
        top: -1.4%;
        left: 6.4%
    }

    #I4364_103018_20_29272_20_29180 {
        text-align: left;
        overflow-wrap: break-word;
        color: #fff;
        --f2w-order: 1;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__22 {
        overflow-wrap: break-word;
        color: #fff;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%
    }

    #Info_1 {
        grid-column-gap: 8px;
        --f2w-order: 2;
        background-color: #000;
        flex-flow: row;
        flex-grow: 1;
        flex-basis: 0;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 40px;
        margin: 0;
        padding: 8px 150px;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #ShieldCheck {
        --f2w-order: 0;
        flex-shrink: 0;
        width: 20px;
        height: 20px;
        margin: 0;
        position: relative
    }

    #Vector_6 {
        --f2w-order: 0;
        width: 80%;
        height: 80%;
        position: absolute;
        top: 13.1%;
        left: 11.5%
    }

    #I4364_103018_20_29273_20_29180 {
        text-align: left;
        overflow-wrap: break-word;
        color: #fff;
        --f2w-order: 1;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__23 {
        overflow-wrap: break-word;
        color: #fff;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%
    }

    #Hero {
        --f2w-order: 1;
        flex-shrink: 0;
        width: 100%;
        height: 578px;
        margin: 0;
        position: relative;
        overflow: hidden
    }

    #image {
        --f2w-order: 0;
        width: 1440px;
        height: 700px;
        top: calc(100% - 578px);
        left: calc(100% - 1440px);
        overflow: hidden
    }

    #__24 {
        object-fit: cover;
        border-radius: 0;
        width: 100%;
        height: 100%;
        position: absolute;
        inset: 0
    }

    #Content {
        --f2w-order: 1;
        background-image: linear-gradient(#0000 0%, #0009 100%);
        width: 1440px;
        height: 343px;
        position: absolute;
        top: calc(100% - 343px);
        left: 0;
        overflow: hidden
    }

    #Top_3_Treasures {
        text-align: center;
        overflow-wrap: break-word;
        color: #fff;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        width: max-content;
        font-family: Neue Gravica;
        font-size: 48px;
        font-weight: 600;
        line-height: 130%;
        display: inline;
        position: absolute;
        bottom: 145px;
        left: calc(50% - 281px)
    }

    #__25 {
        overflow-wrap: break-word;
        color: #fff;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 48px;
        font-weight: 600;
        line-height: 130%
    }

    #TRENDS_OF_THE_SE {
        text-align: center;
        overflow-wrap: break-word;
        color: #fff;
        --f2w-order: 1;
        -webkit-background-clip: text;
        background-clip: text;
        width: max-content;
        font-family: Neue Gravica;
        font-size: 16px;
        font-weight: 600;
        line-height: 130%;
        display: inline;
        position: absolute;
        bottom: 211px;
        left: 617px
    }

    #__26 {
        overflow-wrap: break-word;
        /* color: #fff; */
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 16px;
        font-weight: 600;
        line-height: 130%
    }

    #Button_On_Dark {
        grid-column-gap: calc(1px * var(--4));
        --f2w-order: 2;
        padding: calc(1px * var(--12)) calc(1px * var(--16));
        background-color: #fff;
        flex-flow: row;
        justify-content: center;
        align-items: center;
        width: 175px;
        display: flex;
        position: absolute;
        bottom: 73px;
        left: calc(50% - 88px);
        overflow: hidden
    }

    #Text_0 {
        grid-column-gap: 8px;
        --f2w-order: 0;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: center;
        align-items: center;
        height: 24px;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative
    }

    #I4364_103024_30_39363 {
        text-align: center;
        overflow-wrap: break-word;
        color: #1c1c1c;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 16px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__27 {
        overflow-wrap: break-word;
        color: #1c1c1c;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 16px;
        font-weight: 400;
        line-height: 130%;
    }

    #Icon_Button {
        grid-column-gap: 12px;
        -webkit-backdrop-filter: blur(4px);
        backdrop-filter: blur(4px);
        --f2w-order: 3;
        background-color: #fff3;
        border-radius: 40px;
        flex-flow: row;
        justify-content: flex-start;
        align-items: start;
        padding: 4px 8px;
        display: flex;
        position: absolute;
        bottom: 20px;
        right: 60px;
        overflow: hidden
    }

    #CaretLeft {
        aspect-ratio: 1;
        --f2w-order: 0;
        flex-shrink: 0;
        width: 24px;
        height: 24px;
        margin: 0;
        position: relative
    }

    #Vector_7 {
        --f2w-order: 0;
        width: 41.7%;
        height: 75%;
        position: absolute;
        top: 13.5%;
        left: 25.2%
    }

    #CaretRight {
        aspect-ratio: 1;
        --f2w-order: 1;
        flex-shrink: 0;
        width: 24px;
        height: 24px;
        margin: 0;
        position: relative
    }

    #Vector_8 {
        --f2w-order: 0;
        width: 41.7%;
        height: 75%;
        position: absolute;
        top: 13.5%;
        left: 31.5%
    }

    #Frame_307 {
        grid-column-gap: 8px;
        --f2w-order: 4;
        flex-flow: row;
        justify-content: flex-start;
        align-items: center;
        padding: 0;
        display: flex;
        position: absolute;
        top: 318px;
        left: 674px
    }

    #Group_3 {
        --f2w-order: 0;
        flex-shrink: 0;
        width: 12px;
        height: 12px;
        margin: 0;
        position: relative
    }

    #Ellipse_3 {
        aspect-ratio: 1;
        --f2w-order: 0;
        border: 1px solid #f2f2f2;
        border-radius: 50%;
        width: 12px;
        height: 12px;
        position: absolute;
        top: 0;
        left: 0
    }

    #Ellipse_4 {
        aspect-ratio: 1;
        --f2w-order: 1;
        background-color: #f2f2f2;
        border-radius: 50%;
        width: 8px;
        height: 8px;
        position: absolute;
        top: 2px;
        left: 2px
    }

    #Ellipse_1 {
        aspect-ratio: 1;
        --f2w-order: 1;
        background-color: #aaa;
        border-radius: 50%;
        flex-shrink: 0;
        width: 8px;
        height: 8px;
        margin: 0;
        position: relative
    }

    #Ellipse_2 {
        aspect-ratio: 1;
        --f2w-order: 2;
        background-color: #aaa;
        border-radius: 50%;
        flex-shrink: 0;
        width: 8px;
        height: 8px;
        margin: 0;
        position: relative
    }

    #Ellipse_4_0 {
        aspect-ratio: 1;
        --f2w-order: 3;
        background-color: #aaa;
        border-radius: 50%;
        flex-shrink: 0;
        width: 8px;
        height: 8px;
        margin: 0;
        position: relative
    }

    #Ellipse_5 {
        aspect-ratio: 1;
        --f2w-order: 4;
        background-color: #aaa;
        border-radius: 50%;
        flex-shrink: 0;
        width: 8px;
        height: 8px;
        margin: 0;
        position: relative
    }

    #Ellipse_6 {
        aspect-ratio: 1;
        --f2w-order: 5;
        background-color: #aaa;
        border-radius: 50%;
        flex-shrink: 0;
        width: 8px;
        height: 8px;
        margin: 0;
        position: relative
    }

    #section_2 {
        grid-row-gap: 10px;
        --f2w-order: 2;
        flex-flow: column;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: start;
        width: 100%;
        margin: 0;
        padding: 40px 60px;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #image_21 {
        aspect-ratio: 2.2;
        --f2w-order: 0;
        background-image: url(https://annalise-ejwgdmcpx3.figweb.site/cdn-cgi/imagedelivery/s-dfVpmPR-aKHmwFNwAgnQ/annalise-ejwgdmcpx3.figweb.site-a3505aedcfe5c217503a50f74cb5f7a31dfced9e/w=2142), url(https://annalise-ejwgdmcpx3.figweb.site/cdn-cgi/imagedelivery/s-dfVpmPR-aKHmwFNwAgnQ/annalise-ejwgdmcpx3.figweb.site-b2de87c401afe0290fbdf3897f25c961ab9547ec/w=2788);
        background-position: 50%;
        background-size: cover;
        flex-shrink: 0;
        width: 100%;
        height: 599px;
        margin: 0;
        position: relative
    }

    #Frame_2 {
        grid-row-gap: 40px;
        --f2w-order: 0;
        background-color: #442811;
        flex-flow: column;
        flex-grow: 1;
        flex-basis: 0;
        justify-content: flex-start;
        align-self: stretch;
        align-items: start;
        width: 100%;
        margin: 0 auto 0 0;
        padding: 269px 0 0 60px;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #Frame_296 {
        grid-row-gap: 4px;
        --f2w-order: 0;
        flex-flow: column;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: start;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative
    }

    #_4364_103042 {
        text-align: left;
        overflow-wrap: break-word;
        color: #e7e7e7;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 16px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__28 {
        overflow-wrap: break-word;
        color: #e7e7e7;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 16px;
        font-weight: 400;
        line-height: 130%
    }

    #_4364_103043 {
        text-align: left;
        overflow-wrap: break-word;
        color: #fff;
        --f2w-order: 1;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 40px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__29 {
        overflow-wrap: break-word;
        color: #fff;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 40px;
        font-weight: 400;
        line-height: 130%
    }

    #Button_On_Dark_0 {
        grid-column-gap: calc(1px * var(--4));
        --f2w-order: 1;
        padding: calc(1px * var(--12)) calc(1px * var(--16));
        background-color: #fff;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: center;
        align-items: center;
        width: 175px;
        margin: 0;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #Text_1 {
        grid-column-gap: 8px;
        --f2w-order: 0;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: center;
        align-items: center;
        height: 24px;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative
    }

    #I4364_103044_30_39363 {
        text-align: center;
        overflow-wrap: break-word;
        color: #1c1c1c;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 16px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__30 {
        overflow-wrap: break-word;
        color: #1c1c1c;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 16px;
        font-weight: 400;
        line-height: 130%
    }

    #image_1 {
        aspect-ratio: .93;
        --f2w-order: 1;
        flex-grow: 1;
        width: 100%;
        height: 706px;
        margin: 0;
        position: relative;
        overflow: hidden
    }

    #__31 {
        border-radius: 0;
        width: 100%;
        height: 100%;
        position: absolute;
        inset: 0;
        transform: translate(22.8px, 146.1px) scale(1.08, 1.42)
    }

    #section_4 {
        grid-row-gap: 20px;
        --f2w-order: 4;
        flex-flow: column;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: start;
        width: 1440px;
        margin: 0;
        padding: 40px 60px;
        display: flex;
        position: relative;
        overflow: hidden;
        width: 100%;
    }

    #Text_Label {
        grid-row-gap: 4px;
        --f2w-order: 0;
        flex-flow: column;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: start;
        width: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #_4364_103048 {
        text-align: left;
        overflow-wrap: break-word;
        color: #1c1c1c;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 24px;
        font-weight: 600;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__32 {
        overflow-wrap: break-word;
        color: #1c1c1c;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 24px;
        font-weight: 600;
        line-height: 130%
    }

    #_4364_103049 {
        text-align: left;
        overflow-wrap: break-word;
        color: #717171;
        --f2w-order: 1;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 16px;
        font-weight: 300;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__33 {
        overflow-wrap: break-word;
        color: #717171;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 16px;
        font-weight: 300;
        line-height: 130%
    }

    #Frame_11 {
        grid-column-gap: 20px;
        --f2w-order: 1;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: center;
        width: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #Frame_12 {
        grid-row-gap: 12px;
        --f2w-order: 0;
        flex-flow: column;
        flex-grow: 1;
        flex-basis: 0;
        justify-content: flex-start;
        align-items: start;
        width: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #image_0 {
        aspect-ratio: .71;
        --f2w-order: 0;
        background-image: url(https://annalise-ejwgdmcpx3.figweb.site/cdn-cgi/imagedelivery/s-dfVpmPR-aKHmwFNwAgnQ/annalise-ejwgdmcpx3.figweb.site-50c93854a360b6ec1a954a90f104d1804a16a59a/w=2140), url(https://annalise-ejwgdmcpx3.figweb.site/cdn-cgi/imagedelivery/s-dfVpmPR-aKHmwFNwAgnQ/annalise-ejwgdmcpx3.figweb.site-e6142762acbaec5d35567c9130bfd93ae69452da/w=1204);
        background-position: 0 0, 50%;
        background-repeat: no-repeat, repeat;
        background-size: auto, cover;
        flex-shrink: 0;
        width: 100%;
        height: 602px;
        margin: 0;
        position: relative
    }

    #Frame_13 {
        grid-row-gap: 4px;
        --f2w-order: 1;
        flex-flow: column;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: start;
        width: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #_4364_103054 {
        text-align: left;
        overflow-wrap: break-word;
        color: #000;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: 100%;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__34 {
        overflow-wrap: break-word;
        color: #000;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%
    }

    #_4364_103055 {
        text-align: left;
        overflow-wrap: break-word;
        color: #000;
        --f2w-order: 1;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: 100%;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 16px;
        font-weight: 600;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__35 {
        overflow-wrap: break-word;
        color: #000;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 16px;
        font-weight: 600;
        line-height: 130%
    }

    #Frame_13_0 {
        grid-row-gap: 12px;
        --f2w-order: 1;
        flex-flow: column;
        flex-grow: 1;
        flex-basis: 0;
        justify-content: flex-start;
        align-items: start;
        width: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #image_3 {
        aspect-ratio: .71;
        --f2w-order: 0;
        background-image: url(https://annalise-ejwgdmcpx3.figweb.site/cdn-cgi/imagedelivery/s-dfVpmPR-aKHmwFNwAgnQ/annalise-ejwgdmcpx3.figweb.site-8aa5945d99bbd7b93003f4b3f193b6d7e356b2f0/w=2890), url(https://annalise-ejwgdmcpx3.figweb.site/cdn-cgi/imagedelivery/s-dfVpmPR-aKHmwFNwAgnQ/annalise-ejwgdmcpx3.figweb.site-2b7a46a6e54b493fc67b1cdb312ba9a8037c5cad/w=1440);
        background-position: 50%;
        background-repeat: repeat, no-repeat;
        background-size: cover, contain;
        flex-shrink: 0;
        width: 100%;
        height: 602px;
        margin: 0;
        position: relative
    }

    #Frame_13_1 {
        grid-row-gap: 4px;
        --f2w-order: 1;
        flex-flow: column;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: start;
        width: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #_4364_103059 {
        text-align: left;
        overflow-wrap: break-word;
        color: #000;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__36 {
        overflow-wrap: break-word;
        color: #000;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%
    }

    #_4364_103060 {
        text-align: left;
        overflow-wrap: break-word;
        color: #000;
        --f2w-order: 1;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 16px;
        font-weight: 600;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__37 {
        overflow-wrap: break-word;
        color: #000;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 16px;
        font-weight: 600;
        line-height: 130%
    }

    #Frame_14 {
        grid-row-gap: 12px;
        --f2w-order: 2;
        flex-flow: column;
        flex-grow: 1;
        flex-basis: 0;
        justify-content: flex-start;
        align-items: start;
        width: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #image_4 {
        aspect-ratio: .71;
        --f2w-order: 0;
        background-color: #f4f4f6;
        background-image: url(https://annalise-ejwgdmcpx3.figweb.site/cdn-cgi/imagedelivery/s-dfVpmPR-aKHmwFNwAgnQ/annalise-ejwgdmcpx3.figweb.site-a3505aedcfe5c217503a50f74cb5f7a31dfced9e/w=2142);
        background-repeat: no-repeat;
        flex-shrink: 0;
        width: 100%;
        height: 602px;
        margin: 0;
        position: relative
    }

    #Frame_13_2 {
        grid-row-gap: 4px;
        --f2w-order: 1;
        flex-flow: column;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: start;
        width: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #_4364_103064 {
        text-align: left;
        overflow-wrap: break-word;
        color: #000;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__38 {
        overflow-wrap: break-word;
        color: #000;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%
    }

    #_4364_103065 {
        text-align: left;
        overflow-wrap: break-word;
        color: #000;
        --f2w-order: 1;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 16px;
        font-weight: 600;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__39 {
        overflow-wrap: break-word;
        color: #000;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 16px;
        font-weight: 600;
        line-height: 130%
    }

    #Icon_Button_0 {
        grid-column-gap: 10px;
        -webkit-backdrop-filter: blur(4px);
        backdrop-filter: blur(4px);
        --f2w-order: 2;
        background-color: #ffffffb3;
        flex-flow: row;
        justify-content: flex-start;
        align-items: center;
        padding: 40px 8px;
        display: flex;
        position: absolute;
        top: calc(50% - 41.5px);
        right: 60px;
        overflow: hidden
    }

    #CaretRight_0 {
        aspect-ratio: 1;
        --f2w-order: 0;
        flex-shrink: 0;
        width: 24px;
        height: 24px;
        margin: 0;
        position: relative
    }

    #Vector_9 {
        --f2w-order: 0;
        width: 41.7%;
        height: 75%;
        position: absolute;
        top: 13.5%;
        left: 31.5%
    }

    #section_8 {
        grid-row-gap: 20px;
        --f2w-order: 5;
        flex-flow: column;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: start;
        width: 1440px;
        margin: 0;
        padding: 40px 60px;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #Frame_11_0 {
        grid-row-gap: 20px;
        --f2w-order: 0;
        flex-flow: column;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: start;
        width: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #Frame_299 {
        grid-column-gap: 20px;
        --f2w-order: 0;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: flex-end;
        align-items: end;
        width: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative
    }

    #Text_Label_0 {
        grid-row-gap: 4px;
        --f2w-order: 0;
        flex-flow: column;
        flex-grow: 1;
        flex-basis: 0;
        justify-content: flex-start;
        align-items: start;
        width: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #_4364_103072 {
        text-align: left;
        overflow-wrap: break-word;
        color: #1c1c1c;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 24px;
        font-weight: 600;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__40 {
        overflow-wrap: break-word;
        color: #1c1c1c;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 24px;
        font-weight: 600;
        line-height: 130%
    }

    #_4364_103073 {
        text-align: left;
        overflow-wrap: break-word;
        color: #717171;
        --f2w-order: 1;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 16px;
        font-weight: 300;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__41 {
        overflow-wrap: break-word;
        color: #717171;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 16px;
        font-weight: 300;
        line-height: 130%
    }

    #pagination {
        grid-column-gap: 8px;
        --f2w-order: 1;
        flex-flow: row;
        flex-grow: 1;
        flex-basis: 0;
        justify-content: flex-end;
        align-items: center;
        width: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #CaretLeft_0 {
        aspect-ratio: 1;
        --f2w-order: 0;
        flex-shrink: 0;
        width: 20px;
        height: 20px;
        margin: 0;
        position: relative
    }

    #Vector_10 {
        --f2w-order: 0;
        width: 45%;
        height: 75%;
        position: absolute;
        top: 11.6%;
        left: 25.1%
    }

    #_4364_103076 {
        text-align: left;
        overflow-wrap: break-word;
        color: #717171;
        --f2w-order: 1;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 16px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__42 {
        overflow-wrap: break-word;
        color: #717171;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 16px;
        font-weight: 400;
        line-height: 130%
    }

    #CaretRight_1 {
        aspect-ratio: 1;
        --f2w-order: 2;
        flex-shrink: 0;
        width: 20px;
        height: 20px;
        margin: 0;
        position: relative
    }

    #Vector_11 {
        --f2w-order: 0;
        width: 45%;
        height: 75%;
        position: absolute;
        top: 11.6%;
        left: 31.4%
    }

    #Frame_19 {
        grid-column-gap: 20px;
        --f2w-order: 1;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: center;
        width: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #Frame_20 {
        grid-row-gap: 0px;
        --f2w-order: 0;
        flex-flow: column;
        flex-grow: 1;
        flex-basis: 0;
        justify-content: flex-start;
        align-items: start;
        width: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #image_2 {
        aspect-ratio: .72;
        --f2w-order: 0;
        flex-shrink: 0;
        width: 100%;
        height: 590px;
        margin: 0;
        position: relative;
        overflow: hidden
    }

    #__43 {
        object-fit: cover;
        border-radius: 0;
        width: 100%;
        height: 100%;
        position: absolute;
        inset: 0
    }

    #Frame_24 {
        grid-row-gap: 8px;
        --f2w-order: 1;
        flex-flow: column;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: center;
        width: 100%;
        margin: 0;
        padding: 12px 0;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #Frame_297 {
        grid-row-gap: 2px;
        --f2w-order: 0;
        flex-flow: column;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: center;
        width: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative
    }

    #_4364_103083 {
        text-align: center;
        overflow-wrap: break-word;
        color: #1c1c1c;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__44 {
        overflow-wrap: break-word;
        color: #1c1c1c;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%
    }

    #_4364_103084 {
        text-align: center;
        overflow-wrap: break-word;
        color: #1c1c1c;
        --f2w-order: 1;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 16px;
        font-weight: 600;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__45 {
        overflow-wrap: break-word;
        color: #1c1c1c;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 16px;
        font-weight: 600;
        line-height: 130%
    }

    #Frame_27 {
        grid-column-gap: 8px;
        --f2w-order: 1;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: center;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #Frame_28 {
        --f2w-order: 0;
        background-color: #3e3f41;
        border-radius: 100px;
        flex-shrink: 0;
        width: 14px;
        height: 14px;
        margin: 0;
        position: relative;
        overflow: hidden
    }

    #Frame_29 {
        --f2w-order: 1;
        background-color: #000;
        border-radius: 100px;
        flex-shrink: 0;
        width: 14px;
        height: 14px;
        margin: 0;
        position: relative;
        overflow: hidden
    }

    #Icon_Favorite {
        grid-column-gap: 10px;
        -webkit-backdrop-filter: blur(4px);
        backdrop-filter: blur(4px);
        --f2w-order: 2;
        background-color: #ffffff1a;
        border-radius: 4px;
        flex-flow: row;
        justify-content: flex-start;
        align-items: center;
        padding: 4px;
        display: flex;
        position: absolute;
        top: 16px;
        right: 15.7px;
        overflow: hidden
    }

    #HeartStraight {
        --f2w-order: 0;
        flex-shrink: 0;
        width: 32px;
        height: 32px;
        margin: 0;
        position: relative
    }

    #Vector_12 {
        --f2w-order: 0;
        width: 87.5%;
        height: 75%;
        position: absolute;
        top: 15.6%;
        left: 6.2%
    }

    #Frame_23 {
        grid-row-gap: 0px;
        --f2w-order: 1;
        flex-flow: column;
        flex-grow: 1;
        flex-basis: 0;
        justify-content: flex-start;
        align-items: start;
        width: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #image_6 {
        aspect-ratio: .72;
        --f2w-order: 0;
        flex-shrink: 0;
        width: 427.4px;
        height: 590px;
        margin: 0;
        position: relative;
        overflow: hidden
    }

    #__46 {
        object-fit: contain;
        border-radius: 0;
        width: 100%;
        height: 100%;
        position: absolute;
        inset: 0
    }

    #Icon_Favorite_0 {
        grid-column-gap: 10px;
        -webkit-backdrop-filter: blur(4px);
        backdrop-filter: blur(4px);
        --f2w-order: 1;
        background-color: #ffffff1a;
        border-radius: 4px;
        flex-flow: row;
        justify-content: flex-start;
        align-items: center;
        padding: 4px;
        display: flex;
        position: absolute;
        top: 16px;
        right: 15.3px;
        overflow: hidden
    }

    #HeartStraight_0 {
        --f2w-order: 0;
        flex-shrink: 0;
        width: 32px;
        height: 32px;
        margin: 0;
        position: relative
    }

    #Vector_13 {
        --f2w-order: 0;
        width: 87.5%;
        height: 75%;
        position: absolute;
        top: 15.6%;
        left: 6.2%
    }

    #Frame_24_0 {
        grid-row-gap: 8px;
        --f2w-order: 2;
        flex-flow: column;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: center;
        width: 100%;
        margin: 0;
        padding: 12px 0;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #Frame_297_0 {
        grid-row-gap: 2px;
        --f2w-order: 0;
        flex-flow: column;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: center;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative
    }

    #_4364_103096 {
        text-align: center;
        overflow-wrap: break-word;
        color: #1c1c1c;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__47 {
        overflow-wrap: break-word;
        color: #1c1c1c;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%
    }

    #Frame_298 {
        grid-column-gap: 8px;
        --f2w-order: 1;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: baseline;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative
    }

    #_4364_103098 {
        text-align: center;
        overflow-wrap: break-word;
        color: #36717e;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 16px;
        font-weight: 600;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__48 {
        overflow-wrap: break-word;
        color: #36717e;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 16px;
        font-weight: 600;
        line-height: 130%
    }

    #_4364_103099 {
        text-align: center;
        overflow-wrap: break-word;
        color: #aaa;
        --f2w-order: 1;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%;
        text-decoration: line-through;
        display: inline;
        position: relative
    }

    #__49 {
        overflow-wrap: break-word;
        color: #aaa;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%;
        text-decoration: line-through
    }

    #Frame_27_0 {
        grid-column-gap: 8px;
        --f2w-order: 1;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: center;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #Frame_28_0 {
        --f2w-order: 0;
        background-color: #630;
        border-radius: 100px;
        flex-shrink: 0;
        width: 14px;
        height: 14px;
        margin: 0;
        position: relative;
        overflow: hidden
    }

    #Frame_29_0 {
        --f2w-order: 1;
        background-color: red;
        border-radius: 100px;
        flex-shrink: 0;
        width: 14px;
        height: 14px;
        margin: 0;
        position: relative;
        overflow: hidden
    }

    #Frame_30 {
        --f2w-order: 2;
        background-color: #040482;
        border-radius: 100px;
        flex-shrink: 0;
        width: 14px;
        height: 14px;
        margin: 0;
        position: relative;
        overflow: hidden
    }

    #Frame_24_1 {
        grid-row-gap: 0px;
        --f2w-order: 2;
        flex-flow: column;
        flex-grow: 1;
        flex-basis: 0;
        justify-content: flex-start;
        align-items: start;
        width: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #image_7 {
        --f2w-order: 0;
        background-color: #f4f4f6;
        background-image: url(https://annalise-ejwgdmcpx3.figweb.site/cdn-cgi/imagedelivery/s-dfVpmPR-aKHmwFNwAgnQ/annalise-ejwgdmcpx3.figweb.site-28f7315f56d1cf11225053f714ab5d66e1d316b1/w=902);
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: contain;
        flex-shrink: 0;
        width: 100%;
        height: 590px;
        margin: 0;
        position: relative
    }

    #Icon_Favorite_1 {
        grid-column-gap: 10px;
        -webkit-backdrop-filter: blur(4px);
        backdrop-filter: blur(4px);
        --f2w-order: 1;
        background-color: #ffffff1a;
        border-radius: 4px;
        flex-flow: row;
        justify-content: flex-start;
        align-items: center;
        padding: 4px;
        display: flex;
        position: absolute;
        top: 16px;
        right: 16px;
        overflow: hidden
    }

    #HeartStraight_1 {
        --f2w-order: 0;
        flex-shrink: 0;
        width: 32px;
        height: 32px;
        margin: 0;
        position: relative
    }

    #Vector_14 {
        --f2w-order: 0;
        width: 87.5%;
        height: 75%;
        position: absolute;
        top: 15.6%;
        left: 6.2%
    }

    #Frame_25 {
        grid-row-gap: 8px;
        --f2w-order: 2;
        flex-flow: column;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: center;
        width: 100%;
        margin: 0;
        padding: 12px 0;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #Frame_297_1 {
        grid-row-gap: 2px;
        --f2w-order: 0;
        flex-flow: column;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: center;
        width: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative
    }

    #_4364_103110 {
        text-align: center;
        overflow-wrap: break-word;
        color: #1c1c1c;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__50 {
        overflow-wrap: break-word;
        color: #1c1c1c;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%
    }

    #_4364_103111 {
        text-align: center;
        overflow-wrap: break-word;
        color: #1c1c1c;
        --f2w-order: 1;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 16px;
        font-weight: 600;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__51 {
        overflow-wrap: break-word;
        color: #1c1c1c;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 16px;
        font-weight: 600;
        line-height: 130%
    }

    #Frame_298_0 {
        grid-column-gap: 8px;
        --f2w-order: 1;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: center;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #Frame_28_1 {
        --f2w-order: 0;
        background-color: #e1b6c1;
        border-radius: 100px;
        flex-shrink: 0;
        width: 14px;
        height: 14px;
        margin: 0;
        position: relative;
        overflow: hidden
    }

    #Frame_29_1 {
        --f2w-order: 1;
        background-color: green;
        border-radius: 100px;
        flex-shrink: 0;
        width: 14px;
        height: 14px;
        margin: 0;
        position: relative;
        overflow: hidden
    }

    #Frame_30_0 {
        --f2w-order: 2;
        background-color: #e1c1cb;
        border-radius: 100px;
        flex-shrink: 0;
        width: 14px;
        height: 14px;
        margin: 0;
        position: relative;
        overflow: hidden
    }

    #Frame_31 {
        --f2w-order: 3;
        background-color: #000;
        border-radius: 100px;
        flex-shrink: 0;
        width: 14px;
        height: 14px;
        margin: 0;
        position: relative;
        overflow: hidden
    }

    #Frame_32 {
        grid-row-gap: 10px;
        --f2w-order: 4;
        border-radius: 100px;
        flex-flow: column;
        flex-shrink: 0;
        justify-content: center;
        align-items: center;
        width: 14px;
        height: 14px;
        margin: 0;
        padding: 2px 1px 0;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #_4364_103118 {
        text-align: center;
        overflow-wrap: break-word;
        color: #8e8e8e;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: 100%;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 10px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__52 {
        overflow-wrap: break-word;
        color: #8e8e8e;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 10px;
        font-weight: 400;
        line-height: 130%
    }

    #Icon_Button_1 {
        grid-column-gap: 10px;
        -webkit-backdrop-filter: blur(4px);
        backdrop-filter: blur(4px);
        --f2w-order: 1;
        background-color: #ffffffb3;
        flex-flow: row;
        justify-content: flex-start;
        align-items: center;
        padding: 40px 8px;
        display: flex;
        position: absolute;
        top: calc(50% - 56.5px);
        right: 60px;
        overflow: hidden
    }

    #CaretRight_2 {
        aspect-ratio: 1;
        --f2w-order: 0;
        flex-shrink: 0;
        width: 24px;
        height: 24px;
        margin: 0;
        position: relative
    }

    #Vector_15 {
        --f2w-order: 0;
        width: 41.7%;
        height: 75%;
        position: absolute;
        top: 13.5%;
        left: 31.5%
    }

    #section_9 {
        grid-row-gap: 20px;
        --f2w-order: 6;
        flex-flow: column;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: start;
        width: 1440px;
        margin: 0;
        padding: 40px 60px;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #Text_Label_1 {
        grid-row-gap: 4px;
        --f2w-order: 0;
        flex-flow: column;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: start;
        width: 1320px;
        height: 56px;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #_4364_103123 {
        text-align: left;
        overflow-wrap: break-word;
        color: #1c1c1c;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 24px;
        font-weight: 600;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__53 {
        overflow-wrap: break-word;
        color: #1c1c1c;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 24px;
        font-weight: 600;
        line-height: 130%
    }

    #_4364_103124 {
        text-align: left;
        overflow-wrap: break-word;
        color: #717171;
        --f2w-order: 1;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 16px;
        font-weight: 300;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__54 {
        overflow-wrap: break-word;
        color: #717171;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 16px;
        font-weight: 300;
        line-height: 130%
    }

    #Frame_20_0 {
        grid-column-gap: 20px;
        --f2w-order: 1;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: center;
        width: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #Frame_20_1 {
        grid-row-gap: 12px;
        --f2w-order: 0;
        flex-flow: column;
        flex-grow: 1;
        flex-basis: 0;
        justify-content: flex-start;
        align-items: start;
        width: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #Group_1000006080 {
        --f2w-order: 0;
        flex-shrink: 0;
        width: 100%;
        height: 590.3px;
        margin: 0;
        position: relative
    }

    #image_5 {
        aspect-ratio: .72;
        --f2w-order: 0;
        width: 426.3px;
        height: 590px;
        position: absolute;
        top: 0;
        left: 0;
        overflow: hidden
    }

    #__55 {
        object-fit: cover;
        border-radius: 0;
        width: 100%;
        height: 100%;
        position: absolute;
        inset: 0
    }

    #image_8 {
        --f2w-order: 1;
        background-color: #0000004d;
        width: 100%;
        height: 590px;
        position: absolute;
        top: .3px;
        left: .3px
    }

    #Frame_335 {
        aspect-ratio: 1;
        --f2w-order: 2;
        width: 199.8px;
        height: 200px;
        position: absolute;
        top: calc(50% - 99.9px);
        left: calc(50% - 99.4px);
        overflow: hidden
    }

    #connexcel_ltd_maxtec_solutions_philippines_inc_business_northwest_insurance_network_levis_logo_0c5c2ffc3baaa8e7401a4604d9718b79_1 {
        aspect-ratio: 1;
        --f2w-order: 0;
        width: 100.1%;
        height: 100%;
        position: absolute;
        top: -.2%;
        left: .8%;
        overflow: hidden
    }

    #__56 {
        object-fit: cover;
        border-radius: 0;
        width: 100%;
        height: 100%;
        position: absolute;
        inset: 0
    }

    #Frame_23_0 {
        grid-row-gap: 12px;
        --f2w-order: 1;
        flex-flow: column;
        flex-grow: 1;
        flex-basis: 0;
        justify-content: flex-start;
        align-items: start;
        width: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #Group_1000006079 {
        --f2w-order: 0;
        flex-shrink: 0;
        width: 100%;
        height: 590.5px;
        margin: 0;
        position: relative
    }

    #image_9 {
        aspect-ratio: .72;
        --f2w-order: 0;
        width: 100%;
        height: 590px;
        position: absolute;
        top: .5px;
        left: .3px;
        overflow: hidden
    }

    #__57 {
        object-fit: cover;
        border-radius: 0;
        width: 100%;
        height: 100%;
        position: absolute;
        inset: 0
    }

    #image_10 {
        --f2w-order: 1;
        background-color: #0000004d;
        width: 426.7px;
        height: 590px;
        position: absolute;
        top: 0;
        left: 0
    }

    #Frame_335_0 {
        aspect-ratio: 1;
        --f2w-order: 2;
        width: 199.8px;
        height: 200px;
        position: absolute;
        top: calc(50% - 99.9px);
        left: calc(50% - 99.6px);
        overflow: hidden
    }

    #image_11 {
        aspect-ratio: 1;
        mix-blend-mode: screen;
        --f2w-order: 0;
        width: 100%;
        height: 99.5%;
        position: absolute;
        top: 0;
        left: .5%;
        overflow: hidden
    }

    #__58 {
        object-fit: contain;
        border-radius: 0;
        width: 100%;
        height: 100%;
        position: absolute;
        inset: 0
    }

    #Frame_24_2 {
        grid-row-gap: 12px;
        --f2w-order: 2;
        flex-flow: column;
        flex-grow: 1;
        flex-basis: 0;
        justify-content: flex-start;
        align-items: start;
        width: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #Group_1000006078 {
        --f2w-order: 0;
        flex-shrink: 0;
        width: 100%;
        height: 590px;
        margin: 0;
        position: relative
    }

    #image_12 {
        --f2w-order: 0;
        width: 426.7px;
        height: 590px;
        position: absolute;
        top: 0;
        left: 0;
        overflow: hidden
    }

    #__59 {
        object-fit: cover;
        border-radius: 0;
        width: 100%;
        height: 100%;
        position: absolute;
        inset: 0
    }

    #image_13 {
        --f2w-order: 1;
        background-color: #0000004d;
        width: 426.7px;
        height: 590px;
        position: absolute;
        top: 0;
        left: 0
    }

    #Frame_336 {
        aspect-ratio: 1;
        --f2w-order: 2;
        width: 200px;
        height: 200px;
        position: absolute;
        top: calc(50% - 100.2px);
        left: calc(50% - 99.7px);
        overflow: hidden
    }

    #Group_335 {
        aspect-ratio: 1.05;
        --f2w-order: 0;
        width: 201px;
        height: 192.1px;
        position: absolute;
        top: calc(50% - 96px);
        left: calc(50% - 100.5px)
    }

    #Rectangle_34624271 {
        mask-type: alpha;
        --f2w-order: 0;
        background-color: #fff;
        width: 217.9px;
        height: 226.2px;
        position: absolute;
        top: calc(50% - 113.1px);
        left: calc(50% - 108.9px);
        -webkit-mask-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAxLjA0Mjk2ODc1IiBoZWlnaHQ9IjE5Mi4wNjU1MzY0OTkwMjM0NCIgdmlld0JveD0iMCAwIDIwMS4wNDI5Njg3NSAxOTIuMDY1NTM2NDk5MDIzNDQiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIGNsYXNzPSJwb2ludGVyLWV2ZW50cy1ub25lIiBzdHlsZT0ibGVmdDogY2FsYygtMTAwLjVweCArIDUwJSk7dG9wOiBjYWxjKC05NnB4ICsgNTAlKTthc3BlY3QtcmF0aW86IDEuMDU7d2lkdGg6IDIwMXB4O2hlaWdodDogMTkyLjFweDsiPjxnIGlkPSJtYXNrXzQzNjRfMTAzMTQ0IiBtYXNrVW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4PSIwIiB5PSIwIiBzdHlsZT0ibWFzay10eXBlOiBhbHBoYTsiPjxwYXRoIGQ9Ik0wIDAgTDIwMS4wNDMgMCBMMjAxLjA0MyAxOTIuMDY2IEwwIDE5Mi4wNjYgTDAgMCBaIiBzdHlsZT0iZmlsbC1ydWxlOiBub256ZXJvO2ZpbGw6IHVybCgjcGF0dGVybjBfNDM2NF8xMDMxNDQpOyIgLz48L2c+PGRlZnM+PGltYWdlIGhyZWY9ImNhbGxzaXRlOi8vMTE2NyIgaWQ9ImltYWdlMF80MzY0XzEwMzE0NCI+PC9pbWFnZT48cGF0dGVybiB3aWR0aD0yMDEuMDQyOTY4NzUgaGVpZ2h0PTE5Mi4wNjU1MzY0OTkwMjM0NCBwYXR0ZXJuVW5pdHM9InVzZXJTcGFjZU9uVXNlIiBpZD0icGF0dGVybjBfNDM2NF8xMDMxNDQiPjx1c2UgaHJlZj0iI2ltYWdlMF80MzY0XzEwMzE0NCIgdHJhbnNmb3JtPSJtYXRyaXgoMC44ODEwMzQ1OTk5Mjc4MDQxIDAgMCAwLjg4MTAzNDU3MTA5NjQzNzggLTE0OC4zNzA3OTAxMDQ2MDQ2NSAwKSI+PC91c2U+PC9wYXR0ZXJuPjwvZGVmcz48L3N2Zz4=);
        mask-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAxLjA0Mjk2ODc1IiBoZWlnaHQ9IjE5Mi4wNjU1MzY0OTkwMjM0NCIgdmlld0JveD0iMCAwIDIwMS4wNDI5Njg3NSAxOTIuMDY1NTM2NDk5MDIzNDQiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIGNsYXNzPSJwb2ludGVyLWV2ZW50cy1ub25lIiBzdHlsZT0ibGVmdDogY2FsYygtMTAwLjVweCArIDUwJSk7dG9wOiBjYWxjKC05NnB4ICsgNTAlKTthc3BlY3QtcmF0aW86IDEuMDU7d2lkdGg6IDIwMXB4O2hlaWdodDogMTkyLjFweDsiPjxnIGlkPSJtYXNrXzQzNjRfMTAzMTQ0IiBtYXNrVW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4PSIwIiB5PSIwIiBzdHlsZT0ibWFzay10eXBlOiBhbHBoYTsiPjxwYXRoIGQ9Ik0wIDAgTDIwMS4wNDMgMCBMMjAxLjA0MyAxOTIuMDY2IEwwIDE5Mi4wNjYgTDAgMCBaIiBzdHlsZT0iZmlsbC1ydWxlOiBub256ZXJvO2ZpbGw6IHVybCgjcGF0dGVybjBfNDM2NF8xMDMxNDQpOyIgLz48L2c+PGRlZnM+PGltYWdlIGhyZWY9ImNhbGxzaXRlOi8vMTE2NyIgaWQ9ImltYWdlMF80MzY0XzEwMzE0NCI+PC9pbWFnZT48cGF0dGVybiB3aWR0aD0yMDEuMDQyOTY4NzUgaGVpZ2h0PTE5Mi4wNjU1MzY0OTkwMjM0NCBwYXR0ZXJuVW5pdHM9InVzZXJTcGFjZU9uVXNlIiBpZD0icGF0dGVybjBfNDM2NF8xMDMxNDQiPjx1c2UgaHJlZj0iI2ltYWdlMF80MzY0XzEwMzE0NCIgdHJhbnNmb3JtPSJtYXRyaXgoMC44ODEwMzQ1OTk5Mjc4MDQxIDAgMCAwLjg4MTAzNDU3MTA5NjQzNzggLTE0OC4zNzA3OTAxMDQ2MDQ2NSAwKSI+PC91c2U+PC9wYXR0ZXJuPjwvZGVmcz48L3N2Zz4=);
        -webkit-mask-position: 8.4px 17.1px;
        mask-position: 8.4px 17.1px;
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat
    }

    #Footer {
        grid-row-gap: 0px;
        --f2w-order: 7;
        background-color: #fff;
        flex-flow: column;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: start;
        width: 1440px;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #Frame_133_1 {
        grid-column-gap: 0px;
        --f2w-order: 0;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: center;
        align-items: start;
        width: 100%;
        height: 40px;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #Info_2 {
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
        overflow: hidden
    }

    #WF {
        aspect-ratio: 1;
        --f2w-order: 0;
        flex-shrink: 0;
        width: 20px;
        height: 20px;
        margin: 0;
        position: relative;
        overflow: hidden
    }

    #Group {
        --f2w-order: 0;
        width: 100%;
        height: 95%;
        position: absolute;
        top: .3%;
        left: 2.3%
    }

    #I4364_103174_91_7803_20_29180 {
        text-align: left;
        overflow-wrap: break-word;
        color: #fff;
        --f2w-order: 1;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__60 {
        overflow-wrap: break-word;
        color: #fff;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%
    }

    #Info_3 {
        grid-column-gap: 8px;
        --f2w-order: 1;
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
        overflow: hidden
    }

    #WF_0 {
        --f2w-order: 0;
        flex-shrink: 0;
        width: 20px;
        height: 20px;
        margin: 0;
        position: relative;
        overflow: hidden
    }

    #Vector_16 {
        --f2w-order: 0;
        width: 100%;
        height: calc(100% - 3px);
        position: absolute;
        top: 2px;
        left: -.5px
    }

    #I4364_103174_91_7804_20_29180 {
        text-align: left;
        overflow-wrap: break-word;
        color: #fff;
        --f2w-order: 1;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__61 {
        overflow-wrap: break-word;
        color: #fff;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%
    }

    #Info_4 {
        grid-column-gap: 8px;
        --f2w-order: 2;
        background-color: #36717e;
        flex-flow: row;
        flex-grow: 1;
        flex-basis: 0;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 40px;
        margin: 0;
        padding: 8px 150px;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #WF_1 {
        aspect-ratio: 1;
        --f2w-order: 0;
        flex-shrink: 0;
        width: 20px;
        height: 20px;
        margin: 0;
        position: relative;
        overflow: hidden
    }

    #Vector_17 {
        --f2w-order: 0;
        width: 100%;
        height: 105%;
        position: absolute;
        top: -2%;
        left: .3%
    }

    #I4364_103174_91_7805_20_29180 {
        text-align: left;
        overflow-wrap: break-word;
        color: #fff;
        --f2w-order: 1;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__62 {
        overflow-wrap: break-word;
        color: #fff;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%
    }

    #Frame_39 {
        grid-row-gap: 10px;
        --f2w-order: 1;
        border: 0 solid #e7e7e7;
        border-bottom-width: 1px;
        flex-flow: column;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: start;
        width: 100%;
        margin: 0;
        padding: 40px 240px 39px;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #Frame_40 {
        grid-row-gap: 40px;
        --f2w-order: 0;
        flex-flow: column;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: end;
        width: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #Frame_303 {
        grid-column-gap: 160px;
        --f2w-order: 0;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: start;
        width: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative
    }

    #Frame_290 {
        grid-row-gap: 4px;
        --f2w-order: 0;
        flex-flow: column;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: center;
        width: 254px;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative
    }

    #I4364_103174_91_7644 {
        text-align: center;
        overflow-wrap: break-word;
        color: #1c1c1c;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: 100%;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 24px;
        font-weight: 600;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__63 {
        overflow-wrap: break-word;
        color: #1c1c1c;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 24px;
        font-weight: 600;
        line-height: 130%
    }

    #I4364_103174_91_7645 {
        text-align: center;
        overflow-wrap: break-word;
        color: #1c1c1c;
        --f2w-order: 1;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 50px;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%;
        display: inline-flex;
        position: relative
    }

    #__64 {
        overflow-wrap: break-word;
        color: #1c1c1c;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%
    }

    #Frame_302 {
        grid-row-gap: 24px;
        --f2w-order: 1;
        flex-flow: column;
        flex-grow: 1;
        flex-basis: 0;
        justify-content: flex-start;
        align-items: start;
        width: 100%;
        margin: 0;
        padding: 8px 0;
        display: flex;
        position: relative
    }

    #Frame_314 {
        grid-column-gap: 24px;
        --f2w-order: 0;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: end;
        width: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative
    }

    #Dropdown {
        grid-row-gap: calc(1px * var(--4));
        --f2w-order: 0;
        padding: calc(1px * var(--0));
        flex-flow: column;
        flex-grow: 1;
        flex-basis: 0;
        justify-content: center;
        align-items: start;
        width: 100%;
        margin: 0;
        display: flex;
        position: relative
    }

    #Container {
        grid-column-gap: 8px;
        --f2w-order: 0;
        padding: calc(-1px + calc(1px * var(--16)));
        background-color: #fff;
        border: 1px solid #aaa;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: center;
        width: 100%;
        height: 56px;
        margin: 0;
        display: flex;
        position: relative
    }

    #Label_Content {
        grid-column-gap: 2px;
        --f2w-order: 0;
        flex-flow: row;
        flex-grow: 1;
        flex-basis: 0;
        justify-content: flex-start;
        align-items: center;
        width: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative
    }

    #Name {
        text-align: left;
        overflow-wrap: break-word;
        color: #aaa;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 300;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__65 {
        overflow-wrap: break-word;
        color: #aaa;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 300;
        line-height: 130%
    }

    #Button_On_White_0 {
        grid-column-gap: calc(1px * var(--4));
        --f2w-order: 1;
        background-color: #1c1c1c;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: center;
        align-items: center;
        height: 56px;
        margin: 0;
        padding: 16px 20px;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #Text_2 {
        grid-column-gap: 8px;
        --f2w-order: 0;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: center;
        align-items: center;
        height: 24px;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative
    }

    #I4364_103174_91_7823_183_14140 {
        text-align: center;
        overflow-wrap: break-word;
        color: #fff;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 18px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__66 {
        overflow-wrap: break-word;
        color: #fff;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 18px;
        font-weight: 400;
        line-height: 130%
    }

    #Frame_43 {
        grid-column-gap: 24px;
        --f2w-order: 1;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: start;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #Radio_Text {
        grid-column-gap: 8px;
        --f2w-order: 0;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: center;
        height: 21px;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative
    }

    #Radio {
        --f2w-order: 0;
        flex-shrink: 0;
        width: 20px;
        height: 20px;
        margin: 0;
        position: relative
    }

    #Ellipse_2748 {
        aspect-ratio: 1;
        --f2w-order: 0;
        background-color: #1c1c1c;
        border-radius: 50%;
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0
    }

    #Ellipse_2749 {
        aspect-ratio: 1;
        --f2w-order: 1;
        background-color: #fff;
        border-radius: 50%;
        width: 50%;
        height: 50%;
        position: absolute;
        top: 25%;
        left: 25%
    }

    #Text_3 {
        text-align: left;
        overflow-wrap: break-word;
        color: var(--G-Color-Neutral-Neutral-90);
        --f2w-order: 1;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 16px;
        font-weight: 300;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__67 {
        overflow-wrap: break-word;
        color: var(--G-Color-Neutral-Neutral-90);
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 16px;
        font-weight: 300;
        line-height: 130%
    }

    #Radio_Text_0 {
        grid-column-gap: 8px;
        --f2w-order: 1;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: center;
        height: 21px;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative
    }

    #Radio_0 {
        --f2w-order: 0;
        background-color: #fff;
        border: 1px solid #c6c6c6;
        border-radius: 50px;
        flex-shrink: 0;
        width: 20px;
        height: 20px;
        margin: 0;
        position: relative
    }

    #Text_4 {
        text-align: left;
        overflow-wrap: break-word;
        color: var(--G-Color-Neutral-Neutral-90);
        --f2w-order: 1;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 16px;
        font-weight: 300;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__68 {
        overflow-wrap: break-word;
        color: var(--G-Color-Neutral-Neutral-90);
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 16px;
        font-weight: 300;
        line-height: 130%
    }

    #I4364_103174_91_7664 {
        text-align: center;
        overflow-wrap: break-word;
        color: #aaa;
        --f2w-order: 1;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: 100%;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__69 {
        overflow-wrap: break-word;
        color: #aaa;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%
    }

    #Frame_49 {
        grid-row-gap: 40px;
        --f2w-order: 2;
        border: 0 solid #e7e7e7;
        border-bottom-width: 1px;
        flex-flow: column;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: center;
        width: 100%;
        margin: 0;
        padding: 40px 240px 39px;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #Frame_292 {
        grid-row-gap: 20px;
        --f2w-order: 0;
        flex-flow: column;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: start;
        width: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative
    }

    #I4364_103174_91_7668 {
        text-align: left;
        overflow-wrap: break-word;
        color: #1c1c1c;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: 100%;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__70 {
        overflow-wrap: break-word;
        color: #1c1c1c;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%
    }

    #Frame_52 {
        grid-column-gap: 0px;
        --f2w-order: 1;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: center;
        align-items: start;
        width: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #Frame_294 {
        grid-row-gap: 16px;
        --f2w-order: 0;
        flex-flow: column;
        flex-grow: 1;
        flex-basis: 0;
        justify-content: flex-start;
        align-items: start;
        width: 100%;
        margin: 0 auto 0 0;
        padding: 0;
        display: flex;
        position: relative
    }

    #I4364_103174_91_7673 {
        text-align: left;
        overflow-wrap: break-word;
        color: #8e8e8e;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: 100%;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__71 {
        overflow-wrap: break-word;
        color: #8e8e8e;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%
    }

    #I4364_103174_91_7675 {
        text-align: left;
        overflow-wrap: break-word;
        color: #8e8e8e;
        --f2w-order: 1;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: 100%;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__72 {
        overflow-wrap: break-word;
        color: #8e8e8e;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%
    }

    #I4364_103174_91_7677 {
        text-align: left;
        overflow-wrap: break-word;
        color: #8e8e8e;
        --f2w-order: 2;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: 100%;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__73 {
        overflow-wrap: break-word;
        color: #8e8e8e;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%
    }

    #I4364_103174_91_7679 {
        text-align: left;
        overflow-wrap: break-word;
        color: #8e8e8e;
        --f2w-order: 3;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: 100%;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__74 {
        overflow-wrap: break-word;
        color: #8e8e8e;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%
    }

    #I4364_103174_91_7681 {
        text-align: left;
        overflow-wrap: break-word;
        color: #8e8e8e;
        --f2w-order: 4;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: 100%;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__75 {
        overflow-wrap: break-word;
        color: #8e8e8e;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%
    }

    #Frame_295 {
        grid-row-gap: 16px;
        --f2w-order: 1;
        flex-flow: column;
        flex-grow: 1;
        flex-basis: 0;
        justify-content: flex-start;
        align-items: start;
        width: 100%;
        margin: 0 auto 0 0;
        padding: 0;
        display: flex;
        position: relative
    }

    #I4364_103174_91_7868 {
        text-align: left;
        overflow-wrap: break-word;
        color: #8e8e8e;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: 100%;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__76 {
        overflow-wrap: break-word;
        color: #8e8e8e;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%
    }

    #I4364_103174_91_7869 {
        text-align: left;
        overflow-wrap: break-word;
        color: #8e8e8e;
        --f2w-order: 1;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: 100%;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__77 {
        overflow-wrap: break-word;
        color: #8e8e8e;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%
    }

    #I4364_103174_91_7870 {
        text-align: left;
        overflow-wrap: break-word;
        color: #8e8e8e;
        --f2w-order: 2;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: 100%;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__78 {
        overflow-wrap: break-word;
        color: #8e8e8e;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%
    }

    #I4364_103174_91_7871 {
        text-align: left;
        overflow-wrap: break-word;
        color: #8e8e8e;
        --f2w-order: 3;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: 100%;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__79 {
        overflow-wrap: break-word;
        color: #8e8e8e;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%
    }

    #I4364_103174_91_7872 {
        text-align: left;
        overflow-wrap: break-word;
        color: #8e8e8e;
        --f2w-order: 4;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: 100%;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__80 {
        overflow-wrap: break-word;
        color: #8e8e8e;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%
    }

    #Frame_296_0 {
        grid-row-gap: 16px;
        --f2w-order: 2;
        flex-flow: column;
        flex-grow: 1;
        flex-basis: 0;
        justify-content: flex-start;
        align-items: start;
        width: 100%;
        margin: 0 auto 0 0;
        padding: 0;
        display: flex;
        position: relative
    }

    #I4364_103174_91_7875 {
        text-align: left;
        overflow-wrap: break-word;
        color: #8e8e8e;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: 100%;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__81 {
        overflow-wrap: break-word;
        color: #8e8e8e;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%
    }

    #I4364_103174_91_7876 {
        text-align: left;
        overflow-wrap: break-word;
        color: #8e8e8e;
        --f2w-order: 1;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: 100%;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__82 {
        overflow-wrap: break-word;
        color: #8e8e8e;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%
    }

    #I4364_103174_91_7877 {
        text-align: left;
        overflow-wrap: break-word;
        color: #8e8e8e;
        --f2w-order: 2;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: 100%;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__83 {
        overflow-wrap: break-word;
        color: #8e8e8e;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%
    }

    #I4364_103174_91_7878 {
        text-align: left;
        overflow-wrap: break-word;
        color: #8e8e8e;
        --f2w-order: 3;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: 100%;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__84 {
        overflow-wrap: break-word;
        color: #8e8e8e;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%
    }

    #I4364_103174_91_7879 {
        text-align: left;
        overflow-wrap: break-word;
        color: #8e8e8e;
        --f2w-order: 4;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: 100%;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__85 {
        overflow-wrap: break-word;
        color: #8e8e8e;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%
    }

    #Frame_297_2 {
        grid-row-gap: 16px;
        --f2w-order: 3;
        flex-flow: column;
        flex-grow: 1;
        flex-basis: 0;
        justify-content: flex-start;
        align-items: start;
        width: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative
    }

    #I4364_103174_91_7882 {
        text-align: left;
        overflow-wrap: break-word;
        color: #8e8e8e;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: 100%;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__86 {
        overflow-wrap: break-word;
        color: #8e8e8e;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%
    }

    #I4364_103174_91_7883 {
        text-align: left;
        overflow-wrap: break-word;
        color: #8e8e8e;
        --f2w-order: 1;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: 100%;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__87 {
        overflow-wrap: break-word;
        color: #8e8e8e;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%
    }

    #I4364_103174_91_7884 {
        text-align: left;
        overflow-wrap: break-word;
        color: #8e8e8e;
        --f2w-order: 2;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: 100%;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__88 {
        overflow-wrap: break-word;
        color: #8e8e8e;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%
    }

    #I4364_103174_91_7885 {
        text-align: left;
        overflow-wrap: break-word;
        color: #8e8e8e;
        --f2w-order: 3;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: 100%;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__89 {
        overflow-wrap: break-word;
        color: #8e8e8e;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%
    }

    #I4364_103174_91_7886 {
        text-align: left;
        overflow-wrap: break-word;
        color: #8e8e8e;
        --f2w-order: 4;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: 100%;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__90 {
        overflow-wrap: break-word;
        color: #8e8e8e;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%
    }

    #Frame_293 {
        grid-row-gap: 20px;
        --f2w-order: 1;
        flex-flow: column;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: start;
        width: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative
    }

    #I4364_103174_91_7670 {
        text-align: left;
        overflow-wrap: break-word;
        color: #1c1c1c;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: 100%;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__91 {
        overflow-wrap: break-word;
        color: #1c1c1c;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%
    }

    #Frame_54 {
        grid-column-gap: 0px;
        --f2w-order: 1;
        flex-flow: wrap;
        flex-shrink: 0;
        place-content: start flex-start;
        align-items: start;
        row-gap: 16px;
        width: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #Frame_298_1 {
        grid-row-gap: 16px;
        --f2w-order: 0;
        flex-flow: column;
        flex-grow: 1;
        flex-basis: 0;
        justify-content: flex-start;
        align-items: start;
        width: 100%;
        margin: 0 auto 0 0;
        padding: 0;
        display: flex;
        position: relative
    }

    #I4364_103174_91_7714 {
        text-align: left;
        overflow-wrap: break-word;
        color: #8e8e8e;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: 100%;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__92 {
        overflow-wrap: break-word;
        color: #8e8e8e;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%
    }

    #I4364_103174_91_7726 {
        text-align: left;
        overflow-wrap: break-word;
        color: #8e8e8e;
        --f2w-order: 1;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: 100%;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__93 {
        overflow-wrap: break-word;
        color: #8e8e8e;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%
    }

    #I4364_103174_91_7738 {
        text-align: left;
        overflow-wrap: break-word;
        color: #8e8e8e;
        --f2w-order: 2;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: 100%;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__94 {
        overflow-wrap: break-word;
        color: #8e8e8e;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%
    }

    #I4364_103174_91_7750 {
        text-align: left;
        overflow-wrap: break-word;
        color: #8e8e8e;
        --f2w-order: 3;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: 100%;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__95 {
        overflow-wrap: break-word;
        color: #8e8e8e;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%
    }

    #Frame_299_0 {
        grid-row-gap: 16px;
        --f2w-order: 1;
        flex-flow: column;
        flex-grow: 1;
        flex-basis: 0;
        justify-content: flex-start;
        align-items: start;
        width: 100%;
        margin: 0 auto 0 0;
        padding: 0;
        display: flex;
        position: relative
    }

    #I4364_103174_91_7890 {
        text-align: left;
        overflow-wrap: break-word;
        color: #8e8e8e;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: 100%;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__96 {
        overflow-wrap: break-word;
        color: #8e8e8e;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%
    }

    #I4364_103174_91_7891 {
        text-align: left;
        overflow-wrap: break-word;
        color: #8e8e8e;
        --f2w-order: 1;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: 100%;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__97 {
        overflow-wrap: break-word;
        color: #8e8e8e;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%
    }

    #I4364_103174_91_7892 {
        text-align: left;
        overflow-wrap: break-word;
        color: #8e8e8e;
        --f2w-order: 2;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: 100%;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__98 {
        overflow-wrap: break-word;
        color: #8e8e8e;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%
    }

    #I4364_103174_91_7893 {
        text-align: left;
        overflow-wrap: break-word;
        color: #8e8e8e;
        --f2w-order: 3;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: 100%;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__99 {
        overflow-wrap: break-word;
        color: #8e8e8e;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%
    }

    #Frame_300 {
        grid-row-gap: 16px;
        --f2w-order: 2;
        flex-flow: column;
        flex-grow: 1;
        flex-basis: 0;
        justify-content: flex-start;
        align-items: start;
        width: 100%;
        margin: 0 auto 0 0;
        padding: 0;
        display: flex;
        position: relative
    }

    #I4364_103174_91_7896 {
        text-align: left;
        overflow-wrap: break-word;
        color: #8e8e8e;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: 100%;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__100 {
        overflow-wrap: break-word;
        color: #8e8e8e;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%
    }

    #I4364_103174_91_7897 {
        text-align: left;
        overflow-wrap: break-word;
        color: #8e8e8e;
        --f2w-order: 1;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: 100%;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__101 {
        overflow-wrap: break-word;
        color: #8e8e8e;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%
    }

    #I4364_103174_91_7898 {
        text-align: left;
        overflow-wrap: break-word;
        color: #8e8e8e;
        --f2w-order: 2;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: 100%;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__102 {
        overflow-wrap: break-word;
        color: #8e8e8e;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%
    }

    #I4364_103174_91_7899 {
        text-align: left;
        overflow-wrap: break-word;
        color: #8e8e8e;
        --f2w-order: 3;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: 100%;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__103 {
        overflow-wrap: break-word;
        color: #8e8e8e;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%
    }

    #Frame_301 {
        grid-row-gap: 16px;
        --f2w-order: 3;
        flex-flow: column;
        flex-grow: 1;
        flex-basis: 0;
        justify-content: flex-start;
        align-items: start;
        width: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative
    }

    #I4364_103174_91_7902 {
        text-align: left;
        overflow-wrap: break-word;
        color: #8e8e8e;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: 100%;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__104 {
        overflow-wrap: break-word;
        color: #8e8e8e;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%
    }

    #I4364_103174_91_7903 {
        text-align: left;
        overflow-wrap: break-word;
        color: #8e8e8e;
        --f2w-order: 1;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: 100%;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__105 {
        overflow-wrap: break-word;
        color: #8e8e8e;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%
    }

    #I4364_103174_91_7904 {
        text-align: left;
        overflow-wrap: break-word;
        color: #8e8e8e;
        --f2w-order: 2;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: 100%;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__106 {
        overflow-wrap: break-word;
        color: #8e8e8e;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%
    }

    #I4364_103174_91_7905 {
        text-align: left;
        overflow-wrap: break-word;
        color: #8e8e8e;
        --f2w-order: 3;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: 100%;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__107 {
        overflow-wrap: break-word;
        color: #8e8e8e;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%
    }

    #Frame_98 {
        grid-row-gap: 12px;
        --f2w-order: 3;
        flex-flow: column;
        flex-shrink: 0;
        justify-content: center;
        align-items: start;
        width: 1440px;
        margin: 0;
        padding: 40px 0 40px 310px;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #Frame_291 {
        --f2w-order: 0;
        flex-shrink: 0;
        width: 150px;
        height: 124px;
        margin: 0;
        position: relative;
        overflow: hidden
    }

    #Vector_18 {
        aspect-ratio: 1.24;
        --f2w-order: 0;
        width: 150px;
        height: 121px;
        position: absolute;
        top: calc(50% - 60.2px);
        left: calc(50% - 75.3px)
    }

    #Frame_100 {
        grid-column-gap: 16px;
        --f2w-order: 1;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: start;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative
    }

    #FacebookLogo {
        aspect-ratio: 1;
        --f2w-order: 0;
        flex-shrink: 0;
        width: 24px;
        height: 24px;
        margin: 0;
        position: relative
    }

    #Vector_19 {
        --f2w-order: 0;
        width: 83.3%;
        height: 87.5%;
        position: absolute;
        top: 8.5%;
        left: 6%
    }

    #InstagramLogo {
        aspect-ratio: 1;
        --f2w-order: 1;
        flex-shrink: 0;
        width: 24px;
        height: 24px;
        margin: 0;
        position: relative
    }

    #Vector_20 {
        --f2w-order: 0;
        width: 83.3%;
        height: 87.5%;
        position: absolute;
        top: 8.5%;
        left: 6.5%
    }

    #TiktokLogo {
        aspect-ratio: 1;
        --f2w-order: 2;
        flex-shrink: 0;
        width: 24px;
        height: 24px;
        margin: 0;
        position: relative
    }

    #Vector_21 {
        --f2w-order: 0;
        width: 83.3%;
        height: 87.5%;
        position: absolute;
        top: 5.4%;
        left: 7.7%
    }

    #YoutubeLogo {
        aspect-ratio: 1;
        --f2w-order: 3;
        flex-shrink: 0;
        width: 24px;
        height: 24px;
        margin: 0;
        position: relative
    }

    #Vector_22 {
        --f2w-order: 0;
        width: 91.7%;
        height: 70.8%;
        position: absolute;
        top: 13.5%;
        left: 5.4%
    }

    #Frame_105 {
        grid-column-gap: 10px;
        --f2w-order: 4;
        background-color: #f2f2f2;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: center;
        align-items: center;
        width: 100%;
        margin: 0;
        padding: 12px 666px;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #I4364_103174_91_7759 {
        text-align: left;
        overflow-wrap: break-word;
        color: #8e8e8e;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__108 {
        overflow-wrap: break-word;
        color: #8e8e8e;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 12px;
        font-weight: 400;
        line-height: 130%
    }

    #Navigation_Expand_Brands {
        grid-row-gap: 0px;
        filter: drop-shadow(4px 0 20px #0027662e);
        --f2w-order: 1;
        flex-flow: column;
        justify-content: flex-start;
        align-items: start;
        width: 1440px;
        padding: 0;
        display: flex;
        position: absolute;
        top: 148px;
        left: 0
    }

    #Frame_2085664423 {
        grid-row-gap: 10px;
        --f2w-order: 0;
        flex-flow: column;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: start;
        width: 100%;
        margin: 0;
        padding: 0 0 0 320px;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #Polygon_2 {
        --f2w-order: 0;
        flex-shrink: 0;
        width: 7px;
        height: 4px;
        margin: 0;
        position: relative
    }

    #Frame_2085664422 {
        display: flex;
        z-index: 99;
        grid-column-gap: 40px;
        --f2w-order: 1;
        background-color: #fff;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: start;
        width: 100%;
        margin: 0;
        padding: 40px 0 40px 60px;
        position: absolute;
        /*overflow: hidden;*/
        width: 100%;
        bottom: 0;
        left: 0;
    }

    #Frame_2085664429 {
        grid-row-gap: 32px;
        --f2w-order: 0;
        flex-flow: column;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: start;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative
    }

    #Frame_2085664425 {
        grid-column-gap: 10px;
        --f2w-order: 0;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: center;
        align-items: center;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative
    }

    #I4364_103175_252_71683 {
        text-align: left;
        overflow-wrap: break-word;
        color: #8e8e8e;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 600;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__109 {
        overflow-wrap: break-word;
        color: #8e8e8e;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 600;
        line-height: 130%
    }

    #Frame_2085664435 {
        grid-column-gap: 8px;
        --f2w-order: 1;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: start;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative
    }

    #Frame_2085664432 {
        grid-row-gap: 8px;
        --f2w-order: 0;
        flex-flow: column;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: start;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative
    }

    #Navigation_Logo {
        --f2w-order: 0;
        background-color: #f2f2f2;
        flex-shrink: 0;
        width: 100px;
        height: 56px;
        margin: 0;
        position: relative;
        overflow: hidden
    }

    #image_82 {
        aspect-ratio: 4.28;
        --f2w-order: 0;
        width: 77px;
        height: 18px;
        position: absolute;
        top: calc(50% - 9px);
        left: calc(50% - 38px);
        overflow: hidden
    }

    #__110 {
        object-fit: cover;
        border-radius: 0;
        width: 100%;
        height: 100%;
        position: absolute;
        inset: 0
    }

    #Navigation_Logo_0 {
        --f2w-order: 1;
        background-color: #f2f2f2;
        flex-shrink: 0;
        width: 100px;
        height: 56px;
        margin: 0;
        position: relative;
        overflow: hidden
    }

    #image_97 {
        aspect-ratio: 1.29;
        --f2w-order: 0;
        width: 67px;
        height: 52px;
        position: absolute;
        top: calc(50% - 26px);
        left: calc(50% - 33px);
        overflow: hidden
    }

    #__111 {
        object-fit: cover;
        border-radius: 0;
        width: 100%;
        height: 100%;
        position: absolute;
        inset: 0
    }

    #Navigation_Logo_1 {
        --f2w-order: 2;
        background-color: #f2f2f2;
        flex-shrink: 0;
        width: 100px;
        height: 56px;
        margin: 0;
        position: relative;
        overflow: hidden
    }

    #Group_335_0 {
        aspect-ratio: 1.05;
        --f2w-order: 0;
        width: 69.1px;
        height: 66px;
        position: absolute;
        top: calc(50% - 33px);
        left: calc(50% - 34.5px)
    }

    #Rectangle_34624271_0 {
        mask-type: alpha;
        --f2w-order: 0;
        background-color: #000;
        width: 74.9px;
        height: 77.7px;
        position: absolute;
        top: calc(50% - 38.9px);
        left: calc(50% - 37.4px);
        -webkit-mask-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjkuMDg0MDMwMTUxMzY3MTkiIGhlaWdodD0iNjUuOTk5MTMwMjQ5MDIzNDQiIHZpZXdCb3g9IjAgMCA2OS4wODQwMzAxNTEzNjcxOSA2NS45OTkxMzAyNDkwMjM0NCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgY2xhc3M9InBvaW50ZXItZXZlbnRzLW5vbmUiIHN0eWxlPSJsZWZ0OiBjYWxjKC0zNC41cHggKyA1MCUpO3RvcDogY2FsYygtMzNweCArIDUwJSk7YXNwZWN0LXJhdGlvOiAxLjA1O3dpZHRoOiA2OS4xcHg7aGVpZ2h0OiA2NnB4OyI+PGcgaWQ9Im1hc2tfSTQzNjRfMTAzMTc1XzI1Ml83MTY4OF8yMTYzXzU4NTQ5IiBtYXNrVW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4PSIwIiB5PSIwIiBzdHlsZT0ibWFzay10eXBlOiBhbHBoYTsiPjxwYXRoIGQ9Ik0wIDAgTDY5LjA4NCAwIEw2OS4wODQgNjUuOTk5MSBMMCA2NS45OTkxIEwwIDAgWiIgc3R5bGU9ImZpbGwtcnVsZTogbm9uemVybztmaWxsOiB1cmwoI3BhdHRlcm4wX0k0MzY0XzEwMzE3NV8yNTJfNzE2ODhfMjE2M181ODU0OSk7IiAvPjwvZz48ZGVmcz48aW1hZ2UgaHJlZj0iY2FsbHNpdGU6Ly8xMTcxIiBpZD0iaW1hZ2UwX0k0MzY0XzEwMzE3NV8yNTJfNzE2ODhfMjE2M181ODU0OSI+PC9pbWFnZT48cGF0dGVybiB3aWR0aD02OS4wODQwMzAxNTEzNjcxOSBoZWlnaHQ9NjUuOTk5MTMwMjQ5MDIzNDQgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgaWQ9InBhdHRlcm4wX0k0MzY0XzEwMzE3NV8yNTJfNzE2ODhfMjE2M181ODU0OSI+PHVzZSBocmVmPSIjaW1hZ2UwX0k0MzY0XzEwMzE3NV8yNTJfNzE2ODhfMjE2M181ODU0OSIgdHJhbnNmb3JtPSJtYXRyaXgoMC4yMTkyNjYyMjQ4OTE2MTQ5IDAgMCAwLjIxOTI2NjIxMzQ1MTkwNTEgLTYwLjYxOTUyNjUyNzI3NzI2NiAwKSI+PC91c2U+PC9wYXR0ZXJuPjwvZGVmcz48L3N2Zz4=);
        mask-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjkuMDg0MDMwMTUxMzY3MTkiIGhlaWdodD0iNjUuOTk5MTMwMjQ5MDIzNDQiIHZpZXdCb3g9IjAgMCA2OS4wODQwMzAxNTEzNjcxOSA2NS45OTkxMzAyNDkwMjM0NCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgY2xhc3M9InBvaW50ZXItZXZlbnRzLW5vbmUiIHN0eWxlPSJsZWZ0OiBjYWxjKC0zNC41cHggKyA1MCUpO3RvcDogY2FsYygtMzNweCArIDUwJSk7YXNwZWN0LXJhdGlvOiAxLjA1O3dpZHRoOiA2OS4xcHg7aGVpZ2h0OiA2NnB4OyI+PGcgaWQ9Im1hc2tfSTQzNjRfMTAzMTc1XzI1Ml83MTY4OF8yMTYzXzU4NTQ5IiBtYXNrVW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4PSIwIiB5PSIwIiBzdHlsZT0ibWFzay10eXBlOiBhbHBoYTsiPjxwYXRoIGQ9Ik0wIDAgTDY5LjA4NCAwIEw2OS4wODQgNjUuOTk5MSBMMCA2NS45OTkxIEwwIDAgWiIgc3R5bGU9ImZpbGwtcnVsZTogbm9uemVybztmaWxsOiB1cmwoI3BhdHRlcm4wX0k0MzY0XzEwMzE3NV8yNTJfNzE2ODhfMjE2M181ODU0OSk7IiAvPjwvZz48ZGVmcz48aW1hZ2UgaHJlZj0iY2FsbHNpdGU6Ly8xMTcxIiBpZD0iaW1hZ2UwX0k0MzY0XzEwMzE3NV8yNTJfNzE2ODhfMjE2M181ODU0OSI+PC9pbWFnZT48cGF0dGVybiB3aWR0aD02OS4wODQwMzAxNTEzNjcxOSBoZWlnaHQ9NjUuOTk5MTMwMjQ5MDIzNDQgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgaWQ9InBhdHRlcm4wX0k0MzY0XzEwMzE3NV8yNTJfNzE2ODhfMjE2M181ODU0OSI+PHVzZSBocmVmPSIjaW1hZ2UwX0k0MzY0XzEwMzE3NV8yNTJfNzE2ODhfMjE2M181ODU0OSIgdHJhbnNmb3JtPSJtYXRyaXgoMC4yMTkyNjYyMjQ4OTE2MTQ5IDAgMCAwLjIxOTI2NjIxMzQ1MTkwNTEgLTYwLjYxOTUyNjUyNzI3NzI2NiAwKSI+PC91c2U+PC9wYXR0ZXJuPjwvZGVmcz48L3N2Zz4=);
        -webkit-mask-position: 2.9px 5.9px;
        mask-position: 2.9px 5.9px;
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat
    }

    #Navigation_Logo_2 {
        --f2w-order: 3;
        background-color: #f2f2f2;
        flex-shrink: 0;
        width: 100px;
        height: 56px;
        margin: 0;
        position: relative;
        overflow: hidden
    }

    #Group_335_1 {
        aspect-ratio: 1.05;
        --f2w-order: 0;
        width: 68px;
        height: 65px;
        position: absolute;
        top: -4px;
        left: 16px
    }

    #Rectangle_34624271_1 {
        mask-type: alpha;
        --f2w-order: 0;
        background-color: #000;
        width: 73.7px;
        height: 76.5px;
        position: absolute;
        top: calc(50% - 38.3px);
        left: calc(50% - 36.8px);
        -webkit-mask-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjguMDAwMDIyODg4MTgzNiIgaGVpZ2h0PSI2NC45NjM1MzE0OTQxNDA2MiIgdmlld0JveD0iMCAwIDY4LjAwMDAyMjg4ODE4MzYgNjQuOTYzNTMxNDk0MTQwNjIiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIGNsYXNzPSJwb2ludGVyLWV2ZW50cy1ub25lIiBzdHlsZT0ibGVmdDogY2FsYygtMzRweCArIDUwJSk7dG9wOiBjYWxjKC0zMi41cHggKyA1MCUpO2FzcGVjdC1yYXRpbzogMS4wNTt3aWR0aDogNjhweDtoZWlnaHQ6IDY1cHg7Ij48ZyBpZD0ibWFza19JNDM2NF8xMDMxNzVfMjUyXzcxNjg5XzIxNjNfNTg0NzYiIG1hc2tVbml0cz0idXNlclNwYWNlT25Vc2UiIHg9IjAiIHk9IjAiIHN0eWxlPSJtYXNrLXR5cGU6IGFscGhhOyI+PC9nPjwvc3ZnPg==);
        mask-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjguMDAwMDIyODg4MTgzNiIgaGVpZ2h0PSI2NC45NjM1MzE0OTQxNDA2MiIgdmlld0JveD0iMCAwIDY4LjAwMDAyMjg4ODE4MzYgNjQuOTYzNTMxNDk0MTQwNjIiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIGNsYXNzPSJwb2ludGVyLWV2ZW50cy1ub25lIiBzdHlsZT0ibGVmdDogY2FsYygtMzRweCArIDUwJSk7dG9wOiBjYWxjKC0zMi41cHggKyA1MCUpO2FzcGVjdC1yYXRpbzogMS4wNTt3aWR0aDogNjhweDtoZWlnaHQ6IDY1cHg7Ij48ZyBpZD0ibWFza19JNDM2NF8xMDMxNzVfMjUyXzcxNjg5XzIxNjNfNTg0NzYiIG1hc2tVbml0cz0idXNlclNwYWNlT25Vc2UiIHg9IjAiIHk9IjAiIHN0eWxlPSJtYXNrLXR5cGU6IGFscGhhOyI+PC9nPjwvc3ZnPg==);
        -webkit-mask-position: 2.8px 5.8px;
        mask-position: 2.8px 5.8px;
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat
    }

    #Hugo_Boss_Logo_1 {
        mask-type: alpha;
        --f2w-order: 1;
        width: 67.3px;
        height: 25.4px;
        position: absolute;
        top: 19.6px;
        left: .2px;
        overflow: hidden;
        -webkit-mask-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjguMDAwMDIyODg4MTgzNiIgaGVpZ2h0PSI2NC45NjM1MzE0OTQxNDA2MiIgdmlld0JveD0iMCAwIDY4LjAwMDAyMjg4ODE4MzYgNjQuOTYzNTMxNDk0MTQwNjIiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIGNsYXNzPSJwb2ludGVyLWV2ZW50cy1ub25lIiBzdHlsZT0ibGVmdDogY2FsYygtMzRweCArIDUwJSk7dG9wOiBjYWxjKC0zMi41cHggKyA1MCUpO2FzcGVjdC1yYXRpbzogMS4wNTt3aWR0aDogNjhweDtoZWlnaHQ6IDY1cHg7Ij48ZyBpZD0ibWFza19JNDM2NF8xMDMxNzVfMjUyXzcxNjg5XzIxNjNfNTg0NzYiIG1hc2tVbml0cz0idXNlclNwYWNlT25Vc2UiIHg9IjAiIHk9IjAiIHN0eWxlPSJtYXNrLXR5cGU6IGFscGhhOyI+PC9nPjwvc3ZnPg==);
        mask-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjguMDAwMDIyODg4MTgzNiIgaGVpZ2h0PSI2NC45NjM1MzE0OTQxNDA2MiIgdmlld0JveD0iMCAwIDY4LjAwMDAyMjg4ODE4MzYgNjQuOTYzNTMxNDk0MTQwNjIiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIGNsYXNzPSJwb2ludGVyLWV2ZW50cy1ub25lIiBzdHlsZT0ibGVmdDogY2FsYygtMzRweCArIDUwJSk7dG9wOiBjYWxjKC0zMi41cHggKyA1MCUpO2FzcGVjdC1yYXRpbzogMS4wNTt3aWR0aDogNjhweDtoZWlnaHQ6IDY1cHg7Ij48ZyBpZD0ibWFza19JNDM2NF8xMDMxNzVfMjUyXzcxNjg5XzIxNjNfNTg0NzYiIG1hc2tVbml0cz0idXNlclNwYWNlT25Vc2UiIHg9IjAiIHk9IjAiIHN0eWxlPSJtYXNrLXR5cGU6IGFscGhhOyI+PC9nPjwvc3ZnPg==);
        -webkit-mask-position: -.2px -19.6px;
        mask-position: -.2px -19.6px;
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat
    }

    #layer1 {
        --f2w-order: 0;
        width: 99.2%;
        height: 97.8%;
        position: absolute;
        top: 1.1%;
        left: .4%
    }

    #g6981 {
        --f2w-order: 0;
        width: 101.9%;
        height: 104.8%;
        position: absolute;
        top: -2.4%;
        left: -.9%
    }

    #Frame_2085664433 {
        grid-row-gap: 8px;
        --f2w-order: 1;
        flex-flow: column;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: start;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative
    }

    #Navigation_Logo_3 {
        --f2w-order: 0;
        background-color: #f2f2f2;
        flex-shrink: 0;
        width: 100px;
        height: 56px;
        margin: 0;
        position: relative;
        overflow: hidden
    }

    #image_91 {
        aspect-ratio: 1.78;
        --f2w-order: 0;
        width: 66px;
        height: 37px;
        position: absolute;
        top: calc(50% - 18px);
        left: calc(50% - 33px);
        overflow: hidden
    }

    #__112 {
        object-fit: cover;
        border-radius: 0;
        width: 100%;
        height: 100%;
        position: absolute;
        inset: 0
    }

    #Navigation_Logo_4 {
        --f2w-order: 1;
        background-color: #f2f2f2;
        flex-shrink: 0;
        width: 100px;
        height: 56px;
        margin: 0;
        position: relative;
        overflow: hidden
    }

    #Group_335_2 {
        aspect-ratio: 1.05;
        --f2w-order: 0;
        width: 79.6px;
        height: 76px;
        position: absolute;
        top: calc(50% - 38px);
        left: calc(50% - 39.8px)
    }

    #Rectangle_34624271_2 {
        mask-type: alpha;
        --f2w-order: 0;
        background-color: #000;
        width: 86.2px;
        height: 89.5px;
        position: absolute;
        top: calc(50% - 44.8px);
        left: calc(50% - 43.1px);
        -webkit-mask-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNzkuNTUxNDQ1MDA3MzI0MjIiIGhlaWdodD0iNzUuOTk5MTMwMjQ5MDIzNDQiIHZpZXdCb3g9IjAgMCA3OS41NTE0NDUwMDczMjQyMiA3NS45OTkxMzAyNDkwMjM0NCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgY2xhc3M9InBvaW50ZXItZXZlbnRzLW5vbmUiIHN0eWxlPSJsZWZ0OiBjYWxjKC0zOS44cHggKyA1MCUpO3RvcDogY2FsYygtMzhweCArIDUwJSk7YXNwZWN0LXJhdGlvOiAxLjA1O3dpZHRoOiA3OS42cHg7aGVpZ2h0OiA3NnB4OyI+PGcgaWQ9Im1hc2tfSTQzNjRfMTAzMTc1XzI1Ml83MTgwOF8yMTYzXzU4NTYwIiBtYXNrVW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4PSIwIiB5PSIwIiBzdHlsZT0ibWFzay10eXBlOiBhbHBoYTsiPjxwYXRoIGQ9Ik0wIDAgTDc5LjU1MTQgMCBMNzkuNTUxNCA3NS45OTkxIEwwIDc1Ljk5OTEgTDAgMCBaIiBzdHlsZT0iZmlsbC1ydWxlOiBub256ZXJvO2ZpbGw6IHVybCgjcGF0dGVybjBfSTQzNjRfMTAzMTc1XzI1Ml83MTgwOF8yMTYzXzU4NTYwKTsiIC8+PC9nPjxkZWZzPjxpbWFnZSBocmVmPSJjYWxsc2l0ZTovLzExNzIiIGlkPSJpbWFnZTBfSTQzNjRfMTAzMTc1XzI1Ml83MTgwOF8yMTYzXzU4NTYwIj48L2ltYWdlPjxwYXR0ZXJuIHdpZHRoPTc5LjU1MTQ0NTAwNzMyNDIyIGhlaWdodD03NS45OTkxMzAyNDkwMjM0NCBwYXR0ZXJuVW5pdHM9InVzZXJTcGFjZU9uVXNlIiBpZD0icGF0dGVybjBfSTQzNjRfMTAzMTc1XzI1Ml83MTgwOF8yMTYzXzU4NTYwIj48dXNlIGhyZWY9IiNpbWFnZTBfSTQzNjRfMTAzMTc1XzI1Ml83MTgwOF8yMTYzXzU4NTYwIiB0cmFuc2Zvcm09Im1hdHJpeCgwLjMyMzQwMDU3MDYzMTQ3MjU0IDAgMCAwLjMyMzQwMDU1NDI1MTE2MzYgLTc0LjU0NjM3OTIxNDU2MzQzIDApIj48L3VzZT48L3BhdHRlcm4+PC9kZWZzPjwvc3ZnPg==);
        mask-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNzkuNTUxNDQ1MDA3MzI0MjIiIGhlaWdodD0iNzUuOTk5MTMwMjQ5MDIzNDQiIHZpZXdCb3g9IjAgMCA3OS41NTE0NDUwMDczMjQyMiA3NS45OTkxMzAyNDkwMjM0NCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgY2xhc3M9InBvaW50ZXItZXZlbnRzLW5vbmUiIHN0eWxlPSJsZWZ0OiBjYWxjKC0zOS44cHggKyA1MCUpO3RvcDogY2FsYygtMzhweCArIDUwJSk7YXNwZWN0LXJhdGlvOiAxLjA1O3dpZHRoOiA3OS42cHg7aGVpZ2h0OiA3NnB4OyI+PGcgaWQ9Im1hc2tfSTQzNjRfMTAzMTc1XzI1Ml83MTgwOF8yMTYzXzU4NTYwIiBtYXNrVW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4PSIwIiB5PSIwIiBzdHlsZT0ibWFzay10eXBlOiBhbHBoYTsiPjxwYXRoIGQ9Ik0wIDAgTDc5LjU1MTQgMCBMNzkuNTUxNCA3NS45OTkxIEwwIDc1Ljk5OTEgTDAgMCBaIiBzdHlsZT0iZmlsbC1ydWxlOiBub256ZXJvO2ZpbGw6IHVybCgjcGF0dGVybjBfSTQzNjRfMTAzMTc1XzI1Ml83MTgwOF8yMTYzXzU4NTYwKTsiIC8+PC9nPjxkZWZzPjxpbWFnZSBocmVmPSJjYWxsc2l0ZTovLzExNzIiIGlkPSJpbWFnZTBfSTQzNjRfMTAzMTc1XzI1Ml83MTgwOF8yMTYzXzU4NTYwIj48L2ltYWdlPjxwYXR0ZXJuIHdpZHRoPTc5LjU1MTQ0NTAwNzMyNDIyIGhlaWdodD03NS45OTkxMzAyNDkwMjM0NCBwYXR0ZXJuVW5pdHM9InVzZXJTcGFjZU9uVXNlIiBpZD0icGF0dGVybjBfSTQzNjRfMTAzMTc1XzI1Ml83MTgwOF8yMTYzXzU4NTYwIj48dXNlIGhyZWY9IiNpbWFnZTBfSTQzNjRfMTAzMTc1XzI1Ml83MTgwOF8yMTYzXzU4NTYwIiB0cmFuc2Zvcm09Im1hdHJpeCgwLjMyMzQwMDU3MDYzMTQ3MjU0IDAgMCAwLjMyMzQwMDU1NDI1MTE2MzYgLTc0LjU0NjM3OTIxNDU2MzQzIDApIj48L3VzZT48L3BhdHRlcm4+PC9kZWZzPjwvc3ZnPg==);
        -webkit-mask-position: 3.3px 6.8px;
        mask-position: 3.3px 6.8px;
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat
    }

    #Navigation_Logo_5 {
        --f2w-order: 2;
        background-color: #f2f2f2;
        flex-shrink: 0;
        width: 100px;
        height: 56px;
        margin: 0;
        position: relative;
        overflow: hidden
    }

    #Group_336 {
        aspect-ratio: 1.05;
        --f2w-order: 0;
        width: 87.9px;
        height: 84px;
        position: absolute;
        top: calc(50% - 42px);
        left: calc(50% - 44px)
    }

    #Rectangle_34624271_3 {
        mask-type: alpha;
        --f2w-order: 0;
        background-color: #000;
        width: 95.3px;
        height: 98.9px;
        position: absolute;
        top: calc(50% - 49.5px);
        left: calc(50% - 47.6px);
        -webkit-mask-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iODcuOTI2Mzk5MjMwOTU3MDMiIGhlaWdodD0iODQuMDAwMTA2ODExNTIzNDQiIHZpZXdCb3g9IjAgMCA4Ny45MjYzOTkyMzA5NTcwMyA4NC4wMDAxMDY4MTE1MjM0NCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgY2xhc3M9InBvaW50ZXItZXZlbnRzLW5vbmUiIHN0eWxlPSJsZWZ0OiBjYWxjKC00NHB4ICsgNTAlKTt0b3A6IGNhbGMoLTQycHggKyA1MCUpO2FzcGVjdC1yYXRpbzogMS4wNTt3aWR0aDogODcuOXB4O2hlaWdodDogODRweDsiPjxnIGlkPSJtYXNrX0k0MzY0XzEwMzE3NV8yNTJfNzE4MDlfMjE2M181ODcxNSIgbWFza1VuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeD0iMCIgeT0iMCIgc3R5bGU9Im1hc2stdHlwZTogYWxwaGE7Ij48cGF0aCBkPSJNMCAwIEw4Ny45MjY0IDAgTDg3LjkyNjQgODQuMDAwMSBMMCA4NC4wMDAxIEwwIDAgWiIgc3R5bGU9ImZpbGwtcnVsZTogbm9uemVybztmaWxsOiB1cmwoI3BhdHRlcm4wX0k0MzY0XzEwMzE3NV8yNTJfNzE4MDlfMjE2M181ODcxNSk7IiAvPjwvZz48ZGVmcz48aW1hZ2UgaHJlZj0iY2FsbHNpdGU6Ly8xMTczIiBpZD0iaW1hZ2UwX0k0MzY0XzEwMzE3NV8yNTJfNzE4MDlfMjE2M181ODcxNSI+PC9pbWFnZT48cGF0dGVybiB3aWR0aD04Ny45MjYzOTkyMzA5NTcwMyBoZWlnaHQ9ODQuMDAwMTA2ODExNTIzNDQgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgaWQ9InBhdHRlcm4wX0k0MzY0XzEwMzE3NV8yNTJfNzE4MDlfMjE2M181ODcxNSI+PHVzZSBocmVmPSIjaW1hZ2UwX0k0MzY0XzEwMzE3NV8yNTJfNzE4MDlfMjE2M181ODcxNSIgdHJhbnNmb3JtPSJtYXRyaXgoMC4xNDc4ODc1MTI2MzE3MzA5MiAwIDAgMC4xNDc4ODc1MTE5OTIxMTg3MiAtNDQuNzY5MzA3OTYzNTYwMDI0IDApIj48L3VzZT48L3BhdHRlcm4+PC9kZWZzPjwvc3ZnPg==);
        mask-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iODcuOTI2Mzk5MjMwOTU3MDMiIGhlaWdodD0iODQuMDAwMTA2ODExNTIzNDQiIHZpZXdCb3g9IjAgMCA4Ny45MjYzOTkyMzA5NTcwMyA4NC4wMDAxMDY4MTE1MjM0NCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgY2xhc3M9InBvaW50ZXItZXZlbnRzLW5vbmUiIHN0eWxlPSJsZWZ0OiBjYWxjKC00NHB4ICsgNTAlKTt0b3A6IGNhbGMoLTQycHggKyA1MCUpO2FzcGVjdC1yYXRpbzogMS4wNTt3aWR0aDogODcuOXB4O2hlaWdodDogODRweDsiPjxnIGlkPSJtYXNrX0k0MzY0XzEwMzE3NV8yNTJfNzE4MDlfMjE2M181ODcxNSIgbWFza1VuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeD0iMCIgeT0iMCIgc3R5bGU9Im1hc2stdHlwZTogYWxwaGE7Ij48cGF0aCBkPSJNMCAwIEw4Ny45MjY0IDAgTDg3LjkyNjQgODQuMDAwMSBMMCA4NC4wMDAxIEwwIDAgWiIgc3R5bGU9ImZpbGwtcnVsZTogbm9uemVybztmaWxsOiB1cmwoI3BhdHRlcm4wX0k0MzY0XzEwMzE3NV8yNTJfNzE4MDlfMjE2M181ODcxNSk7IiAvPjwvZz48ZGVmcz48aW1hZ2UgaHJlZj0iY2FsbHNpdGU6Ly8xMTczIiBpZD0iaW1hZ2UwX0k0MzY0XzEwMzE3NV8yNTJfNzE4MDlfMjE2M181ODcxNSI+PC9pbWFnZT48cGF0dGVybiB3aWR0aD04Ny45MjYzOTkyMzA5NTcwMyBoZWlnaHQ9ODQuMDAwMTA2ODExNTIzNDQgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgaWQ9InBhdHRlcm4wX0k0MzY0XzEwMzE3NV8yNTJfNzE4MDlfMjE2M181ODcxNSI+PHVzZSBocmVmPSIjaW1hZ2UwX0k0MzY0XzEwMzE3NV8yNTJfNzE4MDlfMjE2M181ODcxNSIgdHJhbnNmb3JtPSJtYXRyaXgoMC4xNDc4ODc1MTI2MzE3MzA5MiAwIDAgMC4xNDc4ODc1MTE5OTIxMTg3MiAtNDQuNzY5MzA3OTYzNTYwMDI0IDApIj48L3VzZT48L3BhdHRlcm4+PC9kZWZzPjwvc3ZnPg==);
        -webkit-mask-position: 3.7px 7.5px;
        mask-position: 3.7px 7.5px;
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat
    }

    #Navigation_Logo_6 {
        --f2w-order: 3;
        background-color: #f2f2f2;
        flex-shrink: 0;
        width: 100px;
        height: 56px;
        margin: 0;
        position: relative;
        overflow: hidden
    }

    #Group_336_0 {
        aspect-ratio: 1.05;
        --f2w-order: 0;
        width: 52px;
        height: 49.7px;
        position: absolute;
        top: calc(50% - 25px);
        left: calc(50% - 26px)
    }

    #Rectangle_34624271_4 {
        mask-type: alpha;
        --f2w-order: 0;
        background-color: #000;
        width: 56.4px;
        height: 58.5px;
        position: absolute;
        top: calc(50% - 29.3px);
        left: calc(50% - 28.2px);
        -webkit-mask-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNTIiIGhlaWdodD0iNDkuNjc3OTc0NzAwOTI3NzM0IiB2aWV3Qm94PSIwIDAgNTIgNDkuNjc3OTc0NzAwOTI3NzM0IiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiBjbGFzcz0icG9pbnRlci1ldmVudHMtbm9uZSIgc3R5bGU9ImxlZnQ6IGNhbGMoLTI2cHggKyA1MCUpO3RvcDogY2FsYygtMjQuOHB4ICsgNTAlKTthc3BlY3QtcmF0aW86IDEuMDU7d2lkdGg6IDUycHg7aGVpZ2h0OiA0OS43cHg7Ij48ZyBpZD0ibWFza19JNDM2NF8xMDMxNzVfMjUyXzcxODEwXzIxNjNfNTg1OTUiIG1hc2tVbml0cz0idXNlclNwYWNlT25Vc2UiIHg9IjAiIHk9IjAiIHN0eWxlPSJtYXNrLXR5cGU6IGFscGhhOyI+PHBhdGggZD0iTTAgMCBMNTIgMCBMNTIgNDkuNjc4IEwwIDQ5LjY3OCBMMCAwIFoiIHN0eWxlPSJmaWxsLXJ1bGU6IG5vbnplcm87ZmlsbDogdXJsKCNwYXR0ZXJuMF9JNDM2NF8xMDMxNzVfMjUyXzcxODEwXzIxNjNfNTg1OTUpOyIgLz48L2c+PGRlZnM+PGltYWdlIGhyZWY9ImNhbGxzaXRlOi8vMTE3NCIgaWQ9ImltYWdlMF9JNDM2NF8xMDMxNzVfMjUyXzcxODEwXzIxNjNfNTg1OTUiPjwvaW1hZ2U+PHBhdHRlcm4gd2lkdGg9NTIgaGVpZ2h0PTQ5LjY3Nzk3NDcwMDkyNzczNCBwYXR0ZXJuVW5pdHM9InVzZXJTcGFjZU9uVXNlIiBpZD0icGF0dGVybjBfSTQzNjRfMTAzMTc1XzI1Ml83MTgxMF8yMTYzXzU4NTk1Ij48dXNlIGhyZWY9IiNpbWFnZTBfSTQzNjRfMTAzMTc1XzI1Ml83MTgxMF8yMTYzXzU4NTk1IiB0cmFuc2Zvcm09Im1hdHJpeCgwLjExNDk5NTMxODYyNjc5NjYxIDAgMCAwLjExNDk5NTMxMTgwNzcwMzA5IC00LjAxMzc3NzcxNDM1Mzc3NCAwKSI+PC91c2U+PC9wYXR0ZXJuPjwvZGVmcz48L3N2Zz4=);
        mask-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNTIiIGhlaWdodD0iNDkuNjc3OTc0NzAwOTI3NzM0IiB2aWV3Qm94PSIwIDAgNTIgNDkuNjc3OTc0NzAwOTI3NzM0IiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiBjbGFzcz0icG9pbnRlci1ldmVudHMtbm9uZSIgc3R5bGU9ImxlZnQ6IGNhbGMoLTI2cHggKyA1MCUpO3RvcDogY2FsYygtMjQuOHB4ICsgNTAlKTthc3BlY3QtcmF0aW86IDEuMDU7d2lkdGg6IDUycHg7aGVpZ2h0OiA0OS43cHg7Ij48ZyBpZD0ibWFza19JNDM2NF8xMDMxNzVfMjUyXzcxODEwXzIxNjNfNTg1OTUiIG1hc2tVbml0cz0idXNlclNwYWNlT25Vc2UiIHg9IjAiIHk9IjAiIHN0eWxlPSJtYXNrLXR5cGU6IGFscGhhOyI+PHBhdGggZD0iTTAgMCBMNTIgMCBMNTIgNDkuNjc4IEwwIDQ5LjY3OCBMMCAwIFoiIHN0eWxlPSJmaWxsLXJ1bGU6IG5vbnplcm87ZmlsbDogdXJsKCNwYXR0ZXJuMF9JNDM2NF8xMDMxNzVfMjUyXzcxODEwXzIxNjNfNTg1OTUpOyIgLz48L2c+PGRlZnM+PGltYWdlIGhyZWY9ImNhbGxzaXRlOi8vMTE3NCIgaWQ9ImltYWdlMF9JNDM2NF8xMDMxNzVfMjUyXzcxODEwXzIxNjNfNTg1OTUiPjwvaW1hZ2U+PHBhdHRlcm4gd2lkdGg9NTIgaGVpZ2h0PTQ5LjY3Nzk3NDcwMDkyNzczNCBwYXR0ZXJuVW5pdHM9InVzZXJTcGFjZU9uVXNlIiBpZD0icGF0dGVybjBfSTQzNjRfMTAzMTc1XzI1Ml83MTgxMF8yMTYzXzU4NTk1Ij48dXNlIGhyZWY9IiNpbWFnZTBfSTQzNjRfMTAzMTc1XzI1Ml83MTgxMF8yMTYzXzU4NTk1IiB0cmFuc2Zvcm09Im1hdHJpeCgwLjExNDk5NTMxODYyNjc5NjYxIDAgMCAwLjExNDk5NTMxMTgwNzcwMzA5IC00LjAxMzc3NzcxNDM1Mzc3NCAwKSI+PC91c2U+PC9wYXR0ZXJuPjwvZGVmcz48L3N2Zz4=);
        -webkit-mask-position: 2.2px 4.4px;
        mask-position: 2.2px 4.4px;
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat
    }

    #Frame_2085664436 {
        grid-column-gap: 8px;
        --f2w-order: 2;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: center;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative
    }

    #I4364_103175_252_71819 {
        text-align: left;
        overflow-wrap: break-word;
        color: #1c1c1c;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__113 {
        overflow-wrap: break-word;
        color: #1c1c1c;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%
    }

    #CaretRight_3 {
        aspect-ratio: 1;
        --f2w-order: 1;
        flex-shrink: 0;
        width: 12px;
        height: 12px;
        margin: 0;
        position: relative
    }

    #Vector_23 {
        --f2w-order: 0;
        width: 41.7%;
        height: 83.3%;
        position: absolute;
        top: 13.1%;
        left: 26.9%
    }

    #Frame_2085664434 {
        grid-row-gap: 32px;
        --f2w-order: 1;
        flex-flow: column;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: start;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative
    }

    #Frame_2085664425_0 {
        grid-column-gap: 10px;
        --f2w-order: 0;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: center;
        align-items: center;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative
    }

    #I4364_103175_252_71842 {
        text-align: left;
        overflow-wrap: break-word;
        color: #8e8e8e;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 600;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__114 {
        overflow-wrap: break-word;
        color: #8e8e8e;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 600;
        line-height: 130%
    }

    #Frame_2085664435_0 {
        grid-column-gap: 8px;
        --f2w-order: 1;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: start;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative
    }

    #Frame_2085664432_0 {
        grid-row-gap: 8px;
        --f2w-order: 0;
        flex-flow: column;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: start;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative
    }

    #Navigation_Logo_7 {
        --f2w-order: 0;
        background-color: #f2f2f2;
        flex-shrink: 0;
        width: 100px;
        height: 56px;
        margin: 0;
        position: relative;
        overflow: hidden
    }

    #Group_335_3 {
        aspect-ratio: 1.05;
        --f2w-order: 0;
        width: 74px;
        height: 70.7px;
        position: absolute;
        top: calc(50% - 35px);
        left: calc(50% - 37px)
    }

    #Rectangle_34624271_5 {
        mask-type: alpha;
        --f2w-order: 0;
        background-color: #000;
        width: 80.2px;
        height: 83.3px;
        position: absolute;
        top: calc(50% - 41.6px);
        left: calc(50% - 40.1px);
        -webkit-mask-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNzQiIGhlaWdodD0iNzAuNjk1NTc5NTI4ODA4NiIgdmlld0JveD0iMCAwIDc0IDcwLjY5NTU3OTUyODgwODYiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIGNsYXNzPSJwb2ludGVyLWV2ZW50cy1ub25lIiBzdHlsZT0ibGVmdDogY2FsYygtMzdweCArIDUwJSk7dG9wOiBjYWxjKC0zNS4zcHggKyA1MCUpO2FzcGVjdC1yYXRpbzogMS4wNTt3aWR0aDogNzRweDtoZWlnaHQ6IDcwLjdweDsiPjxnIGlkPSJtYXNrX0k0MzY0XzEwMzE3NV8yNTJfNzE4NDVfMjE2M181ODU3MCIgbWFza1VuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeD0iMCIgeT0iMCIgc3R5bGU9Im1hc2stdHlwZTogYWxwaGE7Ij48cGF0aCBkPSJNMCAwIEw3NCAwIEw3NCA3MC42OTU2IEwwIDcwLjY5NTYgTDAgMCBaIiBzdHlsZT0iZmlsbC1ydWxlOiBub256ZXJvO2ZpbGw6IHVybCgjcGF0dGVybjBfSTQzNjRfMTAzMTc1XzI1Ml83MTg0NV8yMTYzXzU4NTcwKTsiIC8+PC9nPjxkZWZzPjxpbWFnZSBocmVmPSJjYWxsc2l0ZTovLzExNzYiIGlkPSJpbWFnZTBfSTQzNjRfMTAzMTc1XzI1Ml83MTg0NV8yMTYzXzU4NTcwIj48L2ltYWdlPjxwYXR0ZXJuIHdpZHRoPTc0IGhlaWdodD03MC42OTU1Nzk1Mjg4MDg2IHBhdHRlcm5Vbml0cz0idXNlclNwYWNlT25Vc2UiIGlkPSJwYXR0ZXJuMF9JNDM2NF8xMDMxNzVfMjUyXzcxODQ1XzIxNjNfNTg1NzAiPjx1c2UgaHJlZj0iI2ltYWdlMF9JNDM2NF8xMDMxNzVfMjUyXzcxODQ1XzIxNjNfNTg1NzAiIHRyYW5zZm9ybT0ibWF0cml4KDAuNDIzMzI2ODI5NzEzMDEyMyAwIDAgMC40MjMzMjY4MjM1MjU4IC04OS41NzQ3MjIwODQxOTA2NyAwKSI+PC91c2U+PC9wYXR0ZXJuPjwvZGVmcz48L3N2Zz4=);
        mask-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNzQiIGhlaWdodD0iNzAuNjk1NTc5NTI4ODA4NiIgdmlld0JveD0iMCAwIDc0IDcwLjY5NTU3OTUyODgwODYiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIGNsYXNzPSJwb2ludGVyLWV2ZW50cy1ub25lIiBzdHlsZT0ibGVmdDogY2FsYygtMzdweCArIDUwJSk7dG9wOiBjYWxjKC0zNS4zcHggKyA1MCUpO2FzcGVjdC1yYXRpbzogMS4wNTt3aWR0aDogNzRweDtoZWlnaHQ6IDcwLjdweDsiPjxnIGlkPSJtYXNrX0k0MzY0XzEwMzE3NV8yNTJfNzE4NDVfMjE2M181ODU3MCIgbWFza1VuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeD0iMCIgeT0iMCIgc3R5bGU9Im1hc2stdHlwZTogYWxwaGE7Ij48cGF0aCBkPSJNMCAwIEw3NCAwIEw3NCA3MC42OTU2IEwwIDcwLjY5NTYgTDAgMCBaIiBzdHlsZT0iZmlsbC1ydWxlOiBub256ZXJvO2ZpbGw6IHVybCgjcGF0dGVybjBfSTQzNjRfMTAzMTc1XzI1Ml83MTg0NV8yMTYzXzU4NTcwKTsiIC8+PC9nPjxkZWZzPjxpbWFnZSBocmVmPSJjYWxsc2l0ZTovLzExNzYiIGlkPSJpbWFnZTBfSTQzNjRfMTAzMTc1XzI1Ml83MTg0NV8yMTYzXzU4NTcwIj48L2ltYWdlPjxwYXR0ZXJuIHdpZHRoPTc0IGhlaWdodD03MC42OTU1Nzk1Mjg4MDg2IHBhdHRlcm5Vbml0cz0idXNlclNwYWNlT25Vc2UiIGlkPSJwYXR0ZXJuMF9JNDM2NF8xMDMxNzVfMjUyXzcxODQ1XzIxNjNfNTg1NzAiPjx1c2UgaHJlZj0iI2ltYWdlMF9JNDM2NF8xMDMxNzVfMjUyXzcxODQ1XzIxNjNfNTg1NzAiIHRyYW5zZm9ybT0ibWF0cml4KDAuNDIzMzI2ODI5NzEzMDEyMyAwIDAgMC40MjMzMjY4MjM1MjU4IC04OS41NzQ3MjIwODQxOTA2NyAwKSI+PC91c2U+PC9wYXR0ZXJuPjwvZGVmcz48L3N2Zz4=);
        -webkit-mask-position: 3.1px 6.3px;
        mask-position: 3.1px 6.3px;
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat
    }

    #Navigation_Logo_8 {
        --f2w-order: 1;
        background-color: #f2f2f2;
        flex-shrink: 0;
        width: 100px;
        height: 56px;
        margin: 0;
        position: relative;
        overflow: hidden
    }

    #image_98 {
        aspect-ratio: 5.13;
        --f2w-order: 0;
        width: 77px;
        height: 15px;
        position: absolute;
        top: calc(50% - 7px);
        left: calc(50% - 38px);
        overflow: hidden
    }

    #__115 {
        object-fit: cover;
        border-radius: 0;
        width: 100%;
        height: 100%;
        position: absolute;
        inset: 0
    }

    #Navigation_Logo_9 {
        --f2w-order: 2;
        background-color: #f2f2f2;
        flex-shrink: 0;
        width: 100px;
        height: 56px;
        margin: 0;
        position: relative;
        overflow: hidden
    }

    #Group_335_4 {
        aspect-ratio: 1.05;
        --f2w-order: 0;
        width: 80px;
        height: 76.4px;
        position: absolute;
        top: calc(50% - 38px);
        left: calc(50% - 40px)
    }

    #Rectangle_34624271_6 {
        mask-type: alpha;
        --f2w-order: 0;
        background-color: #000;
        width: 86.7px;
        height: 90px;
        position: absolute;
        top: calc(50% - 45px);
        left: calc(50% - 43.3px);
        -webkit-mask-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iODAiIGhlaWdodD0iNzYuNDI3NjU4MDgxMDU0NjkiIHZpZXdCb3g9IjAgMCA4MCA3Ni40Mjc2NTgwODEwNTQ2OSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgY2xhc3M9InBvaW50ZXItZXZlbnRzLW5vbmUiIHN0eWxlPSJsZWZ0OiBjYWxjKC00MHB4ICsgNTAlKTt0b3A6IGNhbGMoLTM4LjJweCArIDUwJSk7YXNwZWN0LXJhdGlvOiAxLjA1O3dpZHRoOiA4MHB4O2hlaWdodDogNzYuNHB4OyI+PGcgaWQ9Im1hc2tfSTQzNjRfMTAzMTc1XzI1Ml83MTg0N18yMTYzXzU4NTgwIiBtYXNrVW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4PSIwIiB5PSIwIiBzdHlsZT0ibWFzay10eXBlOiBhbHBoYTsiPjxwYXRoIGQ9Ik0wIDAgTDgwIDAgTDgwIDc2LjQyNzcgTDAgNzYuNDI3NyBMMCAwIFoiIHN0eWxlPSJmaWxsLXJ1bGU6IG5vbnplcm87ZmlsbDogdXJsKCNwYXR0ZXJuMF9JNDM2NF8xMDMxNzVfMjUyXzcxODQ3XzIxNjNfNTg1ODApOyIgLz48L2c+PGRlZnM+PGltYWdlIGhyZWY9ImNhbGxzaXRlOi8vMTE3NyIgaWQ9ImltYWdlMF9JNDM2NF8xMDMxNzVfMjUyXzcxODQ3XzIxNjNfNTg1ODAiPjwvaW1hZ2U+PHBhdHRlcm4gd2lkdGg9ODAgaGVpZ2h0PTc2LjQyNzY1ODA4MTA1NDY5IHBhdHRlcm5Vbml0cz0idXNlclNwYWNlT25Vc2UiIGlkPSJwYXR0ZXJuMF9JNDM2NF8xMDMxNzVfMjUyXzcxODQ3XzIxNjNfNTg1ODAiPjx1c2UgaHJlZj0iI2ltYWdlMF9JNDM2NF8xMDMxNzVfMjUyXzcxODQ3XzIxNjNfNTg1ODAiIHRyYW5zZm9ybT0ibWF0cml4KDAuNjcwNDE4MDQxNzgzMzY4MSAwIDAgMC42NzA0MTgwNTMzNDI1ODUgLTE2My4xMzY2Njk2ODczMzI3IDApIj48L3VzZT48L3BhdHRlcm4+PC9kZWZzPjwvc3ZnPg==);
        mask-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iODAiIGhlaWdodD0iNzYuNDI3NjU4MDgxMDU0NjkiIHZpZXdCb3g9IjAgMCA4MCA3Ni40Mjc2NTgwODEwNTQ2OSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgY2xhc3M9InBvaW50ZXItZXZlbnRzLW5vbmUiIHN0eWxlPSJsZWZ0OiBjYWxjKC00MHB4ICsgNTAlKTt0b3A6IGNhbGMoLTM4LjJweCArIDUwJSk7YXNwZWN0LXJhdGlvOiAxLjA1O3dpZHRoOiA4MHB4O2hlaWdodDogNzYuNHB4OyI+PGcgaWQ9Im1hc2tfSTQzNjRfMTAzMTc1XzI1Ml83MTg0N18yMTYzXzU4NTgwIiBtYXNrVW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4PSIwIiB5PSIwIiBzdHlsZT0ibWFzay10eXBlOiBhbHBoYTsiPjxwYXRoIGQ9Ik0wIDAgTDgwIDAgTDgwIDc2LjQyNzcgTDAgNzYuNDI3NyBMMCAwIFoiIHN0eWxlPSJmaWxsLXJ1bGU6IG5vbnplcm87ZmlsbDogdXJsKCNwYXR0ZXJuMF9JNDM2NF8xMDMxNzVfMjUyXzcxODQ3XzIxNjNfNTg1ODApOyIgLz48L2c+PGRlZnM+PGltYWdlIGhyZWY9ImNhbGxzaXRlOi8vMTE3NyIgaWQ9ImltYWdlMF9JNDM2NF8xMDMxNzVfMjUyXzcxODQ3XzIxNjNfNTg1ODAiPjwvaW1hZ2U+PHBhdHRlcm4gd2lkdGg9ODAgaGVpZ2h0PTc2LjQyNzY1ODA4MTA1NDY5IHBhdHRlcm5Vbml0cz0idXNlclNwYWNlT25Vc2UiIGlkPSJwYXR0ZXJuMF9JNDM2NF8xMDMxNzVfMjUyXzcxODQ3XzIxNjNfNTg1ODAiPjx1c2UgaHJlZj0iI2ltYWdlMF9JNDM2NF8xMDMxNzVfMjUyXzcxODQ3XzIxNjNfNTg1ODAiIHRyYW5zZm9ybT0ibWF0cml4KDAuNjcwNDE4MDQxNzgzMzY4MSAwIDAgMC42NzA0MTgwNTMzNDI1ODUgLTE2My4xMzY2Njk2ODczMzI3IDApIj48L3VzZT48L3BhdHRlcm4+PC9kZWZzPjwvc3ZnPg==);
        -webkit-mask-position: 3.3px 6.8px;
        mask-position: 3.3px 6.8px;
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat
    }

    #Navigation_Logo_10 {
        --f2w-order: 3;
        background-color: #f2f2f2;
        flex-shrink: 0;
        width: 100px;
        height: 56px;
        margin: 0;
        position: relative;
        overflow: hidden
    }

    #Group_335_5 {
        aspect-ratio: 1.05;
        --f2w-order: 0;
        width: 74px;
        height: 70.7px;
        position: absolute;
        top: calc(50% - 35px);
        left: calc(50% - 37px)
    }

    #Rectangle_34624271_7 {
        mask-type: alpha;
        --f2w-order: 0;
        background-color: #000;
        width: 80.2px;
        height: 83.3px;
        position: absolute;
        top: calc(50% - 41.6px);
        left: calc(50% - 40.1px);
        -webkit-mask-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNzQiIGhlaWdodD0iNzAuNjk1NTc5NTI4ODA4NiIgdmlld0JveD0iMCAwIDc0IDcwLjY5NTU3OTUyODgwODYiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIGNsYXNzPSJwb2ludGVyLWV2ZW50cy1ub25lIiBzdHlsZT0ibGVmdDogY2FsYygtMzdweCArIDUwJSk7dG9wOiBjYWxjKC0zNS4zcHggKyA1MCUpO2FzcGVjdC1yYXRpbzogMS4wNTt3aWR0aDogNzRweDtoZWlnaHQ6IDcwLjdweDsiPjxnIGlkPSJtYXNrX0k0MzY0XzEwMzE3NV8yNTJfNzE4NDhfMjE2M181ODYwMyIgbWFza1VuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeD0iMCIgeT0iMCIgc3R5bGU9Im1hc2stdHlwZTogYWxwaGE7Ij48cGF0aCBkPSJNMCAwIEw3NCAwIEw3NCA3MC42OTU2IEwwIDcwLjY5NTYgTDAgMCBaIiBzdHlsZT0iZmlsbC1ydWxlOiBub256ZXJvO2ZpbGw6IHVybCgjcGF0dGVybjBfSTQzNjRfMTAzMTc1XzI1Ml83MTg0OF8yMTYzXzU4NjAzKTsiIC8+PC9nPjxkZWZzPjxpbWFnZSBocmVmPSJjYWxsc2l0ZTovLzExNzgiIGlkPSJpbWFnZTBfSTQzNjRfMTAzMTc1XzI1Ml83MTg0OF8yMTYzXzU4NjAzIj48L2ltYWdlPjxwYXR0ZXJuIHdpZHRoPTc0IGhlaWdodD03MC42OTU1Nzk1Mjg4MDg2IHBhdHRlcm5Vbml0cz0idXNlclNwYWNlT25Vc2UiIGlkPSJwYXR0ZXJuMF9JNDM2NF8xMDMxNzVfMjUyXzcxODQ4XzIxNjNfNTg2MDMiPjx1c2UgaHJlZj0iI2ltYWdlMF9JNDM2NF8xMDMxNzVfMjUyXzcxODQ4XzIxNjNfNTg2MDMiIHRyYW5zZm9ybT0ibWF0cml4KDAuMTIzMzMzMzMzMzMzMzMzMzQgMCAwIDAuMTIzMzMzMzMwNjI5NzM4MjQgMCAtMS42NTIyMDg4NzMxNzQyMTY4KSI+PC91c2U+PC9wYXR0ZXJuPjwvZGVmcz48L3N2Zz4=);
        mask-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNzQiIGhlaWdodD0iNzAuNjk1NTc5NTI4ODA4NiIgdmlld0JveD0iMCAwIDc0IDcwLjY5NTU3OTUyODgwODYiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIGNsYXNzPSJwb2ludGVyLWV2ZW50cy1ub25lIiBzdHlsZT0ibGVmdDogY2FsYygtMzdweCArIDUwJSk7dG9wOiBjYWxjKC0zNS4zcHggKyA1MCUpO2FzcGVjdC1yYXRpbzogMS4wNTt3aWR0aDogNzRweDtoZWlnaHQ6IDcwLjdweDsiPjxnIGlkPSJtYXNrX0k0MzY0XzEwMzE3NV8yNTJfNzE4NDhfMjE2M181ODYwMyIgbWFza1VuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeD0iMCIgeT0iMCIgc3R5bGU9Im1hc2stdHlwZTogYWxwaGE7Ij48cGF0aCBkPSJNMCAwIEw3NCAwIEw3NCA3MC42OTU2IEwwIDcwLjY5NTYgTDAgMCBaIiBzdHlsZT0iZmlsbC1ydWxlOiBub256ZXJvO2ZpbGw6IHVybCgjcGF0dGVybjBfSTQzNjRfMTAzMTc1XzI1Ml83MTg0OF8yMTYzXzU4NjAzKTsiIC8+PC9nPjxkZWZzPjxpbWFnZSBocmVmPSJjYWxsc2l0ZTovLzExNzgiIGlkPSJpbWFnZTBfSTQzNjRfMTAzMTc1XzI1Ml83MTg0OF8yMTYzXzU4NjAzIj48L2ltYWdlPjxwYXR0ZXJuIHdpZHRoPTc0IGhlaWdodD03MC42OTU1Nzk1Mjg4MDg2IHBhdHRlcm5Vbml0cz0idXNlclNwYWNlT25Vc2UiIGlkPSJwYXR0ZXJuMF9JNDM2NF8xMDMxNzVfMjUyXzcxODQ4XzIxNjNfNTg2MDMiPjx1c2UgaHJlZj0iI2ltYWdlMF9JNDM2NF8xMDMxNzVfMjUyXzcxODQ4XzIxNjNfNTg2MDMiIHRyYW5zZm9ybT0ibWF0cml4KDAuMTIzMzMzMzMzMzMzMzMzMzQgMCAwIDAuMTIzMzMzMzMwNjI5NzM4MjQgMCAtMS42NTIyMDg4NzMxNzQyMTY4KSI+PC91c2U+PC9wYXR0ZXJuPjwvZGVmcz48L3N2Zz4=);
        -webkit-mask-position: 3.1px 6.3px;
        mask-position: 3.1px 6.3px;
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat
    }

    #Frame_2085664433_0 {
        grid-row-gap: 8px;
        --f2w-order: 1;
        flex-flow: column;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: start;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative
    }

    #Navigation_Logo_11 {
        --f2w-order: 0;
        background-color: #f2f2f2;
        flex-shrink: 0;
        width: 100px;
        height: 56px;
        margin: 0;
        position: relative;
        overflow: hidden
    }

    #Group_335_6 {
        aspect-ratio: 1.05;
        --f2w-order: 0;
        width: 80px;
        height: 76.4px;
        position: absolute;
        top: calc(50% - 38px);
        left: calc(50% - 40px)
    }

    #Rectangle_34624271_8 {
        mask-type: alpha;
        --f2w-order: 0;
        background-color: #000;
        width: 86.7px;
        height: 90px;
        position: absolute;
        top: calc(50% - 45px);
        left: calc(50% - 43.3px);
        -webkit-mask-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iODAiIGhlaWdodD0iNzYuNDI3NjU4MDgxMDU0NjkiIHZpZXdCb3g9IjAgMCA4MCA3Ni40Mjc2NTgwODEwNTQ2OSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgY2xhc3M9InBvaW50ZXItZXZlbnRzLW5vbmUiIHN0eWxlPSJsZWZ0OiBjYWxjKC00MHB4ICsgNTAlKTt0b3A6IGNhbGMoLTM4LjJweCArIDUwJSk7YXNwZWN0LXJhdGlvOiAxLjA1O3dpZHRoOiA4MHB4O2hlaWdodDogNzYuNHB4OyI+PGcgaWQ9Im1hc2tfSTQzNjRfMTAzMTc1XzI1Ml83MTg1MF8yMTYzXzU4NDY2IiBtYXNrVW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4PSIwIiB5PSIwIiBzdHlsZT0ibWFzay10eXBlOiBhbHBoYTsiPjxwYXRoIGQ9Ik0wIDAgTDgwIDAgTDgwIDc2LjQyNzcgTDAgNzYuNDI3NyBMMCAwIFoiIHN0eWxlPSJmaWxsLXJ1bGU6IG5vbnplcm87ZmlsbDogdXJsKCNwYXR0ZXJuMF9JNDM2NF8xMDMxNzVfMjUyXzcxODUwXzIxNjNfNTg0NjYpOyIgLz48L2c+PGRlZnM+PGltYWdlIGhyZWY9ImNhbGxzaXRlOi8vMTE3OSIgaWQ9ImltYWdlMF9JNDM2NF8xMDMxNzVfMjUyXzcxODUwXzIxNjNfNTg0NjYiPjwvaW1hZ2U+PHBhdHRlcm4gd2lkdGg9ODAgaGVpZ2h0PTc2LjQyNzY1ODA4MTA1NDY5IHBhdHRlcm5Vbml0cz0idXNlclNwYWNlT25Vc2UiIGlkPSJwYXR0ZXJuMF9JNDM2NF8xMDMxNzVfMjUyXzcxODUwXzIxNjNfNTg0NjYiPjx1c2UgaHJlZj0iI2ltYWdlMF9JNDM2NF8xMDMxNzVfMjUyXzcxODUwXzIxNjNfNTg0NjYiIHRyYW5zZm9ybT0ibWF0cml4KDAuNjIxMzYzMDUyMDQ1MTI5MSAwIDAgMC42MjEzNjMwNzM4Mjk3MTMgLTI3MC42ODE1MzA2NTIwNzk5NyAwKSI+PC91c2U+PC9wYXR0ZXJuPjwvZGVmcz48L3N2Zz4=);
        mask-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iODAiIGhlaWdodD0iNzYuNDI3NjU4MDgxMDU0NjkiIHZpZXdCb3g9IjAgMCA4MCA3Ni40Mjc2NTgwODEwNTQ2OSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgY2xhc3M9InBvaW50ZXItZXZlbnRzLW5vbmUiIHN0eWxlPSJsZWZ0OiBjYWxjKC00MHB4ICsgNTAlKTt0b3A6IGNhbGMoLTM4LjJweCArIDUwJSk7YXNwZWN0LXJhdGlvOiAxLjA1O3dpZHRoOiA4MHB4O2hlaWdodDogNzYuNHB4OyI+PGcgaWQ9Im1hc2tfSTQzNjRfMTAzMTc1XzI1Ml83MTg1MF8yMTYzXzU4NDY2IiBtYXNrVW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4PSIwIiB5PSIwIiBzdHlsZT0ibWFzay10eXBlOiBhbHBoYTsiPjxwYXRoIGQ9Ik0wIDAgTDgwIDAgTDgwIDc2LjQyNzcgTDAgNzYuNDI3NyBMMCAwIFoiIHN0eWxlPSJmaWxsLXJ1bGU6IG5vbnplcm87ZmlsbDogdXJsKCNwYXR0ZXJuMF9JNDM2NF8xMDMxNzVfMjUyXzcxODUwXzIxNjNfNTg0NjYpOyIgLz48L2c+PGRlZnM+PGltYWdlIGhyZWY9ImNhbGxzaXRlOi8vMTE3OSIgaWQ9ImltYWdlMF9JNDM2NF8xMDMxNzVfMjUyXzcxODUwXzIxNjNfNTg0NjYiPjwvaW1hZ2U+PHBhdHRlcm4gd2lkdGg9ODAgaGVpZ2h0PTc2LjQyNzY1ODA4MTA1NDY5IHBhdHRlcm5Vbml0cz0idXNlclNwYWNlT25Vc2UiIGlkPSJwYXR0ZXJuMF9JNDM2NF8xMDMxNzVfMjUyXzcxODUwXzIxNjNfNTg0NjYiPjx1c2UgaHJlZj0iI2ltYWdlMF9JNDM2NF8xMDMxNzVfMjUyXzcxODUwXzIxNjNfNTg0NjYiIHRyYW5zZm9ybT0ibWF0cml4KDAuNjIxMzYzMDUyMDQ1MTI5MSAwIDAgMC42MjEzNjMwNzM4Mjk3MTMgLTI3MC42ODE1MzA2NTIwNzk5NyAwKSI+PC91c2U+PC9wYXR0ZXJuPjwvZGVmcz48L3N2Zz4=);
        -webkit-mask-position: 3.3px 6.8px;
        mask-position: 3.3px 6.8px;
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat
    }

    #Navigation_Logo_12 {
        --f2w-order: 1;
        background-color: #f2f2f2;
        flex-shrink: 0;
        width: 100px;
        height: 56px;
        margin: 0;
        position: relative;
        overflow: hidden
    }

    #Group_336_1 {
        aspect-ratio: 1.05;
        --f2w-order: 0;
        width: 82px;
        height: 78.3px;
        position: absolute;
        top: calc(50% - 39.2px);
        left: calc(50% - 41px)
    }

    #Rectangle_34624271_9 {
        mask-type: alpha;
        --f2w-order: 0;
        background-color: #000;
        width: 88.9px;
        height: 92.3px;
        position: absolute;
        top: calc(50% - 46.1px);
        left: calc(50% - 44.4px);
        -webkit-mask-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iODIiIGhlaWdodD0iNzguMzM4MzQ4Mzg4NjcxODgiIHZpZXdCb3g9IjAgMCA4MiA3OC4zMzgzNDgzODg2NzE4OCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgY2xhc3M9InBvaW50ZXItZXZlbnRzLW5vbmUiIHN0eWxlPSJsZWZ0OiBjYWxjKC00MXB4ICsgNTAlKTt0b3A6IGNhbGMoLTM5LjJweCArIDUwJSk7YXNwZWN0LXJhdGlvOiAxLjA1O3dpZHRoOiA4MnB4O2hlaWdodDogNzguM3B4OyI+PGcgaWQ9Im1hc2tfSTQzNjRfMTAzMTc1XzI1Ml83MTg1MV8yMTYzXzU4NjExIiBtYXNrVW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4PSIwIiB5PSIwIiBzdHlsZT0ibWFzay10eXBlOiBhbHBoYTsiPjxwYXRoIGQ9Ik0wIDAgTDgyIDAgTDgyIDc4LjMzODMgTDAgNzguMzM4MyBMMCAwIFoiIHN0eWxlPSJmaWxsLXJ1bGU6IG5vbnplcm87ZmlsbDogdXJsKCNwYXR0ZXJuMF9JNDM2NF8xMDMxNzVfMjUyXzcxODUxXzIxNjNfNTg2MTEpOyIgLz48L2c+PGRlZnM+PGltYWdlIGhyZWY9ImNhbGxzaXRlOi8vMTE4MCIgaWQ9ImltYWdlMF9JNDM2NF8xMDMxNzVfMjUyXzcxODUxXzIxNjNfNTg2MTEiPjwvaW1hZ2U+PHBhdHRlcm4gd2lkdGg9ODIgaGVpZ2h0PTc4LjMzODM0ODM4ODY3MTg4IHBhdHRlcm5Vbml0cz0idXNlclNwYWNlT25Vc2UiIGlkPSJwYXR0ZXJuMF9JNDM2NF8xMDMxNzVfMjUyXzcxODUxXzIxNjNfNTg2MTEiPjx1c2UgaHJlZj0iI2ltYWdlMF9JNDM2NF8xMDMxNzVfMjUyXzcxODUxXzIxNjNfNTg2MTEiIHRyYW5zZm9ybT0ibWF0cml4KDAuNTI5MzEzMTg2MjI1MTIxNCAwIDAgMC41MjkzMTMxNjQ3ODgzMjM1IC0xMjAuNDQwNTE2OTg3MzU5NTMgMCkiPjwvdXNlPjwvcGF0dGVybj48L2RlZnM+PC9zdmc+);
        mask-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iODIiIGhlaWdodD0iNzguMzM4MzQ4Mzg4NjcxODgiIHZpZXdCb3g9IjAgMCA4MiA3OC4zMzgzNDgzODg2NzE4OCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgY2xhc3M9InBvaW50ZXItZXZlbnRzLW5vbmUiIHN0eWxlPSJsZWZ0OiBjYWxjKC00MXB4ICsgNTAlKTt0b3A6IGNhbGMoLTM5LjJweCArIDUwJSk7YXNwZWN0LXJhdGlvOiAxLjA1O3dpZHRoOiA4MnB4O2hlaWdodDogNzguM3B4OyI+PGcgaWQ9Im1hc2tfSTQzNjRfMTAzMTc1XzI1Ml83MTg1MV8yMTYzXzU4NjExIiBtYXNrVW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4PSIwIiB5PSIwIiBzdHlsZT0ibWFzay10eXBlOiBhbHBoYTsiPjxwYXRoIGQ9Ik0wIDAgTDgyIDAgTDgyIDc4LjMzODMgTDAgNzguMzM4MyBMMCAwIFoiIHN0eWxlPSJmaWxsLXJ1bGU6IG5vbnplcm87ZmlsbDogdXJsKCNwYXR0ZXJuMF9JNDM2NF8xMDMxNzVfMjUyXzcxODUxXzIxNjNfNTg2MTEpOyIgLz48L2c+PGRlZnM+PGltYWdlIGhyZWY9ImNhbGxzaXRlOi8vMTE4MCIgaWQ9ImltYWdlMF9JNDM2NF8xMDMxNzVfMjUyXzcxODUxXzIxNjNfNTg2MTEiPjwvaW1hZ2U+PHBhdHRlcm4gd2lkdGg9ODIgaGVpZ2h0PTc4LjMzODM0ODM4ODY3MTg4IHBhdHRlcm5Vbml0cz0idXNlclNwYWNlT25Vc2UiIGlkPSJwYXR0ZXJuMF9JNDM2NF8xMDMxNzVfMjUyXzcxODUxXzIxNjNfNTg2MTEiPjx1c2UgaHJlZj0iI2ltYWdlMF9JNDM2NF8xMDMxNzVfMjUyXzcxODUxXzIxNjNfNTg2MTEiIHRyYW5zZm9ybT0ibWF0cml4KDAuNTI5MzEzMTg2MjI1MTIxNCAwIDAgMC41MjkzMTMxNjQ3ODgzMjM1IC0xMjAuNDQwNTE2OTg3MzU5NTMgMCkiPjwvdXNlPjwvcGF0dGVybj48L2RlZnM+PC9zdmc+);
        -webkit-mask-position: 3.4px 7px;
        mask-position: 3.4px 7px;
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat
    }

    #Navigation_Logo_13 {
        --f2w-order: 2;
        background-color: #f2f2f2;
        flex-shrink: 0;
        width: 100px;
        height: 56px;
        margin: 0;
        position: relative;
        overflow: hidden
    }

    #Group_335_7 {
        aspect-ratio: 1.05;
        --f2w-order: 0;
        width: 81.6px;
        height: 78px;
        position: absolute;
        top: -11px;
        left: calc(50% - 40.8px)
    }

    #Rectangle_34624271_10 {
        mask-type: alpha;
        --f2w-order: 0;
        background-color: #000;
        width: 88.5px;
        height: 91.9px;
        position: absolute;
        top: calc(50% - 45.9px);
        left: calc(50% - 44.2px);
        -webkit-mask-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iODEuNjQ1NzI5MDY0OTQxNCIgaGVpZ2h0PSI3Ny45OTk4OTMxODg0NzY1NiIgdmlld0JveD0iMCAwIDgxLjY0NTcyOTA2NDk0MTQgNzcuOTk5ODkzMTg4NDc2NTYiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIGNsYXNzPSJwb2ludGVyLWV2ZW50cy1ub25lIiBzdHlsZT0ibGVmdDogY2FsYygtNDAuOHB4ICsgNTAlKTt0b3A6IGNhbGMoLTM5cHggKyA1MCUpO2FzcGVjdC1yYXRpbzogMS4wNTt3aWR0aDogODEuNnB4O2hlaWdodDogNzhweDsiPjxnIGlkPSJtYXNrX0k0MzY0XzEwMzE3NV8yNTJfNzE4NTJfMjE2M181ODYxOSIgbWFza1VuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeD0iMCIgeT0iMCIgc3R5bGU9Im1hc2stdHlwZTogYWxwaGE7Ij48L2c+PC9zdmc+);
        mask-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iODEuNjQ1NzI5MDY0OTQxNCIgaGVpZ2h0PSI3Ny45OTk4OTMxODg0NzY1NiIgdmlld0JveD0iMCAwIDgxLjY0NTcyOTA2NDk0MTQgNzcuOTk5ODkzMTg4NDc2NTYiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIGNsYXNzPSJwb2ludGVyLWV2ZW50cy1ub25lIiBzdHlsZT0ibGVmdDogY2FsYygtNDAuOHB4ICsgNTAlKTt0b3A6IGNhbGMoLTM5cHggKyA1MCUpO2FzcGVjdC1yYXRpbzogMS4wNTt3aWR0aDogODEuNnB4O2hlaWdodDogNzhweDsiPjxnIGlkPSJtYXNrX0k0MzY0XzEwMzE3NV8yNTJfNzE4NTJfMjE2M181ODYxOSIgbWFza1VuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeD0iMCIgeT0iMCIgc3R5bGU9Im1hc2stdHlwZTogYWxwaGE7Ij48L2c+PC9zdmc+);
        -webkit-mask-position: 3.4px 6.9px;
        mask-position: 3.4px 6.9px;
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat
    }

    #logo_1 {
        mask-type: alpha;
        --f2w-order: 1;
        width: 77.2px;
        height: 15.4px;
        position: absolute;
        top: 31.3px;
        left: calc(50% - 38.6px);
        overflow: hidden;
        -webkit-mask-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iODEuNjQ1NzI5MDY0OTQxNCIgaGVpZ2h0PSI3Ny45OTk4OTMxODg0NzY1NiIgdmlld0JveD0iMCAwIDgxLjY0NTcyOTA2NDk0MTQgNzcuOTk5ODkzMTg4NDc2NTYiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIGNsYXNzPSJwb2ludGVyLWV2ZW50cy1ub25lIiBzdHlsZT0ibGVmdDogY2FsYygtNDAuOHB4ICsgNTAlKTt0b3A6IGNhbGMoLTM5cHggKyA1MCUpO2FzcGVjdC1yYXRpbzogMS4wNTt3aWR0aDogODEuNnB4O2hlaWdodDogNzhweDsiPjxnIGlkPSJtYXNrX0k0MzY0XzEwMzE3NV8yNTJfNzE4NTJfMjE2M181ODYxOSIgbWFza1VuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeD0iMCIgeT0iMCIgc3R5bGU9Im1hc2stdHlwZTogYWxwaGE7Ij48L2c+PC9zdmc+);
        mask-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iODEuNjQ1NzI5MDY0OTQxNCIgaGVpZ2h0PSI3Ny45OTk4OTMxODg0NzY1NiIgdmlld0JveD0iMCAwIDgxLjY0NTcyOTA2NDk0MTQgNzcuOTk5ODkzMTg4NDc2NTYiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIGNsYXNzPSJwb2ludGVyLWV2ZW50cy1ub25lIiBzdHlsZT0ibGVmdDogY2FsYygtNDAuOHB4ICsgNTAlKTt0b3A6IGNhbGMoLTM5cHggKyA1MCUpO2FzcGVjdC1yYXRpbzogMS4wNTt3aWR0aDogODEuNnB4O2hlaWdodDogNzhweDsiPjxnIGlkPSJtYXNrX0k0MzY0XzEwMzE3NV8yNTJfNzE4NTJfMjE2M181ODYxOSIgbWFza1VuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeD0iMCIgeT0iMCIgc3R5bGU9Im1hc2stdHlwZTogYWxwaGE7Ij48L2c+PC9zdmc+);
        -webkit-mask-position: -2.2px -31.3px;
        mask-position: -2.2px -31.3px;
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat
    }

    #Group_0 {
        --f2w-order: 0;
        width: 101.1%;
        height: 103.7%;
        position: absolute;
        top: -2.6%;
        left: -.4%
    }

    #Navigation_Logo_14 {
        --f2w-order: 3;
        background-color: #f2f2f2;
        flex-shrink: 0;
        width: 100px;
        height: 56px;
        margin: 0;
        position: relative;
        overflow: hidden
    }

    #Group_336_2 {
        aspect-ratio: 1.05;
        --f2w-order: 0;
        width: 75px;
        height: 71.6px;
        position: absolute;
        top: calc(50% - 36px);
        left: calc(50% - 37px)
    }

    #Rectangle_34624271_11 {
        mask-type: alpha;
        --f2w-order: 0;
        background-color: #000;
        width: 81.2px;
        height: 84.3px;
        position: absolute;
        top: calc(50% - 42.2px);
        left: calc(50% - 40.6px);
        -webkit-mask-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNzQuOTU3MDMxMjUiIGhlaWdodD0iNzEuNjA5ODc4NTQwMDM5MDYiIHZpZXdCb3g9IjAgMCA3NC45NTcwMzEyNSA3MS42MDk4Nzg1NDAwMzkwNiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgY2xhc3M9InBvaW50ZXItZXZlbnRzLW5vbmUiIHN0eWxlPSJsZWZ0OiBjYWxjKC0zNy41cHggKyA1MCUpO3RvcDogY2FsYygtMzUuOHB4ICsgNTAlKTthc3BlY3QtcmF0aW86IDEuMDU7d2lkdGg6IDc1cHg7aGVpZ2h0OiA3MS42cHg7Ij48ZyBpZD0ibWFza19JNDM2NF8xMDMxNzVfMjUyXzcxODUzXzIxNjNfNTg2NjYiIG1hc2tVbml0cz0idXNlclNwYWNlT25Vc2UiIHg9IjAiIHk9IjAiIHN0eWxlPSJtYXNrLXR5cGU6IGFscGhhOyI+PHBhdGggZD0iTTAgMCBMNzQuOTU3IDAgTDc0Ljk1NyA3MS42MDk5IEwwIDcxLjYwOTkgTDAgMCBaIiBzdHlsZT0iZmlsbC1ydWxlOiBub256ZXJvO2ZpbGw6IHVybCgjcGF0dGVybjBfSTQzNjRfMTAzMTc1XzI1Ml83MTg1M18yMTYzXzU4NjY2KTsiIC8+PC9nPjxkZWZzPjxpbWFnZSBocmVmPSJjYWxsc2l0ZTovLzExODEiIGlkPSJpbWFnZTBfSTQzNjRfMTAzMTc1XzI1Ml83MTg1M18yMTYzXzU4NjY2Ij48L2ltYWdlPjxwYXR0ZXJuIHdpZHRoPTc0Ljk1NzAzMTI1IGhlaWdodD03MS42MDk4Nzg1NDAwMzkwNiBwYXR0ZXJuVW5pdHM9InVzZXJTcGFjZU9uVXNlIiBpZD0icGF0dGVybjBfSTQzNjRfMTAzMTc1XzI1Ml83MTg1M18yMTYzXzU4NjY2Ij48dXNlIGhyZWY9IiNpbWFnZTBfSTQzNjRfMTAzMTc1XzI1Ml83MTg1M18yMTYzXzU4NjY2IiB0cmFuc2Zvcm09Im1hdHJpeCgwLjE4MTc1MDk2MDk2NDQxNzQgMCAwIDAuMTgxNzUwOTYwNzYxNTIwNDUgLTI2LjEzNDMyMDcxMjU0NjEgMCkiPjwvdXNlPjwvcGF0dGVybj48L2RlZnM+PC9zdmc+);
        mask-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNzQuOTU3MDMxMjUiIGhlaWdodD0iNzEuNjA5ODc4NTQwMDM5MDYiIHZpZXdCb3g9IjAgMCA3NC45NTcwMzEyNSA3MS42MDk4Nzg1NDAwMzkwNiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgY2xhc3M9InBvaW50ZXItZXZlbnRzLW5vbmUiIHN0eWxlPSJsZWZ0OiBjYWxjKC0zNy41cHggKyA1MCUpO3RvcDogY2FsYygtMzUuOHB4ICsgNTAlKTthc3BlY3QtcmF0aW86IDEuMDU7d2lkdGg6IDc1cHg7aGVpZ2h0OiA3MS42cHg7Ij48ZyBpZD0ibWFza19JNDM2NF8xMDMxNzVfMjUyXzcxODUzXzIxNjNfNTg2NjYiIG1hc2tVbml0cz0idXNlclNwYWNlT25Vc2UiIHg9IjAiIHk9IjAiIHN0eWxlPSJtYXNrLXR5cGU6IGFscGhhOyI+PHBhdGggZD0iTTAgMCBMNzQuOTU3IDAgTDc0Ljk1NyA3MS42MDk5IEwwIDcxLjYwOTkgTDAgMCBaIiBzdHlsZT0iZmlsbC1ydWxlOiBub256ZXJvO2ZpbGw6IHVybCgjcGF0dGVybjBfSTQzNjRfMTAzMTc1XzI1Ml83MTg1M18yMTYzXzU4NjY2KTsiIC8+PC9nPjxkZWZzPjxpbWFnZSBocmVmPSJjYWxsc2l0ZTovLzExODEiIGlkPSJpbWFnZTBfSTQzNjRfMTAzMTc1XzI1Ml83MTg1M18yMTYzXzU4NjY2Ij48L2ltYWdlPjxwYXR0ZXJuIHdpZHRoPTc0Ljk1NzAzMTI1IGhlaWdodD03MS42MDk4Nzg1NDAwMzkwNiBwYXR0ZXJuVW5pdHM9InVzZXJTcGFjZU9uVXNlIiBpZD0icGF0dGVybjBfSTQzNjRfMTAzMTc1XzI1Ml83MTg1M18yMTYzXzU4NjY2Ij48dXNlIGhyZWY9IiNpbWFnZTBfSTQzNjRfMTAzMTc1XzI1Ml83MTg1M18yMTYzXzU4NjY2IiB0cmFuc2Zvcm09Im1hdHJpeCgwLjE4MTc1MDk2MDk2NDQxNzQgMCAwIDAuMTgxNzUwOTYwNzYxNTIwNDUgLTI2LjEzNDMyMDcxMjU0NjEgMCkiPjwvdXNlPjwvcGF0dGVybj48L2RlZnM+PC9zdmc+);
        -webkit-mask-position: 3.1px 6.4px;
        mask-position: 3.1px 6.4px;
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat
    }

    #Frame_2085664435_1 {
        grid-row-gap: 32px;
        --f2w-order: 2;
        flex-flow: column;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: start;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative
    }

    #Frame_2085664425_1 {
        grid-column-gap: 10px;
        --f2w-order: 0;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: center;
        align-items: center;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative
    }

    #I4364_103175_252_71869 {
        text-align: left;
        overflow-wrap: break-word;
        color: #8e8e8e;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        flex-shrink: 0;
        width: max-content;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 600;
        line-height: 130%;
        display: inline;
        position: relative
    }

    #__116 {
        overflow-wrap: break-word;
        color: #8e8e8e;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 600;
        line-height: 130%
    }

    #Frame_2085664437 {
        grid-column-gap: 40px;
        --f2w-order: 1;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: start;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative
    }

    #Frame_2085664435_2 {
        grid-column-gap: 8px;
        --f2w-order: 0;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: start;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative
    }

    #Frame_2085664432_1 {
        grid-row-gap: 8px;
        --f2w-order: 0;
        flex-flow: column;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: start;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative
    }

    #Navigation_Logo_15 {
        --f2w-order: 0;
        background-color: #f2f2f2;
        flex-shrink: 0;
        width: 100px;
        height: 56px;
        margin: 0;
        position: relative;
        overflow: hidden
    }

    #Group_335_8 {
        aspect-ratio: 1.05;
        --f2w-order: 0;
        width: 90px;
        height: 86px;
        position: absolute;
        top: calc(50% - 43px);
        left: calc(50% - 45px)
    }

    #Rectangle_34624271_12 {
        mask-type: alpha;
        --f2w-order: 0;
        background-color: #000;
        width: 97.6px;
        height: 101.3px;
        position: absolute;
        top: calc(50% - 50.6px);
        left: calc(50% - 48.8px);
        -webkit-mask-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iOTAuMDE5ODgyMjAyMTQ4NDQiIGhlaWdodD0iODYuMDAwMTA2ODExNTIzNDQiIHZpZXdCb3g9IjAgMCA5MC4wMTk4ODIyMDIxNDg0NCA4Ni4wMDAxMDY4MTE1MjM0NCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgY2xhc3M9InBvaW50ZXItZXZlbnRzLW5vbmUiIHN0eWxlPSJsZWZ0OiBjYWxjKC00NXB4ICsgNTAlKTt0b3A6IGNhbGMoLTQzcHggKyA1MCUpO2FzcGVjdC1yYXRpbzogMS4wNTt3aWR0aDogOTBweDtoZWlnaHQ6IDg2cHg7Ij48ZyBpZD0ibWFza19JNDM2NF8xMDMxNzVfMjUyXzcxODcyXzIxNjNfNTg2OTkiIG1hc2tVbml0cz0idXNlclNwYWNlT25Vc2UiIHg9IjAiIHk9IjAiIHN0eWxlPSJtYXNrLXR5cGU6IGFscGhhOyI+PHBhdGggZD0iTTAgMCBMOTAuMDE5OSAwIEw5MC4wMTk5IDg2LjAwMDEgTDAgODYuMDAwMSBMMCAwIFoiIHN0eWxlPSJmaWxsLXJ1bGU6IG5vbnplcm87ZmlsbDogdXJsKCNwYXR0ZXJuMF9JNDM2NF8xMDMxNzVfMjUyXzcxODcyXzIxNjNfNTg2OTkpOyIgLz48L2c+PGRlZnM+PGltYWdlIGhyZWY9ImNhbGxzaXRlOi8vMTE4NCIgaWQ9ImltYWdlMF9JNDM2NF8xMDMxNzVfMjUyXzcxODcyXzIxNjNfNTg2OTkiPjwvaW1hZ2U+PHBhdHRlcm4gd2lkdGg9OTAuMDE5ODgyMjAyMTQ4NDQgaGVpZ2h0PTg2LjAwMDEwNjgxMTUyMzQ0IHBhdHRlcm5Vbml0cz0idXNlclNwYWNlT25Vc2UiIGlkPSJwYXR0ZXJuMF9JNDM2NF8xMDMxNzVfMjUyXzcxODcyXzIxNjNfNTg2OTkiPjx1c2UgaHJlZj0iI2ltYWdlMF9JNDM2NF8xMDMxNzVfMjUyXzcxODcyXzIxNjNfNTg2OTkiIHRyYW5zZm9ybT0ibWF0cml4KDAuMjIyNzk4MjE0OTA4MTY3OTIgMCAwIDAuMjIyNzk4MjA0MTc0OTMxMTggLTQxMS4yODA3OTk2MzEyMjI3NSAwKSI+PC91c2U+PC9wYXR0ZXJuPjwvZGVmcz48L3N2Zz4=);
        mask-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iOTAuMDE5ODgyMjAyMTQ4NDQiIGhlaWdodD0iODYuMDAwMTA2ODExNTIzNDQiIHZpZXdCb3g9IjAgMCA5MC4wMTk4ODIyMDIxNDg0NCA4Ni4wMDAxMDY4MTE1MjM0NCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgY2xhc3M9InBvaW50ZXItZXZlbnRzLW5vbmUiIHN0eWxlPSJsZWZ0OiBjYWxjKC00NXB4ICsgNTAlKTt0b3A6IGNhbGMoLTQzcHggKyA1MCUpO2FzcGVjdC1yYXRpbzogMS4wNTt3aWR0aDogOTBweDtoZWlnaHQ6IDg2cHg7Ij48ZyBpZD0ibWFza19JNDM2NF8xMDMxNzVfMjUyXzcxODcyXzIxNjNfNTg2OTkiIG1hc2tVbml0cz0idXNlclNwYWNlT25Vc2UiIHg9IjAiIHk9IjAiIHN0eWxlPSJtYXNrLXR5cGU6IGFscGhhOyI+PHBhdGggZD0iTTAgMCBMOTAuMDE5OSAwIEw5MC4wMTk5IDg2LjAwMDEgTDAgODYuMDAwMSBMMCAwIFoiIHN0eWxlPSJmaWxsLXJ1bGU6IG5vbnplcm87ZmlsbDogdXJsKCNwYXR0ZXJuMF9JNDM2NF8xMDMxNzVfMjUyXzcxODcyXzIxNjNfNTg2OTkpOyIgLz48L2c+PGRlZnM+PGltYWdlIGhyZWY9ImNhbGxzaXRlOi8vMTE4NCIgaWQ9ImltYWdlMF9JNDM2NF8xMDMxNzVfMjUyXzcxODcyXzIxNjNfNTg2OTkiPjwvaW1hZ2U+PHBhdHRlcm4gd2lkdGg9OTAuMDE5ODgyMjAyMTQ4NDQgaGVpZ2h0PTg2LjAwMDEwNjgxMTUyMzQ0IHBhdHRlcm5Vbml0cz0idXNlclNwYWNlT25Vc2UiIGlkPSJwYXR0ZXJuMF9JNDM2NF8xMDMxNzVfMjUyXzcxODcyXzIxNjNfNTg2OTkiPjx1c2UgaHJlZj0iI2ltYWdlMF9JNDM2NF8xMDMxNzVfMjUyXzcxODcyXzIxNjNfNTg2OTkiIHRyYW5zZm9ybT0ibWF0cml4KDAuMjIyNzk4MjE0OTA4MTY3OTIgMCAwIDAuMjIyNzk4MjA0MTc0OTMxMTggLTQxMS4yODA3OTk2MzEyMjI3NSAwKSI+PC91c2U+PC9wYXR0ZXJuPjwvZGVmcz48L3N2Zz4=);
        -webkit-mask-position: 3.8px 7.6px;
        mask-position: 3.8px 7.6px;
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat
    }

    #Navigation_Logo_16 {
        --f2w-order: 1;
        background-color: #f2f2f2;
        flex-shrink: 0;
        width: 100px;
        height: 56px;
        margin: 0;
        position: relative;
        overflow: hidden
    }

    #Group_335_9 {
        aspect-ratio: 1.05;
        --f2w-order: 0;
        width: 100.5px;
        height: 96px;
        position: absolute;
        top: calc(50% - 48px);
        left: calc(50% - 50.2px)
    }

    #Rectangle_34624271_13 {
        mask-type: alpha;
        --f2w-order: 0;
        background-color: #000;
        width: 108.9px;
        height: 113.1px;
        position: absolute;
        top: calc(50% - 56.5px);
        left: calc(50% - 54.4px);
        -webkit-mask-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAwLjQ4NzI5NzA1ODEwNTQ3IiBoZWlnaHQ9Ijk2LjAwMDEwNjgxMTUyMzQ0IiB2aWV3Qm94PSIwIDAgMTAwLjQ4NzI5NzA1ODEwNTQ3IDk2LjAwMDEwNjgxMTUyMzQ0IiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiBjbGFzcz0icG9pbnRlci1ldmVudHMtbm9uZSIgc3R5bGU9ImxlZnQ6IGNhbGMoLTUwLjJweCArIDUwJSk7dG9wOiBjYWxjKC00OHB4ICsgNTAlKTthc3BlY3QtcmF0aW86IDEuMDU7d2lkdGg6IDEwMC41cHg7aGVpZ2h0OiA5NnB4OyI+PGcgaWQ9Im1hc2tfSTQzNjRfMTAzMTc1XzI1Ml83MTg3M18yMTYzXzU4Njc0IiBtYXNrVW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4PSIwIiB5PSIwIiBzdHlsZT0ibWFzay10eXBlOiBhbHBoYTsiPjxwYXRoIGQ9Ik0wIDAgTDEwMC40ODcgMCBMMTAwLjQ4NyA5Ni4wMDAxIEwwIDk2LjAwMDEgTDAgMCBaIiBzdHlsZT0iZmlsbC1ydWxlOiBub256ZXJvO2ZpbGw6IHVybCgjcGF0dGVybjBfSTQzNjRfMTAzMTc1XzI1Ml83MTg3M18yMTYzXzU4Njc0KTsiIC8+PC9nPjxkZWZzPjxpbWFnZSBocmVmPSJjYWxsc2l0ZTovLzExODUiIGlkPSJpbWFnZTBfSTQzNjRfMTAzMTc1XzI1Ml83MTg3M18yMTYzXzU4Njc0Ij48L2ltYWdlPjxwYXR0ZXJuIHdpZHRoPTEwMC40ODcyOTcwNTgxMDU0NyBoZWlnaHQ9OTYuMDAwMTA2ODExNTIzNDQgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgaWQ9InBhdHRlcm4wX0k0MzY0XzEwMzE3NV8yNTJfNzE4NzNfMjE2M181ODY3NCI+PHVzZSBocmVmPSIjaW1hZ2UwX0k0MzY0XzEwMzE3NV8yNTJfNzE4NzNfMjE2M181ODY3NCIgdHJhbnNmb3JtPSJtYXRyaXgoMC4yMjIyMjI0NzUzMDI0MTA1NyAwIDAgMC4yMjIyMjI0Njk0NzExMTkwNyAtMzUuMDg5NzgxOTg3MDcyOTMgMCkiPjwvdXNlPjwvcGF0dGVybj48L2RlZnM+PC9zdmc+);
        mask-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAwLjQ4NzI5NzA1ODEwNTQ3IiBoZWlnaHQ9Ijk2LjAwMDEwNjgxMTUyMzQ0IiB2aWV3Qm94PSIwIDAgMTAwLjQ4NzI5NzA1ODEwNTQ3IDk2LjAwMDEwNjgxMTUyMzQ0IiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiBjbGFzcz0icG9pbnRlci1ldmVudHMtbm9uZSIgc3R5bGU9ImxlZnQ6IGNhbGMoLTUwLjJweCArIDUwJSk7dG9wOiBjYWxjKC00OHB4ICsgNTAlKTthc3BlY3QtcmF0aW86IDEuMDU7d2lkdGg6IDEwMC41cHg7aGVpZ2h0OiA5NnB4OyI+PGcgaWQ9Im1hc2tfSTQzNjRfMTAzMTc1XzI1Ml83MTg3M18yMTYzXzU4Njc0IiBtYXNrVW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4PSIwIiB5PSIwIiBzdHlsZT0ibWFzay10eXBlOiBhbHBoYTsiPjxwYXRoIGQ9Ik0wIDAgTDEwMC40ODcgMCBMMTAwLjQ4NyA5Ni4wMDAxIEwwIDk2LjAwMDEgTDAgMCBaIiBzdHlsZT0iZmlsbC1ydWxlOiBub256ZXJvO2ZpbGw6IHVybCgjcGF0dGVybjBfSTQzNjRfMTAzMTc1XzI1Ml83MTg3M18yMTYzXzU4Njc0KTsiIC8+PC9nPjxkZWZzPjxpbWFnZSBocmVmPSJjYWxsc2l0ZTovLzExODUiIGlkPSJpbWFnZTBfSTQzNjRfMTAzMTc1XzI1Ml83MTg3M18yMTYzXzU4Njc0Ij48L2ltYWdlPjxwYXR0ZXJuIHdpZHRoPTEwMC40ODcyOTcwNTgxMDU0NyBoZWlnaHQ9OTYuMDAwMTA2ODExNTIzNDQgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgaWQ9InBhdHRlcm4wX0k0MzY0XzEwMzE3NV8yNTJfNzE4NzNfMjE2M181ODY3NCI+PHVzZSBocmVmPSIjaW1hZ2UwX0k0MzY0XzEwMzE3NV8yNTJfNzE4NzNfMjE2M181ODY3NCIgdHJhbnNmb3JtPSJtYXRyaXgoMC4yMjIyMjI0NzUzMDI0MTA1NyAwIDAgMC4yMjIyMjI0Njk0NzExMTkwNyAtMzUuMDg5NzgxOTg3MDcyOTMgMCkiPjwvdXNlPjwvcGF0dGVybj48L2RlZnM+PC9zdmc+);
        -webkit-mask-position: 4.2px 8.5px;
        mask-position: 4.2px 8.5px;
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat
    }

    #Navigation_Logo_17 {
        --f2w-order: 2;
        background-color: #f2f2f2;
        flex-shrink: 0;
        width: 100px;
        height: 56px;
        margin: 0;
        position: relative;
        overflow: hidden
    }

    #Group_336_3 {
        aspect-ratio: 1.05;
        --f2w-order: 0;
        width: 85.8px;
        height: 82px;
        position: absolute;
        top: calc(50% - 41px);
        left: calc(50% - 42.9px)
    }

    #Rectangle_34624271_14 {
        mask-type: alpha;
        --f2w-order: 0;
        background-color: #000;
        width: 93px;
        height: 96.6px;
        position: absolute;
        top: calc(50% - 48.3px);
        left: calc(50% - 46.5px);
        -webkit-mask-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iODUuODMyOTE2MjU5NzY1NjIiIGhlaWdodD0iODIuMDAwMTA2ODExNTIzNDQiIHZpZXdCb3g9IjAgMCA4NS44MzI5MTYyNTk3NjU2MiA4Mi4wMDAxMDY4MTE1MjM0NCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgY2xhc3M9InBvaW50ZXItZXZlbnRzLW5vbmUiIHN0eWxlPSJsZWZ0OiBjYWxjKC00Mi45cHggKyA1MCUpO3RvcDogY2FsYygtNDFweCArIDUwJSk7YXNwZWN0LXJhdGlvOiAxLjA1O3dpZHRoOiA4NS44cHg7aGVpZ2h0OiA4MnB4OyI+PGcgaWQ9Im1hc2tfSTQzNjRfMTAzMTc1XzI1Ml83MTg3NF8yMTYzXzU4NjgyIiBtYXNrVW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4PSIwIiB5PSIwIiBzdHlsZT0ibWFzay10eXBlOiBhbHBoYTsiPjxwYXRoIGQ9Ik0wIDAgTDg1LjgzMjkgMCBMODUuODMyOSA4Mi4wMDAxIEwwIDgyLjAwMDEgTDAgMCBaIiBzdHlsZT0iZmlsbC1ydWxlOiBub256ZXJvO2ZpbGw6IHVybCgjcGF0dGVybjBfSTQzNjRfMTAzMTc1XzI1Ml83MTg3NF8yMTYzXzU4NjgyKTsiIC8+PC9nPjxkZWZzPjxpbWFnZSBocmVmPSJjYWxsc2l0ZTovLzExODYiIGlkPSJpbWFnZTBfSTQzNjRfMTAzMTc1XzI1Ml83MTg3NF8yMTYzXzU4NjgyIj48L2ltYWdlPjxwYXR0ZXJuIHdpZHRoPTg1LjgzMjkxNjI1OTc2NTYyIGhlaWdodD04Mi4wMDAxMDY4MTE1MjM0NCBwYXR0ZXJuVW5pdHM9InVzZXJTcGFjZU9uVXNlIiBpZD0icGF0dGVybjBfSTQzNjRfMTAzMTc1XzI1Ml83MTg3NF8yMTYzXzU4NjgyIj48dXNlIGhyZWY9IiNpbWFnZTBfSTQzNjRfMTAzMTc1XzI1Ml83MTg3NF8yMTYzXzU4NjgyIiB0cmFuc2Zvcm09Im1hdHJpeCgwLjI5MTgxNTM0NDQ0ODE2OTc2IDAgMCAwLjI5MTgxNTMyNjczMTQwMDEgLTMwLjAzNzM3NTgwNzk2NTg3NiAwKSI+PC91c2U+PC9wYXR0ZXJuPjwvZGVmcz48L3N2Zz4=);
        mask-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iODUuODMyOTE2MjU5NzY1NjIiIGhlaWdodD0iODIuMDAwMTA2ODExNTIzNDQiIHZpZXdCb3g9IjAgMCA4NS44MzI5MTYyNTk3NjU2MiA4Mi4wMDAxMDY4MTE1MjM0NCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgY2xhc3M9InBvaW50ZXItZXZlbnRzLW5vbmUiIHN0eWxlPSJsZWZ0OiBjYWxjKC00Mi45cHggKyA1MCUpO3RvcDogY2FsYygtNDFweCArIDUwJSk7YXNwZWN0LXJhdGlvOiAxLjA1O3dpZHRoOiA4NS44cHg7aGVpZ2h0OiA4MnB4OyI+PGcgaWQ9Im1hc2tfSTQzNjRfMTAzMTc1XzI1Ml83MTg3NF8yMTYzXzU4NjgyIiBtYXNrVW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4PSIwIiB5PSIwIiBzdHlsZT0ibWFzay10eXBlOiBhbHBoYTsiPjxwYXRoIGQ9Ik0wIDAgTDg1LjgzMjkgMCBMODUuODMyOSA4Mi4wMDAxIEwwIDgyLjAwMDEgTDAgMCBaIiBzdHlsZT0iZmlsbC1ydWxlOiBub256ZXJvO2ZpbGw6IHVybCgjcGF0dGVybjBfSTQzNjRfMTAzMTc1XzI1Ml83MTg3NF8yMTYzXzU4NjgyKTsiIC8+PC9nPjxkZWZzPjxpbWFnZSBocmVmPSJjYWxsc2l0ZTovLzExODYiIGlkPSJpbWFnZTBfSTQzNjRfMTAzMTc1XzI1Ml83MTg3NF8yMTYzXzU4NjgyIj48L2ltYWdlPjxwYXR0ZXJuIHdpZHRoPTg1LjgzMjkxNjI1OTc2NTYyIGhlaWdodD04Mi4wMDAxMDY4MTE1MjM0NCBwYXR0ZXJuVW5pdHM9InVzZXJTcGFjZU9uVXNlIiBpZD0icGF0dGVybjBfSTQzNjRfMTAzMTc1XzI1Ml83MTg3NF8yMTYzXzU4NjgyIj48dXNlIGhyZWY9IiNpbWFnZTBfSTQzNjRfMTAzMTc1XzI1Ml83MTg3NF8yMTYzXzU4NjgyIiB0cmFuc2Zvcm09Im1hdHJpeCgwLjI5MTgxNTM0NDQ0ODE2OTc2IDAgMCAwLjI5MTgxNTMyNjczMTQwMDEgLTMwLjAzNzM3NTgwNzk2NTg3NiAwKSI+PC91c2U+PC9wYXR0ZXJuPjwvZGVmcz48L3N2Zz4=);
        -webkit-mask-position: 3.6px 7.3px;
        mask-position: 3.6px 7.3px;
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat
    }

    #Navigation_Logo_18 {
        --f2w-order: 3;
        background-color: #f2f2f2;
        flex-shrink: 0;
        width: 100px;
        height: 56px;
        margin: 0;
        position: relative;
        overflow: hidden
    }

    #Group_335_10 {
        aspect-ratio: 1.05;
        --f2w-order: 0;
        width: 83.7px;
        height: 80px;
        position: absolute;
        top: calc(50% - 40px);
        left: calc(50% - 41.9px)
    }

    #Rectangle_34624271_15 {
        mask-type: alpha;
        --f2w-order: 0;
        background-color: #000;
        width: 90.7px;
        height: 94.2px;
        position: absolute;
        top: calc(50% - 47.1px);
        left: calc(50% - 45.4px);
        -webkit-mask-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iODMuNzM5NDMzMjg4NTc0MjIiIGhlaWdodD0iODAuMDAwMTA2ODExNTIzNDQiIHZpZXdCb3g9IjAgMCA4My43Mzk0MzMyODg1NzQyMiA4MC4wMDAxMDY4MTE1MjM0NCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgY2xhc3M9InBvaW50ZXItZXZlbnRzLW5vbmUiIHN0eWxlPSJsZWZ0OiBjYWxjKC00MS45cHggKyA1MCUpO3RvcDogY2FsYygtNDBweCArIDUwJSk7YXNwZWN0LXJhdGlvOiAxLjA1O3dpZHRoOiA4My43cHg7aGVpZ2h0OiA4MHB4OyI+PGcgaWQ9Im1hc2tfSTQzNjRfMTAzMTc1XzI1Ml83MTg3NV8yMTYzXzc0NDM4IiBtYXNrVW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4PSIwIiB5PSIwIiBzdHlsZT0ibWFzay10eXBlOiBhbHBoYTsiPjxwYXRoIGQ9Ik0wIDAgTDgzLjczOTQgMCBMODMuNzM5NCA4MC4wMDAxIEwwIDgwLjAwMDEgTDAgMCBaIiBzdHlsZT0iZmlsbC1ydWxlOiBub256ZXJvO2ZpbGw6IHVybCgjcGF0dGVybjBfSTQzNjRfMTAzMTc1XzI1Ml83MTg3NV8yMTYzXzc0NDM4KTsiIC8+PC9nPjxkZWZzPjxpbWFnZSBocmVmPSJjYWxsc2l0ZTovLzExODciIGlkPSJpbWFnZTBfSTQzNjRfMTAzMTc1XzI1Ml83MTg3NV8yMTYzXzc0NDM4Ij48L2ltYWdlPjxwYXR0ZXJuIHdpZHRoPTgzLjczOTQzMzI4ODU3NDIyIGhlaWdodD04MC4wMDAxMDY4MTE1MjM0NCBwYXR0ZXJuVW5pdHM9InVzZXJTcGFjZU9uVXNlIiBpZD0icGF0dGVybjBfSTQzNjRfMTAzMTc1XzI1Ml83MTg3NV8yMTYzXzc0NDM4Ij48dXNlIGhyZWY9IiNpbWFnZTBfSTQzNjRfMTAzMTc1XzI1Ml83MTg3NV8yMTYzXzc0NDM4IiB0cmFuc2Zvcm09Im1hdHJpeCgxLjE5NDAzMTQwODQ2NjI4ODYgMCAwIDEuMTk0MDMxNDQ0OTQ4MTExIC0yMjQuOTk2MzAzMTQ3OTI4NDIgMCkiPjwvdXNlPjwvcGF0dGVybj48L2RlZnM+PC9zdmc+);
        mask-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iODMuNzM5NDMzMjg4NTc0MjIiIGhlaWdodD0iODAuMDAwMTA2ODExNTIzNDQiIHZpZXdCb3g9IjAgMCA4My43Mzk0MzMyODg1NzQyMiA4MC4wMDAxMDY4MTE1MjM0NCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgY2xhc3M9InBvaW50ZXItZXZlbnRzLW5vbmUiIHN0eWxlPSJsZWZ0OiBjYWxjKC00MS45cHggKyA1MCUpO3RvcDogY2FsYygtNDBweCArIDUwJSk7YXNwZWN0LXJhdGlvOiAxLjA1O3dpZHRoOiA4My43cHg7aGVpZ2h0OiA4MHB4OyI+PGcgaWQ9Im1hc2tfSTQzNjRfMTAzMTc1XzI1Ml83MTg3NV8yMTYzXzc0NDM4IiBtYXNrVW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4PSIwIiB5PSIwIiBzdHlsZT0ibWFzay10eXBlOiBhbHBoYTsiPjxwYXRoIGQ9Ik0wIDAgTDgzLjczOTQgMCBMODMuNzM5NCA4MC4wMDAxIEwwIDgwLjAwMDEgTDAgMCBaIiBzdHlsZT0iZmlsbC1ydWxlOiBub256ZXJvO2ZpbGw6IHVybCgjcGF0dGVybjBfSTQzNjRfMTAzMTc1XzI1Ml83MTg3NV8yMTYzXzc0NDM4KTsiIC8+PC9nPjxkZWZzPjxpbWFnZSBocmVmPSJjYWxsc2l0ZTovLzExODciIGlkPSJpbWFnZTBfSTQzNjRfMTAzMTc1XzI1Ml83MTg3NV8yMTYzXzc0NDM4Ij48L2ltYWdlPjxwYXR0ZXJuIHdpZHRoPTgzLjczOTQzMzI4ODU3NDIyIGhlaWdodD04MC4wMDAxMDY4MTE1MjM0NCBwYXR0ZXJuVW5pdHM9InVzZXJTcGFjZU9uVXNlIiBpZD0icGF0dGVybjBfSTQzNjRfMTAzMTc1XzI1Ml83MTg3NV8yMTYzXzc0NDM4Ij48dXNlIGhyZWY9IiNpbWFnZTBfSTQzNjRfMTAzMTc1XzI1Ml83MTg3NV8yMTYzXzc0NDM4IiB0cmFuc2Zvcm09Im1hdHJpeCgxLjE5NDAzMTQwODQ2NjI4ODYgMCAwIDEuMTk0MDMxNDQ0OTQ4MTExIC0yMjQuOTk2MzAzMTQ3OTI4NDIgMCkiPjwvdXNlPjwvcGF0dGVybj48L2RlZnM+PC9zdmc+);
        -webkit-mask-position: 3.5px 7.1px;
        mask-position: 3.5px 7.1px;
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat
    }

    #Frame_2085664433_1 {
        grid-row-gap: 8px;
        --f2w-order: 1;
        flex-flow: column;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: start;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative
    }

    #Navigation_Logo_19 {
        --f2w-order: 0;
        background-color: #f2f2f2;
        flex-shrink: 0;
        width: 100px;
        height: 56px;
        margin: 0;
        position: relative;
        overflow: hidden
    }

    #Group_335_11 {
        aspect-ratio: 1.05;
        --f2w-order: 0;
        width: 74px;
        height: 70.7px;
        position: absolute;
        top: calc(50% - 35.3px);
        left: calc(50% - 37px)
    }

    #Rectangle_34624271_16 {
        mask-type: alpha;
        --f2w-order: 0;
        background-color: #000;
        width: 80.2px;
        height: 83.3px;
        position: absolute;
        top: calc(50% - 41.6px);
        left: calc(50% - 40.1px);
        -webkit-mask-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNzQuMDAwMTA2ODExNTIzNDQiIGhlaWdodD0iNzAuNjk1Njc4NzEwOTM3NSIgdmlld0JveD0iMCAwIDc0LjAwMDEwNjgxMTUyMzQ0IDcwLjY5NTY3ODcxMDkzNzUiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIGNsYXNzPSJwb2ludGVyLWV2ZW50cy1ub25lIiBzdHlsZT0ibGVmdDogY2FsYygtMzdweCArIDUwJSk7dG9wOiBjYWxjKC0zNS4zcHggKyA1MCUpO2FzcGVjdC1yYXRpbzogMS4wNTt3aWR0aDogNzRweDtoZWlnaHQ6IDcwLjdweDsiPjxnIGlkPSJtYXNrX0k0MzY0XzEwMzE3NV8yNTJfNzE4NzdfMjE2M181ODg1NSIgbWFza1VuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeD0iMCIgeT0iMCIgc3R5bGU9Im1hc2stdHlwZTogYWxwaGE7Ij48cGF0aCBkPSJNMCAwIEw3NC4wMDAxIDAgTDc0LjAwMDEgNzAuNjk1NyBMMCA3MC42OTU3IEwwIDAgWiIgc3R5bGU9ImZpbGwtcnVsZTogbm9uemVybztmaWxsOiB1cmwoI3BhdHRlcm4wX0k0MzY0XzEwMzE3NV8yNTJfNzE4NzdfMjE2M181ODg1NSk7IiAvPjwvZz48ZGVmcz48aW1hZ2UgaHJlZj0iY2FsbHNpdGU6Ly8xMTg4IiBpZD0iaW1hZ2UwX0k0MzY0XzEwMzE3NV8yNTJfNzE4NzdfMjE2M181ODg1NSI+PC9pbWFnZT48cGF0dGVybiB3aWR0aD03NC4wMDAxMDY4MTE1MjM0NCBoZWlnaHQ9NzAuNjk1Njc4NzEwOTM3NSBwYXR0ZXJuVW5pdHM9InVzZXJTcGFjZU9uVXNlIiBpZD0icGF0dGVybjBfSTQzNjRfMTAzMTc1XzI1Ml83MTg3N18yMTYzXzU4ODU1Ij48dXNlIGhyZWY9IiNpbWFnZTBfSTQzNjRfMTAzMTc1XzI1Ml83MTg3N18yMTYzXzU4ODU1IiB0cmFuc2Zvcm09Im1hdHJpeCgwLjIxODE5NjU1MDk3NTk1MzkyIDAgMCAwLjIxODE5NjUzOTIzMTI4ODU3IC0zOS40Nzc4Mzc3MTEzMTAxMiAwKSI+PC91c2U+PC9wYXR0ZXJuPjwvZGVmcz48L3N2Zz4=);
        mask-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNzQuMDAwMTA2ODExNTIzNDQiIGhlaWdodD0iNzAuNjk1Njc4NzEwOTM3NSIgdmlld0JveD0iMCAwIDc0LjAwMDEwNjgxMTUyMzQ0IDcwLjY5NTY3ODcxMDkzNzUiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIGNsYXNzPSJwb2ludGVyLWV2ZW50cy1ub25lIiBzdHlsZT0ibGVmdDogY2FsYygtMzdweCArIDUwJSk7dG9wOiBjYWxjKC0zNS4zcHggKyA1MCUpO2FzcGVjdC1yYXRpbzogMS4wNTt3aWR0aDogNzRweDtoZWlnaHQ6IDcwLjdweDsiPjxnIGlkPSJtYXNrX0k0MzY0XzEwMzE3NV8yNTJfNzE4NzdfMjE2M181ODg1NSIgbWFza1VuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeD0iMCIgeT0iMCIgc3R5bGU9Im1hc2stdHlwZTogYWxwaGE7Ij48cGF0aCBkPSJNMCAwIEw3NC4wMDAxIDAgTDc0LjAwMDEgNzAuNjk1NyBMMCA3MC42OTU3IEwwIDAgWiIgc3R5bGU9ImZpbGwtcnVsZTogbm9uemVybztmaWxsOiB1cmwoI3BhdHRlcm4wX0k0MzY0XzEwMzE3NV8yNTJfNzE4NzdfMjE2M181ODg1NSk7IiAvPjwvZz48ZGVmcz48aW1hZ2UgaHJlZj0iY2FsbHNpdGU6Ly8xMTg4IiBpZD0iaW1hZ2UwX0k0MzY0XzEwMzE3NV8yNTJfNzE4NzdfMjE2M181ODg1NSI+PC9pbWFnZT48cGF0dGVybiB3aWR0aD03NC4wMDAxMDY4MTE1MjM0NCBoZWlnaHQ9NzAuNjk1Njc4NzEwOTM3NSBwYXR0ZXJuVW5pdHM9InVzZXJTcGFjZU9uVXNlIiBpZD0icGF0dGVybjBfSTQzNjRfMTAzMTc1XzI1Ml83MTg3N18yMTYzXzU4ODU1Ij48dXNlIGhyZWY9IiNpbWFnZTBfSTQzNjRfMTAzMTc1XzI1Ml83MTg3N18yMTYzXzU4ODU1IiB0cmFuc2Zvcm09Im1hdHJpeCgwLjIxODE5NjU1MDk3NTk1MzkyIDAgMCAwLjIxODE5NjUzOTIzMTI4ODU3IC0zOS40Nzc4Mzc3MTEzMTAxMiAwKSI+PC91c2U+PC9wYXR0ZXJuPjwvZGVmcz48L3N2Zz4=);
        -webkit-mask-position: 3.1px 6.3px;
        mask-position: 3.1px 6.3px;
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat
    }

    #Navigation_Logo_20 {
        --f2w-order: 1;
        background-color: #f2f2f2;
        flex-shrink: 0;
        width: 100px;
        height: 56px;
        margin: 0;
        position: relative;
        overflow: hidden
    }

    #Group_335_12 {
        aspect-ratio: 1.05;
        --f2w-order: 0;
        width: 86px;
        height: 82.2px;
        position: absolute;
        top: calc(50% - 41px);
        left: calc(50% - 43px)
    }

    #Rectangle_34624271_17 {
        mask-type: alpha;
        --f2w-order: 0;
        background-color: #000;
        width: 93.2px;
        height: 96.8px;
        position: absolute;
        top: calc(50% - 48.4px);
        left: calc(50% - 46.6px);
        -webkit-mask-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iODYiIGhlaWdodD0iODIuMTU5NzI5MDAzOTA2MjUiIHZpZXdCb3g9IjAgMCA4NiA4Mi4xNTk3MjkwMDM5MDYyNSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgY2xhc3M9InBvaW50ZXItZXZlbnRzLW5vbmUiIHN0eWxlPSJsZWZ0OiBjYWxjKC00M3B4ICsgNTAlKTt0b3A6IGNhbGMoLTQxLjFweCArIDUwJSk7YXNwZWN0LXJhdGlvOiAxLjA1O3dpZHRoOiA4NnB4O2hlaWdodDogODIuMnB4OyI+PGcgaWQ9Im1hc2tfSTQzNjRfMTAzMTc1XzI1Ml83MTg3OF8yMTYzXzU4ODMxIiBtYXNrVW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4PSIwIiB5PSIwIiBzdHlsZT0ibWFzay10eXBlOiBhbHBoYTsiPjxwYXRoIGQ9Ik0wIDAgTDg2IDAgTDg2IDgyLjE1OTcgTDAgODIuMTU5NyBMMCAwIFoiIHN0eWxlPSJmaWxsLXJ1bGU6IG5vbnplcm87ZmlsbDogdXJsKCNwYXR0ZXJuMF9JNDM2NF8xMDMxNzVfMjUyXzcxODc4XzIxNjNfNTg4MzEpOyIgLz48L2c+PGRlZnM+PGltYWdlIGhyZWY9ImNhbGxzaXRlOi8vMTE4OSIgaWQ9ImltYWdlMF9JNDM2NF8xMDMxNzVfMjUyXzcxODc4XzIxNjNfNTg4MzEiPjwvaW1hZ2U+PHBhdHRlcm4gd2lkdGg9ODYgaGVpZ2h0PTgyLjE1OTcyOTAwMzkwNjI1IHBhdHRlcm5Vbml0cz0idXNlclNwYWNlT25Vc2UiIGlkPSJwYXR0ZXJuMF9JNDM2NF8xMDMxNzVfMjUyXzcxODc4XzIxNjNfNTg4MzEiPjx1c2UgaHJlZj0iI2ltYWdlMF9JNDM2NF8xMDMxNzVfMjUyXzcxODc4XzIxNjNfNTg4MzEiIHRyYW5zZm9ybT0ibWF0cml4KDAuMDUzNDg5NDA4ODk3ODEzNTA2IDAgMCAwLjA1MzQ4OTQwNjkwMzU4NDc5NCAtMTEuNzczMTUzODk1MTc3NDI2IDApIj48L3VzZT48L3BhdHRlcm4+PC9kZWZzPjwvc3ZnPg==);
        mask-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iODYiIGhlaWdodD0iODIuMTU5NzI5MDAzOTA2MjUiIHZpZXdCb3g9IjAgMCA4NiA4Mi4xNTk3MjkwMDM5MDYyNSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgY2xhc3M9InBvaW50ZXItZXZlbnRzLW5vbmUiIHN0eWxlPSJsZWZ0OiBjYWxjKC00M3B4ICsgNTAlKTt0b3A6IGNhbGMoLTQxLjFweCArIDUwJSk7YXNwZWN0LXJhdGlvOiAxLjA1O3dpZHRoOiA4NnB4O2hlaWdodDogODIuMnB4OyI+PGcgaWQ9Im1hc2tfSTQzNjRfMTAzMTc1XzI1Ml83MTg3OF8yMTYzXzU4ODMxIiBtYXNrVW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4PSIwIiB5PSIwIiBzdHlsZT0ibWFzay10eXBlOiBhbHBoYTsiPjxwYXRoIGQ9Ik0wIDAgTDg2IDAgTDg2IDgyLjE1OTcgTDAgODIuMTU5NyBMMCAwIFoiIHN0eWxlPSJmaWxsLXJ1bGU6IG5vbnplcm87ZmlsbDogdXJsKCNwYXR0ZXJuMF9JNDM2NF8xMDMxNzVfMjUyXzcxODc4XzIxNjNfNTg4MzEpOyIgLz48L2c+PGRlZnM+PGltYWdlIGhyZWY9ImNhbGxzaXRlOi8vMTE4OSIgaWQ9ImltYWdlMF9JNDM2NF8xMDMxNzVfMjUyXzcxODc4XzIxNjNfNTg4MzEiPjwvaW1hZ2U+PHBhdHRlcm4gd2lkdGg9ODYgaGVpZ2h0PTgyLjE1OTcyOTAwMzkwNjI1IHBhdHRlcm5Vbml0cz0idXNlclNwYWNlT25Vc2UiIGlkPSJwYXR0ZXJuMF9JNDM2NF8xMDMxNzVfMjUyXzcxODc4XzIxNjNfNTg4MzEiPjx1c2UgaHJlZj0iI2ltYWdlMF9JNDM2NF8xMDMxNzVfMjUyXzcxODc4XzIxNjNfNTg4MzEiIHRyYW5zZm9ybT0ibWF0cml4KDAuMDUzNDg5NDA4ODk3ODEzNTA2IDAgMCAwLjA1MzQ4OTQwNjkwMzU4NDc5NCAtMTEuNzczMTUzODk1MTc3NDI2IDApIj48L3VzZT48L3BhdHRlcm4+PC9kZWZzPjwvc3ZnPg==);
        -webkit-mask-position: 3.6px 7.3px;
        mask-position: 3.6px 7.3px;
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat
    }

    #Navigation_Logo_21 {
        --f2w-order: 2;
        background-color: #f2f2f2;
        flex-shrink: 0;
        width: 100px;
        height: 56px;
        margin: 0;
        position: relative;
        overflow: hidden
    }

    #Group_335_13 {
        aspect-ratio: 1.05;
        --f2w-order: 0;
        width: 76px;
        height: 72.6px;
        position: absolute;
        top: calc(50% - 36px);
        left: calc(50% - 38px)
    }

    #Rectangle_34624271_18 {
        mask-type: alpha;
        --f2w-order: 0;
        background-color: #000;
        width: 82.4px;
        height: 85.5px;
        position: absolute;
        top: calc(50% - 42.8px);
        left: calc(50% - 41.2px);
        -webkit-mask-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNzYiIGhlaWdodD0iNzIuNjA2MjY5ODM2NDI1NzgiIHZpZXdCb3g9IjAgMCA3NiA3Mi42MDYyNjk4MzY0MjU3OCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgY2xhc3M9InBvaW50ZXItZXZlbnRzLW5vbmUiIHN0eWxlPSJsZWZ0OiBjYWxjKC0zOHB4ICsgNTAlKTt0b3A6IGNhbGMoLTM2LjNweCArIDUwJSk7YXNwZWN0LXJhdGlvOiAxLjA1O3dpZHRoOiA3NnB4O2hlaWdodDogNzIuNnB4OyI+PGcgaWQ9Im1hc2tfSTQzNjRfMTAzMTc1XzI1Ml83MTg3OV8yMTYzXzU4ODExIiBtYXNrVW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4PSIwIiB5PSIwIiBzdHlsZT0ibWFzay10eXBlOiBhbHBoYTsiPjxwYXRoIGQ9Ik0wIDAgTDc2IDAgTDc2IDcyLjYwNjMgTDAgNzIuNjA2MyBMMCAwIFoiIHN0eWxlPSJmaWxsLXJ1bGU6IG5vbnplcm87ZmlsbDogdXJsKCNwYXR0ZXJuMF9JNDM2NF8xMDMxNzVfMjUyXzcxODc5XzIxNjNfNTg4MTEpOyIgLz48L2c+PGRlZnM+PGltYWdlIGhyZWY9ImNhbGxzaXRlOi8vMTE5MCIgaWQ9ImltYWdlMF9JNDM2NF8xMDMxNzVfMjUyXzcxODc5XzIxNjNfNTg4MTEiPjwvaW1hZ2U+PHBhdHRlcm4gd2lkdGg9NzYgaGVpZ2h0PTcyLjYwNjI2OTgzNjQyNTc4IHBhdHRlcm5Vbml0cz0idXNlclNwYWNlT25Vc2UiIGlkPSJwYXR0ZXJuMF9JNDM2NF8xMDMxNzVfMjUyXzcxODc5XzIxNjNfNTg4MTEiPjx1c2UgaHJlZj0iI2ltYWdlMF9JNDM2NF8xMDMxNzVfMjUyXzcxODc5XzIxNjNfNTg4MTEiIHRyYW5zZm9ybT0ibWF0cml4KDAuMDc5NTI0OTQ1Mzg4NTY2MDUgMCAwIDAuMDc5NTI0OTM5NTc5ODc0OSAtNjMuNzkxOTI3MDYzNzI4NjMgMCkiPjwvdXNlPjwvcGF0dGVybj48L2RlZnM+PC9zdmc+);
        mask-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNzYiIGhlaWdodD0iNzIuNjA2MjY5ODM2NDI1NzgiIHZpZXdCb3g9IjAgMCA3NiA3Mi42MDYyNjk4MzY0MjU3OCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgY2xhc3M9InBvaW50ZXItZXZlbnRzLW5vbmUiIHN0eWxlPSJsZWZ0OiBjYWxjKC0zOHB4ICsgNTAlKTt0b3A6IGNhbGMoLTM2LjNweCArIDUwJSk7YXNwZWN0LXJhdGlvOiAxLjA1O3dpZHRoOiA3NnB4O2hlaWdodDogNzIuNnB4OyI+PGcgaWQ9Im1hc2tfSTQzNjRfMTAzMTc1XzI1Ml83MTg3OV8yMTYzXzU4ODExIiBtYXNrVW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4PSIwIiB5PSIwIiBzdHlsZT0ibWFzay10eXBlOiBhbHBoYTsiPjxwYXRoIGQ9Ik0wIDAgTDc2IDAgTDc2IDcyLjYwNjMgTDAgNzIuNjA2MyBMMCAwIFoiIHN0eWxlPSJmaWxsLXJ1bGU6IG5vbnplcm87ZmlsbDogdXJsKCNwYXR0ZXJuMF9JNDM2NF8xMDMxNzVfMjUyXzcxODc5XzIxNjNfNTg4MTEpOyIgLz48L2c+PGRlZnM+PGltYWdlIGhyZWY9ImNhbGxzaXRlOi8vMTE5MCIgaWQ9ImltYWdlMF9JNDM2NF8xMDMxNzVfMjUyXzcxODc5XzIxNjNfNTg4MTEiPjwvaW1hZ2U+PHBhdHRlcm4gd2lkdGg9NzYgaGVpZ2h0PTcyLjYwNjI2OTgzNjQyNTc4IHBhdHRlcm5Vbml0cz0idXNlclNwYWNlT25Vc2UiIGlkPSJwYXR0ZXJuMF9JNDM2NF8xMDMxNzVfMjUyXzcxODc5XzIxNjNfNTg4MTEiPjx1c2UgaHJlZj0iI2ltYWdlMF9JNDM2NF8xMDMxNzVfMjUyXzcxODc5XzIxNjNfNTg4MTEiIHRyYW5zZm9ybT0ibWF0cml4KDAuMDc5NTI0OTQ1Mzg4NTY2MDUgMCAwIDAuMDc5NTI0OTM5NTc5ODc0OSAtNjMuNzkxOTI3MDYzNzI4NjMgMCkiPjwvdXNlPjwvcGF0dGVybj48L2RlZnM+PC9zdmc+);
        -webkit-mask-position: 3.2px 6.5px;
        mask-position: 3.2px 6.5px;
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat
    }

    #Navigation_Logo_22 {
        --f2w-order: 3;
        background-color: #f2f2f2;
        flex-shrink: 0;
        width: 100px;
        height: 56px;
        margin: 0;
        position: relative;
        overflow: hidden
    }

    #Group_335_14 {
        aspect-ratio: 1.05;
        --f2w-order: 0;
        width: 86px;
        height: 82.2px;
        position: absolute;
        top: calc(50% - 41px);
        left: calc(50% - 43px)
    }

    #Rectangle_34624271_19 {
        mask-type: alpha;
        --f2w-order: 0;
        background-color: #000;
        width: 93.2px;
        height: 96.8px;
        position: absolute;
        top: calc(50% - 48.4px);
        left: calc(50% - 46.6px);
        -webkit-mask-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iODYiIGhlaWdodD0iODIuMTU5NzI5MDAzOTA2MjUiIHZpZXdCb3g9IjAgMCA4NiA4Mi4xNTk3MjkwMDM5MDYyNSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgY2xhc3M9InBvaW50ZXItZXZlbnRzLW5vbmUiIHN0eWxlPSJsZWZ0OiBjYWxjKC00M3B4ICsgNTAlKTt0b3A6IGNhbGMoLTQxLjFweCArIDUwJSk7YXNwZWN0LXJhdGlvOiAxLjA1O3dpZHRoOiA4NnB4O2hlaWdodDogODIuMnB4OyI+PGcgaWQ9Im1hc2tfSTQzNjRfMTAzMTc1XzI1Ml83MTg4MF8yMTYzXzU4ODUxIiBtYXNrVW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4PSIwIiB5PSIwIiBzdHlsZT0ibWFzay10eXBlOiBhbHBoYTsiPjxwYXRoIGQ9Ik0wIDAgTDg2IDAgTDg2IDgyLjE1OTcgTDAgODIuMTU5NyBMMCAwIFoiIHN0eWxlPSJmaWxsLXJ1bGU6IG5vbnplcm87ZmlsbDogdXJsKCNwYXR0ZXJuMF9JNDM2NF8xMDMxNzVfMjUyXzcxODgwXzIxNjNfNTg4NTEpOyIgLz48L2c+PGRlZnM+PGltYWdlIGhyZWY9ImNhbGxzaXRlOi8vMTE5MSIgaWQ9ImltYWdlMF9JNDM2NF8xMDMxNzVfMjUyXzcxODgwXzIxNjNfNTg4NTEiPjwvaW1hZ2U+PHBhdHRlcm4gd2lkdGg9ODYgaGVpZ2h0PTgyLjE1OTcyOTAwMzkwNjI1IHBhdHRlcm5Vbml0cz0idXNlclNwYWNlT25Vc2UiIGlkPSJwYXR0ZXJuMF9JNDM2NF8xMDMxNzVfMjUyXzcxODgwXzIxNjNfNTg4NTEiPjx1c2UgaHJlZj0iI2ltYWdlMF9JNDM2NF8xMDMxNzVfMjUyXzcxODgwXzIxNjNfNTg4NTEiIHRyYW5zZm9ybT0ibWF0cml4KDEuMTQxMTA3Mzk1Nzk4OTExNyAwIDAgMS4xNDExMDczNDcyNzY0NzU3IC00MjkuOTg5MDEyMDM0NjA2MSAwKSI+PC91c2U+PC9wYXR0ZXJuPjwvZGVmcz48L3N2Zz4=);
        mask-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iODYiIGhlaWdodD0iODIuMTU5NzI5MDAzOTA2MjUiIHZpZXdCb3g9IjAgMCA4NiA4Mi4xNTk3MjkwMDM5MDYyNSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgY2xhc3M9InBvaW50ZXItZXZlbnRzLW5vbmUiIHN0eWxlPSJsZWZ0OiBjYWxjKC00M3B4ICsgNTAlKTt0b3A6IGNhbGMoLTQxLjFweCArIDUwJSk7YXNwZWN0LXJhdGlvOiAxLjA1O3dpZHRoOiA4NnB4O2hlaWdodDogODIuMnB4OyI+PGcgaWQ9Im1hc2tfSTQzNjRfMTAzMTc1XzI1Ml83MTg4MF8yMTYzXzU4ODUxIiBtYXNrVW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4PSIwIiB5PSIwIiBzdHlsZT0ibWFzay10eXBlOiBhbHBoYTsiPjxwYXRoIGQ9Ik0wIDAgTDg2IDAgTDg2IDgyLjE1OTcgTDAgODIuMTU5NyBMMCAwIFoiIHN0eWxlPSJmaWxsLXJ1bGU6IG5vbnplcm87ZmlsbDogdXJsKCNwYXR0ZXJuMF9JNDM2NF8xMDMxNzVfMjUyXzcxODgwXzIxNjNfNTg4NTEpOyIgLz48L2c+PGRlZnM+PGltYWdlIGhyZWY9ImNhbGxzaXRlOi8vMTE5MSIgaWQ9ImltYWdlMF9JNDM2NF8xMDMxNzVfMjUyXzcxODgwXzIxNjNfNTg4NTEiPjwvaW1hZ2U+PHBhdHRlcm4gd2lkdGg9ODYgaGVpZ2h0PTgyLjE1OTcyOTAwMzkwNjI1IHBhdHRlcm5Vbml0cz0idXNlclNwYWNlT25Vc2UiIGlkPSJwYXR0ZXJuMF9JNDM2NF8xMDMxNzVfMjUyXzcxODgwXzIxNjNfNTg4NTEiPjx1c2UgaHJlZj0iI2ltYWdlMF9JNDM2NF8xMDMxNzVfMjUyXzcxODgwXzIxNjNfNTg4NTEiIHRyYW5zZm9ybT0ibWF0cml4KDEuMTQxMTA3Mzk1Nzk4OTExNyAwIDAgMS4xNDExMDczNDcyNzY0NzU3IC00MjkuOTg5MDEyMDM0NjA2MSAwKSI+PC91c2U+PC9wYXR0ZXJuPjwvZGVmcz48L3N2Zz4=);
        -webkit-mask-position: 3.6px 7.3px;
        mask-position: 3.6px 7.3px;
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat
    }

    #Frame_2085664433_2 {
        --f2w-order: 1;
        flex-shrink: 0;
        width: 372px;
        height: 248px;
        margin: 0;
        position: relative;
        overflow: hidden
    }

    #image_14 {
        aspect-ratio: .75;
        --f2w-order: 0;
        width: 372px;
        height: 496px;
        position: absolute;
        top: -24px;
        left: 0;
        overflow: hidden
    }

    #__117 {
        object-fit: cover;
        border-radius: 0;
        width: 100%;
        height: 100%;
        position: absolute;
        inset: 0
    }

    #image_15 {
        --f2w-order: 1;
        background-color: #0000004d;
        width: 372px;
        height: 248px;
        position: absolute;
        top: 0;
        left: 0
    }

    #Frame_336_0 {
        --f2w-order: 2;
        width: 200px;
        height: 200px;
        position: absolute;
        top: calc(50% - 100px);
        left: calc(50% - 100px);
        overflow: hidden
    }

    #image_16 {
        aspect-ratio: 1;
        mix-blend-mode: screen;
        --f2w-order: 0;
        width: 99.5%;
        height: 99.5%;
        position: absolute;
        top: 0;
        left: .5%;
        overflow: hidden
    }

    #__118 {
        object-fit: contain;
        border-radius: 0;
        width: 100%;
        height: 100%;
        position: absolute;
        inset: 0
    }

    #Icon_Button_2 {
        grid-column-gap: 10px;
        -webkit-backdrop-filter: blur(4px);
        backdrop-filter: blur(4px);
        --f2w-order: 3;
        background-color: #fff;
        flex-flow: row;
        justify-content: flex-start;
        align-items: center;
        padding: 8px;
        display: flex;
        position: absolute;
        top: calc(68px + 50%);
        right: 0;
        overflow: hidden
    }

    #ArrowRight {
        aspect-ratio: 1;
        --f2w-order: 0;
        flex-shrink: 0;
        width: 24px;
        height: 24px;
        margin: 0;
        position: relative
    }

    #Vector_24 {
        --f2w-order: 0;
        width: 75%;
        height: 66.7%;
        position: absolute;
        top: 18.7%;
        left: 10.4%
    }

    #__119 {
        visibility: hidden;
        cursor: unset;
        overscroll-behavior: contain;
        width: 100%;
        height: 100%;
        position: fixed;
        inset: 0;
        overflow: auto
    }

    #__119 > * {
        z-index: 9999;
        box-sizing: content-box;
        position: absolute
    }

    #Profile {
        width: 235px;
        min-width: 235px;
        max-width: 235px;
        height: 232px;
        min-height: 232px;
        max-height: 232px;
        overflow: hidden
    }

    #Menu_dropdown_list {
        grid-row-gap: 4px;
        filter: drop-shadow(0 0 48px #0027662e);
        backface-visibility: hidden;
        --f2w-order: 0;
        background-color: #fff;
        border: 1px solid #e7e7e7;
        flex-flow: column;
        justify-content: flex-start;
        align-items: start;
        width: 235px;
        height: 232px;
        max-height: 232px;
        padding: 3px 7px 0 3px;
        display: flex;
        position: absolute;
        top: 0;
        left: 0;
        overflow: hidden;
        transform: translateZ(0)
    }

    #_List_item {
        grid-row-gap: 2px;
        --f2w-order: 0;
        flex-flow: column;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: start;
        width: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative
    }

    #_Dropdown_menu_item {
        grid-column-gap: 0px;
        --f2w-order: 0;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: start;
        width: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #Content_0 {
        grid-column-gap: 8px;
        --f2w-order: 0;
        background-color: #fff;
        flex-flow: row;
        flex-grow: 1;
        flex-basis: 0;
        justify-content: flex-start;
        align-items: center;
        width: 100%;
        height: 44px;
        margin: 0;
        padding: 12px 6px 12px 12px;
        display: flex;
        position: relative
    }

    #ShoppingBag {
        aspect-ratio: 1;
        --f2w-order: 0;
        flex-shrink: 0;
        width: 24px;
        height: 24px;
        margin: 0;
        position: relative
    }

    #Vector_25 {
        --f2w-order: 0;
        width: 83.3%;
        height: 75%;
        position: absolute;
        top: 14.8%;
        left: 6.5%
    }

    #I4364_104132_337_53034 {
        text-align: left;
        text-overflow: ellipsis;
        -webkit-line-clamp: 1;
        overflow-wrap: break-word;
        color: #555;
        --f2w-order: 1;
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-box-orient: vertical;
        flex-grow: 1;
        flex-basis: 0;
        width: 100%;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%;
        display: -webkit-inline-box;
        position: relative;
        overflow: hidden
    }

    #__120 {
        overflow-wrap: break-word;
        color: #555;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%
    }

    #_Dropdown_menu_item_0 {
        grid-column-gap: 0px;
        --f2w-order: 1;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: start;
        width: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #Content_1 {
        grid-column-gap: 8px;
        --f2w-order: 0;
        background-color: #fff;
        flex-flow: row;
        flex-grow: 1;
        flex-basis: 0;
        justify-content: flex-start;
        align-items: center;
        width: 100%;
        height: 44px;
        margin: 0;
        padding: 12px 6px 12px 12px;
        display: flex;
        position: relative
    }

    #Lock {
        aspect-ratio: 1;
        --f2w-order: 0;
        flex-shrink: 0;
        width: 24px;
        height: 24px;
        margin: 0;
        position: relative
    }

    #Vector_26 {
        --f2w-order: 0;
        width: 75%;
        height: 87.5%;
        position: absolute;
        top: 3.1%;
        left: 10.8%
    }

    #I4364_104132_337_53038 {
        text-align: left;
        text-overflow: ellipsis;
        -webkit-line-clamp: 1;
        overflow-wrap: break-word;
        color: #555;
        --f2w-order: 1;
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-box-orient: vertical;
        flex-grow: 1;
        flex-basis: 0;
        width: 100%;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%;
        display: -webkit-inline-box;
        position: relative;
        overflow: hidden
    }

    #__121 {
        overflow-wrap: break-word;
        color: #555;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%
    }

    #_Dropdown_menu_item_1 {
        grid-column-gap: 0px;
        --f2w-order: 2;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: start;
        width: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #Content_2 {
        grid-column-gap: 8px;
        --f2w-order: 0;
        background-color: #fff;
        flex-flow: row;
        flex-grow: 1;
        flex-basis: 0;
        justify-content: flex-start;
        align-items: center;
        width: 100%;
        height: 44px;
        margin: 0;
        padding: 12px 6px 12px 12px;
        display: flex;
        position: relative
    }

    #uil_favorite {
        aspect-ratio: 1;
        --f2w-order: 0;
        flex-shrink: 0;
        width: 24px;
        height: 24px;
        margin: 0;
        position: relative;
        overflow: hidden
    }

    #Vector_27 {
        --f2w-order: 0;
        width: 87.5%;
        height: 83.3%;
        position: absolute;
        top: 8.1%;
        left: 6.7%
    }

    #I4364_104132_337_53043 {
        text-align: left;
        text-overflow: ellipsis;
        -webkit-line-clamp: 1;
        overflow-wrap: break-word;
        color: #555;
        --f2w-order: 1;
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-box-orient: vertical;
        flex-grow: 1;
        flex-basis: 0;
        width: 100%;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%;
        display: -webkit-inline-box;
        position: relative;
        overflow: hidden
    }

    #__122 {
        overflow-wrap: break-word;
        color: #555;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%
    }

    #_Dropdown_menu_item_2 {
        grid-column-gap: 0px;
        --f2w-order: 3;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: start;
        width: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #Content_3 {
        grid-column-gap: 8px;
        --f2w-order: 0;
        background-color: #fff;
        flex-flow: row;
        flex-grow: 1;
        flex-basis: 0;
        justify-content: flex-start;
        align-items: center;
        width: 100%;
        height: 44px;
        margin: 0;
        padding: 12px 6px 12px 12px;
        display: flex;
        position: relative
    }

    #material_symbols_light_support {
        aspect-ratio: 1;
        --f2w-order: 0;
        flex-shrink: 0;
        width: 24px;
        height: 24px;
        margin: 0;
        position: relative;
        overflow: hidden
    }

    #Vector_28 {
        --f2w-order: 0;
        width: 91.7%;
        height: 91.7%;
        position: absolute;
        top: 4.2%;
        left: 4.2%
    }

    #I4364_104132_337_53048 {
        text-align: left;
        text-overflow: ellipsis;
        -webkit-line-clamp: 1;
        overflow-wrap: break-word;
        color: #555;
        --f2w-order: 1;
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-box-orient: vertical;
        flex-grow: 1;
        flex-basis: 0;
        width: 100%;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%;
        display: -webkit-inline-box;
        position: relative;
        overflow: hidden
    }

    #__123 {
        overflow-wrap: break-word;
        color: #555;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%
    }

    #Rectangle_34624272 {
        --f2w-order: 4;
        background-color: #aaa;
        flex-shrink: 0;
        width: 251px;
        height: 1px;
        margin: 0;
        position: relative
    }

    #_Dropdown_menu_item_3 {
        grid-column-gap: 0px;
        --f2w-order: 5;
        flex-flow: row;
        flex-shrink: 0;
        justify-content: flex-start;
        align-items: start;
        width: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        position: relative;
        overflow: hidden
    }

    #Content_4 {
        grid-column-gap: 8px;
        --f2w-order: 0;
        background-color: #fff;
        flex-flow: row;
        flex-grow: 1;
        flex-basis: 0;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 44px;
        margin: 0;
        padding: 12px 6px 12px 12px;
        display: flex;
        position: relative
    }

    #I4364_104132_337_53052 {
        text-align: center;
        text-overflow: ellipsis;
        -webkit-line-clamp: 1;
        overflow-wrap: break-word;
        color: #555;
        --f2w-order: 0;
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-box-orient: vertical;
        flex-grow: 1;
        flex-basis: 0;
        width: 100%;
        margin: 0;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%;
        display: -webkit-inline-box;
        position: relative;
        overflow: hidden
    }

    #__124 {
        overflow-wrap: break-word;
        color: #555;
        -webkit-background-clip: text;
        background-clip: text;
        font-family: Neue Gravica;
        font-size: 14px;
        font-weight: 400;
        line-height: 130%
    }
</style>
<style>
    @font-face {
        src: url(/__assets/NeueGravica-Regular-400.woff2) format("woff2");
        font-family: Neue Gravica;
        font-style: normal;
        font-weight: 400;
        font-display: swap
    }

    @font-face {
        src: url(/__assets/NeueGravica-SemiBold-600.woff2) format("woff2");
        font-family: Neue Gravica;
        font-style: normal;
        font-weight: 600;
        font-display: swap
    }

    @font-face {
        src: url(/__assets/NeueGravica-Light-300.woff2) format("woff2");
        font-family: Neue Gravica;
        font-style: normal;
        font-weight: 300;
        font-display: swap
    }
</style>

<style>
    article.prose {
        line-height: 1.75;
        display: contents
    }

    article.prose h1 {
        margin-block: 0 1.23em;
        font-size: 2.25em;
        line-height: 1.11
    }

    article.prose h2 {
        margin-block: 2em 1em;
        font-size: 1.5em;
        line-height: 1.34
    }

    article.prose h3 {
        margin-block: 1.6em .6em;
        font-size: 1.25em;
        line-height: 1.6
    }

    article.prose h4 {
        margin-top: 1.5em;
        margin-bottom: .5em;
        line-height: 1.5
    }

    article.prose img {
        width: 100%;
        margin-block: 2em
    }

    article.prose blockquote {
        margin-block: 1.6em;
        padding-inline-start: 1em
    }

    article.prose ul,
    article.prose ol {
        padding-inline-start: 1.5em
    }
</style>
</head>

<style>
    :where(img) {
        height: auto
    }
</style>
