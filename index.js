function showInicial(){
    $('#inicio').show();
    $('#local').hide();
    $('#lista_presentes').hide();
    $('#confirmaçao_presenca').hide();
    $('#indicacao_noivos').hide();
}

function showLocal(){
    $('#inicio').hide();
    $('#local').show();
    $('#lista_presentes').hide();
    $('#confirmaçao_presenca').hide();
    $('#indicacao_noivos').hide();
}

function showListaPresente(){
    $('#inicio').hide();
    $('#local').hide();
    $('#lista_presentes').show();
    $('#confirmaçao_presenca').hide();
    $('#indicacao_noivos').hide();
}

function showConfirmacaoPresenca(){
    $('#inicio').hide();
    $('#local').hide();
    $('#lista_presentes').hide();
    $('#confirmaçao_presenca').show();
    $('#indicacao_noivos').hide();
}

function showIndicacaoNoivos(){
    $('#inicio').hide();
    $('#local').hide();
    $('#lista_presentes').hide();
    $('#confirmaçao_presenca').hide();
    $('#indicacao_noivos').show();
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


function makeTimer() {
    var endTime = new Date("March 30, 2024 16:30:00 GMT-03:00");     
    var endTime = (Date.parse(endTime)) / 1000;

    var now = new Date();
    var now = (Date.parse(now) / 1000);

    var timeLeft = endTime - now;

    var days = Math.floor(timeLeft / 86400); 
    var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
    var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
    var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));

    if (hours < "10") { hours = "0" + hours; }
    if (minutes < "10") { minutes = "0" + minutes; }
    if (seconds < "10") { seconds = "0" + seconds; }

    $("#days").html(days);
    $("#hours").html(hours);
    $("#minutes").html(minutes);
    $("#seconds").html(seconds);   

}

setInterval(function() { makeTimer(); }, 1000);

const site = window.location.href.split("/");
switch (site[3]) {
    case '#local':
        showLocal();
        break;
    case '#indicacao':
        showIndicacaoNoivos();
        break;
    case '#confirmacao':
        showConfirmacaoPresenca();
        break;
    case '#presente':
        showListaPresente();
        break;
    default:
        showInicial();
}