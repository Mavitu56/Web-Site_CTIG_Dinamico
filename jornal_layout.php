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
    $db = "Jornal";
    $arquivos=$_FILES['arquivos'];
    $assunto=[
      "titulo" => $colecao,
      "info"=> ""
  ];
  $client->$db->$sem->insertOne($assunto);
    for($cont=0; $cont < count($arquivos['name']); $cont++){
      $destino="img/".$arquivos['name'][$cont];
      move_uploaded_file($arquivos['tmp_name'][$cont], $destino);
      $client->$db->$sem->updateOne(['titulo' => $colecao],['$set' => ["image".$cont.""=> $arquivos['name'][$cont]]]);
    }
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
    $db = "Jornal";
    $page= $client->$db->$sem->findOne();
    $data=$page->jsonSerialize();
    
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CTIG - Jornal</title>
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
            <h1 class="nav-pad journal-text"><?php echo "$data->titulo"; ?></h1>
            <?php require "jornal_pages_'.$sem.'.php" ?>
        </div>
        <?php require_once "footer.php" ?>
            <script src="js/bootstrap.min.js"></script>
            <script src="script.js"></script>
            <script src="js/bootstrap.bundle.min.js"></script>
    </body>
    </html>';
    $header="<?php 
      $$sem='$sem'; 
      $".'db'." = 'Jornal';
      require 'vendor/autoload.php';
      $".'client'." = new MongoDB\Client('mongodb+srv://CTIG_ADMIN:<password>@ctig.cou2kb6.mongodb.net/test');
      $".$sem."_page= $".'client'."->$".'db'."->$$sem->".'findOne()'.";
      $".$sem."_data=$".$sem."_page->jsonSerialize();
      echo '<li><a class='.'dropdown-item'.' href='.'".$sem.".php'.'>'.$".$sem."_data->titulo.'</a></li>';
      ?>";
      $pages_base="<?php 
      $$sem='$sem'; 
      $".'db'." = 'Jornal';
      require 'vendor/autoload.php';
      $".'client'." = new MongoDB\Client('mongodb+srv://CTIG_ADMIN:<password>@ctig.cou2kb6.mongodb.net/test');
      $".$sem."_page= $".'client'."->$".'db'."->$$sem->".'findOne()'.";
      $".$sem."_data=$".$sem."_page->jsonSerialize();";
      $pages_final="
      ?>";
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
                <label for="" class="form-label"><h1>Edição do Jornal</h1></label>
                <input type="name" class="form-controled" name="collection" placeholder="Ex. Jornal 2°Edição">
              </div>
              <div class="mb-3">
                <label class="form-label" for=""><h1>Imagens das página do jornal:</h1></label>
                <input type="file" name="arquivos[]" class="btn black"  accept="image/*"  multiple /> 
              </div>
              <button class="btn btn-primary" type="submit">Criar Edição</button>
              <?php
              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if(file_put_contents(''. $sem .'.php', $página )==false){
                  echo "Erro ao criar ao página";
                }
                elseif(file_put_contents("jornal_link.php",$header, FILE_APPEND)==false){
                  echo "Erro ao criar ao página";
                }elseif(file_put_contents('jornal_pages_'.$sem.'.php', $pages_base, FILE_APPEND)==false){
                    echo "Erro ao criar ao página";
                }else{
                    $img="data->image";
                    for($cont=0;$cont< count($arquivos['name']);$cont++){
                        $pages="
                        echo '<img loading="."'.'lazy'.'"." id="."'.'journal'.'"." src="."img/'.$$sem"."_data->"."image"."$cont".".'>';";
                        file_put_contents('jornal_pages_'.$sem.'.php', $pages, FILE_APPEND);
                    }
                    if(file_put_contents('jornal_pages_'.$sem.'.php', $pages_final, FILE_APPEND)==false){
                        echo "Erro ao criar ao página";
                    }else{
                        echo "Página criada com sucesso";
                    }
                }

                }           
              ?>
      </form>
      </div>
      </div>
      <?php require_once "footer.php" ?>
      <script src="js/bootstrap.min.js"></script>
      <script src="script.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>