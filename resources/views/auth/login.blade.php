@include('user.layouts.styles')
<x-guest-layout>

        <x-slot name="logo">
        </x-slot>


    <div style="padding-top: 300px">

    </div>

    <section class="sectionOne" id="sectionOne">
            <div class="container">
                <div class="row">
                    <div class="offset-sm-3 offset-md-0 col-sm-6">
                        <img src="./assets/img/student.png" alt=""Style="height:auto;"class="img-fluid"/>
                    </div>
                    <div class="col-sm-10 offset-1 offset-md-0 col-md-6 col-xl-5 bottom-0 end-0 login-form" id="signUp">
                        <h1 class="text-center">Student's Login</h1>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div>
                                <x-jet-label for="email" value="{{ __('Email') }}" />
                                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                            </div>

                            <div class="mt-4">
                                <x-jet-label for="password" value="{{ __('Password') }}" />
                                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                            </div>

                            <div class="block mt-4">
                                <label for="remember_me" class="flex items-center">
                                    <x-jet-checkbox id="remember_me" name="remember" />
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif

                                <x-jet-button class="ml-4">
                                    {{ __('Log in') }}
                                </x-jet-button>
                            </div>
                        </form>
                        <p>Not a student? Login as Faculty</p>
                        <a href="{{ route('teacher.login') }}">
                        <x-jet-button class="ml-4">
                            {{ __('click here') }}
                        </x-jet-button>
                        </a>
                    </div>
                </div>
            </div>
        </section>





</x-guest-layout>

@include('user.layouts.script')

