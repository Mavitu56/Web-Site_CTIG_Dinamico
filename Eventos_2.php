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
    <title>CTIG - Eventos</title>
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
<div class="container centered">
        <div data-animate-show class="img-event-blue lazyload"></div>
        <div data-animate-event-left onclick="window.location='#';" class="text-event-blue">
            <div class="event-text-blue"><div id="center" class="event-title-blue">Título</div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam feugiat quis nisl eu imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam erat volutpat. Nam magna ex, venenatis eu fringilla eu, pulvinar et tellus. Nullam ligula erat, bibendum sit amet lacinia quis, volutpat ut justo. </div>
      </div>
      <div class="img-event-fake-blue"></div>
  </div>
  <div class="container centered">
        <div data-animate-show class="img-event-blue lazyload"></div>
        <div data-animate-event-left onclick="window.location='#';" class="text-event-blue">
            <div class="event-text-blue"><div id="center" class="event-title-blue">Título</div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam feugiat quis nisl eu imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam erat volutpat. Nam magna ex, venenatis eu fringilla eu, pulvinar et tellus. Nullam ligula erat, bibendum sit amet lacinia quis, volutpat ut justo. </div>
      </div>
      <div class="img-event-fake-blue"></div>
  </div>
      
    <div class="container centered">
        <div data-animate-show class="img-event-blue lazyload"></div>
        <div data-animate-event-left onclick="window.location='#';" class="text-event-blue">
            <div class="event-text-blue"><div id="center" class="event-title-blue">Título</div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam feugiat quis nisl eu imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam erat volutpat. Nam magna ex, venenatis eu fringilla eu, pulvinar et tellus. Nullam ligula erat, bibendum sit amet lacinia quis, volutpat ut justo. </div>
      </div>
      <div class="img-event-fake-blue"></div>
  </div>
  <div class="container centered">
    <div data-animate-show class="img-event-blue lazyload"></div>
    <div data-animate-event-left onclick="window.location='#';" class="text-event-blue">
        <div class="event-text-blue">
        <div id="center" class="event-title-blue">Título</div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam feugiat quis nisl eu imperdiet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam erat volutpat. Nam magna ex, venenatis eu fringilla eu, pulvinar et tellus. Nullam ligula erat, bibendum sit amet lacinia quis, volutpat ut justo. </div>
  </div>
  <div class="img-event-fake-blue"></div>
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