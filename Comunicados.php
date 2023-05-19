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
    <title>CTIG - Comunicados</title>
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
      <div class="nav-pad container" id="main-content">
        <div data-animate-show class="comunicados"><h1>Comunicados</h1></div>
        <div class="row not-center">
            <div class="col-6">
                <h2 data-animate-about-left>Reunião de Pais</h2>
                <div data-animate-about-left class="bar-col"></div>
                <div data-animate-about-left class="com-text">
                  A reunião de pais acontecerá na segunda-feira, 6 de junho de 2022, no Anfiteatro I (corredor superior do prédio do Colégio Técnico), conforme abaixo:
                  <br>
                  <br>
                  das 19 às 20 horas: 1º ano
                  <br>
                  das 20 às 21 horas: 2º ano
                  <br>
                  das 21 às 22 horas: 3º ano
                  <br>
                  IMPORTANTE: O uso de máscaras no campus é obrigatório em ambientes fechados e fortemente recomendado em ambientes abertos, especialmente se houver aglomerações.                </div>
            </div>
            <div class="col com-col">
              <div data-animate-about-right class="com-img"></div>
            </div>
        </div>
      </div>
      <div data-animate-show class="fone"></div>

      <div data-animate-com class="comunicado-blue">
      <div class="container">
        <div class="mark-com"></div>
        <h2 data-animate-show>Inquérito Diário de Sintomas (IDS)</h2>
        <div class="center">
        <div data-animate-feed class="white-bar"></div>
      </div>
      <div data-animate-about-left class="com-text-blue">Link para servidores e alunos: <br>
        https://servicedesk.unesp.br/solicitacao/runesp/coordenadoria-de-saude-e-seguranca-do-trabalhador/(guaratingueta)-inquerito-de-sintomas-covid
        <br><br>
        Link para visitantes e terceirizados: <br>
        https://servicedesk.fc.unesp.br/solicitacao/publico-externo/runesp/coordenadoria-de-saude-e-seguranca-do-trabalhador/(guaratingueta)-inquerito-de-sintomas-covid-(terceirizados)
        <br><br>
        O IDS serve para rastrear casos sintomáticos. O preenchimento do IDS é obrigatório para todos os que acessarem o campus e deve ser feito antes do início das atividades. A pessoa que apresentar dois ou três sintomas não deve vir para o campus e deve entrar em contato com a STS, serviço médico ou hospital de campanha.
      </div>
      </div>
    </div>
    <div data-animate-show class="fone-invert"></div>
    <div class="container" id="text-center">
      <h2 data-animate-show>Reunião de Pais</h2>
      <div class="center">
        <div data-animate-feed class="bar"></div>
      </div>
      <div data-animate-about-left class="com-text2">
        A reunião de pais acontecerá na segunda-feira, 6 de junho de 2022, no Anfiteatro I (corredor superior do prédio do Colégio Técnico), conforme abaixo:
                  <br>
                  <br>
                  das 19 às 20 horas: 1º ano
                  <br>
                  das 20 às 21 horas: 2º ano
                  <br>
                  das 21 às 22 horas: 3º ano
                  <br>
                  IMPORTANTE: O uso de máscaras no campus é obrigatório em ambientes fechados e fortemente recomendado em ambientes abertos, especialmente se houver aglomerações.
                </div>
      <hr>
      <div class="center">
      <div data-animate-feed class="com-img2 lazyload"></div>
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