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
    <title>CTIG - Eletroeletrônica</title>
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
        <div data-animate-show class="projetos"><h1>Eletroeletrônica</h1></div>
        <div class="row not-center">
          <div class="col-md-6">
            <div data-animate-show id="project-text" class="com-text">
              O curso de eletrotécnica foi um dos primeiros cursos criados no Cotec, junto a Máquinas e Motores, em 1971. Em 1991 o curso de Eletroeletrônica substituiu o curso de Eletrotécnica, permitindo uma formação mais adequada aos alunos, aumentando, assim, as perspectivas de trabalho dos seus egressos.
<br><br>
O técnico em Eletroeletrônica realiza projetos e participa da execução de instalações elétricas residencial e predial, trabalhos de manutenção elétrica e eletrônica de equipamentos, ajustes, calibrações e aperfeiçoamentos de circuitos dedicados a processos industriais, trabalhos de geração e distribuição de energia, montagens de comandos elétricos e acionamento de máquinas elétricas de corrente contínua e corrente alternada e circuitos gerais de aterramento e outras proteções elétricas.
<br><br>
O curso conta com grande realização de prática e vários laboratórios para estes fins.

            </div>
          </div>
          <div class="col-md-6 photo-pad">
            <div data-animate-about-right class="img-project"><img class="img-fluid" src="img/eletro.webp" alt=""></div>
          </div>
        </div>
      </div>
      <div data-animate-project-top class="project-side">
      <img loading="lazy" id="project-side-img" src="img/project-side-xl.png">
      <img loading="lazy" id="project-side-banner" src="img/side-faixa.png">
        <div data-animate-show class="project-side-text">
            O objetivo do curso técnico com habilitação em Eletroeletrônica é formar profissionais qualificados especificamente para o trabalho com a geração e utilização de energia elétrica, interagindo com outros profissionais das diversas áreas, como mecânica, informática e eletrônica.
          <br><br>
          O curso busca formar profissionais com visão ampla sobre outras especialidades devido à integração dos diversos equipamentos em indústrias e processos gerais ligados à utilização da energia elétrica.
          <br><br>
          Aliado à formação técnica dos estudantes, o curso trabalha a formação pessoal de cidadão integrado aos objetivos de convívio social de qualidade, não só profissional mas de inter-relacionamento entre pessoas.
        </div>
    </div>
      <div id="project-blue" class="blue">
      <div class="container">
        <div data-animate-show class="projetos"><h1>Título</h1></div>
        <div class="row">
          <div class="col-md-6">
            <div data-animate-about-left id="project-text-white">
             <div>Formado com diversas disciplinas específicas e disciplinas de apoio, o técnico deve conhecer desde o processo de geração de energia, seu uso responsável com relação ao meio ambiente, os métodos de utilização nas unidades industriais, através de motores, geradores, circuitos de eletrônica industrial, sistemas microprocessados e digitais e comandos diversos, assim como o desenvolvimento correto de atitudes e comportamentos nos trabalhos em equipe.
              <br><br>
              Toda essa formação técnica e de construção do cidadão está fortemente aliada a um processo pedagógico onde é valorizada a formação e o conhecimento na área técnica de conceitos básicos e princípios científicos que ajudem ao desenvolvimento de novos conhecimentos em face ao constante avanço da tecnologia.

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
                <div>Dessa forma, o curso de eletroeletrônica visa tornar o profissional apto a realização do trabalho tanto e indústrias, quanto no escopo residencial.
              <br><br>
              Saiba mais sobre a rotina de eletroeletrônica e do restante do cotec aqui no nosso site ou no nosso instagram.
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