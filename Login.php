<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
session_start();
$login = $_POST['login'];
$senha = $_POST['senha'];
require 'vendor/autoload.php';
$client = new MongoDB\Client('mongodb+srv://CTIG_ADMIN:<password>@ctig.cou2kb6.mongodb.net/test');
$db="login";
$col="Administrador";
$info= $client->$db->$col->findOne();
$data_info=$info->jsonSerialize();
$login_ver=$data_info->login;
$senha_ver=$data_info->senha;
if(($login_ver==$login) && ($senha_ver==$senha)){
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;
    header('location:Admin.php');
}
else{
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
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
        <div class="mb-3">
                <label for="" class="form-label"><h1>Usuário</h1></label>
                <input type="name" class="form-controled" name="login" placeholder="Ex. Usuário CTIG">
              </div>
              <div class="mb-3">
                <label for="" class="form-label"><h1>Senha</h1></label>
                <input type="password" class="form-controled" name="senha" placeholder="Ex. Senha1234">
              </div>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") { 
                    if(($login_ver==$login) && ($senha_ver==$senha)){

                    }
                    else{
                        echo "<div class="."erro-msg".">Usuário ou senha incorretos</div>"; 
                    }}?>
              <button class="btn btn-primary" type="submit">Entrar</button>
        </form>
    </div>
</div>

<?php require_once "footer.php" ?>
<script src="js/bootstrap.min.js"></script>
    <script src="jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>