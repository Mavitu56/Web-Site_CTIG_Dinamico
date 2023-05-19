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
    <title>CTIG - Álbum</title>
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
            <path fill-rule="evenodd" clip-rule="evenodd" d="M76.3013 39.7155L87.5 37.2294C93.4895 29.3091 50.4539 10.3857 0.5 23.5065C2.52724 24.5946 4.44493 25.5792 6.26952 26.516C16.9327 31.9906 24.4159 35.8326 32 49.1624L32.3306 49.0919C32.3865 49.2802 32.443 49.4694 32.5 49.6597C19.4006 54.2387 12.2296 58.9889 0 74.5201C30.5212 69.0356 44.815 70.5338 69.5 74.5201C60.5854 62.209 53.4267 52.776 47.7533 45.8031L76.3013 39.7155Z" fill="#68D8D6"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M603.5 57.2849C629.339 52.965 643.439 51.2365 663.5 57.2849C657.943 58.9119 653.6 61.8999 647.783 66.2978C642.952 70.2856 635.136 80.6692 635 83.6368C635 83.6369 635 83.6369 635 83.6369C635 83.6369 635 83.6369 635 83.6369C649.378 90.3823 656.061 95.3676 664 108C618.887 100.301 611.124 101.763 582.266 107.198L582.265 107.198C580.893 107.457 579.473 107.724 578 108C578.671 107.703 579.33 107.408 579.979 107.114C579.901 107.137 579.826 107.16 579.752 107.182C579.173 107.453 578.589 107.726 578 108C578.538 106.671 579.061 105.376 579.572 104.112C587.468 84.559 592.35 72.4691 603.5 57.2849Z" fill="#68D8D6"/>
            <path d="M578 73.6927L590.5 78.6648L578 108V73.6927Z" fill="#3DCCC7"/>
            <path d="M297.705 24.635C297.869 24.2383 298.114 23.9467 298.44 23.76C298.79 23.5733 299.14 23.48 299.49 23.48C299.724 23.48 299.91 23.515 300.05 23.585C300.61 23.865 300.89 24.2967 300.89 24.88C300.89 25.3233 300.715 25.7667 300.365 26.21L298.65 28.415H296.095L297.705 24.635ZM300.155 47.595H294.52L293.155 54H288.815L294.555 29.5H299.98L306.175 54H301.59L300.155 47.595ZM295.43 43.5H299.245L297.25 35.94L295.43 43.5ZM309.968 29.5H313.818V54H309.968V29.5ZM332.948 48.505C332.948 49.695 332.703 50.6983 332.213 51.515C331.723 52.3317 331.058 52.95 330.218 53.37C329.471 53.7433 328.713 54.0117 327.943 54.175C327.196 54.3383 326.391 54.42 325.528 54.42C324.664 54.42 323.474 54.3383 321.958 54.175L320.033 54V29.5H323.883V36.5C324.909 36.2667 325.843 36.15 326.683 36.15C327.873 36.15 328.969 36.3833 329.973 36.85C331.956 37.76 332.948 39.44 332.948 41.89V48.505ZM329.133 42.975C329.133 41.925 328.841 41.1783 328.258 40.735C327.674 40.2683 326.963 40.035 326.123 40.035C325.656 40.035 325.213 40.0933 324.793 40.21C324.373 40.3267 324.069 40.4667 323.883 40.63V50.64C324.279 50.7567 324.758 50.815 325.318 50.815C326.298 50.815 327.173 50.64 327.943 50.29C328.736 49.9167 329.133 49.345 329.133 48.575V42.975ZM344.088 53.79C344.018 53.8133 343.75 53.9183 343.283 54.105C342.816 54.2917 342.21 54.385 341.463 54.385C337.076 54.385 334.883 52.25 334.883 47.98V36.465H338.733V47.42C338.733 48.4933 338.92 49.2867 339.293 49.8C339.69 50.3133 340.413 50.57 341.463 50.57C342.513 50.57 343.213 50.29 343.563 49.73C343.913 49.1467 344.088 48.33 344.088 47.28V36.465H347.938V54H344.333L344.088 53.79ZM370.697 43.36C370.697 42.1 370.522 41.19 370.172 40.63C369.845 40.07 369.309 39.79 368.562 39.79C368.025 39.79 367.302 39.9533 366.392 40.28L365.797 40.525C365.844 40.665 365.879 40.8283 365.902 41.015C365.925 41.2017 365.937 41.3767 365.937 41.54V54H362.087V43.465C362.087 42.2983 361.819 41.4 361.282 40.77C360.745 40.14 360.022 39.825 359.112 39.825C358.295 39.825 357.444 40.0817 356.557 40.595V54H352.707V36.465H356.102L356.557 36.71C357.327 36.36 358.202 36.185 359.182 36.185C359.975 36.185 360.745 36.325 361.492 36.605C362.239 36.8617 362.892 37.2817 363.452 37.865C363.779 37.6783 364.269 37.4217 364.922 37.095C366.299 36.465 367.629 36.15 368.912 36.15C370.569 36.15 371.922 36.6633 372.972 37.69C374.022 38.6933 374.547 40.0933 374.547 41.89V54H370.697V43.36Z" fill="black"/>
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
                        <div class="overlay-album"><p class="overlay-text">3°Ano Automação 2019</p></div>
                        <img loading="lazy" src="img/img.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption sub-photos">
                          <h1>Coleção</h1>   
                      </div>
                      </div>
                      <div id="carousel-height" onclick="on('img/img.png')" class="carousel-item">
                        <img loading="lazy" src="img/img.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption sub-photos">
                          <h1>Coleção</h1>   
                      </div>
                      </div>
                      <div id="carousel-height" onclick="on('img/img.png')" class="carousel-item">
                        <img loading="lazy" src="img/img.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption sub-photos">
                          <h1>Coleção</h1>   
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
                          <div class="overlay-album"><p class="overlay-text">3°Ano Automação 2019</p></div>
                          <img loading="lazy" src="img/img.png" class="d-block w-100" alt="...">
                          <div class="carousel-caption sub-photos">
                            <h1>Coleção</h1>   
                        </div>
                        </div>
                        <div id="carousel-height" onclick="on('img/img.png')" class="carousel-item">
                          <img loading="lazy" src="img/img.png" class="d-block w-100" alt="...">
                          <div class="carousel-caption sub-photos">
                            <h1>Coleção</h1>   
                        </div>
                        </div>
                        <div id="carousel-height" onclick="on('img/img.png')" class="carousel-item">
                          <img loading="lazy" src="img/img.png" class="d-block w-100" alt="...">
                          <div class="carousel-caption sub-photos">
                            <h1>Coleção</h1>   
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
                          <div class="overlay-album"><p class="overlay-text">3°Ano Automação 2019</p></div>
                          <img loading="lazy" src="img/img.png" class="d-block w-100" alt="...">
                          <div class="carousel-caption sub-photos">
                            <h1>Coleção</h1>   
                        </div>
                        </div>
                        <div id="carousel-height" onclick="on('img/img.png')" class="carousel-item">
                          <img loading="lazy" src="img/img.png" class="d-block w-100" alt="...">
                          <div class="carousel-caption sub-photos">
                            <h1>Coleção</h1>
                        </div>
                        </div>
                        <div id="carousel-height" onclick="on('img/img.png')" class="carousel-item">
                          <img loading="lazy" src="img/img.png" class="d-block w-100" alt="...">
                          <div class="carousel-caption sub-photos">
                            <h1>Coleção</h1>
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
                          <div class="overlay-album"><p class="overlay-text">3°Ano Automação 2019</p></div>
                          <img loading="lazy" src="img/img.png" class="d-block w-100" alt="...">
                          <div class="carousel-caption sub-photos">
                            <h1>Coleção</h1>   
                        </div>
                        </div>
                        <div id="carousel-height" onclick="on('img/img.png')" class="carousel-item">
                          <img loading="lazy" src="img/img.png" class="d-block w-100" alt="...">
                          <div class="carousel-caption sub-photos">
                            <h1>Coleção</h1>
                        </div>
                        </div>
                        <div id="carousel-height" onclick="on('img/img.png')" class="carousel-item">
                          <img loading="lazy" src="img/img.png" class="d-block w-100" alt="...">
                          <div class="carousel-caption sub-photos">
                            <h1>Coleção</h1>
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
                        <div id="carousel-height" onclick="on('img/img.png')" class="carousel-item active">
                          <div class="overlay-album"><p class="overlay-text">3°Ano Automação 2019</p></div>
                          <img loading="lazy" src="img/img.png" class="d-block w-100" alt="...">
                          <div class="carousel-caption sub-photos">
                            <h1>Coleção</h1>   
                        </div>
                        </div>
                        <div id="carousel-height" onclick="on('img/img.png')" class="carousel-item">
                          <img loading="lazy" src="img/img.png" class="d-block w-100" alt="...">
                          <div class="carousel-caption sub-photos">
                            <h1>Coleção</h1>
                        </div>
                        </div>
                        <div id="carousel-height" onclick="on('img/img.png')" class="carousel-item">
                          <img loading="lazy" src="img/img.png" class="d-block w-100" alt="...">
                          <div class="carousel-caption sub-photos">
                            <h1>Coleção</h1>
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
                        <div id="carousel-height" onclick="on('img/img.png')" class="carousel-item active">
                          <div class="overlay-album"><p class="overlay-text">3°Ano Automação 2019</p></div>
                          <img loading="lazy" src="img/img.png" class="d-block w-100" alt="...">
                          <div class="carousel-caption sub-photos">
                            <h1>Coleção</h1>   
                        </div>
                        </div>
                        <div id="carousel-height" onclick="on('img/img.png')" class="carousel-item">
                          <img loading="lazy" src="img/img.png" class="d-block w-100" alt="...">
                          <div class="carousel-caption sub-photos">
                            <h1>Coleção</h1>
                        </div>
                        </div>
                        <div id="carousel-height" onclick="on('img/img.png')" class="carousel-item">
                          <img loading="lazy" src="img/img.png" class="d-block w-100" alt="...">
                          <div class="carousel-caption sub-photos">
                            <h1>Coleção</h1>
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