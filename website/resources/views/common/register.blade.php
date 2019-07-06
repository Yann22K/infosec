@extends('layouts.secondlayout')
@section('title', 'S\'enregister')
@section('main')
<!-- Register start -->
<div class="register-area pt-150 pb-150">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
                <div class="login">
                    <div class="login-form-container">
                        <div class="login-text">
                            <h2>sign up</h2>
                            <span>Please login using account detail bellow.</span>
                        </div>
                        <div class="login-form">
                            <form action="#" method="post">
                                <input type="text" name="user-name" placeholder="Username">
                                <input type="password" name="user-password" placeholder="Password">
                                <div class="button-box">
                                    <div class="login-toggle-btn">
                                        <input type="checkbox" id="remember">
                                        <label for="remember">Remember me</label>
                                        <a href="#">Forgot Password?</a>
                                    </div>
                                    <button type="submit" class="default-btn">sign up</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- Register end -->
@endsection