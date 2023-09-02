$(document).ready(function () {
    const progressBar = $('.video-changer');
    const video = $('.bg-video')[0];
    const audio = $('.audio-click')[0];
    audio.volume = 0.1;

    $(document).click(function () {
        audio.play();
    });

    let durationMinutes = Math.floor(video.duration / 60);
    let durationSeconds = Math.floor(video.duration - durationMinutes * 60);

    $('.duration').html(`${durationMinutes}:${durationSeconds}`);

    video.addEventListener('timeupdate', setCurrentTimeText)

    progressBar.on('click', function () {
        video.currentTime = video.duration * progressBar.val() / 100;
        setProgressBarPosition();
    });

    $('.volume-changer').on('mousemove', function () {
        video.volume = parseFloat(this.value / 10);
    });

    $('.btn-pause').on('click', function () {
        let text = $(this).find('.text-gradient');

        if (video.paused) {
            video.play();
            text.html('stop');
        } else {
            video.pause();
            text.html('play');
        }
    });

    $('.btn-mute').on('click', function () {
        let text = $(this).find('.text-gradient');

        if (video.muted) {
            video.muted = false;
            text.html('mute');
        } else {
            video.muted = true;
            text.html('unmute');
        }
    });

    function setCurrentTimeText() {
        let currentMinutes = Math.floor(video.currentTime / 60);
        let currentSeconds = Math.floor(video.currentTime - currentMinutes * 60);
        setProgressBarPosition();

        $('.current').html(`${currentMinutes}:${currentSeconds < 10 ? '0' + currentSeconds : currentSeconds}`);
    }

    function setProgressBarPosition(){
        progressBar[0].value = (video.currentTime / video.duration) * 100
    }
});
