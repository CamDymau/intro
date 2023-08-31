<!doctype html>
<html lang="en">
<head>
    <title>
        Slim 4 </title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/player.css') }}">
</head>

<header>
    some text here
</header>

<body>

<audio class="audio-click" src="{{ asset('video/meow.mp3') }}"></audio>
<video class="bg-video" preload="auto" src="{{ asset('video/puss.mp4') }}" poster="{{ asset('image/preload.png') }}" loop muted autoplay></video>


<div class="app">
    <div class="content">
        @yield('content')
    </div>
</div>
<script src="{{ asset('js/jQuery.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/video.js') }}"></script>
</body>
<footer>
    <div class="video">
        <div class="flex ml-30">
            <input class="volume-changer" type="range" min="0" max="10" value="5" step="0.1" />
        </div>
        <div class="flex btn-player ml-30">
            <button class="btn-pause btn-player-gradient-border">
                <span class="text-gradient">
                    pause
                </span>
            </button>
            <button class="btn-mute btn-player-gradient-border">
                <span class="text-gradient">
                    unmute
                </span>
            </button>
        </div>

        <div class="div-video-changer flex ml-30">
            <span class="current">0:00</span>
            /
            <span class="duration">0:00</span>
            <input class="video-changer" type="range" min="0" max="100" value="0" step="0.1" />
        </div>
    </div>
</footer>
</html>
