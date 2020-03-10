@include(env('THEME') . '.layouts.header')
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
        <div id="nav-container-top"></div>
        <header id="nav-container" class="Header__header themeGrey">
            <div class="billetContainerWrapper">
                <div class="section-container">
                    <div class="Header__menuWrapper row middle-xs">
                        <a class="Header__logo col-xs-4 col-sm-3 center-xs" href="/">Leviafan.com</a>
                        <div class="Header__search col-xs-12 col-sm-4 pl-0">
                            <div class="billetContainerWrapper SearchLine__search">
                                <div class="SearchLine__searchContent">
                                    <div class="SearchLine__darkInputWrapper">
                                        <form action="/qsearch/" method='GET'>
                                            <input autocomplete="off" name="query" value="{{request()->get('query')}}"
                                                   id="autoComplete"
                                                   tabindex="1" type="text"
                                                   class="input SearchLine__darkInput jest-search-input">
                                            <div class="simple-keyboard"></div>
                                            <label for="autoComplete"><i class="fas fa-search"></i></label>
                                            <a href="#" class="virtual_kd">
                                                <i class="fas fa-keyboard"></i>
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="Header__enter col-xs-8 col-sm-3 end-xs col-sm-offset-2">
                            @guest

                                <a href="/register" data-modal="#register" class="trigger Header__link">
                                    <span>{{__('Регистрация')}}</span>
                                </a>
                                <a href="/login" data-modal="#auth"
                                   class="trigger Header__link jest-auth-link-hamburger">{{ __('Войти')}} <i class="fas fa-user-circle"></i>
                                </a>
                            @else
                                <div class="link_more Header__link Header__link__more">
                                    @if(!Auth::user()->getMedia('profile_image')->isEmpty())
                                        <img class="user__avatar"
                                             src="{{ str_replace('http://localhost/public' , '', Auth::user()->getMedia('profile_image')->first()->getFullUrl('thumb'))  }}">
                                    @else
                                        <i class="far fa-address-card"></i>
                                    @endif
                                    <span>{{__('Личный кабинет')}}</span>
                                    <i class="fas fa-sort-down"></i>
                                    <div class="container_more">
                                        <div class="HeaderUserMenu__submenuContainer">
                                            <div class="container_more__header">
                                                @if(!Auth::user()->getMedia('profile_image')->isEmpty())
                                                    <img alt="user avatar" class="user__avatar user_avatar__large" src="{{ str_replace('http://localhost/public' , '', Auth::user()->getMedia('profile_image')->first()->getFullUrl('thumb'))  }}">
                                                @endif
                                            </div>
                                            <div class="HeaderUserMenu__user center-xs">
                                                <div class="HeaderUserMenu__userConatiner">
                                                        @if(Auth::user()->name)
                                                        <div> {{ Auth::user()->name }}</div>
                                                        @endif
                                                        <div class="text_md">{{ Auth::user()->email }}</div>
                                                </div>
                                            </div>
                                            <div class="HeaderUserMenu__menu">
                                                <ul>
                                                    <li class="MenuItemsList__item">
                                                        <a class="MenuItemsList__link"
                                                           href="/profile">{{__('Личный кабинет')}}</a>
                                                    </li>
                                                    <li class="MenuItemsList__item">
                                                        <a class="MenuItemsList__link"
                                                           href="{{ route('profile.show', ['alias'=> Auth::user()->id]) }}">
                                                            {{__('Книжная полка')}}
                                                        </a>
                                                    </li>
                                                    <li class="MenuItemsList__link MenuItemsList__item">
                                                        <a class="Header__link " href="{{ route('logout') }}">
                                                            <i class="fas fa-sign-out-alt"></i> {{ __('Выход') }}
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                        </div>
                    </div>
                </div>
        </header>
        @yield('content')
        <div class="row row-container card_wrapper">
            <aside class=" col-sm-3 HeaderLinks__headerLinks jest-header-links-to-catalog">
                <div class="aside_wrapper">
                    @guest
                    <button data-modal="#auth" type="submit" class="trigger custom_btn btn_login">
                        <i class="fas fa-user-circle"></i> Вход в личный кабинет
                    </button>
                    @endif
                    <p class="container_title size-md">
                        <svg width="24px" class="gb_Ve" fill="#555a5f" style="margin-right: 10px;" focusable="false"
                             viewBox="0 0 24 24">
                            <path
                                d="M6,8c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM16,6c0,1.1 0.9,2 2,2s2,-0.9 2,-2 -0.9,-2 -2,-2 -2,0.9 -2,2zM12,8c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2z"></path>
                        </svg>
                        <span class="menu-title">Навигационное меню</span>
                    </p>
                    <div class="aside">
                        <div class="HeaderLinks__list">
                            @yield('nav')
                        </div>
                        <div>
                            @yield('book_aside')
                            @yield('category')
                        </div>
                    </div>
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
                    @yield('customCategoryTranslateItems')
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
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
         style="margin: auto; display: block; shape-rendering: auto;" width="40" height="40" viewBox="0 0 100 100"
         preserveAspectRatio="xMidYMid">
        <circle cx="50" cy="50" fill="none" stroke="#e15b64" stroke-width="10" r="35"
                stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(304.274 50 50)">
            <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="1s"
                              values="0 50 50;360 50 50" keyTimes="0;1"></animateTransform>
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


<script type='text/javascript' src='{{ asset(env("THEME")) }}/js/app.js'></script>
</body>
</html>
