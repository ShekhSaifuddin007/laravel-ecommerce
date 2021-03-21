@extends('front.master')

@section('content')

    <!-- Register Section Start -->
    <div class="register-section section mt-90 mb-90">
        <div class="container">
            <div class="row">
                <!-- Register -->
                <div class="col-md-5 col-12 d-flex">
                    <div class="ee-register">
                        <h3>We will need for your registration</h3>
                        <p>E&E provide how all this mistaken idea of denouncing pleasure and sing pain born an will give you a complete account of the system, and expound</p>
                        <!-- Register Form -->
                        <form action="{{ route('customer-register') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12 mb-30">
                                    <input type="text" name="user_name" value="{{ old('user_name') }}" placeholder="Your name here">
                                    <small class="text-danger">{{ $errors->has('user_name') ? $errors->first('user_name') : ' ' }}</small>
                                </div>
                                <div class="col-12 mb-30">
                                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Your email here">
                                    <small class="text-danger">{{ $errors->has('email') ? $errors->first('email') : ' ' }}</small>
                                </div>
                                <div class="col-12 mb-30">
                                    <input type="tel" name="phone_no" value="{{ old('phone_no') }}" placeholder="Your phone number here">
                                    <small class="text-danger">{{ $errors->has('phone_no') ? $errors->first('phone_no') : ' ' }}</small>
                                </div>
                                <div class="col-12 mb-30">
                                    <input type="password" name="password" placeholder="Enter password">
                                    <small class="text-danger">{{ $errors->has('password') ? $errors->first('password') : ' ' }}</small>
                                </div>
                                <div class="col-12 mb-30">
                                    <input type="password" name="password_confirmation" placeholder="Conform password">
                                </div>

                                <div class="ee-account-image">
                                    <div class="account-image-upload">
                                        <input type="file" name="profile_picture" value="{{ old('profile_picture') }}" id="account-image-upload" accept="image/*">
                                        <label class="account-image-label" for="account-image-upload">Upload your image if you want</label>
                                        <small class="text-danger">{{ $errors->has('profile_picture') ? $errors->first('profile_picture') : ' ' }}</small>
                                    </div>
                                </div>

                                <div class="col-12" style="margin-top: 30px; margin-left: auto; margin-right: auto;">
                                    <input type="submit" value="register">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-2 col-12 d-flex">
                    <div class="login-reg-vertical-boder"></div>
                </div>
                <!-- Account Image -->
                <div class="col-md-5 col-12 d-flex">
                    <div class="ee-login">
                        <h3>Login to your account</h3>
                        <p>E&E provide how all this mistaken idea of denouncing pleasure and sing pain born an will give you a complete account of the system, and expound</p>
                        <!-- Login Form -->
                        <form action="{{ route('customer-login') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12 mb-30">
                                    <small class="text-danger">{{ Session::get('message') }}</small>
                                    <input type="email" name="login_email" value="{{ old('login_email') }}" placeholder="Type your username or email address">
                                    <small class="text-danger">{{ $errors->has('login_email') ? $errors->first('login_email') : '' }}</small>
                                </div>
                                <div class="col-12 mb-20">
                                    <input type="password" name="login_password" placeholder="Enter your password">
                                    <small class="text-danger">{{ $errors->has('login_password') ? $errors->first('login_password') : '' }}</small>
                                </div>
                                <div class="col-12 mb-15">
                                    <input type="checkbox" id="remember_me">
                                    <label for="remember_me">Remember me</label>
                                    <a href="#">Forgotten pasward?</a>
                                </div>
                                <div class="col-12">
                                    <input type="submit" value="LOGIN">
                                </div>
                            </div>
                        </form>
                        <h4>Don’t have account? please <a href="#">Register</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Register Section End -->

@stop
