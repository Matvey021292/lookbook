<div class="container_more container_detail">
    <div class="HeaderUserMenu__submenuContainer">
        <div class="container_more__header">
            @if(!Auth::user()->getMedia('profile_image')->isEmpty())
                <img alt="user avatar" class="user__avatar user_avatar__large"
                     src="{{ str_replace('http://localhost/public' , '', Auth::user()->getMedia('profile_image')->first()->getFullUrl('thumb'))  }}">
            @endif
        </div>
        <div class="HeaderUserMenu__user center-xs">
            <div class="HeaderUserMenu__userConatiner">
                <div>
                    @if(Auth::user()->name)
                        {{ Auth::user()->name }}
                    @endif
                    @if(Auth::user()->profile->last_name)
                        {{ Auth::user()->profile->last_name}}
                    @endif
                </div>
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
                    <a class="Header__link custom_btn custom_btn__outline" href="{{ route('logout') }}">
                        {{ __('Выход') }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
