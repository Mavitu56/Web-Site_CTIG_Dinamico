<?php
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  header('location:index.php');
  }

$logado = $_SESSION['login'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require 'vendor/autoload.php';
    $client = new MongoDB\Client('mongodb+srv://CTIG_ADMIN:<password>@ctig.cou2kb6.mongodb.net/test');
    $colecao= $_POST['collection'];
    $sem=str_replace(' ','',$colecao);
    $titulo = $_POST['title'];
    $conteudo1 = $_POST['text1'];
    $conteudo2 = $_POST['text2'];
    $conteudo3 = $_POST['text3'];
    $conteudo4 = $_POST['text4'];
    $db = "Projetos";
    $arquivos=$_FILES['arquivos'];
    for($cont=0; $cont < count($arquivos['name']); $cont++){
     
      $destino="img/".$arquivos['name'][$cont];
      move_uploaded_file($arquivos['tmp_name'][$cont], $destino);
    }

    $assunto=[
        "titulo" => $titulo,
        "texto0" => $conteudo1,
        "texto1" => $conteudo2,
        "texto2" => $conteudo3,
        "texto3" => $conteudo4,
        "image0"=> $arquivos['name'][0],
        "image1"=> $arquivos['name'][1]
    ];
    $client->$db->$sem->insertOne($assunto);
    $page= $client->$db->$sem->findOne();
    $data=$page->jsonSerialize();
    $página= '<?php
    session_start();
    if((!isset ($_SESSION["login"]) == true) and (!isset ($_SESSION["senha"]) == true))
    {
      $logado = "Visitante";
      }
      else{
        $logado =$_SESSION["login"];
      }
      require "vendor/autoload.php";
      $client = new MongoDB\Client("mongodb+srv://CTIG_ADMIN:<password>@ctig.cou2kb6.mongodb.net/test");
    $site= basename( __FILE__ );
    require "vendor/autoload.php";
    $client = new MongoDB\Client("mongodb+srv://CTIG_ADMIN:<password>@ctig.cou2kb6.mongodb.net/test");
    $colecao = str_replace(".php","",$site);
    $sem = str_replace(" ","",$colecao);
    $db = "Projetos";
    $page= $client->$db->$sem->findOne();
    $data=$page->jsonSerialize();
    
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
            <div data-animate-show class="projetos"><h1><?php echo $data->titulo; ?></h1></div>
            <div class="row not-center">
              <div class="col-md-6">
                <div data-animate-show id="project-text" class="com-text"><?php echo $data->texto0; ?></div>
              </div>
              <div class="col-md-6 photo-pad">
                <div data-animate-about-right class="img-project"><img class="img-fluid" src="img/<?php echo $data->image0; ?>" alt=""></div>
              </div>
            </div>
          </div>
          <div data-animate-project-top class="project-side">
          <img loading="lazy" id="project-side-img" src="img/project-side-xl.png">
          <img loading="lazy" id="project-side-banner" src="img/side-faixa.png">
            <div data-animate-show class="project-side-text"><?php echo $data->texto1; ?></div>
        </div>
          <div id="project-blue" class="blue">
          <div class="container">
            <div data-animate-show class="projetos"><h1>Título</h1></div>
            <div class="row">
              <div class="col-md-6">
                <div data-animate-about-left id="project-text-white">
                 <div><?php echo $data->texto2; ?></div> 
                </div>
              </div>
              <div class="col-md-6 photo-pad">
                <div data-animate-about-right class="img-project-white lazyload"><img class="img-fluid" src="img/<?php echo $data->image1; ?>" alt=""></div>
              </div>
            </div>
          </div>
        </div>
        <div class="project-middle lazyload">
          <div class="container">
            <div class="row">
              <div class="col left-side">
                <div data-animate-feed id="project-text-blue" class="center">
                    <div><?php echo $data->texto3; ?></div> 
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
    </html>';
    $evento="<?php 
    $$sem='$sem'; 
    $".'db'." = 'Projetos';
    require 'vendor/autoload.php';
    $".'client'." = new MongoDB\Client('mongodb+srv://CTIG_ADMIN:<password>@ctig.cou2kb6.mongodb.net/test');
    $".$sem."_page= $".'client'."->$".'db'."->$$sem->".'findOne()'.";
    $".$sem."_data=$".$sem."_page->jsonSerialize();
    echo '<div id='.'centered'.' class='.'container'.'>
    <div data-animate-show class='.'img-event-blue lazyload'.'><img class='.'img-event'.' src='.'img/'.$".$sem."_data->image0.'></div>
    <div data-animate-event-left class='.'text-event-blue'.'><a href='.'".$sem.".php'.'>
        <div class='.'event-text-blue'.'><div id='.'center'.' class='.'event-title-blue'.'>'.$".$sem."_data->titulo.'</div>'.$".$sem."_data->texto0.'</div>
  </a></div>
  <div class='.'img-event-fake-blue'.'></div>
</div>';?>";
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CTIG - Admin</title>
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
      <div class="form-admin">
        <form method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <div class="mb-3">
                <label for="" class="form-label"><h1>Nome da página</h1></label>
                <input type="name" class="form-controled" name="collection" placeholder="Ex. Interclasse">
              </div>
              <div class="mb-3">
                <label for="" class="form-label"><h1>Título</h1></label>
                <input type="name" class="form-controled" name="title" placeholder="Ex. Interclasse CTIG">
              </div>
              <div class="input-group mb-3">
                <label class="form-label"><h1>Primeiro parágrafo de texto</h1></label>
                <textarea name="text1" class="form-controled" aria-label="With textarea"></textarea>
              </div>
              <div class="input-group mb-3">
                <label class="form-label"><h1>Segundo parágrafo de texto</h1></label>
                <textarea name="text2" class="form-controled" aria-label="With textarea"></textarea>
              </div>
              <div class="input-group mb-3">
                <label class="form-label"><h1>Terceiro parágrafo de texto</h1></label>
                <textarea name="text3" class="form-controled" aria-label="With textarea"></textarea>
              </div>
              <div class="input-group mb-3">
                <label class="form-label"><h1>Quarto parágrafo de texto</h1></label>
                <textarea name="text4" class="form-controled" aria-label="With textarea"></textarea>
              </div>
              <div class="mb-3">
                <label class="form-label" for=""><h1>Escolha 2 imagens:</h1></label>
                <input type="file" name="arquivos[]" class="btn black"  accept="image/*"  multiple /> 
              </div>
              <button class="btn btn-primary" type="submit">Criar página</button>
              <?php
              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if(file_put_contents(''. $sem .'.php', $página )==false){
                  echo "Erro ao criar ao página";
                }
                elseif(file_put_contents("evento1.php",$evento, FILE_APPEND)==false){
                  echo "Erro ao criar ao página";
                }else{
                  echo "Página criada com sucesso!";
                }           
              }
              ?>
      </form>
      </div>
      </div>
      <?php require_once "footer.php" ?>
      <script src="index.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="jquery-3.6.0.min.js"></script>
      <script src="script.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>