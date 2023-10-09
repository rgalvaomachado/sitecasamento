function aceitar(){
    $('#aceitar').hide();
    $('#content').show();
    play();
}

function play(){
    $('.fa-play').hide();
    $('.fa-pause').show();
    let player = $('#player');
    player[0].play();
}

function pause(){
    $('.fa-play').show();
    $('.fa-pause').hide();
    let player = $('#player');
    player[0].pause();
}

function mute(){
    $('.fa-volume-mute').show();
    $('.fa-volume-up').hide();
    let player = $('#player');
    player[0].muted = true;
}

function volume(){
    $('.fa-volume-mute').hide();
    $('.fa-volume-up').show();
    let player = $('#player');
    player[0].muted = false;
}