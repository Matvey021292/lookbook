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
    <script type='text/javascript' src='{{ asset(env("THEME")) }}/js/jquery.js'></script>
    <script type='text/javascript' src='{{ asset(env("THEME")) }}/js/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='{{ asset(env("THEME")) }}/js/jquery.validate.js'></script>
    <script type='text/javascript' src='{{ asset(env("THEME")) }}/js/bootstrap.min.js'></script>
    <script> var $ = jQuery;</script>
</head>

<body class="single-product page-template-default page page-id-415 woocommerce-js body-boxed wpb-js-composer js-comp-ver-5.7 vc_responsive hd-fixed">
<div class="wrap-boxed">
    <div id="page" class="hfeed site">
        <header id="masthead" class="site-header">
            <div id="cshero-header" class="header-3">
                <div class="header-top mb-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-6 top-left-3">
                                <a class="go_to_login_link" href="/login">Вход / Регистрация</a>
                            </div>
                            <div class="col-sm-12 col-md-6 top-right-3">
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

                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-sm-12 col-md-4 col-lg-3">
                            <div class="main-logo-3">
                                <a href="/">
                                    <img alt="Book Junky" src="{{ asset(env("THEME")) }}/images/logo-2.png">
                                </a>
                            </div>
                            <a href="#" class="menu"><i class="fa fa-bars"></i> Menu</a>
                        </div>
                        <div class="col-sm-12 col-md-8 col-lg-6 ">
                            <form action="{{ route('search') }}" class="searchform clearfix" method="post">
                                <div class="wrap-search clearfix">
                                    @csrf
                                    <input type="text"
                                           id="search"
                                           class="form-search"
                                           name="query"
                                           placeholder="Поиск книги или автора...">
                                    <div class="search_result"></div>
                                </div>
                                <button type="submit" class="search-submit">Go</button>
                                <input type="hidden" name="post_type" value="product"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    @yield('nav')
                </div>
            </div>
        </header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-sm-12 col-md-12 col-lg-12">
                    <main id="main" class="site-main">
                        <article id="post-407" class="post-407 page type-page status-publish hentry">
                            <div class="entry-content">
                                <div class="vc_row wpb_row vc_row-fluid width-fill vc_custom_1503973713559 vc_row-has-fill">
                                    <div class="column-fill wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                @yield('slider')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </main>
                </div>
            </div>
        </div>

        <div id="content" class="site-content pt-5">
            <div id="primary" class="container pb-5">
                <div class="row">
                    @yield('home')
                    @yield('book')
                    @yield('authors_content')
                    @yield('search_content')
                    @yield('categories')
                    @yield('bar')

                </div>
            </div>
        </div>
        @yield('books_content')
        @yield('recently_view')
        <footer class="site-footer">
            <div id="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-12 col-sm-12 col-lg-4">
                            <div class="footer-about">
                                <a href="/">
                                    <img class="logo-footer" src="{{ asset(env("THEME")) }}/images/logo-2.png"
                                         alt="Book Junky">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            Copyright © 2018 <a href="http://cmssuperheroes.com">CMSSuperheroes. </a>All Right Reserved
                        </div>
                    </div>
                </div>
            </div>

        </footer>
    </div>
</div>
<link rel='stylesheet' id='font-awesome-css' href='{{ asset(env("THEME")) }}/css/all.min.css' type='text/css'
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
                    "items": 4
                }
            }
        }
    };
</script>
<script type='text/javascript'
        src='http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/plugins/cmssuperheroesv2/assets/js/owl.carousel.cms.js'></script>
{{--<script type='text/javascript'--}}
{{--        src='http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/plugins/cmssuperheroesv2/assets/js/modernizr.min.js'></script>--}}
{{--<script type='text/javascript'--}}
{{--        src='http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/plugins/cmssuperheroesv2/assets/js/jquery.shuffle.js'></script>--}}
{{--<script type='text/javascript'--}}
{{--        src='http://demo.cmssuperheroes.com/themeforest/bookjunky/wp-content/themes/book-junky/assets/js/jquery.shuffle.cms.js'></script>--}}
<script type='text/javascript'
        src='{{ asset(env("THEME")) }}/js/carousel_item_active.js'></script>
<script type="text/javascript">

    $('#search').on('keyup', function () {
        $value = $(this).val();
        if ($value.length < 2) {
            $('.search_result').removeClass('active').html('');
            return;
        }
        ;
        $.ajax({
            type: 'get',
            url: '{{URL::to('search')}}',
            data: {'search': $value},
            success: function (data) {
                $('.search_result').addClass('active').html(data);
            }
        });
    })
</script>
</body>

</html>