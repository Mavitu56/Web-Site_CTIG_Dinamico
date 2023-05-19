<?php
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  header('location:index.php');
  }

$logado = $_SESSION['login'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$pagina=$_POST["page"];

if ($pagina == "atividade"){
  header("Location: atividade_layout.php");
  die();
}
elseif ($pagina == "projeto"){
  header("Location: projeto_layout.php");
  die();
}
elseif ($pagina == "comunicados"){
  header("Location: .$newURL.php");
  die();
}
elseif ($pagina == "galeria"){
  header("Location: .$newURL.php");
  die();
}
elseif ($pagina == "album"){
  header("Location: .$newURL.php");
  die();
}
elseif ($pagina == "jornal"){
  header("Location: jornal_layout.php");
  die();
}elseif ($pagina == "destaques"){
  header("Location: destaques_layout.php");
}
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
            <select name="page" id="page-select" class="form-select" aria-label="Página">
                <option selected>Escolha o tipo da página a ser criada:</option>
                <option id="atividade" value="atividade">Atividade</option>
                <option id="projeto" value="projeto">Projeto</option>
                <option id="comunicados" value="comunicados">Comunicados</option>
                <option id="galeria" value="galeria">Galeria</option>
                <option id="álbum" value="album">Álbum</option>
                <option id="jornal" value="jornal">Jornal</option>
                <option id="destaques" value="destaques">Destaques</option>
              </select>
              <button class="btn btn-primary" type="submit">Selecionar</button>
          </form>
        </div>
      </div>
      <?php require_once "footer.php" ?>
</body>
</html>