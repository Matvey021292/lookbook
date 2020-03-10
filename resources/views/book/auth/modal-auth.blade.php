<div class="modal" id="auth">
    <div class="modal-content">
        <span class="close-button">&times;</span>
        <div class="card AuthFormDialog__inner">
            <div class="card-header title-1">{{ __('Вход') }}</div>
            <div class="card-body jest-auth-form">
                <form method="POST" class="ajax form_group" action="{{ route('auth') }}">
                    @csrf
                    <div class="form-group  Form__formRow jest-auth-email">
                        <span class="FormTextInput__formTextInput">
                            <label for="email"
                                   class="FormTextInput__label  col-form-label text-md-right">{{ __('E-Mail адрес') }}</label>
                            <div class="FormTextInput__control">
                                <input id="email" type="email"
                                       class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </span>
                    </div>
                    <div class="form-group Form__formRow">
                        <span class="FormTextInput__formTextInput">
                            <label for="password"
                                   class="FormTextInput__label col-form-label text-md-right">{{ __('Пароль') }}</label>
                            <div class="FormTextInput__control">
                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror"
                                       name="password" required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </span>
                        <div class="end-xs small-formRow">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Забыли свой пароль?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                    <div class="form-group ">
                            <div class="form-check d-flex middle-xs">
                                <input checked class="form-check-input" type="checkbox" name="remember"id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label ml-1" for="remember"> {{ __('Запомнить меня') }}</label>
                            </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-12">
                            <button type="submit" class="custom_btn  btn btn-primary">
                                {{ __('Вход в личный кабинет') }}
                            </button>
                            <div class="divide">
                                <span>Или зарегистрируйтесь с</span>
                            </div>
                        </div>

                       <div class="col-md-12">
                           <div class="group_btn">
                               <a href="/register" data-modal="#register" class="trigger custom_btn custom_btn__outline button-social">
                                   <i class="icon icon-google"></i>
                               </a>
                               <a href="/register" data-modal="#register" class="trigger custom_btn custom_btn__outline button-social">
                                   <i class="icon icon-facebook"></i>
                               </a>
                               <a href="/register" data-modal="#register" class="trigger custom_btn custom_btn__outline">
                                   <span>{{__('Регистрация')}}</span>
                               </a>
                           </div>
                       </div>
                    </div>
                    @include(env('THEME') . '.custom.loader')
                </form>
            </div>
        </div>
    </div>
</div>

