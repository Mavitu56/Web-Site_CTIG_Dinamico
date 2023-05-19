<?php
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  $logado = "Visitante";
  }
  else{
    $logado =$_SESSION['login'];
  }
  require 'vendor/autoload.php';
  $client = new MongoDB\Client('mongodb+srv://CTIG_ADMIN:<password>@ctig.cou2kb6.mongodb.net/test');
    $site= basename( __FILE__ );
    require "vendor/autoload.php";
    $client = new MongoDB\Client("mongodb+srv://CTIG_ADMIN:<password>@ctig.cou2kb6.mongodb.net/test");
    $colecao = str_replace(".php","",$site);
    $sem = str_replace(" ","",$colecao);
    $db = "Notícias";
    $page= $client->$db->$sem->findOne();
    $data=$page->jsonSerialize();
    
    ?>
    <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>CTIG - <?php echo $colecao; ?></title>
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
            top: 980px;
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
            top: 1080px;
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
            top: 1200px;
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
            top: 1350px;
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
            top: 1600px;
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
            top: 1950px;
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
            top: 2070px;
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
            top: 2450px;
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
        <?php require_once "header.php" ?>
              <div class="container nav-pad" id="main-content">
                <div data-animate-show class="title"><h1><?php echo $data->titulo; ?> </h1></div>
                <div class="xs-only">
                  <div data-animate-feed>
                    <svg class="faixa" viewBox="0 0 1286 194" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1233.94 156.127C1486.19 -77.5145 -47.1595 331.607 27.6539 5.99991" stroke="#C4FFF9" stroke-width="48"/>
                      <path d="M1214.08 178C1466.32 -55.6417 -51.1318 360.439 23.6817 34.8323" stroke="#68D8D6" stroke-width="42"/>
                      </svg>
                  </div>
              </div>
                <div class="text-news">
                <p style="font-family:Advent Pro, sans-serif;"><?php echo $data->texto; ?></p>
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
                    <div data-animate-about-left class="col-6 lazyload"><img class="img-fluid" src="img/<?php echo $data->image0; ?>" alt=""></div>
                    <div data-animate-about-right class="col-6 lazyload"><img class="img-fluid" src="img/<?php echo $data->image1; ?>" alt=""></div>
                  </div>
                </div>
                  <div class="xs-only">
                  <div data-animate-show class="nuvem img-fluid">
                    <div class="panel2">
                    <div id="panel" class="row">
                        <div data-animate-about-left class="col-6 lazyload"><img class="img-fluid" src="img/<?php echo $data->image2; ?>" alt=""></div>
                        <?php
                         if($data->image3==null){

                        }
                        else{
                          echo "<div data-animate-about-right class='col-6 lazyload'><img class='img-fluid' src='img/".$data->image3."'></div>";
                        }
                        ?>
                      </div>
                    </div>
                   </div>
                  </div>
            </div>
                <div class="container">
                  <div class="xs-only">
                    <div id="panel-empty" class="row">
                        <div data-animate-about-left class="col-6 lazyload"><img class="img-fluid" src="img/<?php echo $data->image4; ?>" alt=""></div>
                        <div data-animate-about-right class="col-6 lazyload"><img class="img-fluid" src="img/<?php echo $data->image5; ?>" alt=""></div>
                      </div>
                    </div>
                    <div class="big-frame">
                    <div id="panel-empty" class="row">       
                          <div data-animate-news class="col picture lazyload"><img class="img-fluid" src="img/<?php echo $data->image6; ?>" alt=""></div>
                      </div>
                    </div>
              </div>
                  </ul>
            </div>
            <footer class="panel-footer">
              <div class="container">
                <div class="row">
                  <section id="footer-links" class="col-sm-4">
                    <span><h3>Links</h3></span>
                    <hr class="d-none d-sm-block">
                    <a href="https://www.feg.unesp.br/#!/cotec">Feg-Cotec</a><br>
                    <a href="https://www.instagram.com/ctig.unesp/">Instagram CTIG</a><br>
                    <a href="http://200.145.14.80/sg_web/Acesso.aspx?ReturnUrl=%2fsg_web%2fdefault.aspx%3fescola%3d2370&escola=2370">Sophia Boletim</a><br>
                    <a href="https://beacons.ai/ctig.unesp">Beacons</a><br>
                    <a href="#">Estágio</a><br>
                    <a href="https://www.feg.unesp.br/#!/biblioteca/">Biblioteca</a>
                    <hr class="d-block d-sm-none">
                  </section>
                  <section id="footer-contact" class="col-sm-4">
                    <span><h3>Contato</h3></span>
                    <hr class="d-none d-sm-block">
                    Email Direção : <br> <a href="mailto:direcao.ctig.feg@unesp.br">direcao.ctig.feg@unesp.br</a> <br>
                    Telefone Secretaria : <br> <a href="tel:+551231232825">(12) 3123 2825</a> <br>
                    Email Secretaria : <br> <a href="mailto:secretaria.ctig.feg@unesp.br">secretaria.ctig.feg@unesp.br</a>
                    <hr class="d-block d-sm-none">
                  </section>
        
                  <section id="footer-logo-section" class="col-sm-4">
                    <div id="footer-logo">
                    <div id="footer-img" class="footer-img">
                      <img loading="lazy" class="footer-img" src="img/CTIG-UNESP-footer.webp" alt="">
                    </div>
                    </div>
                    CTIG-Unesp ©
        
                  </section>
        
              </div>
            </footer>
              <script src="js/bootstrap.min.js"></script>
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