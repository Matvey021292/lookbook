<div class="billetContainerNoOverflow">
    @if($user)
    <div class="billetContainerWrapper">
        <div class="LandingContentContainer__title d-flex-center">
            <div class="section-title">{{ __('Личный кабинет') }}</div>
        </div>
    </div>
    <form autocomplete="off" class="ContentCarousel__wrapper" action="{{ route('profile.update') }}" method="POST" name="form-profile-edit" role="form" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="backgroundContainer">
            <div class="UserSettingsView__userSettings">
                <div class="UserSettingsView__userSettingsBlocks row wp-100">
                    <div class="col-md-12">
                        <hr class="hr">
                    </div>
                    <div class="col-md-4">
                        <div class="Form__form">
                            <div class="Form__formRow"><span class="FormTextInput__formTextInput">
                                <label class="FormTextInput__label" >{{ __('Логотип профиля')}}</label>
                            </span>
                        </div>
                        
                        <div class="UserSettingsView__billetContainer bg-white br-1">
                            <div class="UserSettingsAvatar__userImagePanoram">
                                <div class="UserSettingsAvatar__userImagePanoramImage" style="background-image: url(&quot;/c/256x256/avatars/35/60/3560bf76-03b5-4b02-b42c-b7c3d9a0c070.jpg&quot;);"></div>
                            </div>
                            <div class="UserSettingsAvatar__userImage">
                                <div class="UserSettingsAvatar__userImagePreview">
                                    @if(!Auth::user()->getMedia('profile_image')->isEmpty())
                                    <img class="UserSettingsAvatar__userImagePreviewContent" src="{{ str_replace('http://localhost/public' , '', Auth::user()->getMedia('profile_image')->first()->getFullUrl('thumb'))  }}">
                                    @else
                                    <img class="UserSettingsAvatar__userImagePreviewContent" src="">
                                    <span class="UserSettingsAvatar__userImagePreviewContent d-block" width="80" height="80">
                                        {{ strtoupper(substr($user->name, 0, 1)) }}
                                    </span>
                                    @endif
                                </div>
                                <div class="UserSettingsAvatar__description"><small>{{ __('Картинка в форматах png и jpg.') }}</small></div>
                                <div class="UserSettingsAvatar__control">
                                    <span class="Button__secondaryButton smallSize FileInput__fileInput jest-avatar-input">
                                        <span>
                                            <span>{{ __('Сменить изображение')}}</span>
                                            <label class="FileInput__container">
                                                <span class="FileInput__holder">
                                                    <input name="profile_image" accept="image/jpeg,image/png" type="file">
                                                </span>
                                            </label>
                                        </span>
                                    </span>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="UserSettingsView__billetContainer ">
                        <div class="Form__form">
                            <div class="Form__formRow"><span class="FormTextInput__formTextInput"><label class="FormTextInput__label" for="id_email">Электронная почта</label><span class="FormTextInput__control">
                                <input class="FormTextInput__input jest-userprofile-lastname" id="id_email" name="email" type="text" value="{{ $user->email }}"></span></span>
                            </div>
                            <div class="Form__formRow"><span class="FormTextInput__formTextInput"><label class="FormTextInput__label" for="first_name">Имя</label><span class="FormTextInput__control">
                                <input class="FormTextInput__input jest-userprofile-firstname" id="first_name" name="first_name" type="text" value="{{ $user->name}}"></span></span>
                            </div>
                            
                            @if(!empty($user->profile->last_name))
                            <div class="Form__formRow"><span class="FormTextInput__formTextInput"><label class="FormTextInput__label" for="last_name">Фамилия </label><span class="FormTextInput__control">
                                <input class="FormTextInput__input jest-userprofile-firstname" id="last_name" name="last_name" type="text" value="{{ $user->profile->last_name}}"></span></span>
                            </div>
                            @else
                            <div class="Form__formRow"><span class="FormTextInput__formTextInput"><label class="FormTextInput__label" for="last_name">Фамилия </label><span class="FormTextInput__control">
                                <input class="FormTextInput__input jest-userprofile-firstname" id="last_name" name="last_name" type="text" value=""></span></span>
                            </div>
                            @endif
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="UserSettingsView__billetContainer">
                        <div class="Form__form">
                            <div class="Form__formRow">
                                <span class="FormTextInput__formTextInput FormTextInput__passwordInput">
                                    <label class="FormTextInput__label" for="id_new_password">Новый пароль</label>
                                    <span class="FormTextInput__control">
                                        <input autocomplete="off" class="FormTextInput__input" id="new_password" name="password" type="password" >
                                        <button type="button" class="FormTextInput__passwordVisibilitySwitcher">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="FormTextInput__passwordVisibilitySwitcherIcon">
                                                <path d="M11.5,4A12.325,12.325,0,0,0,0,12a12.266,12.266,0,0,0,23,0A12.324,12.324,0,0,0,11.5,4Zm0,13.333A5.23, 5.23,0,0,1,6.273,12a5.229,5.229,0,1,1,10.455,0A5.23,5.23,0,0,1,11.5,17.333Zm0-8.533A3.112,3.112,0,0,0,8.364, 12a3.137,3.137,0,1,0,6.272,0A3.112,3.112,0,0,0,11.5,8.8Z"></path>
                                            </svg>
                                        </button>
                                    </span>
                                </span>
                            </div>
                            <div class="Form__formRow">
                                <span class="FormTextInput__formTextInput FormTextInput__passwordInput">
                                    <label class="FormTextInput__label" >Повторить пароль</label>
                                    <span class="FormTextInput__control">
                                        <input name="password_confirmation" id="confirm_password" class="FormTextInput__input"  autocomplete="off">
                                        <button type="button" class="FormTextInput__passwordVisibilitySwitcher">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="FormTextInput__passwordVisibilitySwitcherIcon">
                                                <path d="M11.5,4A12.325,12.325,0,0,0,0,12a12.266,12.266,0,0,0,23,0A12.324,12.324,0,0,0,11.5,4Zm0,13.333A5.23, 5.23,0,0,1,6.273,12a5.229,5.229,0,1,1,10.455,0A5.23,5.23,0,0,1,11.5,17.333Zm0-8.533A3.112,3.112,0,0,0,8.364, 12a3.137,3.137,0,1,0,6.272,0A3.112,3.112,0,0,0,11.5,8.8Z"></path>
                                            </svg>
                                        </button>
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <hr class="hr">
                </div>
            </div>
            <div class="row wp-100 w-100 end-xs">
                <div class="col-md-4">
                    <input type="submit" class="Button__secondaryButton smallSize jest-user-email-form-submit" value="Обновить профиль">
                </div>
            </div>
        </form>
        <br>
        @endif
        @if(!$books->isEmpty())
        <div class="billetContainerNoOverflow" id="mybook">
            <div class="billetContainerWrapper">
                <div class="LandingContentContainer__title">
                    <div class="section-title">
                        <a href="{{ route('profile.show', ['alias'=> $user->id]) }}"> {{__('Мои книги')}} </a>
                    </div>
                </div>
            </div>
            @if(count($books) > 7)
            <div class="ContentCarousel__wrapper glide">
                <div data-glide-el="track"  class="swiper-container glide__track swiper-container-horizontal swiper-container-free-mode">
                    <div class="swiper-wrapper glide__slides">
                        @foreach($books as $book)
                        @include(env('THEME') . '.card.card-book', ['items'=>$book,'book' => $book, 'carousel' => true, 'author' => false])
                        @endforeach
                    </div>
                </div>
            </div>
            @else
            <div class="ContentCarousel__wrapper ">
                <div class="swiper-container  swiper-container-horizontal swiper-container-free-mode">
                    <div class="swiper-wrapper">
                        @foreach($books as $book)
                        @include(env('THEME') . '.card.card-book', ['items'=>$book,'book' => $book, 'carousel' => false, 'author' => false])
                        @endforeach
                    </div>
                </div>
            </div>
            @endif
        </div>
        @endif
    </div>
    