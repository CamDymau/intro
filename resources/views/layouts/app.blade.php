<!doctype html>
<html lang="en">
<head>
    <title>
        Slim 4
    </title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<video class="bg-video" preload="auto" loop>
    <source src="../../../public/assets/video/puss.mp4" type="video/mp4">
</video>

<header>
    some text here
</header>
<div class="app">
    <div class="content">
        @yield('content')
    </div>
</div>
<script src="{{ asset('js/jQuery.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
</body>
<footer>
    <div class="video-btn">
        <input class="volume-changer" type="range" min="0" max="10" value="5" step="0.1"/>
        <button class="btn-pause btn-gradient-border">
            <span class="text-gradient">
                play
            </span>
        </button>
        <button class="btn-mute btn-gradient-border">
            <span class="text-gradient">
                mute
            </span>
        </button>
    </div>
</footer>
</html>
