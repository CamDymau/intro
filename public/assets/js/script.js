$(document).ready(function () {
    "use strict";
    let video = $('.bg-video')[0];

    $('.btn-pause').on('click', function () {
        if (video.paused) {
            video.play();
            $(this).find('.text-gradient').html('stop');
        } else {
            video.pause();
            $(this).find('.text-gradient').html('play');
        }
    });

    $('.btn-mute').on('click', function () {
        if (video.muted) {
            video.muted = false;
            $(this).find('.text-gradient').html('mute');
        } else {
            video.muted = true;
            $(this).find('.text-gradient').html('unmute');
        }
    });

    $('.volume-changer').mousemove(function(){
        video.volume = parseFloat(this.value / 10);
    });
});
