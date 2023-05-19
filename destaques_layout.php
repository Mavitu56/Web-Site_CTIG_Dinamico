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
    $previa= $_POST['previa'];
    $sem=str_replace(' ','',$colecao);
    $db = "Notícias";
    $client->$db->$sem->updateOne(
        [ 'info' => '' ],
        [ '$set' => [ 'info' => $previa ]]
    );
    $page= $client->$db->$sem->findOne();
    $data=$page->jsonSerialize();
    $destaque="<?php 
    $$sem='$sem'; 
    $".'db'." = 'Notícias';
    require 'vendor/autoload.php';
    $".'client'." = new MongoDB\Client('mongodb+srv://CTIG_ADMIN:<password>@ctig.cou2kb6.mongodb.net/test');
    $".$sem."_page= $".'client'."->$".'db'."->$$sem->".'findOne()'.";
    $".$sem."_data=$".$sem."_page->jsonSerialize();
    echo '<a href='.'".$sem.".php'.'><img loading='.'lazy'.' src='.'"."img/'.$".$sem."_data->image0".".''.' class='.'".'"d-block img-fluid w-100"'."'.'></a>
    <div class='.'".'"carousel-caption sub"'."'.'>
      <h5>'.$".$sem."_data->titulo.'</h5>
      <p>'.$".$sem."_data->info.'</p>
    </div>';
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
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <div class="mb-3">
                <label for="" class="form-label"><h1>Nome da página que irá adicionar</h1></label>
                <input type="name" class="form-controled" name="collection" placeholder="Ex. Interclasse">
              </div>
              <div class="input-group mb-3">
                <label class="form-label"><h1>Prévia da página</h1></label>
                <textarea name="previa" class="form-controled" aria-label="With textarea"></textarea>
              </div>
              <select name="seletor" id="page-select" class="form-select" aria-label="Página">
                <option selected>Escolha o Slide deste destaque:</option>
                <option id="1" value="1">Primeiro</option>
                <option id="2" value="2">Segundo</option>
                <option id="3" value="3">Terceiro</option>
              </select>
              <button class="btn btn-primary" type="submit">Criar página</button>
              <?php
              if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $seletor=$_POST["seletor"];
    if($seletor=="1"){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if(file_put_contents("destaques_1.php",$destaque)==false){
              echo "Erro ao criar ao adicionar, verifique se o nome da página está correto ou se ela realmente existe";
            }else{
              echo "Página adicionada com sucesso!";
            }           
          }
    }elseif($seletor==2){
        if(file_put_contents("destaques_2.php",$destaque)==false){
            echo "Erro ao criar ao adicionar, verifique se o nome da página está correto ou se ela realmente existe";
          }else{
            echo "Página adicionada com sucesso!";
          }           
    }elseif($seletor==3){
        if(file_put_contents("destaques_3.php",$destaque)==false){
            echo "Erro ao criar ao adicionar, verifique se o nome da página está correto ou se ela realmente existe";
          }else{
            echo "Página adicionada com sucesso!";
          }   
    }else{
        echo "Erro ao criar ao adicionar, verifique se o nome da página está correto ou se ela realmente existe";
    }
}
              ?>
      </form>
      </div>
      </div>
      <?php require_once "footer.php" ?>
      <script src="index.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="script.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>