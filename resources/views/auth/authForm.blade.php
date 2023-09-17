@extends('layouts.app')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/auth-form.css') }}">
    <script src="{{ asset('js/auth.js') }}"></script>

    <div class="container main-auth-form">
        <div class="btn-form flex">
            <div class="btn-reg flex aic jcc text-gradient btn-activate">
                sign up
            </div>
            <div class="btn-auth flex aic jcc text-gradient btn-not-activate">
                sign in
            </div>
        </div>

        <div class="error-block">
            <span class="text-error">12312312</span>
        </div>

        <form class="register-form">
            <input type="text" name="name" placeholder="Name" value required class="form-input text-gradient" max="100">
            <input type="text" name="second_name" placeholder="Second Name" class="form-input text-gradient" max="100">
            <input type="text" name="login" placeholder="Login" required class="form-input text-gradient" max="50">
            <input type="date" name="birth_date" placeholder="dd.mm.yyyy" class="form-input text-gradient">
            <input type="password" name="password" placeholder="Password" required class="form-input text-gradient">

            <div class="form-button tac text-gradient aie btn-reg-submit">
                sign up
            </div>
        </form>

        <form class="auth-form display-none">
            <input type="text" name="login" placeholder="Login" required class="form-input text-gradient" max="50">
            <input type="password" name="password" placeholder="Password" required class="form-input text-gradient">

            <div class="form-button tac text-gradient aie btn-auth-submit">
                sign in
            </div>
        </form>
    </div>

@endsection
