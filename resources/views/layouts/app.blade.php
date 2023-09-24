<!doctype html>
<html lang="en">
<head>
    <title>
        Intro Messages
    </title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/player.css') }}">
    <script src="{{ asset('js/jQuery.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/video.js') }}"></script>
</head>
<body>

<audio class="audio-click" src="{{ asset('video/meow.mp3') }}"></audio>
<video class="bg-video position-fixed" preload="auto" src="{{ asset('video/puss.mp4') }}" poster="{{ asset('image/preload.png') }}" loop muted></video>

<header>
    <div class="container">
        <div class="row h100 aic">
            <div class="left-block col">
                1
            </div>
            <div class="center-block col">
                2
            </div>
            <div class="right-block col ttu tfw tfs20">
                @if(session('user'))

                    {{ session('user')['login'] }}
                    <a href="/logout" class="text-gradient">
                        logout
                    </a>

                @else
                    <div class="btn-auth-header">
                        <div class="sign-up text-gradient">
                            <a href="/">sign up</a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</header>

<div class="app">
    <div class="content">
        @yield('content')
    </div>
</div>

<footer>
    <div class="video position-fixed">
        <div class="flex ml-30">
            <input class="volume-changer" type="range" min="0" max="10" value="5" step="0.1"/>
        </div>
        <div class="flex btn-player ml-30">
            <button class="btn-pause btn-player-gradient-border">
                <span class="text-gradient">
                    play
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
            <input class="video-changer" type="range" min="0" max="100" value="0" step="0.1"/>
        </div>
    </div>
</footer>
</body>
</html>
