@yield('css')
<!-- trang chủ -->
<link rel="shortcut icon" href="{{ asset('web/uploads/sys/logo-website02_136_200_1.png') }}">
<link rel="canonical" href="https://hust.edu.vn/en/">
<link rel="preload" as="style" href="{{ asset('web/assets/css/font-awesome.min.css') }}" type="text/css">
<link rel="preload" as="style" href="{{ asset('web/themes/hust/css/animate.min.css') }}" type="text/css">
<link rel="preload" as="style" href="{{ asset('web/themes/hust/css/bootstrap.min.css') }}" type="text/css">
<link rel="preload" as="style" href="{{ asset('web/themes/hust/css/style.css') }}" type="text/css">
<link rel="preload" as="style" href="{{ asset('web/themes/hust/css/style.responsive.css') }}" type="text/css">
<link rel="preload" as="style" href="{{ asset('web/themes/hust/css/custom.css') }}" type="text/css">
<link rel="preload" as="style" href="{{ asset('web/themes/hust/css/hust.css') }}" type="text/css">
<link rel="preload" as="style" href="{{ asset('web/assets/css/hust.en.0.css') }}" type="text/css">
<link rel="preload" as="style" href="{{ asset('web/themes/hust/js/slick/slick.css') }}" type="text/css">
<link rel="preload" as="style" href="{{ asset('web/themes/hust/js/slick/slick-theme.css') }}" type="text/css">
<link rel="preload" as="style" href="{{ asset('web/themes/default/css/slimmenu.css') }}" type="text/css">
<link rel="preload" as="script" href="{{ asset('web/assets/js/jquery/jquery.min.js') }}" type="text/javascript">
<link rel="preload" as="script" href="{{ asset('web/assets/js/language/en.js') }}" type="text/javascript">
<link rel="preload" as="script" href="{{ asset('web/assets/js/DOMPurify/purify3.js') }}" type="text/javascript">
<link rel="preload" as="script" href="{{ asset('web/assets/js/global.js') }}" type="text/javascript">
<link rel="preload" as="script" href="{{ asset('web/assets/js/site.js') }}" type="text/javascript">
<link rel="preload" as="script" href="{{ asset('web/themes/hust/js/main.js') }}" type="text/javascript">
<link rel="preload" as="script" href="{{ asset('web/themes/hust/js/custom.js') }}" type="text/javascript">
<link rel="preload" as="script" href="{{ asset('web/themes/hust/js/hust.js') }}" type="text/javascript">
<link rel="preload" as="script" href="{{ asset('web/themes/hust/js/slick/slick.js') }}" type="text/javascript">
<link rel="preload" as="script" href="https://www.googletagmanager.com/gtag/js?id=G-TT1NML6EJM"
    type="text/javascript">
<link rel="preload" as="script" href="{{ asset('web/themes/default/js/jquery.slimmenu.js') }}" type="text/javascript">
<link rel="preload" as="script" href="{{ asset('web/assets/js/jquery-ui/jquery-ui.min.js') }}" type="text/javascript">
<link rel="preload" as="script" href="{{ asset('web/themes/hust/js/bootstrap.min.js') }}" type="text/javascript">
<link rel="stylesheet" href="{{ asset('web/assets/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('web/themes/hust/css/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('web/themes/hust/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('web/themes/hust/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('web/themes/hust/css/style.responsive.css') }}">
<link rel="stylesheet" href="{{ asset('web/themes/hust/css/custom.css') }}">
<link rel="stylesheet" href="{{ asset('web/themes/hust/css/hust.css') }}">
<link rel="stylesheet" href="{{ asset('web/assets/css/hust.en.0.css') }}">
<link rel="stylesheet" href="{{ asset('web/themes/hust/js/slick/slick.css') }}"/>
<link rel="stylesheet" href="{{ asset('web/themes/hust/js/slick/slick-theme.css') }}"/>
<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('web/themes/default/css/slimmenu.css') }}"/>
<style>
    .slick-slide img {
        width: 100%;
        object-fit: cover;
    }

    .slick-prev:before,
    .slick-next:before {
        color: white;
    }

    .slick-slide {
        transition: all ease-in-out .3s;
        opacity: .2;
    }

    .slick-active {
        opacity: .5;
    }

    .slick-current {
        opacity: 1;
    }

    .div-poistion {
        position: relative;
    }

    .div-poistion div {
        position: absolute;
        top: 25%;
        left: 10%;
    }

    .div-poistion div h1 {
        font-size: 70px;
        font-weight: 700;
        color: #252525;
    }

    .div-poistion div p {
        color: #636363;
        font-size: 20px;
        margin-top: 20px;
        width: 40%
    }

    .primary-btn {
        display: inline-block;
        font-size: 14px;
        font-weight: 700;
        padding: 12px 30px;
        color: #fff !important;
        background: #e7ab3c;
        text-transform: uppercase;
        margin-top: 20px;
    }

    .div-poistion .slide-text {
        top: auto;
        left: auto;
        right: 0;
        bottom: 0;
        height: 50px;
        width: 500px;
        text-align: right;
        display: inline-block;
        font-family: 'LinhAvantGarde';
        font-weight: 400;
        font-size: 16px;
        line-height: normal;
        color: #fff;
        padding-top: 15px;
        padding-right: 15px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        padding-left: 5%;
    }
</style>
