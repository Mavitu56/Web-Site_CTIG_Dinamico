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
    <title>CTIG - Automação Industrial</title>
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
        <div data-animate-show class="projetos"><h1>Automação Industrial</h1></div>
        <div class="row not-center">
          <div class="col-md-6">
            <div data-animate-show id="project-text" class="com-text">
              O curso de automação surgiu primeiramente como informática industrial, em 1991, junto ao curso de eletroeletrônica. A aleteração de informática para automação só veio a ocorrer em 2018, em função de melhor relacionar o objetivo e matérias do curso ao nome, que antes não remetia ao que era aprendido. 
<br><br>
Além de que, a mudança da nomeclatura do curso acarreta em um maior alcance no mercado de trabalho com o título de técnico em automação industrial perante à técnico de informática.
<br><br>
O Técnico em Automação Industrial atua em vários setores industriais, como petroquímico, de bebidas e de papel e celulose. Pode ainda desenvolver produtos de eletrônica, instrumentação, controle, operação e supervisão de processos industriais. O objetivo é sempre otimizar os processos e reduzir os custos industriais.
<br><br>
            </div>
          </div>
          <div class="col-md-6 photo-pad">
            <div data-animate-about-right class="img-project"><img class="img-fluid" src="img/automacao.webp" alt=""></div>
          </div>
        </div>
      </div>
      <div data-animate-project-top class="project-side">
      <img loading="lazy" id="project-side-img" src="img/project-side-xl.png">
      <img loading="lazy" id="project-side-banner" src="img/side-faixa.png">
        <div data-animate-show class="project-side-text">        
Pode atuar de forma autônoma ou vinculado à empresas do setor, considerando encontrar aplicabilidade em um amplo mercado, considerando-se que hoje em dia, praticamente todas as áreas de atividade industrial encontram-se automatizadas.
          <br><br>
         O objetivo do curso é formar profissionais de nível médio para atuar em todas as circunstâncias nas quais se desenvolvam atividades laborais de planejamento e projetos, execução e manutenção de sistemas automatizados, manutenção e instalação de redes, dentro dos princípios de higiene e segurança do trabalho e preocupação com o meio ambiente.
          <br><br>
          O curso conta com um base teórica muito grande nos primeiros anos, além de estimular a lógica de programação, enquanto no terceiro possui maior realização de prática.
        </div>
    </div>
      <div id="project-blue" class="blue">
      <div class="container">
        <div data-animate-show class="projetos"><h1>Título</h1></div>
        <div class="row">
          <div class="col-md-6">
            <div data-animate-about-left id="project-text-white">
             <div>          Ao término do curso, além do conhecimento na área de automação industrial, o técnico formado pelo CTIG-UNESP será capaz de interagir com técnicos de outras áreas como eletrônica, informática, mecânica e eletroeletrônica, a fim de formar uma parceria eficiente para a execução de projetos que tenham como finalidade o bom desempenho do sistema de automação de uma empresa.
              <br><br>
              O grande diferencial do curso é fazer com que o aluno aprenda a aprender, pois isto permitirá que ao entrar no mercado de trabalho seja capaz de se atualizar com rapidez no que se refere a hardware, sistema operacional ou linguagem de programação, pois estes estão constantemente mudando, de maneira a tornar os sistemas informatizados mais seguros e eficientes.
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
                <div>Além das disciplinas onde o aluno aprende a elaborar projetos de sistemas automatizados, fazem parte da grade curricular do aluno de automação industrial disciplinas ligadas a área de automação industrial como: Sistema de Manufatura Integrada por Computador e Princípios Básicos de Automação de Processos Industriais.
              <br><br>
              Saiba mais sobre a rotina de automação e do restante do cotec aqui no nosso site ou no nosso instagram.
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