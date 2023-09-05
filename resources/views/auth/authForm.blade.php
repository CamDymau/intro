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
        <form method="post" class="register-form">
            <input type="text" name="name" placeholder="Name" value required class="form-input text-gradient" max="100">
            <input type="text" name="second_name" placeholder="Second Name" class="form-input text-gradient" max="100">
            <input type="text" name="login" placeholder="Login" required class="form-input text-gradient" max="50">
            <input type="date" name="birth_date" placeholder="dd.mm.yyyy" class="form-input text-gradient">
            <input type="password" name="password" placeholder="Password" required class="form-input text-gradient">

            <button type="submit" class="form-button text-gradient">
                sign up
            </button>
        </form>

        <form method="post" class="auth-form display-none">
            <input type="text" name="login" placeholder="Login" required class="form-input text-gradient" max="50">
            <input type="password" name="password" placeholder="Password" required class="form-input text-gradient">

            <button type="submit" class="form-button text-gradient aie">
                sign in
            </button>
        </form>
    </div>

@endsection
