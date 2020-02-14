<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset(env('THEME')) }}/fav-1.png"/>
    <title>Leviafan - @yield('Title')</title>
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
        <button class="close"><i class="fas fa-times"></i></button>
        <div class="progress"></div>
    </div>
    @endif
    <div id="app" class="appContainer">
        <div class="app section">
            <header class="Header__header themeGrey">
                <div class="billetContainerWrapper">
                    <div class="section-container">
                        <div class="Header__menuWrapper row middle-xs">
                            <a class="Header__logo col-xs-12 col-sm-3 center-xs" href="/">Leviafan.com</a>
                            <div class="Header__search col-xs-12 col-sm-4 pl-0">
                                <div class="billetContainerWrapper SearchLine__search">
                                    <div class="SearchLine__searchContent">
                                        <div class="SearchLine__darkInputWrapper">
                                            <form action="/qsearch/" method='GET'>
                                                <input autocomplete="off" name="query" value="{{request()->get('query')}}"id="autoComplete" 
                                                tabindex="1" type="text"
                                                class="SearchLine__darkInput jest-search-input">
                                                <label for="autoComplete"><i class="fas fa-search"></i></label>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Header__enter col-xs-12 col-sm-3 center-xs col-sm-offset-2">
                                @guest
                                <a href="/login" data-modal="#auth" class="trigger Header__link jest-auth-link-hamburger">
                                    <i class="fas fa-sign-in-alt"></i> {{ __('Войти')}} &nbsp; | &nbsp;
                                </a>
                                <a href="/register" data-modal="#register" class="trigger Header__link"> 
                                    <i class="far fa-address-card"></i> {{__('Регистрация')}} 
                                </a>
                                @else
                                <a class="Header__link go_to_login_link" href="{{ route('logout') }}">
                                    <i class="fas fa-sign-out-alt"></i> {{ __('Выход') }}  &nbsp; | &nbsp; 
                                </a>
                                <a href="/profile" class="Header__link"> 
                                    <i class="far fa-address-card"></i> {{__('Личный кабинет')}}
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="row row-container">
                <aside class="col-sm-3 HeaderLinks__headerLinks jest-header-links-to-catalog">
                    <div class="HeaderLinks__list">
                        @yield('nav')
                    </div>
                    <div>
                        @yield('book_aside')
                        @yield('category')
                    </div>
                </aside>
                <div class="article col-xs-12 col-sm-9">
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
                        @yield('categories_content')
                        @yield('customCategoryItems')
                        @yield('book_content')
                        @yield('content_book')
                        @yield('books_content')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="loader">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; display: block; shape-rendering: auto;" width="40" height="40" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
        <circle cx="50" cy="50" fill="none" stroke="#e15b64" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(304.274 50 50)">
            <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="1s" values="0 50 50;360 50 50" keyTimes="0;1"></animateTransform>
        </circle>
    </svg>
</div>
@include(env('THEME') . '.auth.modal-auth', [])
@include(env('THEME') . '.auth.modal-register', [])
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
