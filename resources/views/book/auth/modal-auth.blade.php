<div class="modal" id="auth">
    <div class="modal-content">
       
        <span class="close-button">&times;</span>
        <div class="card AuthFormDialog__inner">
            <div class="card-header title-1">{{ __('Login') }}</div>
            <div class="card-body jest-auth-form">
                <form method="POST" class="ajax" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group  Form__formRow jest-auth-email">
                        <span class="FormTextInput__formTextInput">
                            <label for="email" class="FormTextInput__label  col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            <div class="FormTextInput__control">
                                <input id="email" type="email" class="FormTextInput__input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
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
                            <label for="password" class="FormTextInput__label col-form-label text-md-right">{{ __('Password') }}</label>
                            <div class="FormTextInput__control">
                                <input id="password" type="password" class="FormTextInput__input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </span>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-12">
                            <button type="submit" class="Button__primaryButton btn btn-primary">
                                {{ __('Login') }}
                            </button>
                            
                            @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                            @endif
                        </div>
                    </div>
                    @include(env('THEME') . '.custom.loader')
                </form>
            </div>
        </div>
    </div>
</div>