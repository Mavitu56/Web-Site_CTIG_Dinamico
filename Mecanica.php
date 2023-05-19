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
    <title>CTIG - Mecânica</title>
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
      <div class="nav-pad container">
        <div data-animate-show class="projetos"><h1>Mecânica</h1></div>
        <div class="row">
          <div class="col-md-6">
            <div data-animate-show id="project-text" class="com-text">
              O curso de Mecânica é um dos mais antigos do Cotec, sendo ele o substituto do antigo curso fundado junto ao início do colégio, Máquinas e Motores no ano 1972.
<br><br>
O Profissional de mecânica possui uma visão ampla da globalização na indústria,isto é, é capacitado e habilitado a exercer funções e atividades inerentes a sua área bem como áreas afins, tornando–se um profissional versátil e moderno, capaz de pensar e resolver situações problemas numa rotina programada de uma indústria, um profissional multifuncional.
<br><br>
O principal objetivo do Curso Técnico em Mecânica é formar um profissional que desenvolva trabalhos na área da mecânica industrial para a produção de peças, máquinas e equipamentos, e que esteja apto a quebrar paradigmas e motivado a enfrentar desafios interagindo com as demais áreas da indústria e do conhecimento tecnológico.
            </div>
          </div>
          <div class="col-md-6 photo-pad">
            <div data-animate-about-right class="img-project"><img class="img-fluid" loading="lazy" src="img/mecanica.webp"></div>
          </div>
        </div>
      </div>
      <div data-animate-project-top class="project-side">
      <img loading="lazy" id="project-side-img" src="img/project-side-xl.png">
      <img loading="lazy" id="project-side-banner" src="img/side-faixa.png">
        <div data-animate-show class="project-side-text">
            Curso moderno, atualizado e voltado para as novas tendências de mercado , como a Mecatrônica, a Automação Industrial, Sistema de Manufatura e a área de Projetos.
            <br><br>
            O curso de Mecânica  foi criado em 1971, junto com a fundação do colégio, sendo portanto um dos primeiros cursos técnicos existentes na instituição. Tem em seu diferencial a remodelação  constante para se adequar àsnovas Tecnologias utilizadas pelas empresas existentes na região.
            <br><br>
            A evolução do curso não se mostra apenas nas mudanças de nomes, visto que também apresenta melhorias na sua base curricular, além da disponibilidade e utilização de laboratórios, como a oficina.
        </div>
    </div>
      <div id="project-blue" class="blue">
      <div class="container">
        <div data-animate-show class="projetos"><h1>Título</h1></div>
        <div class="row">
          <div class="col-md-6">
            <div data-animate-about-left id="project-text-white">
             <div>Atualmente o curso conta com diversas matérias específicas, que variam dependendo do ano cursado, como OM, Comando Numérico Computadorizado, Metrologia, Desenho técnico, Tecnologia Mecânica, entre outros. 
              <br><br>
              Além de contar com os Laboratórios das matérias, também é utilizado a oficina, que ocupa a maior parte da área disponiblizadas para os laboratórios do Cotec, a qual possui diversas máquinas e equipamentos para a execução da prática do curso, sendo esta bem próximas das rotinas de indústrias.  
              <br><br>
                Dessa forma, é possível uma maior familiarização com o ambiente industrial e assim obter uma maior preparação para o mercado de trabalho.
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
                <div>Se você busca um curso com uma base curricular completa, uma estrutura antiga e bem planejada, base sólida para o mercado de trabalho e muita prática, este é o curso certo para você.
              <br><br>
                    Saiba mais sobre a rotina de mecânica e do restante do cotec aqui no nosso site ou no nosso instagram.

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