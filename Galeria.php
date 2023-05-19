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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CTIG - Galeria</title>
    <link rel="icon" href="img/ctig_icon_site.webp">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
<div id="profileoff" onclick="profileoff()" class="profileoff" style="display:none;"></div>
<?php require_once "header.php" ?>
  <div class="xs-only">
        <div data-animate-news class="faixa2 img-fluid">
          <svg class="photos" viewBox="0 0 664 108" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M60 22.9776C214.5 113.469 455 -33.2067 603 58.7765" stroke="#68D8D6" stroke-width="51"/>
            <path d="M47 44.8547L69.5 56.2905V74.1899L59 60.7654L47 44.8547Z" fill="#3DCCC7"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M76.3013 39.7155L87.5 37.2294C93.4895 29.3091 50.4539 10.3857 0.5 23.5065C2.52724 24.5946 4.44493 25.5792 6.26952 26.5159C16.9327 31.9906 24.4159 35.8326 32 49.1624L32.3306 49.0919C32.3865 49.2802 32.443 49.4694 32.5 49.6597C19.4006 54.2387 12.2296 58.9889 0 74.5201C30.5212 69.0356 44.815 70.5338 69.5 74.5201C60.5854 62.209 53.4267 52.776 47.7533 45.8031L76.3013 39.7155Z" fill="#68D8D6"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M603.5 57.2849C629.339 52.965 643.439 51.2365 663.5 57.2849C657.943 58.9119 653.6 61.8999 647.783 66.2978C642.952 70.2856 635.136 80.6692 635 83.6368C635 83.6368 635 83.6369 635 83.6369C635 83.6369 635 83.6369 635 83.6368C649.378 90.3823 656.061 95.3676 664 108C618.887 100.301 611.124 101.763 582.266 107.198L582.265 107.198C580.893 107.457 579.473 107.724 578 108C578.671 107.703 579.33 107.408 579.979 107.114C579.901 107.137 579.826 107.16 579.752 107.182C579.173 107.453 578.589 107.726 578 108C578.538 106.671 579.061 105.376 579.572 104.112C587.468 84.559 592.35 72.4691 603.5 57.2849Z" fill="#68D8D6"/>
            <path d="M578 73.6927L590.5 78.6648L578 108V73.6927Z" fill="#3DCCC7"/>
            <path d="M294.055 51.748C293.962 51.7946 293.74 51.8763 293.39 51.993C293.04 52.1096 292.655 52.203 292.235 52.273C291.839 52.343 291.395 52.378 290.905 52.378C289.599 52.378 288.385 52.133 287.265 51.643C286.145 51.153 285.235 50.383 284.535 49.333C283.859 48.283 283.52 46.9763 283.52 45.413V34.423C283.52 32.7896 283.777 31.483 284.29 30.503C284.827 29.4996 285.585 28.6946 286.565 28.088C287.592 27.5046 288.852 27.213 290.345 27.213C292.165 27.213 293.81 27.598 295.28 28.368L294.125 31.833C293.495 31.5996 292.947 31.4363 292.48 31.343C292.014 31.2496 291.5 31.203 290.94 31.203C289.82 31.203 288.945 31.413 288.315 31.833C287.685 32.2296 287.37 32.988 287.37 34.108V45.483C287.37 46.603 287.662 47.3846 288.245 47.828C288.852 48.2713 289.727 48.493 290.87 48.493C291.757 48.493 292.504 48.283 293.11 47.863C293.74 47.4196 294.055 46.638 294.055 45.518V45.203H292.06L290.835 41.528H297.905V52.028H294.265L294.055 51.748ZM315.514 52.028C312.994 52.2846 311.174 52.413 310.054 52.413C307.604 52.413 305.656 51.958 304.209 51.048C302.762 50.138 302.039 48.493 302.039 46.113V43.208C302.039 40.898 302.844 39.3463 304.454 38.553C305.224 38.1796 306.099 37.993 307.079 37.993C307.942 37.993 308.794 38.1096 309.634 38.343C310.474 38.5763 311.151 38.833 311.664 39.113C311.664 38.2496 311.314 37.6663 310.614 37.363C309.914 37.0363 309.016 36.873 307.919 36.873L308.234 34.213C310.474 34.213 312.119 34.5746 313.169 35.298C314.242 35.998 314.896 36.838 315.129 37.818C315.386 38.798 315.514 40.058 315.514 41.598V52.028ZM311.664 43.208C311.244 42.9046 310.649 42.6246 309.879 42.368C309.132 42.088 308.444 41.948 307.814 41.948C307.254 41.948 306.799 42.088 306.449 42.368C306.099 42.648 305.924 43.0913 305.924 43.698V45.623C305.924 47.7463 307.172 48.808 309.669 48.808C310.392 48.808 311.057 48.7496 311.664 48.633V43.208ZM320.204 27.528H324.054V52.028H320.204V27.528ZM332.65 46.813C332.65 47.4663 332.825 47.9796 333.175 48.353C333.548 48.703 334.085 48.878 334.785 48.878C335.858 48.878 337.293 48.4113 339.09 47.478L340.49 50.803C339.65 51.3396 338.693 51.748 337.62 52.028C336.546 52.308 335.473 52.448 334.4 52.448C332.673 52.448 331.296 52.028 330.27 51.188C329.266 50.3246 328.765 49.0413 328.765 47.338V40.163C328.765 38.273 329.348 36.803 330.515 35.753C331.705 34.703 333.268 34.178 335.205 34.178C337.141 34.178 338.646 34.703 339.72 35.753C340.816 36.7796 341.365 38.2146 341.365 40.058V45.378L332.65 45.833V46.813ZM337.48 40.128C337.48 39.428 337.258 38.8913 336.815 38.518C336.371 38.1446 335.823 37.958 335.17 37.958C334.283 37.958 333.641 38.1913 333.245 38.658C332.848 39.1246 332.65 39.638 332.65 40.198V42.298L337.48 41.983V40.128ZM345.55 34.493H349.12L349.4 34.633C350.357 34.3063 351.255 34.143 352.095 34.143C352.679 34.143 353.53 34.2596 354.65 34.493L355.35 34.633L354.44 38.378C353.787 38.0513 353.145 37.888 352.515 37.888C351.652 37.888 350.917 38.1563 350.31 38.693C349.704 39.2063 349.4 39.8946 349.4 40.758V52.028H345.55V34.493ZM361.182 31.308C360.622 31.308 360.132 31.098 359.712 30.678C359.292 30.258 359.082 29.768 359.082 29.208C359.082 28.6713 359.292 28.2046 359.712 27.808C360.132 27.388 360.622 27.178 361.182 27.178C361.718 27.178 362.185 27.388 362.582 27.808C363.002 28.2046 363.212 28.6713 363.212 29.208C363.212 29.768 363.002 30.258 362.582 30.678C362.185 31.098 361.718 31.308 361.182 31.308ZM359.152 34.493H363.002V52.028H359.152V34.493ZM381.495 52.028C378.975 52.2846 377.155 52.413 376.035 52.413C373.585 52.413 371.636 51.958 370.19 51.048C368.743 50.138 368.02 48.493 368.02 46.113V43.208C368.02 40.898 368.825 39.3463 370.435 38.553C371.205 38.1796 372.08 37.993 373.06 37.993C373.923 37.993 374.775 38.1096 375.615 38.343C376.455 38.5763 377.131 38.833 377.645 39.113C377.645 38.2496 377.295 37.6663 376.595 37.363C375.895 37.0363 374.996 36.873 373.9 36.873L374.215 34.213C376.455 34.213 378.1 34.5746 379.15 35.298C380.223 35.998 380.876 36.838 381.11 37.818C381.366 38.798 381.495 40.058 381.495 41.598V52.028ZM377.645 43.208C377.225 42.9046 376.63 42.6246 375.86 42.368C375.113 42.088 374.425 41.948 373.795 41.948C373.235 41.948 372.78 42.088 372.43 42.368C372.08 42.648 371.905 43.0913 371.905 43.698V45.623C371.905 47.7463 373.153 48.808 375.65 48.808C376.373 48.808 377.038 48.7496 377.645 48.633V43.208Z" fill="black"/>
            </svg>
          </div>
        </div>
        <div onclick="off()" id="janela-modal"><img id="img-modal"></div>
            <div class="row">
                <div data-animate-about-left class="col carousel-col">
                  <div id="carouselExampleCaptions" class="carousel slide carousel-photos" data-bs-ride="false">
                    <div class="carousel-indicators">
                        <button id="indicator" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button id="indicator" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button id="indicator" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      </div>
                    <div class="carousel-inner">
                      <div id="carousel-height" onclick="on('img/img.png')" class="carousel-item active">
                        <img class="img-fluid" loading="lazy" src="img/img.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption sub-photos">
                          <h1>Título</h1>
                        </div>
                      </div>
                      <div id="carousel-height" onclick="on('img/img.png')" class="carousel-item">
                        <img loading="lazy" src="img/img.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption sub-photos">
                          <h1>Título</h1>
                        </div>
                      </div>
                      <div id="carousel-height" onclick="on('img/img.png')" class="carousel-item">
                        <img loading="lazy"src="img/img.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption sub-photos">
                          <h1>Título</h1>
                        </div>
                      </div>
                    </div>
                    <button id="pass" class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button id="pass" class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                </div>
                <div data-animate-about-left class="col carousel-col">
                    <div id="carouselExampleCaptions2" class="carousel slide carousel-photos" data-bs-ride="false">
                        <div class="carousel-indicators">
                            <button id="indicator" type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button id="indicator" type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button id="indicator" type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="2" aria-label="Slide 3"></button>
                          </div>
                        <div class="carousel-inner">
                        <div id="carousel-height" onclick="on('img/img.png')" class="carousel-item active">
                          <div onclick="on('img/img.png')">
                          <img id="img-modal" loading="lazy" src="img/img.png" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-caption sub-photos">
                            <h1>Título</h1>   
                        </div>
                        </div>
                        <div id="carousel-height" onclick="on('img/img.png')" class="carousel-item">
                          <img loading="lazy" src="img/img.png" class="d-block w-100" alt="...">
                          <div class="carousel-caption sub-photos">
                            <h1>Título</h1>
                        </div>
                        </div>
                        <div id="carousel-height" onclick="on('img/img.png')" class="carousel-item">
                          <img loading="lazy" src="img/img.png" class="d-block w-100" alt="...">
                          <div class="carousel-caption sub-photos">
                            <h1>Título</h1>
                        </div>
                        </div>
                      </div>
                      <button id="pass" class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button id="pass" class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>
                  <div data-animate-about-left class="col carousel-col">
                    <div id="carouselExampleCaptions3" class="carousel slide carousel-photos" data-bs-ride="false">
                        <div class="carousel-indicators">
                            <button id="indicator" type="button" data-bs-target="#carouselExampleCaptions3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button id="indicator" type="button" data-bs-target="#carouselExampleCaptions3" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button id="indicator" type="button" data-bs-target="#carouselExampleCaptions3" data-bs-slide-to="2" aria-label="Slide 3"></button>
                          </div>
                        <div class="carousel-inner">
                        <div id="carousel-height" onclick="on('img/img.png')" class="carousel-item active">
                          <img loading="lazy" src="img/img.png" class="d-block w-100" alt="...">
                          <div class="carousel-caption sub-photos">
                            <h1>Título</h1>   
                        </div>
                        </div>
                        <div id="carousel-height" onclick="on('img/img.png')" class="carousel-item">
                          <img loading="lazy" src="img/img.png" class="d-block w-100" alt="...">
                          <div class="carousel-caption sub-photos">
                            <h1>Título</h1>
                        </div>
                        </div>
                        <div id="carousel-height" onclick="on('img/img.png')" class="carousel-item">
                          <img loading="lazy" src="img/img.png" class="d-block w-100" alt="...">
                          <div class="carousel-caption sub-photos">
                            <h1>Título</h1>
                        </div>
                        </div>
                      </div>
                      <button id="pass" class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions3" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button id="pass" class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions3" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>
                  <div data-animate-about-left class="col carousel-col">
                    <div id="carouselExampleCaptions4" class="carousel slide carousel-photos" data-bs-ride="false">
                        <div class="carousel-indicators">
                            <button id="indicator" type="button" data-bs-target="#carouselExampleCaptions4" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button id="indicator" type="button" data-bs-target="#carouselExampleCaptions4" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button id="indicator" type="button" data-bs-target="#carouselExampleCaptions4" data-bs-slide-to="2" aria-label="Slide 3"></button>
                          </div>
                        <div class="carousel-inner">
                        <div id="carousel-height" onclick="on('img/img.png')" class="carousel-item active">
                          <img loading="lazy" src="img/img.png" class="d-block w-100" alt="...">
                          <div class="carousel-caption sub-photos">
                            <h1>Título</h1>   
                        </div>
                        </div>
                        <div id="carousel-height" onclick="on('img/img.png')" class="carousel-item">
                          <img loading="lazy" src="img/img.png" class="d-block w-100" alt="...">
                          <div class="carousel-caption sub-photos">
                            <h1>Título</h1>
                        </div>
                        </div>
                        <div id="carousel-height" onclick="on('img/img.png')"  class="carousel-item">
                          <img loading="lazy" src="img/img.png" class="d-block w-100" alt="...">
                          <div class="carousel-caption sub-photos">
                            <h1>Título</h1>
                        </div>
                        </div>
                      </div>
                      <button id="pass" class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions4" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button id="pass" class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions4" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>
                  <div data-animate-about-left class="col carousel-col">
                    <div id="carouselExampleCaptions5" class="carousel slide carousel-photos" data-bs-ride="false">
                        <div class="carousel-indicators">
                            <button id="indicator" type="button" data-bs-target="#carouselExampleCaptions5" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button id="indicator" type="button" data-bs-target="#carouselExampleCaptions5" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button id="indicator" type="button" data-bs-target="#carouselExampleCaptions5" data-bs-slide-to="2" aria-label="Slide 3"></button>
                          </div>
                        <div class="carousel-inner">
                        <div id="carousel-height" onclick="on('img/img.png')"  class="carousel-item active">
                          <img loading="lazy" src="img/img.png" class="d-block w-100" alt="...">
                          <div class="carousel-caption sub-photos">
                            <h1>Título</h1>   
                        </div>
                        </div>
                        <div id="carousel-height" onclick="on('img/img.png')"  class="carousel-item">
                          <img loading="lazy" src="img/img.png" class="d-block w-100" alt="...">
                          <div class="carousel-caption sub-photos">
                            <h1>Título</h1>
                        </div>
                        </div>
                        <div id="carousel-height" onclick="on('img/img.png')"  class="carousel-item">
                          <img loading="lazy" src="img/img.png" class="d-block w-100" alt="...">
                          <div class="carousel-caption sub-photos">
                            <h1>Título</h1>
                        </div>
                        </div>
                      </div>
                      <button id="pass" class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions5" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button id="pass" class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions5" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>
                  <div data-animate-about-left class="col carousel-col">
                    <div id="carouselExampleCaptions6" class="carousel slide carousel-photos" data-bs-ride="false">
                        <div class="carousel-indicators">
                            <button id="indicator" type="button" data-bs-target="#carouselExampleCaptions6" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button id="indicator" type="button" data-bs-target="#carouselExampleCaptions6" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button id="indicator" type="button" data-bs-target="#carouselExampleCaptions6" data-bs-slide-to="2" aria-label="Slide 3"></button>
                          </div>
                        <div class="carousel-inner">
                        <div id="carousel-height" onclick="on('img/img.png')"  class="carousel-item active">
                          <img loading="lazy" src="img/img.png" class="d-block w-100" alt="...">
                          <div class="carousel-caption sub-photos">
                            <h1>Título</h1>   
                        </div>
                        </div>
                        <div id="carousel-height" onclick="on('img/img.png')"  class="carousel-item">
                          <img loading="lazy" src="img/img.png" class="d-block w-100" alt="...">
                          <div class="carousel-caption sub-photos">
                            <h1>Título</h1>
                        </div>
                        </div>
                        <div id="carousel-height" onclick="on('img/img.png')"  class="carousel-item">
                          <img loading="lazy" src="img/img.png" class="d-block w-100" alt="...">
                          <div class="carousel-caption sub-photos">
                            <h1>Título</h1>
                        </div>
                        </div>
                      </div>
                      <button id="pass" class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions6" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button id="pass" class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions6" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                  </div>
            </div>
            <?php require_once "footer.php" ?>
              <script src="js/bootstrap.min.js"></script>
              <script src="jquery-3.6.0.min.js"></script>
              <script src="script.js"></script>
              <script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>