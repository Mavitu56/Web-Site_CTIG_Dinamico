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
    <title>CTIG - Eletrônica</title>
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
        <div data-animate-show class="projetos"><h1>Eletrônica</h1></div>
        <div class="row">
          <div class="col-md-6">
            <div data-animate-show id="project-text" class="com-text">
             O curso de Eletrônica foi o terceiro criado no colégio, descontando cursos reformulados, como Máquinas e motores para mecânica, em 1974, para atender as exigências do mercado.
            <br><br>
            O técnico de eletrônica é um profissional que participa do desenvolvimento de projetos, executa instalação e manutenção de equipamentos e sistemas eletrônicos.  Realiza medições e testes com equipamentos eletrônicos. Analisa procedimentos de controle de qualidade e gestão da produção de equipamentos eletrônicos.
            <br><br>
            O Curso Técnico em Eletrônica tem como objetivo preparar profissionais com conhecimentos de eletrônica, com perfil empreendedor, pró-ativo e multifuncional, capazes de desenvolverem atividades de planejamento, instalação, operação, manutenção, controle da qualidade e produtividade em sistemas eletroeletrônicos, sistemas de comunicação e sistemas automatizados.
            </div>
          </div>
          <div class="col-md-6 photo-pad">
            <div data-animate-about-right class="img-project"><img class="img-fluid" src="img/eletronica.webp" alt=""></div>
          </div>
        </div>
      </div>
      <div data-animate-project-top class="project-side">
      <img loading="lazy" id="project-side-img" src="img/project-side-xl.png">
      <img loading="lazy" id="project-side-banner" src="img/side-faixa.png">
        <div data-animate-show class="project-side-text">
            No curso de eletrônica, é dado ênfase em duas vertentes de muita solicitação no mercado tecnológico, que são: telecomunicação e automação industrial. O nosso aluno no contexto profissional destaca-se por suas habilidades e competências, podendo prestar serviços especializados na instalação, manutenção e operação de equipamentos eletroeletrônicos.
            <br><br>
            O conteúdo programático é descrito visando o objetivo final a ser atingido, que é um profissional com habilidades e competência, sem esquecer que devemos formar um profissional cidadão.
          <br><br>
          O curso conta com uma grande oportunidade de realização da prática durante todos os 3 anos cursados, através dos laboratórios, criando diversos projetos eletrônicos.
        </div>
    </div>
      <div id="project-blue" class="blue">
      <div class="container">
        <div data-animate-show class="projetos"><h1>Título</h1></div>
        <div class="row">
          <div class="col-md-6">
            <div data-animate-about-left id="project-text-white">
             <div>O curso conta com diversas matérias específicas na área de eletrônica que colabora para a formação e o aprendizado, como Telecomuniações, Eletrônica industrial, sistemas digitais, PDE, entre outros.
                <br><br>
                      Os laboratórios de eletrônica e microprocessadores tem estrutura e materiais completos e modernos para a prática do curso de eletrônica, como elementos de cicuito (transistores, resistores, microcontroladores).
                <br><br>
                  O técnico deste curso estará apto a executar tarefas de caráter técnico relativa a planejamento, projeto, manutenção, avaliação, treinamento e controle; operação de equipamentos eletrônicos automatizados e de telecomunicações;
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
              Ele também será capaz de especificar características de projeto e identificar, acaracterizar e executar manutenção de equipamentos eletrônicos da área.
              <br><br>
              Selecionar e especificar componentes, ler diagramas, elaborar planilhas de manutenção de máquinas e equipamentos, planejar e executar a inspeção e a manutenção autônoma e preventiva rotineira em equipamentos, linhas produtivas, instrumentos e acessórios.
              <br><br>
              Saiba mais sobre a rotina de eletrônica e do restante do cotec aqui no nosso site ou no nosso instagram.
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