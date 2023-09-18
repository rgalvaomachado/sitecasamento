<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Victótia e Rômulo</title>
    <link href="index.css" rel="stylesheet">
    <script src="index.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
<body>
    <div class="grid-container">
        <div class="grid-item">
            <label class="item-menu"onclick="showInicial()">Victória e Rômulo</label>
            <br>
            <audio controls>
                <source src="musicas/playlist.mp3" type="audio/mpeg">
            </audio>
        </div>
        <div class="grid-item">
            <label class="item-menu" onclick="showLocal()">Local</label>
            <label class="item-menu" onclick="showListaPresente()">Lista de presentes</label>
            <label class="item-menu" onclick="showConfirmacaoPresenca()">Confirmação de presença</label>
            <label class="item-menu" onclick="showIndicacaoNoivos()">Indicação dos noivos</label>
        </div>
    </div>

    <div id="inicio">
        <img>

        <div id="timer">
            <div id="days"></div>
            <div id="hours"></div>
            <div id="minutes"></div>
            <div id="seconds"></div>
        </div>
        <h3>
            E depois de muita espera e planejamento, nosso casamento está chegando!!
            Criamos esse site para compartilhar com vocês os detalhes da organização do nosso evento. Estamos muito felizes e contamos com a presença de todos no nosso grande dia!
            Aqui vocês encontrarão dicas para hospedagem, salão de beleza e trajeto até o local.
            Ah, é importante também confirmar sua presença. Para isto contamos com sua ajuda clicando no menu “Confirmação de presença” e preenchendo os dados necessários.
            Se estiver na dúvida do que nos dar de presente, separamos algumas opções na “Lista de presentes”, você pode selecionar quantos itens o seu coração mandar e até mesmo finalizar o pagamento aqui pelo site. Fiquem à vontade!
            Aguardamos vocês no nosso grande dia!
        </h3>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="..." alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="..." alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="..." alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>  
    </div>

    <div id="local">
        <h1>Estancia Lar</h1>
        <img>
        Gostaríamos muito de contar com a presença de todos vocês no momento do nosso sim, uma das partes mais importantes desse grande dia, na qual iremos afirmar nosso amor perante todos que amamos!
        A cerimônia será rápida e tentaremos ser extremamente pontuais. Em seguida, receberemos todos em uma recepção no mesmo local. Contamos com vocês!

        Dia 30 de Março de 2024, às 16h30.

        Estância Lar
        R. dos Jasmins, 09
        Green Valley, Botucatu – SP, 18600-000
        <h1>Dica para GPS</h1>
        O melhor trajeto para chegar até o local do evento é utilizando a Rodovia Gastão Dal Farra. Ao colocar o caminho no GPS, verifique se ele indica esse percurso.
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=658&amp;height=400&amp;hl=en&amp;q=Estancia Lar&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                </div>
            </div>
    </div>
        
    <div id="lista_presentes">
        <div class="iframe">
            <iframe class="iframe" frameborder="0" src="http://localhost/lista_de_presentes/loja"></iframe>
        </div>
    </div>
    
    <div id="confirmaçao_presenca">
        
    </div>

    <div id="indicacao_noivos">
        <h1>Onde Ficar?</h1>
        <h3>
            Queridos convidados, como sabemos que a maioria vem de outra cidade, separamos aqui algumas sugestões de hotéis para vocês se hospedarem. Todos esses tem uma ótima localização e são bem conhecidos na cidade.

            Primar plaza hotel

            Ibis Botucatu

            Excellence Plaza Hotel

            Bekassin Botucatu

            Riellis Center Hotel

            Botucatu hotel
              
        <h1>Onde se arrumar?</h1>
        <h3>
            Também separamos algumas sugestões de salão de beleza para quem quiser se arrumar na cidade, sabemos que com a viagem os looks podem desmanchar, então indicamos algumas opções!

            Jota Hair

            Studio Sisters

            VS Vânia Santana

            Studio 7

            Studio Monique Fioretto

            Alsofer Hair Studio
        </h3>
    </div>
   
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
</body>
<footer>

</footer>
</html>