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
<div id="profileoff" onclick="profileoff()" class="profileoff" style="display:none;"></div>
<?php require_once "header.php" ?>
    <div class="container">
        <h1 class="nav-pad journal-text">1°Edição</h1>
        <img id="journal" src="img/COTECNEWS-1.webp" alt="">
        <img loading="lazy" id="journal" src="img/COTECNEWS-2.webp" alt="">
        <img loading="lazy" id="journal" src="img/COTECNEWS-3.webp" alt="">
        <img loading="lazy" id="journal" src="img/COTECNEWS-4.webp" alt="">
        <img loading="lazy" id="journal" src="img/COTECNEWS-5.webp" alt="">
        <img loading="lazy" id="journal" src="img/COTECNEWS-6.webp" alt="">
        <img loading="lazy" id="journal" src="img/COTECNEWS-7.webp" alt="">
        <img loading="lazy" id="journal" src="img/COTECNEWS-8.webp" alt="">
        <img loading="lazy" id="journal" src="img/COTECNEWS-9.webp" alt="">
        <img loading="lazy" id="journal" src="img/COTECNEWS-10.webp" alt="">
        <img loading="lazy" id="journal" src="img/COTECNEWS-11.webp" alt="">
        <img loading="lazy" id="journal" src="img/COTECNEWS-12.webp" alt="">
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