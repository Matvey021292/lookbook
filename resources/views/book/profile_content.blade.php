@if($user)
<div class="TabContentItem__tabItem UserSettingsHeader__tabContentContainer">
    <form action="{{ route('profile.update') }}" method="POST" name="form-profile-edit" role="form" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="backgroundContainer section ">
            <div class="UserSettingsView__userSettings">
                <div class="UserSettingsView__userSettingsBlocks">
                    <div class="UserSettingsView__billetContainer">
                        <div class="UserSettingsAvatar__userImagePanoram">
                            <div class="UserSettingsAvatar__userImagePanoramImage" style="background-image: url(&quot;/c/256x256/avatars/35/60/3560bf76-03b5-4b02-b42c-b7c3d9a0c070.jpg&quot;);"></div>
                        </div>
                        <div class="UserSettingsAvatar__userImage">
                            <div class="UserSettingsAvatar__userImagePreview">
                                @if(!empty($user->profile->image))
                                <img class="UserSettingsAvatar__userImagePreviewContent" src="{{ $user->profile->image}}" width="80" height="80">
                                @else
                                <span class="UserSettingsAvatar__userImagePreviewContent d-block" width="80" height="80">
                                    {{ strtoupper(substr($user->name, 0,2)) }}
                                </span>
                                @endif
                            </div>
                            <div class="UserSettingsAvatar__control"><span class="Button__secondaryButton smallSize FileInput__fileInput jest-avatar-input"><span><span>Сменить фото</span>
                                <label class="FileInput__container">
                                    <span class="FileInput__holder">
                                        <input name="profile_image" accept="image/jpeg,image/png" type="file">
                                    </span>
                                </label>
                            </span>
                        </span>
                    </div>
                    <div class="UserSettingsAvatar__description"><small>Картинка в форматах png и jpg.</small></div>
                </div>
            </div>
            <div class="UserSettingsView__billetContainer">
                <div class="title-2" data-gtm-vis-recent-on-screen-10671871_40="30363" data-gtm-vis-first-on-screen-10671871_40="30363" data-gtm-vis-total-visible-time-10671871_40="100" data-gtm-vis-has-fired-10671871_40="1">Электронная почта</div>
                <div class="Form__form">
                    <div class="Form__formRow"><span class="FormTextInput__formTextInput"><label class="FormTextInput__label" for="id_email">Email</label><span class="FormTextInput__control">
                        <input class="FormTextInput__input jest-userprofile-lastname" id="id_email" name="email" type="text" value="{{ $user->email }}"></span></span>
                    </div>
                </div>
            </div>
            <div class="UserSettingsView__billetContainer">
                <div class="title-2" data-gtm-vis-recent-on-screen-10671871_40="30366" data-gtm-vis-first-on-screen-10671871_40="30366" data-gtm-vis-total-visible-time-10671871_40="100" data-gtm-vis-has-fired-10671871_40="1">Ваши данные</div>
                <div class="Form__form">
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
            <div class="UserSettingsView__billetContainer">
                <div class="title-2" data-gtm-vis-recent-on-screen-10671871_40="30381" data-gtm-vis-first-on-screen-10671871_40="30381" data-gtm-vis-total-visible-time-10671871_40="100" data-gtm-vis-has-fired-10671871_40="1">Изменить пароль</div>
                <div class="Form__form">
                    <div class="Form__formRow">
                        <span class="FormTextInput__formTextInput FormTextInput__passwordInput">
                            <label class="FormTextInput__label" for="id_new_password">Новый пароль</label>
                            <span class="FormTextInput__control">
                                <input class="FormTextInput__input" id="new_password" name="password" type="password" value="">
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
                                <input name="password_confirmation" id="confirm_password" class="FormTextInput__input"  type="password" value="">
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
        <div>
            <input type="submit" class="Button__secondaryButton smallSize jest-user-email-form-submit">
        </div>
    </form>
</div>
@if($user->books)
@if(count($user->books) > 7)
<div class="ContentCarousel__wrapper glide">
    <div data-glide-el="track"  class="swiper-container glide__track swiper-container-horizontal swiper-container-free-mode">
        <div class="swiper-wrapper glide__slides">
            @foreach($user->books as $book)
            @include(env('THEME') . '.card-book', ['items'=>$book,'book' => $book, 'carousel' => true])
            @endforeach
        </div>
    </div>
</div>
@else
<div class="ContentCarousel__wrapper ">
    <div class="swiper-container  swiper-container-horizontal swiper-container-free-mode">
        <div class="swiper-wrapper">
            @foreach($user->books as $book)
            @include(env('THEME') . '.card-book', ['items'=>$book,'book' => $book, 'carousel' => false])
            @endforeach
        </div>
    </div>
</div>
@endif
@endif
@endif
