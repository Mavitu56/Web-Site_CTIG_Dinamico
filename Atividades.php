<?php
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  $logado = "Visitante";
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CTIG - Notícia</title>
    <link rel="icon" href="img/ctig_icon_site.webp">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<style>
  @media (max-width:375px) and (min-width:320px)
  {
    .confetti li{
    background-color:rgba(61, 204, 199, 0.7);
    position: absolute;
    top: 1170px;
    left: 0;
  }
  @keyframes up {
    from {
      opacity: 0;
      transform: translateY(0);
    }
    50% {
      opacity: 1;
    }
    to {
      transform: translateY(-470px) rotate(960deg);
      
    }
  }
  }
  @media (max-width:475px) and (min-width:376px)
  {
    .confetti li{
    background-color:rgba(61, 204, 199, 0.7);
    position: absolute;
    top: 2080px;
    left: 0;
  }
  @keyframes up {
    from {
      opacity: 0;
      transform: translateY(0);
    }
    50% {
      opacity: 1;
    }
    to {
      transform: translateY(-470px) rotate(960deg);
      
    }
  }
  }
  @media (max-width:579px) and (min-width:476px)
  {
    .confetti li{
    background-color:rgba(61, 204, 199, 0.7);
    position: absolute;
    top: 2000px;
    left: 0;
  }
  @keyframes up {
    from {
      opacity: 0;
      transform: translateY(0);
    }
    50% {
      opacity: 1;
    }
    to {
      transform: translateY(-570px) rotate(960deg);
      
    }
  }
  }
@media (min-width: 580px) and (max-width: 767px) { 
  .confetti li{
    background-color:rgba(61, 204, 199, 0.7);
    position: absolute;
    top: 2300px;
    left: 0;
  }
  @keyframes up {
    from {
      opacity: 0;
      transform: translateY(0);
    }
    50% {
      opacity: 1;
    }
    to {
      transform: translateY(-600px) rotate(960deg);
      
    }
  }
 }

@media (min-width: 768px) and (max-width: 991px){ 
  .confetti li{
    background-color:rgba(61, 204, 199, 0.7);
    position: absolute;
    top: 2600px;
    left: 0;
  }
  @keyframes up {
    from {
      opacity: 0;
      transform: translateY(0);
    }
    50% {
      opacity: 1;
    }
    to {
      transform: translateY(-900px) rotate(960deg);
      
    }
  }
 }

@media (min-width: 992px) and (max-width: 1199px) { 
  .confetti li{
    background-color:rgba(61, 204, 199, 0.7);
    position: absolute;
    top: 3000px;
    left: 0;
  }
  @keyframes up {
    from {
      opacity: 0;
      transform: translateY(0);
    }
    50% {
      opacity: 1;
    }
    to {
      transform: translateY(-1100px) rotate(960deg);
      
    }
  }
 }

@media (min-width: 1200px) and (max-width: 1399px) { 
  .confetti li{
    background-color:rgba(61, 204, 199, 0.7);
    position: absolute;
    top: 3150px;
    left: 0;
  }
  @keyframes up {
    from {
      opacity: 0;
      transform: translateY(0);
    }
    50% {
      opacity: 1;
    }
    to {
      transform: translateY(-1200px) rotate(960deg);
      
    }
  }
 }

@media (min-width: 1400px) { 
  .confetti li{
    background-color:rgba(61, 204, 199, 0.7);
    position: absolute;
    top: 3300px;
    left: 0;
  }
  @keyframes up {
    from {
      opacity: 0;
      transform: translateY(0);
    }
    50% {
      opacity: 1;
    }
    to {
      transform: translateY(-1200px) rotate(960deg);
      
    }
  }
 }
</style>
<body>
<div id="profileoff" onclick="profileoff()" class="profileoff" style="display:none;"></div>
  <header class="header">
    <nav id="header-nav"  class="navbar navbar-expand-lg fixed-top">
          <div id="header" class="container">
              <div class="navbar-header">
                  <a href="index.html" class="logo">
                      <div class="logo-img" alt="Logo image">
                        <svg viewBox="0 0 62 64" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <path fill="url(#a)" d="M0 0h62v64H0z"/>
                          <defs>
                            <pattern id="a" patternContentUnits="objectBoundingBox" width="1" height="1">
                              <use xlink:href="#b" transform="scale(.00506 .0049)"/>
                            </pattern>
                            <image loading="lazy" id="b" width="198" height="204" xlink:href="data:image/png;base64,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"/>
                          </defs>
                        </svg>
                        </div>
                  </a>
                  <div class="navbar-brand">
                      <a href="index.html"><h1>CTIG</h1></a>
                  </div>
              </div>
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                </svg>
              </button>
              <div data-navbar-top class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasNavbarLabel">CTIG</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                
              </button>
              
              <div data-navbar-top class="offcanvas-body" id="navbarNav">
                <div class="pad"><hr class="division"></div>
                  <ul class="navbar-nav offcanvas-top justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                      <a class="nav-link" href="index.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="big" viewBox="0 0 16 16">
                          <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
                        </svg>
                        </a>
                        <div class="container text-left">
                          <div class="row">
                            <a href="index.html" class="col-6 links">
                              Home
                            </a>
                            <div class="col-6 dropdown">
                              <a class="links dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Atividades
                              </a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Portas Abertas</a></li>
                                <li><a class="dropdown-item" href="#">Bienal do livro</a></li>
                                <li><a class="dropdown-item" href="#">Interclasse</a></li>
                              </ul>
                            </div>
                          </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="https://www.instagram.com/ctig.unesp/"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="big" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                      </svg></a>
                      <div class="container text-left">
                        <div class="row">
                          <a href="Galeria.html" class="col links">
                            Galeria
                          </a>
                          <a href="Comunicados.html" class="col-6 links">
                            Comunicados
                          </a>

                        </div>
                      </div>
                    </li>
                    <li id="small" class="nav-item">
                      <div class="container text-left">
                        <div class="row">
                          <div class="col-6 dropdown">
                            <a class="links dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Jornal
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="Jornal.html">1°Edição</a></li>
                              <li><a class="dropdown-item disabled" href="#">2°Edição em breve</a></li>
                            </ul>
                          </div>
                          <a href="Eventos.html" class="col links">
                            Eventos
                          </a>
                        </div>
                      </div>
                    </li>
                    <li id="small" class="nav-item">
                      <div class="container text-left">
                        <div class="row">
                          <a href="Álbum.html" class="col links">
                            Albúm
                          </a>
                        </div>
                      </div>
                    </li>
                    <hr class="division">
                    <li>
                      <div class="row">
                        <div class="col links">
                          <div class="offcanvas-globe">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="16" height="16" class="bi bi-globe" viewBox="0 0 16 16">
                              <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z"></path>
                            </svg><a href="https://beacons.ai/ctig.unesp">Beacons</a>
                          </div>
                        </div>
                        <div  class="col links">
                          <div class="offcanvas-insta">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-instagram" width="16" height="16" viewBox="0 0 16 16">
                              <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                            </svg><a href="https://www.instagram.com/ctig.unesp/">Instagram</a>
                          </div>
                        </div>
                      </div>
                      
                    </li>
                    <hr class="division">
                    <li class="nav-item">
                      <form class="form d-flex" role="search">
                        <input data-form class="form-control " type="search" placeholder="Search" aria-label="Search">
                        <button class="btn" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg></button>
                      </form>
                    </li>
                    
                  </ul>
                </div>
          </div>
      </nav>
      <nav class="sticky-top nav-2 navbar-default">
        <ul class="nav justify-content-center">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Atividades
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Portas Abertas</a></li>
              <li><a class="dropdown-item" href="#">Bienal do livro</a></li>
              <li><a class="dropdown-item" href="#">Interclasse</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Galeria.html">Galeria</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Comunicados.html">Comunicados</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Jornal
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="Jornal.html">1°Edição</a></li>
              <li><a class="dropdown-item disabled" href="Jornal.html">2°Edição em breve</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Eventos.html">Eventos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Álbum.html">Albúm</a>
          </li>
        </ul>
      </nav>
  </header>
      <div class="container nav-pad" id="main-content">
        <div data-animate-show class="title"><h1>Título</h1></div>
        <div class="xs-only">
          <div data-animate-feed>
            <svg class="faixa" viewBox="0 0 1286 194" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1233.94 156.127C1486.19 -77.5145 -47.1595 331.607 27.6539 5.99991" stroke="#C4FFF9" stroke-width="48"/>
              <path d="M1214.08 178C1466.32 -55.6417 -51.1318 360.439 23.6817 34.8323" stroke="#68D8D6" stroke-width="42"/>
              </svg>
          </div>
      </div>
        <div class="text-news"> <p data-animate-news>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam feugiat quis nisl eu imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam erat volutpat. Nam magna ex, venenatis eu fringilla eu, pulvinar et tellus. Nullam ligula erat, bibendum sit amet lacinia quis, volutpat ut justo. Nam suscipit, quam quis sollicitudin commodo, lorem orci vehicula lacus, eget auctor leo quam id ligula. Fusce vel lectus luctus libero tempor lacinia. Duis tempus dui orci, ac feugiat neque iaculis a. Vestibulum quis sodales dui. Nam aliquam neque justo, vel dignissim odio sollicitudin eu. Suspendisse tincidunt dignissim luctus. Fusce vitae rhoncus justo, semper suscipit lectus. </p> <br> 
           <p data-animate-news>Pellentesque viverra magna non enim vestibulum mattis. Sed felis nisl, eleifend et pulvinar eget, porta non leo. Vivamus sed felis dolor. Nunc sit amet felis vulputate, accumsan justo vitae, semper dolor. Ut a ex elementum, condimentum diam in, aliquam mi. Nam rhoncus eros vitae diam dictum efficitur. Mauris quis dolor pellentesque quam congue luctus vitae at orci. Proin feugiat lacus in est fringilla facilisis. </p> <br> 
           <p data-animate-news> In non mollis ligula. Vestibulum elementum magna ac suscipit imperdiet. Nam mattis rhoncus tincidunt. Nullam sollicitudin malesuada libero ac tempor. Donec cursus condimentum libero fringilla aliquet. Phasellus magna tellus, fermentum vitae mi nec, commodo faucibus felis. Praesent sagittis eu leo quis posuere. Donec egestas tempor mi sit amet pulvinar. Mauris varius interdum aliquet. Aenean a dapibus risus. Phasellus consectetur ac orci tincidunt maximus. Praesent leo sem, mattis a dignissim a, dapibus vel neque. </p> <br>
           <p data-animate-news> Donec egestas tempor mi sit amet pulvinar. Mauris varius interdum aliquet. Aenean a dapibus risus. Phasellus consectetur ac orci tincidunt maximus. Praesent leo sem, mattis a dignissim a, dapibus vel neque. </p>
        </div>
        <div class="xs-only">
          <div data-animate-news="" class="faixa2">
          <svg class="photos" viewBox="0 0 664 108" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M60 22C214.5 113 455 -34.5 603 58" stroke="#68D8D6" stroke-width="51"/>
            <path d="M47 44L69.5 55.5V73.5L59 60L47 44Z" fill="#3DCCC7"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M76.3013 38.8318L87.5 36.3318C93.4895 28.367 50.4539 9.33729 0.5 22.5318C2.52724 23.626 4.44493 24.6161 6.26952 25.5582C16.9327 31.0636 24.4159 34.9272 32 48.3318L32.3306 48.2609C32.3865 48.4503 32.443 48.6406 32.5 48.8319C19.4006 53.4367 12.2296 58.2136 0 73.832C30.5212 68.3167 44.815 69.8233 69.5 73.832C60.5854 61.4517 53.4267 51.9657 47.7533 44.9537L76.3013 38.8318Z" fill="#68D8D6"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M603.5 56.5C629.339 52.1558 643.439 50.4176 663.5 56.5C657.943 58.1361 653.6 61.141 647.783 65.5638C642.952 69.5741 635.136 80.0157 635 83C635 83 635 83 635 83C635 83 635 83 635 83C649.378 89.7833 656.061 94.7967 664 107.5C618.887 99.7573 611.124 101.228 582.266 106.694C580.894 106.954 579.474 107.223 578 107.5C578.671 107.202 579.33 106.905 579.979 106.609C579.901 106.632 579.826 106.655 579.752 106.677C579.173 106.95 578.589 107.225 578 107.5C578.538 106.164 579.06 104.863 579.57 103.593L579.572 103.59C587.468 83.9273 592.35 71.7695 603.5 56.5Z" fill="#68D8D6"/>
            <path d="M578 73L590.5 78L578 107.5V73Z" fill="#3DCCC7"/>
            <path d="M285.456 27H298.816V31.4H289.856V38.48H295.456L294.016 42.68H289.856V55H285.456V27ZM318.282 47.64C318.282 49.88 317.669 51.7333 316.442 53.2C315.216 54.6667 313.362 55.4 310.882 55.4C308.402 55.4 306.522 54.6667 305.242 53.2C303.989 51.7067 303.362 49.8533 303.362 47.64V42.36C303.362 39.8267 304.002 37.8933 305.282 36.56C306.589 35.2 308.456 34.52 310.882 34.52C313.202 34.52 315.016 35.2267 316.322 36.64C317.629 38.0267 318.282 39.9333 318.282 42.36V47.64ZM313.922 42.36C313.922 40.9467 313.629 40.0267 313.042 39.6C312.456 39.1733 311.736 38.96 310.882 38.96C308.802 38.96 307.762 40.0933 307.762 42.36V48.04C307.762 49.1067 308.056 49.88 308.642 50.36C309.229 50.84 309.976 51.08 310.882 51.08C311.762 51.08 312.482 50.8267 313.042 50.32C313.629 49.8133 313.922 49.0533 313.922 48.04V42.36ZM331.692 55.52C327.638 55.44 325.612 53.5067 325.612 49.72V27H330.092V34.96H333.892L332.932 39.08H330.092V49.72C330.092 50.6267 330.345 51.24 330.852 51.56C331.358 51.8533 332.078 52 333.012 52L331.692 55.52ZM356.868 47.64C356.868 49.88 356.255 51.7333 355.028 53.2C353.801 54.6667 351.948 55.4 349.468 55.4C346.988 55.4 345.108 54.6667 343.828 53.2C342.575 51.7067 341.948 49.8533 341.948 47.64V42.36C341.948 39.8267 342.588 37.8933 343.868 36.56C345.175 35.2 347.041 34.52 349.468 34.52C351.788 34.52 353.601 35.2267 354.908 36.64C356.215 38.0267 356.868 39.9333 356.868 42.36V47.64ZM352.508 42.36C352.508 40.9467 352.215 40.0267 351.628 39.6C351.041 39.1733 350.321 38.96 349.468 38.96C347.388 38.96 346.348 40.0933 346.348 42.36V48.04C346.348 49.1067 346.641 49.88 347.228 50.36C347.815 50.84 348.561 51.08 349.468 51.08C350.348 51.08 351.068 50.8267 351.628 50.32C352.215 49.8133 352.508 49.0533 352.508 48.04V42.36ZM368.278 49.48C368.278 49.96 368.518 50.4133 368.998 50.84C369.504 51.2667 370.264 51.48 371.278 51.48C372.158 51.48 372.838 51.2667 373.318 50.84C373.798 50.3867 374.038 49.8667 374.038 49.28C374.038 48.4533 373.731 47.84 373.118 47.44C372.531 47.04 371.571 46.6 370.238 46.12C369.091 45.7467 368.144 45.3733 367.398 45C366.651 44.6267 365.984 44.0667 365.398 43.32C364.811 42.5733 364.464 41.6 364.358 40.4C364.278 39.4933 364.451 38.5867 364.878 37.68C365.331 36.7467 366.078 35.9867 367.118 35.4C368.184 34.7867 369.544 34.48 371.198 34.48C372.051 34.48 372.798 34.5733 373.438 34.76C374.104 34.92 374.624 35.0933 374.998 35.28C375.371 35.4667 375.598 35.5867 375.678 35.64L374.398 39.72C374.344 39.6667 374.198 39.5733 373.958 39.44C373.744 39.28 373.398 39.1333 372.918 39C372.438 38.8667 371.864 38.8 371.198 38.8C369.758 38.8 369.038 39.2 369.038 40C369.038 40.16 369.064 40.32 369.118 40.48C369.198 40.8533 369.478 41.1733 369.958 41.44C370.438 41.68 371.144 41.9733 372.078 42.32C373.384 42.8 374.478 43.28 375.358 43.76C376.264 44.2133 377.038 44.9067 377.678 45.84C378.344 46.7467 378.678 47.92 378.678 49.36C378.678 50.4533 378.411 51.48 377.878 52.44C377.344 53.3733 376.518 54.1333 375.398 54.72C374.304 55.3067 372.931 55.6 371.278 55.6C369.758 55.6 368.438 55.3467 367.318 54.84C366.224 54.3067 365.384 53.6133 364.798 52.76C364.238 51.9067 363.931 50.96 363.878 49.92L368.278 49.48Z" fill="black"/>
            </svg>
          </div>
        </div>
        <ul class="confetti">
          <div class="xs-only">
          <div id="panel-empty" class="row">
            <div data-animate-about-left id="foto" class="col-6 lazyload"></div>
            <div data-animate-about-right id="foto" class="col-6 lazyload"></div>
          </div>
        </div>
          <div class="xs-only">
          <div data-animate-show class="nuvem img-fluid">
            <div class="panel2">
            <div id="panel" class="row">
                <div data-animate-about-left id="foto" class="col-6 lazyload"></div>
                <div data-animate-about-right id="foto" class="col-6 lazyload"></div>
              </div>
            </div>
           </div>
          </div>
    </div>
      <li></li>
        <div class="container">
          <div class="xs-only">
            <div id="panel-empty" class="row">
                <div data-animate-about-left id="foto" class="col-6 lazyload"></div>
                <div data-animate-about-right id="foto" class="col-6 lazyload"></div>
              </div>
            </div>
            <div class="big-frame">
            <div id="panel-empty" class="row">       
                  <div data-animate-news id="foto2" class="col picture lazyload"></div>
              </div>
            </div>
      </div>
          </ul>
    </div>
    <?php require_once "footer.php" ?>
      <script src="js/bootstrap.min.js"></script>
      <script src="jquery-3.6.0.min.js"></script>
      <script src="script.js"></script>
      <script>
          document.addEventListener("DOMContentLoaded", function() {
    var lazyBackgrounds = [].slice.call(document.querySelectorAll(".lazyload"));
  
    if ("IntersectionObserver" in window) {
      let lazyBackgroundObserver = new IntersectionObserver(function(entries, observer) {
        entries.forEach(function(entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add("background-visible");
            lazyBackgroundObserver.unobserve(entry.target);
          }
        });
      });
  
      lazyBackgrounds.forEach(function(lazyBackground) {
        lazyBackgroundObserver.observe(lazyBackground);
      });
    }
  });
      </script>
      <script src="js/bootstrap.bundle.min.js"></script>
    
</body>
</html>