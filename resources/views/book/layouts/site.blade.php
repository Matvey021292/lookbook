<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="initial-scale=1, width=device-width"/>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset(env('THEME')) }}/fav-1.png"/>
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href='{{ asset(env("THEME")) }}/css/app.css'>
    <link rel="stylesheet" href="{{ asset(env("THEME")) }}/css/autoComplete.css">
    <link rel="stylesheet" href='{{ asset(env("THEME")) }}/css/glide.core.min.css'>
    <link rel="stylesheet" href='{{ asset(env("THEME")) }}/css/glide.theme.min.css'>
    <link rel="stylesheet" href='{{ asset(env("THEME")) }}/css/vendor.css'>
    <link rel="stylesheet" href='{{ asset(env("THEME")) }}/css/rebook.css'>
    <link rel="stylesheet" href='{{ asset(env("THEME")) }}/css/custom.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    
</head>
<body>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div id="app" class="appContainer">
        <div class="app section">
            <header class="Header__header themeGrey">
                <div class="billetContainerWrapper">
                    <div class="section-container">
                        <div class="Header__menuWrapper row middle-xs">
                            <a class="Header__logo col-sm-3 center-xs" href="/">Leviafan.com</a>
                            <div class="Header__search col-sm-4 pl-0">
                                <div class="billetContainerWrapper SearchLine__search">
                                    <div class="SearchLine__searchContent">
                                        <div class="SearchLine__darkInputWrapper">
                                            <form action="/qsearch" method='GET'>
                                                <input autocomplete="off" name="query" value="{{ old('query') }}"id="autoComplete" 
                                                tabindex="1" type="text"
                                                class="SearchLine__darkInput jest-search-input">
                                                <label for="autoComplete"><i class="fas fa-search"></i></label>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Header__enter col-sm-3 center-xs col-xs-offset-2">
                                <div class="Header__mobileSearchButton jest-mobile-search-toggle"></div>
                                @guest
                                <a href="/login" class="Header__link jest-auth-link-hamburger">
                                    <i class="fas fa-sign-in-alt"></i> {{ __('Войти')}} &nbsp; | &nbsp;
                                </a>
                                
                                <a href="/login" class="Header__link"> 
                                    <i class="far fa-address-card"></i> {{__('Личный кабинет')}} 
                                </a>
                                @else
                                <a class="Header__link go_to_login_link" href="{{ route('logout') }}">
                                    <i class="fas fa-sign-out-alt"></i> {{ __('Выход') }}  &nbsp; | &nbsp; 
                                </a>
                                
                                <a href="/profile" class="Header__link"> 
                                    <i class="far fa-address-card"></i> {{__('Личный кабинет')}}
                                    {{-- , {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}} --}}
                                </a>
                                @endif
                            </div>
                        </div>
                        
                    </div>
                </div>
            </header>
            <div class="row row-container">
                <div class="col-sm-3 HeaderLinks__headerLinks jest-header-links-to-catalog">
                    <div class="HeaderLinks__list">
                        @yield('nav')
                    </div>
                </div>
                <div class="article col-sm-9">
                    <div class="backgroundContainer themeGrey">
                        @yield('slider')
                        @yield('book')
                        @yield('authors_content')
                        @yield('bar')
                        @yield('profile')
                        @yield('recently_view')
                        @yield('home') 
                        @yield('search_content')
                        @yield('categories')
                        @yield('category_book')
                        @yield('book_content')
                        @yield('content_book')
                        @yield('books_content')

                    </div>
                </div>
            </div>
        </div>
    </div>
    
    {{-- <div class="Footer__bottomContent">
        <div class="Footer__content">
            <div class="Footer__extraResourcesContainer">
                <div class="Footer__appList"><small class="Footer__footerShortTitle">Скачать приложение</small>
                    <div class="Footer__appsIconList">
                        <li class="Footer__item jest-footer-iOS-link">
                            <a href="https://redirect.appmetrica.yandex.com/serve/674048688460421021/?pagetype=site_footer" class="link">
                                <div class="Footer__icon">
                                    <svg viewBox="0 0 18 24" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="#BE5B04" fill-rule="evenodd" d="M18 15.907c-.49 1.093-.727 1.58-1.36 2.547-.883 1.348-2.13 3.03-3.674 3.042-1.37.014-1.723-.895-3.585-.884-1.86.01-2.25.9-3.621.888-1.544-.014-2.724-1.531-3.608-2.88-2.47-3.77-2.73-8.198-1.206-10.552 1.084-1.672 2.792-2.65 4.4-2.65 1.634 0 2.663.9 4.016.9 1.312 0 2.111-.902 4.003-.902 1.431 0 2.946.781 4.025 2.13-3.537 1.944-2.963 7.006.61 8.361zM11.932 3.91c.686-.884 1.208-2.134 1.02-3.409-1.124.077-2.438.794-3.204 1.727-.697.846-1.271 2.104-1.048 3.326 1.229.038 2.496-.696 3.232-1.644z"></path>
                                    </svg>
                                </div>
                            </a>
                        </li>
                        <li class="Footer__item jest-footer-Android-link">
                            <a href="https://redirect.appmetrica.yandex.com/serve/97588024321320240/?pagetype=site_footer" class="link">
                                <div class="Footer__icon">
                                    <svg viewBox="0 0 22 24" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="#BE5B04" fill-rule="evenodd" d="M14.286 2.01l.268-.393.265-.387.596-.869A.228.228 0 0 0 15.35.04a.24.24 0 0 0-.33.065l-.639.932-.27.39-.27.398A8.036 8.036 0 0 0 11 1.316a8.025 8.025 0 0 0-2.838.508l-.272-.398-.267-.39-.64-.932a.242.242 0 0 0-.33-.065.228.228 0 0 0-.067.322l.595.87.265.386.27.392c-2.027.919-3.397 2.659-3.397 4.65H17.68c0-1.991-1.37-3.731-3.395-4.65zM8.137 4.8a.706.706 0 0 1-.716-.697c0-.385.32-.695.716-.695.395 0 .715.31.715.695 0 .386-.32.697-.715.697zm5.726 0a.706.706 0 0 1-.715-.697c0-.385.32-.695.715-.695.397 0 .716.31.716.695a.706.706 0 0 1-.716.697zM4.422 7.587h13.26v10.22c0 .811-.678 1.471-1.511 1.471h-1.092c.036.123.058.252.058.387v2.942c0 .77-.64 1.393-1.432 1.393-.79 0-1.431-.624-1.431-1.393v-2.942c0-.135.018-.264.056-.387H9.671c.037.123.058.252.058.387v2.942c0 .77-.643 1.393-1.434 1.393-.79 0-1.43-.624-1.43-1.393v-2.942c0-.135.02-.264.056-.387h-1.09c-.834 0-1.512-.66-1.512-1.471V7.587h.103zm-2.488 0c.79 0 1.43.624 1.43 1.393v5.962c0 .77-.64 1.393-1.43 1.393-.792 0-1.434-.624-1.434-1.393V8.98c0-.769.642-1.393 1.434-1.393zm18.134 0c.79 0 1.432.624 1.432 1.393v5.962c0 .77-.642 1.393-1.432 1.393-.79 0-1.433-.624-1.433-1.393V8.98c0-.769.642-1.393 1.433-1.393z"></path>
                                    </svg>
                                </div>
                            </a>
                        </li>
                    </div>
                </div>
                <div class="Footer__socials"><small class="Footer__footerShortTitle">Следите за новостями</small>
                    <div class="Footer__socialList">
                        <li class="Footer__item">
                            <a href="https://www.facebook.com/MyBookRu" class="link">
                                <div>
                                    <div class="Footer__icon">
                                        <svg width="100%" height="100%" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="#3b5998" fill-rule="evenodd" d="M8.99 15H6.33V8.5H5V6.26h1.33V4.913C6.33 3.087 7.08 2 9.212 2h1.775v2.24h-1.11c-.83 0-.885.314-.885.898L8.99 6.259H11l-.235 2.24H8.989V15z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="Footer__item">
                            <a href="https://www.vk.com/mybook_ru" class="link">
                                <div>
                                    <div class="Footer__icon">
                                        <svg width="100%" height="100%" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="#45668e" fill-rule="evenodd" d="M8.785 11.962s.288-.031.436-.188c.136-.143.131-.414.131-.414s-.018-1.265.578-1.452c.586-.183 1.34 1.223 2.14 1.764.604.41 1.063.32 1.063.32l2.137-.03s1.117-.068.587-.934c-.043-.071-.309-.641-1.588-1.812-1.34-1.227-1.16-1.028.453-3.15.983-1.291 1.376-2.08 1.253-2.417-.117-.322-.84-.237-.84-.237l-2.405.015s-.179-.024-.311.054c-.13.076-.213.255-.213.255s-.38.999-.888 1.85c-1.072 1.792-1.5 1.887-1.675 1.776-.408-.26-.306-1.043-.306-1.6 0-1.738.268-2.462-.52-2.65-.262-.062-.454-.103-1.123-.11-.859-.009-1.585.003-1.997.201-.273.132-.485.427-.356.444.16.02.52.096.71.352.247.33.238 1.073.238 1.073s.142 2.046-.33 2.3c-.325.175-.77-.181-1.725-1.808-.489-.834-.858-1.755-.858-1.755s-.072-.172-.2-.265c-.153-.112-.369-.146-.369-.146l-2.285.014s-.344.01-.47.157c-.112.13-.009.401-.009.401S1.833 8.1 3.86 10.18c1.859 1.907 3.968 1.782 3.968 1.782h.957z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="Footer__item">
                            <a href="https://twitter.com/mybookru" class="link">
                                <div>
                                    <div class="Footer__icon">
                                        <svg width="100%" height="100%" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="#55acee" fill-rule="evenodd" d="M12.469 3.74a2.76 2.76 0 0 0 1.172-1.537 5.21 5.21 0 0 1-1.694.674A2.61 2.61 0 0 0 10 2C8.527 2 7.334 3.243 7.334 4.777c0 .217.022.43.068.632-2.216-.116-4.18-1.22-5.497-2.901-.23.411-.36.888-.36 1.396 0 .963.47 1.813 1.186 2.312a2.596 2.596 0 0 1-1.21-.347v.034c0 1.346.92 2.469 2.141 2.723-.224.065-.46.097-.703.097a2.54 2.54 0 0 1-.502-.049c.34 1.103 1.324 1.907 2.492 1.928A5.218 5.218 0 0 1 1 11.752 7.339 7.339 0 0 0 5.088 13c4.907 0 7.588-4.231 7.588-7.9 0-.122-.001-.242-.007-.36A5.53 5.53 0 0 0 14 3.302c-.478.221-.993.37-1.531.437z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="Footer__item">
                            <a href="http://www.ok.ru/knizhnykl" class="link">
                                <div>
                                    <div class="Footer__icon">
                                        <svg width="100%" height="100%" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="#ed812b" fill-rule="evenodd" d="M7.99 3.117c.815 0 1.477.671 1.477 1.496 0 .824-.662 1.495-1.476 1.495a1.488 1.488 0 0 1-1.476-1.495c0-.825.663-1.496 1.476-1.496zm0 5.108c-1.965 0-3.563-1.62-3.563-3.612S6.025 1 7.99 1s3.564 1.62 3.564 3.613c0 1.992-1.598 3.612-3.564 3.612zm3.522 2.08a6.63 6.63 0 0 1-2.07.869l1.993 2.02a1.068 1.068 0 0 1 0 1.496 1.034 1.034 0 0 1-1.476 0l-1.96-1.985-1.957 1.985a1.036 1.036 0 0 1-1.477 0 1.069 1.069 0 0 1 0-1.497l1.992-2.02a6.64 6.64 0 0 1-2.07-.868 1.067 1.067 0 0 1-.326-1.46 1.035 1.035 0 0 1 1.44-.333c1.459.93 3.338.93 4.798 0a1.035 1.035 0 0 1 1.44.333c.308.495.16 1.148-.327 1.46z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="Footer__item">
                            <a href="https://instagram.com/mybookru/" class="link">
                                <div>
                                    <div class="Footer__icon">
                                        <svg width="100%" height="100%" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                            <path fill="#8a3ab9" fill-rule="evenodd" d="M8 2.261c1.87 0 2.09.007 2.829.041.682.031 1.053.145 1.3.241.326.127.56.279.804.524.245.245.397.478.524.805.096.246.21.617.24 1.3.035.738.042.959.042 2.828 0 1.87-.007 2.09-.041 2.829-.031.682-.145 1.053-.241 1.3-.127.326-.279.56-.524.804a2.169 2.169 0 0 1-.805.524c-.246.096-.617.21-1.3.241-.737.034-.959.04-2.828.04-1.87 0-2.09-.006-2.829-.04-.682-.031-1.053-.145-1.3-.241a2.169 2.169 0 0 1-.804-.524 2.169 2.169 0 0 1-.524-.805c-.096-.246-.21-.617-.241-1.3-.034-.738-.04-.959-.04-2.828 0-1.87.006-2.09.04-2.829.031-.682.145-1.053.241-1.3.127-.326.279-.56.524-.804.245-.245.478-.397.805-.524.246-.096.617-.21 1.3-.24C5.91 2.267 6.13 2.26 8 2.26M8 1c1.901 0 2.14.008 2.886.042.745.034 1.254.152 1.7.326.46.178.85.418 1.24.807.388.389.628.78.806 1.24.174.445.292.954.326 1.699.034.747.042.985.042 2.886 0 1.901-.008 2.14-.042 2.886-.034.745-.152 1.254-.326 1.7-.178.46-.418.85-.807 1.24-.389.388-.78.628-1.24.807-.445.173-.954.29-1.699.325C10.14 14.992 9.901 15 8 15c-1.901 0-2.14-.008-2.886-.042-.745-.034-1.254-.152-1.7-.325a3.431 3.431 0 0 1-1.24-.808c-.388-.389-.628-.78-.807-1.24-.173-.445-.29-.954-.325-1.699C1.008 10.14 1 9.901 1 8c0-1.901.008-2.14.042-2.886.034-.745.152-1.254.325-1.7.18-.46.419-.85.808-1.24.389-.388.78-.628 1.24-.806.445-.174.954-.292 1.699-.326C5.86 1.008 6.099 1 8 1zm.014 3.417a3.597 3.597 0 1 0 0 7.194 3.597 3.597 0 0 0 0-7.194zm0 5.932a2.335 2.335 0 1 1 0-4.67 2.335 2.335 0 0 1 0 4.67zm4.542-6.099a.833.833 0 1 0-1.667 0 .833.833 0 0 0 1.667 0z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </div>
                </div>
            </div>
            <div class="Footer__supportContainer"><small class="Footer__footerShortTinyTitle">Служба поддержки</small>
                <div class="Footer__supportLinks">
                    <li class="Footer__item Footer__isBordered"><a href="tel:+78003332737" class="link">8 800 333 27 37</a></li>
                    <li class="Footer__item"><a href="mailto:support@mybook.ru" class="link">support@mybook.ru</a></li>
                </div>
            </div>
        </div>
    </div> --}}
</div>
{{-- <div class="loader show">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; display: block; shape-rendering: auto;" width="60" height="60" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
        <circle cx="50" cy="50" fill="none" stroke="#e15b64" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(329.828 50 50)">
            <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="1s" values="0 50 50;360 50 50" keyTimes="0;1"></animateTransform>
        </circle>
    </svg>
</div> --}}
<script>
    
    let ajax_login_object = {
        "search_url": '{{URL::to('search')}}',
    };
</script>
<script type='text/javascript' src='{{ asset(env("THEME")) }}/js/glide.min.js'></script>
<script src="https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@7.1.1/dist/js/autoComplete.min.js"></script>
<script type='text/javascript' src='{{ asset(env("THEME")) }}/js/common.js'></script>
</body>

</html>
