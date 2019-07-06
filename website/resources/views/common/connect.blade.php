@extends('layouts.secondlayout')
@section('title', 'Se connecter')
@section('main')
<!-- Login start -->
<div class="login-area pt-150 pb-150">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
                <div class="login">
                    <div class="login-form-container">
                        <div class="login-text">
                            <h2>Connexion</h2>
                            <span>Connectez-vous pour continuer</span>
                        </div>
                        <div class="login-form">
                            <form action="#" method="post">
                                <input type="text" name="user-name" placeholder="Email">
                                <input type="password" name="user-password" placeholder="Mot de passe">
                                <div class="button-box">
                                    <div class="login-toggle-btn">
                                        <input type="checkbox" id="remember">
                                        <label for="remember">Garder ma session ouverte</label>
                                        <a href="#">Mot de passe oublié ?</a>
                                    </div>
                                    <button type="submit" class="default-btn">Se connecter</button>
                                    <a href="/register"><button type="button" class="default-btn pull-right">S'inscrire</button></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- Login end -->
@endsection