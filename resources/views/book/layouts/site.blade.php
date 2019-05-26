<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="initial-scale=1, width=device-width"/>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset(env('THEME')) }}/fav-1.png"/>
    <title>{{ env('APP_NAME') }}</title>
    <link rel='stylesheet' href='{{ asset(env("THEME")) }}/css/default.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ asset(env("THEME")) }}/css/layout1.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ asset(env("THEME")) }}/css/bootstrap.min.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ asset(env("THEME")) }}/css/font.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ asset(env("THEME")) }}/css/owl.carousel.min.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ asset(env("THEME")) }}/css/static.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ asset(env("THEME")) }}/css/js_composer.min.css' type='text/css' media='all'/>
    <style id='custom-dynamic-inline-css' type='text/css'>
        .site-content {
            padding-top:;
        }

        .site-content {
            padding-bottom:;
        }

        .header-3 .main-logo-3 {
            max-height: 200px;
        }

        .site-content {
            padding-top: 0;
        }

        .site-content {
            padding-bottom: 0;
        }
    </style>
    <script type='text/javascript' src='{{ asset(env("THEME")) }}/js/jquery.js'></script>
    <script type='text/javascript' src='{{ asset(env("THEME")) }}/js/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='{{ asset(env("THEME")) }}/js/jquery.validate.js'></script>
    <script type='text/javascript'>
        var jsPassData = {
            "display_labels": "Labels",
            "type_modal": "Popup",
            "get_login_redirect": "Current Page",
            "login_redirect": "",
            "register_redirect": "",
            "genrated_pass": ""
        };
    </script>
    <script type='text/javascript' src='{{ asset(env("THEME")) }}/js/widget-script.js'></script>
    {{-- <script type='text/javascript' src='http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js'></script> --}}
    {{-- <script type='text/javascript' src='http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js'></script> --}}
    {{-- <script type='text/javascript' src='http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js'></script> --}}
    {{-- <script type='text/javascript'>
        /* <![CDATA[ */
        var wc_add_to_cart_params = {
            "ajax_url": "\/themeforest\/bookjunky\/wp-admin\/admin-ajax.php",
            "wc_ajax_url": "\/themeforest\/bookjunky\/?wc-ajax=%%endpoint%%",
            "i18n_view_cart": "View cart",
            "cart_url": "http:\/\/demo.cmssuperheroes.com\/themeforest\/bookjunky\/?page_id=393",
            "is_cart": "",
            "cart_redirect_after_add": "no"
        };
        /* ]]> */
    </script> --}}
    {{-- <script type='text/javascript' src='http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js'></script> --}}
    {{-- <script type='text/javascript' src='http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/plugins/js_composer/assets/js/vendors/woocommerce-add-to-cart.js'></script> --}}
    <script type='text/javascript' src='{{ asset(env("THEME")) }}/js/bootstrap.min.js'></script>
    <!--[if lte IE 9]>
    <link rel="stylesheet" type="text/css"
          href="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css"
          media="screen"><![endif]-->

    {{-- <script type="text/javascript">
        function setREVStartSize(e) {
            try {
                var i = jQuery(window).width(),
                    t = 9999,
                    r = 0,
                    n = 0,
                    l = 0,
                    f = 0,
                    s = 0,
                    h = 0;
                if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function(e, f) {
                        f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                    }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                    var u = (e.c.width(), jQuery(window).height());
                    if (void 0 != e.fullScreenOffsetContainer) {
                        var c = e.fullScreenOffsetContainer.split(",");
                        if (c) jQuery.each(c, function(e, i) {
                            u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                        }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                    }
                    f = u
                } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                e.c.closest(".rev_slider_wrapper").css({
                    height: f
                })
            } catch (d) {
                console.log("Failure at Presize of Slider:" + d)
            }
        };
    </script> --}}
    <style type="text/css" id="wp-custom-css">
        .site-footer #footer-bottom {
            text-align: center;
        }

        .book-junky-cat .sidebar-filter .bj-ft-cate {
            display: none;
        }

        @media (min-width: 992px) and (max-width: 1199px) {
            .grid-2 .info-product,
            .grid-4 .info-product {
                min-height: 135px;
            }
        }

        @media screen and (min-width: 1400px) {
            .grid-2.extend-space .new-col-lg-5 {
                min-height: 405px;
            }
        }
    </style>
    <style type="text/css" title="dynamic-css" class="options-output">
        body .page-title h1 {
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading body .page-title h1,
        {
            opacity: 0;
        }

        .ie.wf-loading body .page-title h1,
        {
            visibility: hidden;
        }

        body {
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading body,
        {
            opacity: 0;
        }

        .ie.wf-loading body,
        {
            visibility: hidden;
        }

        h1 {
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading h1,
        {
            opacity: 0;
        }

        .ie.wf-loading h1,
        {
            visibility: hidden;
        }

        h2 {
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading h2,
        {
            opacity: 0;
        }

        .ie.wf-loading h2,
        {
            visibility: hidden;
        }

        h3 {
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading h3,
        {
            opacity: 0;
        }

        .ie.wf-loading h3,
        {
            visibility: hidden;
        }

        h4 {
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading h4,
        {
            opacity: 0;
        }

        .ie.wf-loading h4,
        {
            visibility: hidden;
        }

        h5 {
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading h5,
        {
            opacity: 0;
        }

        .ie.wf-loading h5,
        {
            visibility: hidden;
        }

        h6 {
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading h6,
        {
            opacity: 0;
        }

        .ie.wf-loading h6,
        {
            visibility: hidden;
        }
    </style>
    <style type="text/css" data-type="vc_shortcodes-custom-css">
        .vc_custom_1503973713559 {
            margin-bottom: 30px !important;
            border-top-width: 1px !important;
            padding-top: 2px !important;
            border-top-color: #eff0f3 !important;
            border-top-style: solid !important;
        }

        .vc_custom_1503889319693 {
            border-top-width: 1px !important;
            padding-top: 29px !important;
            background-color: #f9fafc !important;
            border-top-color: #eff0f3 !important;
            border-top-style: solid !important;
        }

        .vc_custom_1503975536992 {
            padding-bottom: 84px !important;
            background-color: #f9fafc !important;
        }

        .vc_custom_1504086144605 {
            border-top-width: 1px !important;
            padding-top: 10px !important;
            padding-bottom: 15px !important;
            border-top-color: #e5e6ea !important;
            border-top-style: solid !important;
        }

        .vc_custom_1503885787347 {
            margin-bottom: -16px !important;
        }

        .vc_custom_1503989158128 {
            margin-bottom: 98px !important;
        }

        .vc_custom_1504492432003 {
            margin-bottom: 0px !important;
        }

        .vc_custom_1504492432003 {
            margin-bottom: 0px !important;
        }
    </style>
    <noscript>
        <style type="text/css">
            .wpb_animate_when_almost_visible {
                opacity: 1;
            }
        </style>
    </noscript>
</head>

<body class="single-product page-template-default page page-id-415 woocommerce-js body-boxed wpb-js-composer js-comp-ver-5.7 vc_responsive hd-fixed">
<div class="wrap-boxed">
    <div id="page" class="hfeed site">
        <header id="masthead" class="site-header">
            <div id="cshero-header" class="header-3">

                <div class="header-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-md-6 top-left-3">

                                <a class="go_to_login_link" href="#">Login / Register</a>
                                <a href="#">FAQ</a><a href="#">Contact Us</a></div>
                            <div class="col-xs-12 col-md-6 top-right-3">
                                <div class="wrap-book-shelf clearfix">
                                    <img src="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/themes/book-junky/assets/images/icon-1.png"
                                         alt="icon 1">
                                    <div class="content">
                                        <a href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?page_id=432&book-shelf"
                                           alt="My Account">
                                            <h5>Bookshelf</h5>

                                        </a>
                                        <span class="aj-count">
                                            Books                                </span>
                                    </div>
                                </div>
                                <div class="wrap-your-basket clearfix">
                                    <img src="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/themes/book-junky/assets/images/icon-2.png"
                                         alt="icon 2">
                                    <div class="content">
                                        <h5>
                                            <a href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?page_id=393">

                                                Your Basket </a>
                                        </h5>
                                        <span>
                                            0.00                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrap-middler">
                    <div class="container">

                        <div class="row">

                            <div class="col-xs-12 col-md-4 col-lg-3">

                                <div class="main-logo-3">
                                    <a href="http://demo.cmssuperheroes.com/themeforest/bookjunky/"><img
                                                alt="Book Junky"
                                                src="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/themes/book-junky/assets/images/logo-2.png"></a>
                                </div>
                                <a href="#" class="menu"><i class="fa fa-bars"></i> Menu</a>
                            </div>

                            <div class="col-xs-12 col-md-8 col-lg-9">

                                <form action="http://demo.cmssuperheroes.com/themeforest/bookjunky/"
                                      class="searchform clearfix" method="get">
                                    <div class="wrap-search clearfix">
                                        <input type="text" class="form-search" name="s" value=""
                                               placeholder="Search for the perfect book...">

                                        <div class="wrap-cat">

                                            <select name="product_cat" id="product_cat">

                                                <option value="">Browse Categories</option>
                                                <option value=business>Business</option>
                                                <option value=children>Childrens</option>
                                                <option value=comedy>Comedy</option>
                                                <option value=comic>Comic</option>
                                                <option value=cooking>Cooking</option>
                                                <option value=fiction>Fiction</option>
                                                <option value=home-garden>Home &amp; Garden</option>
                                                <option value=media>Media</option>
                                                <option value=romance>Romance</option>
                                                <option value=science>Science</option>
                                                <option value=space-nature>Space &amp; Nature</option>
                                                <option value=thriller>Thriller</option>
                                            </select>
                                        </div>
                                    </div>
                                    <button type="submit" class="search-submit">Go</button>
                                    <input type="hidden" name="post_type" value="product"/>
                                </form>
                            </div>
                            <!-- #site-logo -->
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        @yield('nav')
                    </div>
                </div>
            </div>
            <!-- #site-navigation -->

        </header>
        <!-- #masthead -->
        <!-- #masthead -->
        <!-- #page-title -->
        <div id="content" class="site-content">
            <div id="primary" class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <main id="main" class="site-main">

                            <article id="post-407" class="post-407 page type-page status-publish hentry">
                                <div class="entry-content">

                                    <div data-vc-full-width="true" data-vc-full-width-init="false"
                                         data-vc-stretch-content="true"
                                         class="vc_row wpb_row vc_row-fluid width-fill vc_custom_1503973713559 vc_row-has-fill">
                                        <div class="column-fill wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    @yield('slider')
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_row-full-width"></div>
                                    <div data-vc-full-width="true" data-vc-full-width-init="false"
                                         class="vc_row wpb_row vc_row-fluid vc_custom_1503889319693 vc_row-has-fill">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <h2 style="font-size: 15px;color: #888a92;text-align: center;font-family:averta-semibold;font-weight:400;font-style:normal"
                                                        class="vc_custom_heading vc_custom_1503885787347">SEARCH BY BOOK
                                                        NAME, AUTHOR OR BY EAN BARCODE</h2>
                                                    <div class="wrap-search-book" id="cms-search-book">
                                                        <form class="searchform"
                                                              action="http://demo.cmssuperheroes.com/themeforest/bookjunky/"
                                                              method="get">
                                                            <div class="wrap-cat">

                                                                <select name="product_cat" id="product_cat">

                                                                    <option value="">All</option>
                                                                    <option value="business">Business</option>
                                                                    <option value="children">Childrens</option>
                                                                    <option value="comedy">Comedy</option>
                                                                    <option value="comic">Comic</option>
                                                                    <option value="cooking">Cooking</option>
                                                                    <option value="fiction">Fiction</option>
                                                                    <option value="home-garden">Home &amp; Garden
                                                                    </option>
                                                                    <option value="media">Media</option>
                                                                    <option value="romance">Romance</option>
                                                                    <option value="science">Science</option>
                                                                    <option value="space-nature">Space &amp; Nature
                                                                    </option>
                                                                    <option value="thriller">Thriller</option>
                                                                </select>
                                                            </div>

                                                            <div class="wrap-year">
                                                                <select name="bj_tax_pa_year_publication" id="term">

                                                                    <option value="">Year</option>
                                                                    <option value="191">1955</option>
                                                                    <option value="15">1991</option>
                                                                    <option value="42">1992</option>
                                                                    <option value="68">1993</option>
                                                                    <option value="65">2000</option>
                                                                    <option value="66">2002</option>
                                                                    <option value="67">2003</option>
                                                                    <option value="64">2007</option>
                                                                    <option value="70">2010</option>
                                                                    <option value="177">2011</option>
                                                                    <option value="71">2013</option>
                                                                    <option value="188">2015</option>
                                                                    <option value="100">2016</option>
                                                                    <option value="167">2017</option>
                                                                </select>
                                                            </div>

                                                            <div class="wrap-search">
                                                                <input type="text" class="form-search" name="s" value=""
                                                                       placeholder="Search Book">
                                                                <button type="submit" class="search-submit">Search
                                                                    Books
                                                                </button>
                                                            </div>
                                                            <input type="hidden" name="post_type" value=""/>
                                                            <input type="hidden" name="bj_action" value="bj_product"/>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_row-full-width"></div>
                                    <div data-vc-full-width="true" data-vc-full-width-init="false"
                                         data-vc-stretch-content="true"
                                         class="vc_row wpb_row vc_row-fluid width-fill vc_custom_1503975536992 vc_row-has-fill">

                                        @yield('bar')
                                        @yield('home')
                                        @yield('books_content')
                                    </div>
                                    <div class="vc_row-full-width"></div>
                                    <div data-vc-full-width="true" data-vc-full-width-init="false"
                                         class="vc_row wpb_row vc_row-fluid vc_custom_1504086144605 vc_row-has-fill row-gradient-color">
                                        <div class="gradient-color" style="
    height: 100%;
    background: #6b4dcc;   
    background: -webkit-linear-gradient(#6b4dcc , #523bc9);
    background: -o-linear-gradient(#6b4dcc, #523bc9);
    background: -moz-linear-gradient(#6b4dcc, #523bc9);
    background: linear-gradient(#6b4dcc , #523bc9);
    opacity: 1;
    ">
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="wrap-cms-popuplar-book">
                                                        <div class="row">
                                                            <div class="most-popular-info col-xs-12 col-md-4 col-lg-3">
                                                                <p class="title-1">our</p>
                                                                <p class="title-2">TOP<span>20</span></p>
                                                                <p class="title-3">Most popular books</p>
                                                                <a href="#">View all</a>
                                                            </div>
                                                            <div class="most-popular-contents col-xs-12 col-md-8 col-lg-9">
                                                                <div id="most-popular" class="owl-carousel owl-theme">
                                                                    <div class="item-popuplar">
                                                                        <div class="thumbnal-popuplar"
                                                                             style="transition:all 0.25s ease 0s ;box-shadow: 0 0 15px -2px #308ec7;"
                                                                             onmouseover="this.style.boxShadow ='0 0 20px 0 #308ec7';"
                                                                             onmouseout="this.style.boxShadow ='0 0 15px -2px #308ec7';">
                                                                            <a href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?product=bash-and-lucy-fetch-confidence">
                                                                                <img width="330" height="500"
                                                                                     src="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/bash_and_lucy-2.jpg"
                                                                                     class="attachment-shop_catalog_image_size size-shop_catalog_image_size wp-post-image"
                                                                                     alt=""
                                                                                     srcset="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/bash_and_lucy-2.jpg 330w, http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/bash_and_lucy-2-300x455.jpg 300w"
                                                                                     sizes="(max-width: 330px) 100vw, 330px"/>
                                                                            </a>
                                                                        </div>
                                                                        <div class="content-popuplar">
                                                                            <a class="popular-title"
                                                                               href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?product=bash-and-lucy-fetch-confidence">Bash
                                                                                and Lucy Fetch Confidence</a>
                                                                            <div class="popular-author">
                                                                                by Lisa &amp; Michael Cohn
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item-popuplar">
                                                                        <div class="thumbnal-popuplar"
                                                                             style="transition:all 0.25s ease 0s ;box-shadow: 0 0 15px -2px #4f4387;"
                                                                             onmouseover="this.style.boxShadow ='0 0 20px 0 #4f4387';"
                                                                             onmouseout="this.style.boxShadow ='0 0 15px -2px #4f4387';">
                                                                            <a href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?product=the-world-of-abstract-art">
                                                                                <img width="299" height="455"
                                                                                     src="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/the_world.jpg"
                                                                                     class="attachment-shop_catalog_image_size size-shop_catalog_image_size wp-post-image"
                                                                                     alt=""/> </a>
                                                                        </div>
                                                                        <div class="content-popuplar">
                                                                            <a class="popular-title"
                                                                               href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?product=the-world-of-abstract-art">The
                                                                                World of Abstract Art</a>
                                                                            <div class="popular-author">
                                                                                by Emily Robbins &amp; J.D Hayes
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item-popuplar">
                                                                        <div class="thumbnal-popuplar"
                                                                             style="transition:all 0.25s ease 0s ;box-shadow: 0 0 15px -2px #00576c;"
                                                                             onmouseover="this.style.boxShadow ='0 0 20px 0 #00576c';"
                                                                             onmouseout="this.style.boxShadow ='0 0 15px -2px #00576c';">
                                                                            <a href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?product=boring-girls-a-novel">
                                                                                <img width="330" height="500"
                                                                                     src="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/boring_girls_a_novel.jpg"
                                                                                     class="attachment-shop_catalog_image_size size-shop_catalog_image_size wp-post-image"
                                                                                     alt=""
                                                                                     srcset="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/boring_girls_a_novel.jpg 330w, http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/boring_girls_a_novel-300x455.jpg 300w"
                                                                                     sizes="(max-width: 330px) 100vw, 330px"/>
                                                                            </a>
                                                                        </div>
                                                                        <div class="content-popuplar">
                                                                            <a class="popular-title"
                                                                               href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?product=boring-girls-a-novel">Boring
                                                                                Girls, A Novel</a>
                                                                            <div class="popular-author">
                                                                                by Sara Taylor
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item-popuplar">
                                                                        <div class="thumbnal-popuplar"
                                                                             style="transition:all 0.25s ease 0s ;box-shadow: 0 0 15px -2px #0075bd;"
                                                                             onmouseover="this.style.boxShadow ='0 0 20px 0 #0075bd';"
                                                                             onmouseout="this.style.boxShadow ='0 0 15px -2px #0075bd';">
                                                                            <a href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?product=be-well-be">
                                                                                <img width="330" height="500"
                                                                                     src="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/be_well_bee.jpg"
                                                                                     class="attachment-shop_catalog_image_size size-shop_catalog_image_size wp-post-image"
                                                                                     alt=""
                                                                                     srcset="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/be_well_bee.jpg 330w, http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/be_well_bee-300x455.jpg 300w"
                                                                                     sizes="(max-width: 330px) 100vw, 330px"/>
                                                                            </a>
                                                                        </div>
                                                                        <div class="content-popuplar">
                                                                            <a class="popular-title"
                                                                               href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?product=be-well-be">Be
                                                                                Well Be</a>
                                                                            <div class="popular-author">
                                                                                by Cabe Lindsay
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item-popuplar">
                                                                        <div class="thumbnal-popuplar"
                                                                             style="transition:all 0.25s ease 0s ;box-shadow: 0 0 15px -2px #e9e7e8;"
                                                                             onmouseover="this.style.boxShadow ='0 0 20px 0 #e9e7e8';"
                                                                             onmouseout="this.style.boxShadow ='0 0 15px -2px #e9e7e8';">
                                                                            <a href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?product=shattered">
                                                                                <img width="330" height="500"
                                                                                     src="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/shattered.jpg"
                                                                                     class="attachment-shop_catalog_image_size size-shop_catalog_image_size wp-post-image"
                                                                                     alt=""
                                                                                     srcset="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/shattered.jpg 330w, http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/shattered-300x455.jpg 300w"
                                                                                     sizes="(max-width: 330px) 100vw, 330px"/>
                                                                            </a>
                                                                        </div>
                                                                        <div class="content-popuplar">
                                                                            <a class="popular-title"
                                                                               href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?product=shattered">Shattered</a>
                                                                            <div class="popular-author">
                                                                                by Peter Cawdron
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item-popuplar">
                                                                        <div class="thumbnal-popuplar"
                                                                             style="transition:all 0.25s ease 0s ;box-shadow: 0 0 15px -2px #f5f5f5;"
                                                                             onmouseover="this.style.boxShadow ='0 0 20px 0 #f5f5f5';"
                                                                             onmouseout="this.style.boxShadow ='0 0 15px -2px #f5f5f5';">
                                                                            <a href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?product=darknet">
                                                                                <img width="330" height="500"
                                                                                     src="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/darknet.jpg"
                                                                                     class="attachment-shop_catalog_image_size size-shop_catalog_image_size wp-post-image"
                                                                                     alt=""
                                                                                     srcset="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/darknet.jpg 330w, http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/darknet-300x455.jpg 300w"
                                                                                     sizes="(max-width: 330px) 100vw, 330px"/>
                                                                            </a>
                                                                        </div>
                                                                        <div class="content-popuplar">
                                                                            <a class="popular-title"
                                                                               href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?product=darknet">Darknet</a>
                                                                            <div class="popular-author">
                                                                                by Matthew Mather
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item-popuplar">
                                                                        <div class="thumbnal-popuplar"
                                                                             style="transition:all 0.25s ease 0s ;box-shadow: 0 0 15px -2px #000000;"
                                                                             onmouseover="this.style.boxShadow ='0 0 20px 0 #000000';"
                                                                             onmouseout="this.style.boxShadow ='0 0 15px -2px #000000';">
                                                                            <a href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?product=freefall">
                                                                                <img width="330" height="500"
                                                                                     src="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/freefall.jpg"
                                                                                     class="attachment-shop_catalog_image_size size-shop_catalog_image_size wp-post-image"
                                                                                     alt=""
                                                                                     srcset="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/freefall.jpg 330w, http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/freefall-300x455.jpg 300w"
                                                                                     sizes="(max-width: 330px) 100vw, 330px"/>
                                                                            </a>
                                                                        </div>
                                                                        <div class="content-popuplar">
                                                                            <a class="popular-title"
                                                                               href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?product=freefall">Freefall</a>
                                                                            <div class="popular-author">
                                                                                by Peter Cawdron
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item-popuplar">
                                                                        <div class="thumbnal-popuplar"
                                                                             style="transition:all 0.25s ease 0s ;box-shadow: 0 0 15px -2px #5a5b99;"
                                                                             onmouseover="this.style.boxShadow ='0 0 20px 0 #5a5b99';"
                                                                             onmouseout="this.style.boxShadow ='0 0 15px -2px #5a5b99';">
                                                                            <a href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?product=nightshade">
                                                                                <img width="330" height="500"
                                                                                     src="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/nightshade.jpg"
                                                                                     class="attachment-shop_catalog_image_size size-shop_catalog_image_size wp-post-image"
                                                                                     alt=""
                                                                                     srcset="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/nightshade.jpg 330w, http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/nightshade-300x455.jpg 300w"
                                                                                     sizes="(max-width: 330px) 100vw, 330px"/>
                                                                            </a>
                                                                        </div>
                                                                        <div class="content-popuplar">
                                                                            <a class="popular-title"
                                                                               href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?product=nightshade">Nightshade</a>
                                                                            <div class="popular-author">
                                                                                by Andrea Cremer
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item-popuplar">
                                                                        <div class="thumbnal-popuplar"
                                                                             style="transition:all 0.25s ease 0s ;box-shadow: 0 0 15px -2px #ededa6;"
                                                                             onmouseover="this.style.boxShadow ='0 0 20px 0 #ededa6';"
                                                                             onmouseout="this.style.boxShadow ='0 0 15px -2px #ededa6';">
                                                                            <a href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?product=the-happy-lemon">
                                                                                <img width="330" height="500"
                                                                                     src="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/the_happy_lemon.jpg"
                                                                                     class="attachment-shop_catalog_image_size size-shop_catalog_image_size wp-post-image"
                                                                                     alt=""
                                                                                     srcset="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/the_happy_lemon.jpg 330w, http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/the_happy_lemon-300x455.jpg 300w"
                                                                                     sizes="(max-width: 330px) 100vw, 330px"/>
                                                                            </a>
                                                                        </div>
                                                                        <div class="content-popuplar">
                                                                            <a class="popular-title"
                                                                               href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?product=the-happy-lemon">The
                                                                                Happy Lemon</a>
                                                                            <div class="popular-author">
                                                                                by Kurt Yamashita
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item-popuplar">
                                                                        <div class="thumbnal-popuplar"
                                                                             style="transition:all 0.25s ease 0s ;box-shadow: 0 0 15px -2px #f0e0cd;"
                                                                             onmouseover="this.style.boxShadow ='0 0 20px 0 #f0e0cd';"
                                                                             onmouseout="this.style.boxShadow ='0 0 15px -2px #f0e0cd';">
                                                                            <a href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?product=carbonel">
                                                                                <img width="330" height="500"
                                                                                     src="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/carbonel.jpg"
                                                                                     class="attachment-shop_catalog_image_size size-shop_catalog_image_size wp-post-image"
                                                                                     alt=""
                                                                                     srcset="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/carbonel.jpg 330w, http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/carbonel-300x455.jpg 300w"
                                                                                     sizes="(max-width: 330px) 100vw, 330px"/>
                                                                            </a>
                                                                        </div>
                                                                        <div class="content-popuplar">
                                                                            <a class="popular-title"
                                                                               href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?product=carbonel">Carbonel</a>
                                                                            <div class="popular-author">
                                                                                by Barbara Sleigh
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item-popuplar">
                                                                        <div class="thumbnal-popuplar"
                                                                             style="transition:all 0.25s ease 0s ;box-shadow: 0 0 15px -2px #b4aa9e;"
                                                                             onmouseover="this.style.boxShadow ='0 0 20px 0 #b4aa9e';"
                                                                             onmouseout="this.style.boxShadow ='0 0 15px -2px #b4aa9e';">
                                                                            <a href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?product=adipiscing-elit">
                                                                                <img width="300" height="455"
                                                                                     src="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/book-5.jpg"
                                                                                     class="attachment-shop_catalog_image_size size-shop_catalog_image_size wp-post-image"
                                                                                     alt=""/> </a>
                                                                        </div>
                                                                        <div class="content-popuplar">
                                                                            <a class="popular-title"
                                                                               href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?product=adipiscing-elit">By
                                                                                The Time You Read This, I&#039;ll Be
                                                                                Dead</a>
                                                                            <div class="popular-author">
                                                                                by Julie Anne Peters
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item-popuplar">
                                                                        <div class="thumbnal-popuplar"
                                                                             style="transition:all 0.25s ease 0s ;box-shadow: 0 0 15px -2px #191f12;"
                                                                             onmouseover="this.style.boxShadow ='0 0 20px 0 #191f12';"
                                                                             onmouseout="this.style.boxShadow ='0 0 15px -2px #191f12';">
                                                                            <a href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?product=aaaaa">
                                                                                <img width="300" height="455"
                                                                                     src="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/book-2.jpg"
                                                                                     class="attachment-shop_catalog_image_size size-shop_catalog_image_size wp-post-image"
                                                                                     alt=""/> </a>
                                                                        </div>
                                                                        <div class="content-popuplar">
                                                                            <a class="popular-title"
                                                                               href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?product=aaaaa">Spells</a>
                                                                            <div class="popular-author">
                                                                                by Aprilynne Pike
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item-popuplar">
                                                                        <div class="thumbnal-popuplar"
                                                                             style="transition:all 0.25s ease 0s ;box-shadow: 0 0 15px -2px #ec1c24;"
                                                                             onmouseover="this.style.boxShadow ='0 0 20px 0 #ec1c24';"
                                                                             onmouseout="this.style.boxShadow ='0 0 15px -2px #ec1c24';">
                                                                            <a href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?product=kenjo">
                                                                                <img width="330" height="500"
                                                                                     src="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/kenjo.jpg"
                                                                                     class="attachment-shop_catalog_image_size size-shop_catalog_image_size wp-post-image"
                                                                                     alt=""
                                                                                     srcset="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/kenjo.jpg 330w, http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/kenjo-300x455.jpg 300w"
                                                                                     sizes="(max-width: 330px) 100vw, 330px"/>
                                                                            </a>
                                                                        </div>
                                                                        <div class="content-popuplar">
                                                                            <a class="popular-title"
                                                                               href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?product=kenjo">Kenjo</a>
                                                                            <div class="popular-author">
                                                                                by Patt Barr
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item-popuplar">
                                                                        <div class="thumbnal-popuplar"
                                                                             style="transition:all 0.25s ease 0s ;box-shadow: 0 0 15px -2px #180b06;"
                                                                             onmouseover="this.style.boxShadow ='0 0 20px 0 #180b06';"
                                                                             onmouseout="this.style.boxShadow ='0 0 15px -2px #180b06';">
                                                                            <a href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?product=holy-ghosts">
                                                                                <img width="330" height="500"
                                                                                     src="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/holy_ghosts.jpg"
                                                                                     class="attachment-shop_catalog_image_size size-shop_catalog_image_size wp-post-image"
                                                                                     alt=""
                                                                                     srcset="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/holy_ghosts.jpg 330w, http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/holy_ghosts-300x455.jpg 300w"
                                                                                     sizes="(max-width: 330px) 100vw, 330px"/>
                                                                            </a>
                                                                        </div>
                                                                        <div class="content-popuplar">
                                                                            <a class="popular-title"
                                                                               href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?product=holy-ghosts">Holy
                                                                                Ghosts</a>
                                                                            <div class="popular-author">
                                                                                by David J. Schmidt
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item-popuplar">
                                                                        <div class="thumbnal-popuplar"
                                                                             style="transition:all 0.25s ease 0s ;box-shadow: 0 0 15px -2px #d17a6c;"
                                                                             onmouseover="this.style.boxShadow ='0 0 20px 0 #d17a6c';"
                                                                             onmouseout="this.style.boxShadow ='0 0 15px -2px #d17a6c';">
                                                                            <a href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?product=labore-et-dolore">
                                                                                <img width="300" height="455"
                                                                                     src="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/book-6.jpg"
                                                                                     class="attachment-shop_catalog_image_size size-shop_catalog_image_size wp-post-image"
                                                                                     alt=""/> </a>
                                                                        </div>
                                                                        <div class="content-popuplar">
                                                                            <a class="popular-title"
                                                                               href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?product=labore-et-dolore">Forget
                                                                                Her Nots</a>
                                                                            <div class="popular-author">
                                                                                by Amy Brecount White
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item-popuplar">
                                                                        <div class="thumbnal-popuplar"
                                                                             style="transition:all 0.25s ease 0s ;box-shadow: 0 0 15px -2px #f44612;"
                                                                             onmouseover="this.style.boxShadow ='0 0 20px 0 #f44612';"
                                                                             onmouseout="this.style.boxShadow ='0 0 15px -2px #f44612';">
                                                                            <a href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?product=les-des-animaux">
                                                                                <img width="330" height="500"
                                                                                     src="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/les_des_animaux.jpg"
                                                                                     class="attachment-shop_catalog_image_size size-shop_catalog_image_size wp-post-image"
                                                                                     alt=""
                                                                                     srcset="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/les_des_animaux.jpg 330w, http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/les_des_animaux-300x455.jpg 300w"
                                                                                     sizes="(max-width: 330px) 100vw, 330px"/>
                                                                            </a>
                                                                        </div>
                                                                        <div class="content-popuplar">
                                                                            <a class="popular-title"
                                                                               href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?product=les-des-animaux">Les
                                                                                Des Animaux</a>
                                                                            <div class="popular-author">
                                                                                by Virgine Morgand
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item-popuplar">
                                                                        <div class="thumbnal-popuplar"
                                                                             style="transition:all 0.25s ease 0s ;box-shadow: 0 0 15px -2px #ff7536;"
                                                                             onmouseover="this.style.boxShadow ='0 0 20px 0 #ff7536';"
                                                                             onmouseout="this.style.boxShadow ='0 0 15px -2px #ff7536';">
                                                                            <a href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?product=clever-lands">
                                                                                <img width="330" height="500"
                                                                                     src="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/clever_lands.jpg"
                                                                                     class="attachment-shop_catalog_image_size size-shop_catalog_image_size wp-post-image"
                                                                                     alt=""
                                                                                     srcset="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/clever_lands.jpg 330w, http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/clever_lands-300x455.jpg 300w"
                                                                                     sizes="(max-width: 330px) 100vw, 330px"/>
                                                                            </a>
                                                                        </div>
                                                                        <div class="content-popuplar">
                                                                            <a class="popular-title"
                                                                               href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?product=clever-lands">Clever
                                                                                Lands</a>
                                                                            <div class="popular-author">
                                                                                by Lucy Crehan
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item-popuplar">
                                                                        <div class="thumbnal-popuplar"
                                                                             style="transition:all 0.25s ease 0s ;box-shadow: 0 0 15px -2px #24655e;"
                                                                             onmouseover="this.style.boxShadow ='0 0 20px 0 #24655e';"
                                                                             onmouseout="this.style.boxShadow ='0 0 15px -2px #24655e';">
                                                                            <a href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?product=history-of-modern-architecture">
                                                                                <img width="330" height="500"
                                                                                     src="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/history_of_modern_architecture.jpg"
                                                                                     class="attachment-shop_catalog_image_size size-shop_catalog_image_size wp-post-image"
                                                                                     alt=""
                                                                                     srcset="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/history_of_modern_architecture.jpg 330w, http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/history_of_modern_architecture-300x455.jpg 300w"
                                                                                     sizes="(max-width: 330px) 100vw, 330px"/>
                                                                            </a>
                                                                        </div>
                                                                        <div class="content-popuplar">
                                                                            <a class="popular-title"
                                                                               href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?product=history-of-modern-architecture">History
                                                                                of Modern Architecture</a>
                                                                            <div class="popular-author">
                                                                                by Richard Phillips
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item-popuplar">
                                                                        <div class="thumbnal-popuplar"
                                                                             style="transition:all 0.25s ease 0s ;box-shadow: 0 0 15px -2px #081720;"
                                                                             onmouseover="this.style.boxShadow ='0 0 20px 0 #081720';"
                                                                             onmouseout="this.style.boxShadow ='0 0 15px -2px #081720';">
                                                                            <a href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?product=the-girl-of-ink-and-stars">
                                                                                <img width="330" height="500"
                                                                                     src="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/the_girl_of_ink_and_stars.jpg"
                                                                                     class="attachment-shop_catalog_image_size size-shop_catalog_image_size wp-post-image"
                                                                                     alt=""
                                                                                     srcset="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/the_girl_of_ink_and_stars.jpg 330w, http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/the_girl_of_ink_and_stars-300x455.jpg 300w"
                                                                                     sizes="(max-width: 330px) 100vw, 330px"/>
                                                                            </a>
                                                                        </div>
                                                                        <div class="content-popuplar">
                                                                            <a class="popular-title"
                                                                               href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?product=the-girl-of-ink-and-stars">The
                                                                                Girl of Ink and Stars</a>
                                                                            <div class="popular-author">
                                                                                by Kiran M. Hargrave
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="item-popuplar">
                                                                        <div class="thumbnal-popuplar"
                                                                             style="transition:all 0.25s ease 0s ;box-shadow: 0 0 15px -2px #f75b5b;"
                                                                             onmouseover="this.style.boxShadow ='0 0 20px 0 #f75b5b';"
                                                                             onmouseout="this.style.boxShadow ='0 0 15px -2px #f75b5b';">
                                                                            <a href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?product=irure-dolor">
                                                                                <img width="300" height="455"
                                                                                     src="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/book-7.jpg"
                                                                                     class="attachment-shop_catalog_image_size size-shop_catalog_image_size wp-post-image"
                                                                                     alt=""/> </a>
                                                                        </div>
                                                                        <div class="content-popuplar">
                                                                            <a class="popular-title"
                                                                               href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?product=irure-dolor">There&#039;s
                                                                                before. And then there&#039;s after.</a>
                                                                            <div class="popular-author">
                                                                                by Kristin Harmel
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_row-full-width"></div>

                                </div>
                                <!-- .entry-content -->
                                <footer class="edit-page">

                                </footer>
                                <!-- .entry-meta -->
                            </article>
                            <!-- #post -->

                        </main>
                        <!-- .site-main -->
                    </div>
                </div>
            </div>
            <!-- .content-area -->

        </div>
        <!-- .site-content -->
        <footer class="site-footer">
            <div id="footer-top">
                <div class="container">
                    <div class="row">

                        <div class="wrap-about col-md-3 col-sm-12 col-xs-12 col-lg-4">
                            <div class="footer-about">
                                <a href="http://demo.cmssuperheroes.com/themeforest/bookjunky/"><img class="logo-footer"
                                                                                                     src="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/themes/book-junky/assets/images/footer-logo.png"
                                                                                                     alt="Book Junky"></a>
                                <p>Suspendisse potenti. Nulla facilisi. Vestibulum non blandit nulla. Vivamus id orci
                                    condimentum, suscipit nunc non, viverra justo. Phasellus sit amet justo ac felis
                                    sagittis elementum a at dui.</p>
                                <ul>
                                    <li><a href="#"><i
                                                    class="zmdi zmdi-facebook-box"></i></a></li>
                                    <li>
                                        <a href="#"><img
                                                    src="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/themes/book-junky/assets/images/instagram.png"
                                                    alt="Instagram"></a>
                                    </li>
                                    <li><a href="#"><i
                                                    class="zmdi zmdi-twitter-box"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <aside id="recent_views_book_2-2" class="widget-footer widget_recent_views_book_2">
                                <h3 class="wg-ft-title">THIS WEEKS REVIEWD</h3>
                                <div class="recent-review-2">
                                    <div class="recent-review-item clearfix">

                                        <div class="thumbnail-review" style="box-shadow: 0 5px 15px -5px #308ec7">
                                            <a href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?product=bash-and-lucy-fetch-confidence">
                                                <img src="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/bash_and_lucy-2.jpg"
                                                     alt="Thumbnail">
                                            </a>
                                        </div>
                                        <div class="contents">

                                            <a href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?product=bash-and-lucy-fetch-confidence"
                                               class="title">

                                                Bash and Lucy Fetch Confidence </a>
                                            <div class="author-product">
                                                by Lisa &amp; Michael Cohn
                                            </div>

                                            <div class="woocommerce">
                                                <div class="woocommerce-product-rating"><span class="star-rating"
                                                                                              style="color:;"><span
                                                                style="width:80%">Rated <strong
                                                                    class="rating">4.00</strong> out of 5 based on <span
                                                                    class="rating">2</span> customer ratings</span>
                                                        </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="recent-review-item clearfix">

                                        <div class="thumbnail-review" style="box-shadow: 0 5px 15px -5px #00576c">
                                            <a href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?product=boring-girls-a-novel">
                                                <img src="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/boring_girls_a_novel.jpg"
                                                     alt="Thumbnail">
                                            </a>
                                        </div>
                                        <div class="contents">

                                            <a href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?product=boring-girls-a-novel"
                                               class="title">

                                                Boring Girls, A Novel </a>
                                            <div class="author-product">
                                                by Sara Taylor
                                            </div>

                                            <div class="woocommerce">
                                                <div class="woocommerce-product-rating">
                                                        <span class="star-rating ">
                                                                                                    <span style="width:0%"></span>
                                                        </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="recent-review-item clearfix">

                                        <div class="thumbnail-review" style="box-shadow: 0 5px 15px -5px #ededa6">
                                            <a href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?product=the-happy-lemon">
                                                <img src="http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/uploads/the_happy_lemon.jpg"
                                                     alt="Thumbnail">
                                            </a>
                                        </div>
                                        <div class="contents">

                                            <a href="http://demo.cmssuperheroes.com/themeforest/bookjunky/?product=the-happy-lemon"
                                               class="title">

                                                The Happy Lemon </a>
                                            <div class="author-product">
                                                by Kurt Yamashita
                                            </div>

                                            <div class="woocommerce">
                                                <div class="woocommerce-product-rating"><span class="star-rating"
                                                                                              style="color:;"><span
                                                                style="width:80%">Rated <strong
                                                                    class="rating">4.00</strong> out of 5 based on <span
                                                                    class="rating">2</span> customer ratings</span>
                                                        </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <aside id="custom_html-2" class="widget_text widget-footer widget_custom_html">
                                <h3 class="wg-ft-title">GENRES</h3>
                                <div class="textwidget custom-html-widget">
                                    <ul>
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Comedy</a></li>
                                        <li><a href="#">Drama</a></li>
                                        <li><a href="#">E-Books</a></li>
                                        <li><a href="#">Horror</a></li>
                                        <li><a href="#">Kids</a></li>
                                        <li><a href="#">Romantic Comedy</a></li>
                                        <li><a href="#">Sci-Fi</a></li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12 col-lg-2">
                            <aside id="custom_html-3" class="widget_text widget-footer widget_custom_html">
                                <h3 class="wg-ft-title">CONTACT</h3>
                                <div class="textwidget custom-html-widget">
                                    <ul>
                                        <li>BookJunky,</li>
                                        <li>80 Crown Street,</li>
                                        <li>London, WC2B 7UJ</li>
                                        <li>&nbsp;</li>
                                        <li>Call: <a href="tel:07724100110">0772 410 0110</a></li>
                                        <li><a href="mailto:email@bookjunky.co.uk">Email:email@bookjunky.co.uk</a></li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #footer-top -->

            <div id="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">

                            Copyright © 2018 <a href="http://cmssuperheroes.com">CMSSuperheroes. </a>All Right Reserved
                        </div>
                    </div>
                </div>
            </div>
            <!-- #footer-bottom -->

        </footer>
        <!-- .site-footer -->

    </div>
    <!-- .site -->

</div>
<div class="book-junky-back-to-top"><i class="fa fa-angle-double-up"></i></div>
<div id="cover_open_modal" class="cover_modal">

    <div class="login_dialog">

        <a class="boxclose"></a>

        <form class="login_form" id="login_form" method="post" action="#">
            <h2>Please Login</h2>
            <input type="text" class="alert_status" readonly>
            <label for="login_user"> Username</label>
            <input type="text" name="login_user" id="login_user"/>
            <label for="pass_user"> Password </label>
            <input type="password" name="pass_user" id="pass_user"/>
            <label for="rememberme" id="lb_rememberme">
                <input name="rememberme" type="checkbox" id="rememberme" value="forever"/> Remember Me</label>
            <input type="submit" name="login_submit" value="LOGIN" class="login_submit"/>

            <div class="social-login">

            </div>
        </form>

        <form class="register_form" id="register_form" action="http://demo.cmssuperheroes.com/themeforest/bookjunky"
              method="post">
            <h2>Registration</h2>
            <input type="text" class="alert_status" readonly>
            <label for="register_user">Username</label>
            <input type="text" name="register_user" id="register_user" value="">
            <label for="register_email">E-mail</label>
            <input type="email" name="register_email" id="register_email" value="">
            <div id="allow_pass">
                <label for="register_pass">Password</label>
                <input type="password" name="register_pass" id="register_pass" value="">
                <label for="confirm_pass">Confirm Password</label>
                <input type="password" name="confirm_pass" id="confirm_pass" value="">
            </div>
            <input type="submit" name="register_submit" id="register_submit" value="REGISTER"/>
        </form>

        <form class="lost_pwd_form" action="http://demo.cmssuperheroes.com/themeforest/bookjunky" method="post">
            <h2>Forgotten Password?</h2>
            <input type="text" class="alert_status" readonly>
            <label for="lost_pwd_user_email">Username or Email Adress</label>
            <input type="text" name="lost_pwd_user_email" id="lost_pwd_user_email">
            <input type="submit" name="lost_pwd_submit" id="lost_pwd_submit" value="GET NEW PASSWORD">
        </form>

        <div class="pass_and_register" id="pass_and_register">

            <a class="go_to_register_link" href="" style="">Register</a>
            <span style="color: black"> </span>
            <a class="go_to_lostpassword_link" href="">Forgot Password</a>
            <span style="color: black"></span>
            <a class="back_login" href="">Back to Login</a>

        </div>

    </div>
</div>
{{-- <script src='https://www.google.com/recaptcha/api.js'></script> --}}
{{-- <script type="text/javascript">
    var c = document.body.className;
    c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
    document.body.className = c;
</script> --}}
<link rel='stylesheet' id='font-awesome-css' href='{{ asset(env("THEME")) }}/css/all.min.css' type='text/css'
      media='all'/>
<!-- <link property="stylesheet" rel='stylesheet' id='owl-carousel-css' href='http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/plugins/cmssuperheroesv2/assets/css/owl.carousel.css' type='text/css' media='all' /> -->
<!--     <link property="stylesheet" rel='stylesheet' id='vc_google_fonts_avertasemiboldregular-css' href='//fonts.googleapis.com/css?family=averta-semibold%3Aregular&#038;ver=5.2' type='text/css' media='all' /> -->
<!-- <link rel='stylesheet' id='mediaelement-css' href='http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-includes/js/mediaelement/mediaelementplayer-legacy.min.css' type='text/css' media='all' /> -->
<!-- <link rel='stylesheet' id='wp-mediaelement-css' href='http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-includes/js/mediaelement/wp-mediaelement.min.css' type='text/css' media='all' /> -->
{{--  <script type='text/javascript'>
     /* <![CDATA[ */
     var wpcf7 = {
         "apiSettings": {
             "root": "http:\/\/demo.cmssuperheroes.com\/themeforest\/bookjunky\/index.php?rest_route=\/contact-form-7\/v1",
             "namespace": "contact-form-7\/v1"
         },
         "cached": "1"
     };
     /* ]]> */
 </script> --}}
{{-- <script type='text/javascript' src='http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/plugins/contact-form-7/includes/js/scripts.js'></script> --}}
{{--     <script type='text/javascript'>
        /* <![CDATA[ */
        var flexFavorites = {
            "ajax": "http:\/\/demo.cmssuperheroes.com\/themeforest\/bookjunky\/wp-admin\/admin-ajax.php",
            "action": "like_post"
        };
        /* ]]> */
    </script> --}}
<script type='text/javascript'
        src='http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/plugins/flex-favorites//assets/js/flex-favorites.js'></script>
<script type='text/javascript'
        src='http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/plugins/swa-demo-bar/assets/js/swadmb-front.js'></script>
<script type='text/javascript'
        src='http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js'></script>
<!-- <script type='text/javascript'>
    /* <![CDATA[ */
    var woocommerce_params = {
        "ajax_url": "\/themeforest\/bookjunky\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/themeforest\/bookjunky\/?wc-ajax=%%endpoint%%"
    };
    /* ]]> */
</script> -->
<script type='text/javascript'
        src='http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js'></script>
{{-- <script type='text/javascript'>
    /* <![CDATA[ */
    var wc_cart_fragments_params = {
        "ajax_url": "\/themeforest\/bookjunky\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/themeforest\/bookjunky\/?wc-ajax=%%endpoint%%",
        "cart_hash_key": "wc_cart_hash_202fbb9f481e0c0335453d67b61bc604",
        "fragment_name": "wc_fragments_202fbb9f481e0c0335453d67b61bc604",
        "request_timeout": "5000"
    };
    /* ]]> */
</script> --}}
<script type='text/javascript'
        src='http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js'></script>
<script type='text/javascript'
        src='http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/themes/book-junky/assets/js/main.js'></script>
<script type='text/javascript'
        src='http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/themes/book-junky/assets/js/jquery-ui.js'></script>
<script type='text/javascript'
        src='http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/themes/book-junky/assets/js/jQAllRangeSliders-min.js'></script>
<script type='text/javascript'
        src='http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/themes/book-junky/assets/js/book-junky.js'></script>
<script type='text/javascript'
        src='http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/themes/book-junky/assets/js/menu.js'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var nectarLove = {
        "ajaxurl": "http:\/\/demo.cmssuperheroes.com\/themeforest\/bookjunky\/wp-admin\/admin-ajax.php",
        "postID": "407",
        "rooturl": "http:\/\/demo.cmssuperheroes.com\/themeforest\/bookjunky"
    };
    /* ]]> */
</script>
<script type='text/javascript'
        src='http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/themes/book-junky/assets/js/post_favorite.js'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var bj_handle = {
        "ajax_url": "http:\/\/demo.cmssuperheroes.com\/themeforest\/bookjunky\/wp-admin\/admin-ajax.php"
    };
    /* ]]> */
</script>
<script type='text/javascript'
        src='http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/themes/book-junky/assets/js/bj-handle.js'></script>
<script type='text/javascript'
        src='http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-includes/js/wp-embed.min.js'></script>
<script type='text/javascript'
        src='http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js'></script>
<script type='text/javascript'
        src='http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/plugins/cmssuperheroesv2/assets/js/owl.carousel.min.js'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var cmscarousel = {
        "cms-carousel": {
            "margin": "30",
            "loop": "true",
            "mouseDrag": "true",
            "nav": "false",
            "dots": "true",
            "autoplay": "false",
            "autoplayTimeout": 5000,
            "smartSpeed": 1000,
            "autoplayHoverPause": "true",
            "navText": ["<i class=\"fa fa-arrow-left\"><\/i>", "<i class=\"fa fa-arrow-right\"><\/i>"],
            "dotscontainer": "cms-carousel .cms-dots",
            "responsive": {
                "0": {
                    "items": 1
                },
                "768": {
                    "items": 2
                },
                "992": {
                    "items": 3
                },
                "1200": {
                    "items": 3
                }
            }
        }
    };
    /* ]]> */
</script>
<script type='text/javascript'
        src='http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/plugins/cmssuperheroesv2/assets/js/owl.carousel.cms.js'></script>
<script type='text/javascript'>
    var mejsL10n = {
        "language": "en",
        "strings": {
            "mejs.install-flash": "You are using a browser that does not have Flash player enabled or installed. Please turn on your Flash player plugin or download the latest version from https:\/\/get.adobe.com\/flashplayer\/",
            "mejs.fullscreen-off": "Turn off Fullscreen",
            "mejs.fullscreen-on": "Go Fullscreen",
            "mejs.download-video": "Download Video",
            "mejs.fullscreen": "Fullscreen",
            "mejs.time-jump-forward": ["Jump forward 1 second", "Jump forward %1 seconds"],
            "mejs.loop": "Toggle Loop",
            "mejs.play": "Play",
            "mejs.pause": "Pause",
            "mejs.close": "Close",
            "mejs.time-slider": "Time Slider",
            "mejs.time-help-text": "Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.",
            "mejs.time-skip-back": ["Skip back 1 second", "Skip back %1 seconds"],
            "mejs.captions-subtitles": "Captions\/Subtitles",
            "mejs.captions-chapters": "Chapters",
            "mejs.none": "None",
            "mejs.mute-toggle": "Mute Toggle",
            "mejs.volume-help-text": "Use Up\/Down Arrow keys to increase or decrease volume.",
            "mejs.unmute": "Unmute",
            "mejs.mute": "Mute",
            "mejs.volume-slider": "Volume Slider",
            "mejs.video-player": "Video Player",
            "mejs.audio-player": "Audio Player",
            "mejs.ad-skip": "Skip ad",
            "mejs.ad-skip-info": ["Skip in 1 second", "Skip in %1 seconds"],
            "mejs.source-chooser": "Source Chooser",
            "mejs.stop": "Stop",
            "mejs.speed-rate": "Speed Rate",
            "mejs.live-broadcast": "Live Broadcast",
            "mejs.afrikaans": "Afrikaans",
            "mejs.albanian": "Albanian",
            "mejs.arabic": "Arabic",
            "mejs.belarusian": "Belarusian",
            "mejs.bulgarian": "Bulgarian",
            "mejs.catalan": "Catalan",
            "mejs.chinese": "Chinese",
            "mejs.chinese-simplified": "Chinese (Simplified)",
            "mejs.chinese-traditional": "Chinese (Traditional)",
            "mejs.croatian": "Croatian",
            "mejs.czech": "Czech",
            "mejs.danish": "Danish",
            "mejs.dutch": "Dutch",
            "mejs.english": "English",
            "mejs.estonian": "Estonian",
            "mejs.filipino": "Filipino",
            "mejs.finnish": "Finnish",
            "mejs.french": "French",
            "mejs.galician": "Galician",
            "mejs.german": "German",
            "mejs.greek": "Greek",
            "mejs.haitian-creole": "Haitian Creole",
            "mejs.hebrew": "Hebrew",
            "mejs.hindi": "Hindi",
            "mejs.hungarian": "Hungarian",
            "mejs.icelandic": "Icelandic",
            "mejs.indonesian": "Indonesian",
            "mejs.irish": "Irish",
            "mejs.italian": "Italian",
            "mejs.japanese": "Japanese",
            "mejs.korean": "Korean",
            "mejs.latvian": "Latvian",
            "mejs.lithuanian": "Lithuanian",
            "mejs.macedonian": "Macedonian",
            "mejs.malay": "Malay",
            "mejs.maltese": "Maltese",
            "mejs.norwegian": "Norwegian",
            "mejs.persian": "Persian",
            "mejs.polish": "Polish",
            "mejs.portuguese": "Portuguese",
            "mejs.romanian": "Romanian",
            "mejs.russian": "Russian",
            "mejs.serbian": "Serbian",
            "mejs.slovak": "Slovak",
            "mejs.slovenian": "Slovenian",
            "mejs.spanish": "Spanish",
            "mejs.swahili": "Swahili",
            "mejs.swedish": "Swedish",
            "mejs.tagalog": "Tagalog",
            "mejs.thai": "Thai",
            "mejs.turkish": "Turkish",
            "mejs.ukrainian": "Ukrainian",
            "mejs.vietnamese": "Vietnamese",
            "mejs.welsh": "Welsh",
            "mejs.yiddish": "Yiddish"
        }
    };
</script>
<script type='text/javascript'
        src='http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-includes/js/mediaelement/mediaelement-and-player.min.js'></script>
<script type='text/javascript'
        src='http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-includes/js/mediaelement/mediaelement-migrate.min.js'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var _wpmejsSettings = {
        "pluginPath": "\/themeforest\/bookjunky\/wp-includes\/js\/mediaelement\/",
        "classPrefix": "mejs-",
        "stretching": "responsive"
    };
    /* ]]> */
</script>
<script type='text/javascript'
        src='http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-includes/js/mediaelement/wp-mediaelement.min.js'></script>
<script type='text/javascript'
        src='http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/plugins/cmssuperheroesv2/assets/js/cmsgrid.pagination.js'></script>
<script type='text/javascript'
        src='http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/plugins/cmssuperheroesv2/assets/js/modernizr.min.js'></script>
<script type='text/javascript'
        src='http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-includes/js/imagesloaded.min.js'></script>
<script type='text/javascript'
        src='http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/plugins/cmssuperheroesv2/assets/js/jquery.shuffle.js'></script>
<script type='text/javascript'
        src='http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/themes/book-junky/assets/js/jquery.shuffle.cms.js'></script>
<script type='text/javascript'
        src='http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/themes/book-junky/assets/js/owl.carousel.min.js'></script>
</body>

</html>