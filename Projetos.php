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
    <title>CTIG - Projetos</title>
    <link rel="icon" href="img/ctig_icon_site.webp">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
<?php require_once "header.php" ?>
      <div class="nav-pad container">
        <div data-animate-show class="projetos"><h1>Título</h1></div>
        <div class="row not-center">
          <div class="col-md-6">
            <div data-animate-show id="project-text" class="com-text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam feugiat quis nisl eu imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; 
<br><br>
Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam erat volutpat. Nam magna ex, venenatis eu fringilla eu, pulvinar et tellus.
<br><br>
Nullam ligula erat, bibendum sit amet lacinia quis, volutpat ut justo. am magna ex, venenatis eu fringilla eu, pulvinar et tellus. Nullam ligula erat, bibendum sit amet lacinia quis.
<br><br>
Nam suscipit, quam quis sollicitudin commodo, lorem orci vehicula lacus, eget auctor leo quam id ligula. Fusce vel lectus luctus libero tempor lacinia.;.
            </div>
          </div>
          <div class="col-md-6 photo-pad">
            <div data-animate-about-right class="img-project"></div>
          </div>
        </div>
      </div>
      <div data-animate-project-top class="project-side">
      <img loading="lazy" id="project-side-img" src="img/project-side-xl.png">
      <img loading="lazy" id="project-side-banner" src="img/side-faixa.png">
        <div data-animate-show class="project-side-text">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam feugiat quis nisl eu imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; 
          <br><br>
          Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam erat volutpat. Nam magna ex, venenatis eu fringilla eu, pulvinar et tellus.
          <br><br>
          Nullam ligula erat, bibendum sit amet lacinia quis, volutpat ut justo. am magna ex, venenatis eu fringilla eu, pulvinar et tellus. Nullam ligula erat, bibendum sit amet lacinia quis.
          <br><br>
          Nam suscipit, quam quis sollicitudin commodo, lorem orci vehicula lacus, eget auctor leo quam id ligula. Fusce vel lectus luctus libero tempor lacinia.;.  
        </div>
    </div>
      <div id="project-blue" class="blue">
      <div class="container">
        <div data-animate-show class="projetos"><h1>Título</h1></div>
        <div class="row">
          <div class="col-md-6">
            <div data-animate-about-left id="project-text-white">
             <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam feugiat quis nisl eu imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; 
              <br><br>
              Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam erat volutpat. Nam magna ex, venenatis eu fringilla eu, pulvinar et tellus.
              <br><br>
              Nullam ligula erat, bibendum sit amet lacinia quis, volutpat ut justo. am magna ex, venenatis eu fringilla eu, pulvinar et tellus. Nullam ligula erat, bibendum sit amet lacinia quis.
              <br><br>
              Nam suscipit, quam quis sollicitudin commodo, lorem orci vehicula lacus, eget auctor leo quam id ligula. Fusce vel lectus luctus libero tempor lacinia.;.
                          </div> 
            </div>
          </div>
          <div class="col-md-6 photo-pad">
            <div data-animate-about-right class="img-project-white lazyload"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="project-middle lazyload">
      <div class="container">
        <div class="row">
          <div class="col left-side">
            <div data-animate-feed id="project-text-blue" class="center">
                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam feugiat quis nisl eu imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; 
              <br><br>
              Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam erat volutpat. Nam magna ex, venenatis eu fringilla eu, pulvinar et tellus.
              <br><br>
              Nullam ligula erat, bibendum sit amet lacinia quis, volutpat ut justo. am magna ex, venenatis eu fringilla eu, pulvinar et tellus. Nullam ligula erat, bibendum sit amet lacinia quis.
              <br><br>
              Nam suscipit, quam quis sollicitudin commodo, lorem orci vehicula lacus, eget auctor leo quam id ligula. Fusce vel lectus luctus libero tempor lacinia.;.
                          </div> 
            </div>
          </div>
          </div>
        </div>
      </div>
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