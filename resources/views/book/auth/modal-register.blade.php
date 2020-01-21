<div class="modal" id="register">
    <div class="modal-content">
        <span class="close-button">&times;</span>
        <div class="card AuthFormDialog__inner">
            <div class="card-header title-1">{{ __('Register') }}</div>
            <div class="card-body jest-auth-form">
                <form class="ajax" method="POST" action="{{ route('registration') }}">
                    @csrf
                    <div class="form-group  Form__formRow">
                        <span class="FormTextInput__formTextInput">
                            <label for="name" class="FormTextInput__label col-form-label text-md-right">{{ __('Name') }}</label>
                            <div class="FormTextInput__control">
                                <input id="reg-name" type="text" class="FormTextInput__input form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </span>
                    </div>
                    
                    <div class="form-group  Form__formRow">
                        <span class="FormTextInput__formTextInput">
                            <label for="email" class="FormTextInput__label col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            
                            <div class="FormTextInput__control">
                                <input id="reg-email" type="email" class="FormTextInput__input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </span>
                    </div>
                    <div class="form-group  Form__formRow">
                        <span class="FormTextInput__formTextInput">
                            <label for="password" class="FormTextInput__label col-form-label text-md-right">{{ __('Password') }}</label>
                            
                            <div class="FormTextInput__control">
                                <input id="reg-password" type="password" class="FormTextInput__input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </span>
                    </div>
                    
                    <div class="form-group  Form__formRow">
                        <span class="FormTextInput__formTextInput">
                            <label for="password-confirm" class="FormTextInput__label col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                            
                            <div class="FormTextInput__control">
                                <input id="reg-password-confirm" type="password" class="FormTextInput__input form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </span>
                    </div>
                    <div class="form-group  Form__formRow mb-0">
                        
                        <button type="submit" class="Button__primaryButton btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                    @include(env('THEME') . '.custom.loader')
                </form>
            </div>
        </div>
    </div>
</div>