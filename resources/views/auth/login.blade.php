@extends('frontend.frontend_dashboard')
@section('main')
    <!--Page Title-->
    <section class="page-title-two bg-color-1 centred">
        <div class="pattern-layer">
            <div class="pattern-1" style="background-image: url({{ asset('frontend/assets/images/shape/shape-9.png') }});">
            </div>
            <div class="pattern-2" style="background-image: url({{ asset('frontend/assets/images/shape/shape-10.png') }});">
            </div>
        </div>
        <div class="auto-container">
            <div class="content-box clearfix">
                <h1>Sign In</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>Sign In</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- ragister-section -->
    <section class="ragister-section centred sec-pad">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-xl-8 col-lg-12 col-md-12 offset-xl-2 big-column">
                    <div class="sec-title">

                    </div>
                    <div class="tabs-box">
                        <div class="tab-btn-box">
                            <ul class="tab-btns tab-buttons centred clearfix">
                                <li class="tab-btn active-btn" data-tab="#tab-1">Bejelentkezés</li>
                                <li class="tab-btn" data-tab="#tab-2">Regisztráció</li>
                            </ul>
                        </div>
                        <div class="tabs-content">
                            <div class="tab active-tab" id="tab-1">
                                <div class="inner-box">
                                    <h4>Bejelentkezés</h4>
                                    <form action="{{ route('login') }}" method="post" class="default-form">
                                        @csrf

                                        <div class="form-group">
                                            <label>Email </label>
                                            <input type="text" name="email" id="email" required="">
                                        </div>

                                        <div class="form-group">
                                            <label>Jelszó</label>
                                            <input type="password" name="password" id="password" required="">
                                        </div>
                                        <div class="form-group message-btn">
                                            <button type="submit" class="theme-btn btn-one">Bejelentkezés</button>
                                        </div>
                                    </form>
                                    <div class="othre-text">

                                    </div>
                                </div>
                            </div>

                            <div class="tab" id="tab-2">
                                <div class="inner-box">
                                    <h4>Regisztráció</h4>
                                    <form action="{{ route('register') }}" method="post" id="register-form"
                                        class="default-form">
                                        @csrf

                                        <!-- Name -->
                                        <div class="form-group">
                                            <x-input-label for="name" :value="__('Name')" />
                                            <x-text-input id="name" class="block mt-1 w-full" type="text"
                                                name="name" :value="old('name')" required autofocus autocomplete="name" />
                                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                        </div>

                                        <!-- Email Address -->
                                        <div class="form-group">
                                            <x-input-label for="email" :value="__('Email')" />
                                            <x-text-input id="email" class="block mt-1 w-full" type="email"
                                                name="email" :value="old('email')" required autocomplete="username" />
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>

                                        <!-- Password -->
                                        <div class="form-group">
                                            <x-input-label for="password" :value="__('Password')" />
                                            <x-text-input id="password" class="block mt-1 w-full" type="password"
                                                name="password" required autocomplete="new-password" />
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>

                                        <!-- Confirm Password -->
                                        <div class="form-group">
                                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                                            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                                type="password" name="password_confirmation" required
                                                autocomplete="new-password" />
                                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                        </div>

                                        <div class="form-group message-btn">
                                            <x-primary-button class="theme-btn btn-one">
                                                {{ __('Register') }}
                                            </x-primary-button>
                                        </div>
                                    </form>
                                    <div class="othre-text">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ragister-section end -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('register-form').addEventListener('submit', function(event) {
                var password = document.getElementById('password').value;
                if (password.length < 8) {
                    alert('A jelszónak legalább 8 karakter hosszúnak kell lennie.');
                    event.preventDefault();
                }
            });
        });
    </script>
@endsection
