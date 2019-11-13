@if($user)
<div class="TabContentItem__tabItem UserSettingsHeader__tabContentContainer">
    <div class="backgroundContainer section UserSettingsView__userSettingsContainer">
        <div class="UserSettingsView__userSettings">
            <div class="UserSettingsView__userSettingsBlocks">
                <div class="UserSettingsView__billetContainer UserSettingsAvatar__changeAvatar">
                    <div class="UserSettingsAvatar__userImagePanoram">
                        <div class="UserSettingsAvatar__userImagePanoramImage jest-avatar-panoram" style="background-image: url(&quot;/c/256x256/avatars/35/60/3560bf76-03b5-4b02-b42c-b7c3d9a0c070.jpg&quot;);"></div>
                    </div>
                    <div class="UserSettingsAvatar__userImage">
                        <div class="UserSettingsAvatar__userImagePreview">
                            <img class="UserSettingsAvatar__userImagePreviewContent jest-avatar-preview" src="/c/256x256/avatars/35/60/3560bf76-03b5-4b02-b42c-b7c3d9a0c070.jpg" width="80" height="80">
                        </div>
                        <div class="UserSettingsAvatar__control"><span class="Button__secondaryButton smallSize FileInput__fileInput jest-avatar-input"><span><span>Сменить фото</span>
                            <label class="FileInput__container">
                                <span class="FileInput__holder">
                                    <input accept="image/jpeg,image/png" type="file">
                                </span>
                            </label>
                        </span>
                    </span>
                </div>
                <div class="UserSettingsAvatar__description"><small>Картинка в форматах png и jpg.</small></div>
            </div>
        </div>
        <div class="UserSettingsView__billetContainer UserSettingsEmail__emailSettings">
          
                <div class="title-2" data-gtm-vis-recent-on-screen-10671871_40="30363" data-gtm-vis-first-on-screen-10671871_40="30363" data-gtm-vis-total-visible-time-10671871_40="100" data-gtm-vis-has-fired-10671871_40="1">Электронная почта</div>
                <div class="Form__form">
                <div class="Form__formRow"><span class="FormTextInput__formTextInput"><label class="FormTextInput__label" for="id_email">Email</label><span class="FormTextInput__control">
                    <input class="FormTextInput__input jest-userprofile-lastname" id="id_email" name="email" type="text" value="{{ $user->email }}"></span></span>
                </div>
            </div>
        </div>
        <div class="UserSettingsView__billetContainer UserSettingsPersonalData__personalSettings">
            <div class="title-2" data-gtm-vis-recent-on-screen-10671871_40="30366" data-gtm-vis-first-on-screen-10671871_40="30366" data-gtm-vis-total-visible-time-10671871_40="100" data-gtm-vis-has-fired-10671871_40="1">Ваши данные</div>
            <div class="Form__form">
                <form class="jest-userprofile-form">
                    <div class="Form__formRow"><span class="FormTextInput__formTextInput"><label class="FormTextInput__label" for="id_first_name">Имя</label><span class="FormTextInput__control">
                        <input class="FormTextInput__input jest-userprofile-firstname" id="id_first_name" name="first_name" type="text" value="{{ $user->name}}"></span></span>
                    </div>
                    
                    
                </form>
            </div>
        </div>
        <div class="UserSettingsView__billetContainer UserSettingsPassword__passwordSettings">
            <div class="title-2" data-gtm-vis-recent-on-screen-10671871_40="30381" data-gtm-vis-first-on-screen-10671871_40="30381" data-gtm-vis-total-visible-time-10671871_40="100" data-gtm-vis-has-fired-10671871_40="1">Изменить пароль</div>
            <div class="Form__form">
                <form class="jest-changepassword-form">
                    <div class="Form__formRow"><span class="FormTextInput__formTextInput FormTextInput__passwordInput"><label class="FormTextInput__label" for="id_new_password">Новый пароль</label><span class="FormTextInput__control"><input class="FormTextInput__input jest-changepassword-newpassword" id="id_new_password" name="new_password" type="password" value=""><button type="button" class="FormTextInput__passwordVisibilitySwitcher"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="FormTextInput__passwordVisibilitySwitcherIcon"><path d="M11.5,4A12.325,12.325,0,0,0,0,12a12.266,12.266,0,0,0,23,0A12.324,12.324,0,0,0,11.5,4Zm0,13.333A5.23, 5.23,0,0,1,6.273,12a5.229,5.229,0,1,1,10.455,0A5.23,5.23,0,0,1,11.5,17.333Zm0-8.533A3.112,3.112,0,0,0,8.364, 12a3.137,3.137,0,1,0,6.272,0A3.112,3.112,0,0,0,11.5,8.8Z"></path></svg></button></span></span>
                    </div>
                    <div class="Form__formRow"><span class="FormTextInput__formTextInput FormTextInput__passwordInput"><label class="FormTextInput__label" for="id_new_password">Повторить пароль</label><span class="FormTextInput__control"><input class="FormTextInput__input jest-changepassword-newpassword" id="id_new_password" name="new_password" type="password" value=""><button type="button" class="FormTextInput__passwordVisibilitySwitcher"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="FormTextInput__passwordVisibilitySwitcherIcon"><path d="M11.5,4A12.325,12.325,0,0,0,0,12a12.266,12.266,0,0,0,23,0A12.324,12.324,0,0,0,11.5,4Zm0,13.333A5.23, 5.23,0,0,1,6.273,12a5.229,5.229,0,1,1,10.455,0A5.23,5.23,0,0,1,11.5,17.333Zm0-8.533A3.112,3.112,0,0,0,8.364, 12a3.137,3.137,0,1,0,6.272,0A3.112,3.112,0,0,0,11.5,8.8Z"></path></svg></button></span></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endif