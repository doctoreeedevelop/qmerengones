@include('front/header')

{{-- @include('includes.form-error')
@include('includes.mensaje') --}}

<div class="container regextrior">
    <div class="row regext2">
        <div class="cardform col-lg-6">
            <div class="cardformtres">
            <x-guest-layout>
             
                   {{--  <x-slot name="logo">
                        <x-authentication-card-logo />
                    </x-slot> --}}
            
                    <x-validation-errors class="mb-4" />
            
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                            <h2 class="regtitulo">Registro de Usuarios</h2>


                        @include('includes.form-error')
                        @include('includes.mensaje')
                        <div>
                            <x-label for="email" value="{{ __('Email') }}" />
                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="email" />
                        </div>
            
                        <div class="mt-4">
                            <x-label for="name" value="{{ __('Nombre Completo') }}" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autocomplete="name" />
                        </div>
            
                        <div class="mt-4">
                            <x-label for="movil" value="{{ __('Movil') }}" />
                            <x-input id="movil" class="block mt-1 w-full" type="text" name="movil" :value="old('movil')" autocomplete="movil" />
                        </div>
            
                        <div class="mt-4">
                            <x-label for="direccion" value="{{ __('Direccion') }}" />
                            <x-input id="direccion" class="block mt-1 w-full" type="text" name="direccion" :value="old('direccion')" autocomplete="direccion" />
                        </div>
            
                        <div class="mt-4">
                            <x-label for="barrio" value="{{ __('Barrio o Unidad - Apartamento') }}" />
                            <x-input id="barrio" class="block mt-1 w-full" type="text" name="barrio" :value="old('barrio')" autocomplete="barrio" />
                        </div>
            
                        <div class="mt-4">
                            <x-label for="comentario" value="{{ __('Comentario de Ubicacion') }}" />
                            <x-input id="comentario" class="block mt-1 w-full" type="text" name="comentario" :value="old('comentario')" autocomplete="comentario" />
                        </div>
            
                        <div class="mt-4">
                            <x-label for="password" value="{{ __('Password') }}" />
                            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                        </div>
            
                        <div class="mt-4">
                            <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                            <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                        </div>
            
                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                            <div class="mt-4">
                                <x-label for="terms">
                                    <div class="flex items-center">
                                        <x-checkbox name="terms" id="terms" required />
            
                                        <div class="ml-2">
                                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                            ]) !!}
                                        </div>
                                    </div>
                                </x-label>
                            </div>
                        @endif
            
                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>
            
                            <x-button class="ml-4">
                                {{ __('Registrate') }}
                            </x-button>
                        </div>
                    </form>
               
            </x-guest-layout>
            </div>
        </div>

        <div class="loginreg col-lg-6">
            <div class="loginregtres">
            <x-guest-layout>
                <h2 class="regtitulo">Login</h2>
                <x-validation-errors class="mb-4" />
                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        @include('includes.form-error')
                        @include('includes.mensaje')
                        <div>
                            <x-label for="email" value="{{ __('Email') }}" />
                            <input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email')" required autofocus autocomplete="username" />
                        </div>

                        <div class="mt-4">
                            <x-label for="password" value="{{ __('Password') }}" />
                            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                                autocomplete="current-password" />
                        </div>

                        <div class="block mt-4">
                            <label for="remember_me" class="flex items-center">
                                <x-checkbox id="remember_me" name="remember" />
                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                    href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif

                            <x-button class="ml-4">
                                {{ __('Log in') }}
                            </x-button>
                        </div>
                    </form>
               
            </x-guest-layout>
            </div>
        </div>
    </div>
</div>
@include('front/footer')
