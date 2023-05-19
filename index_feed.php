<?php
require 'vendor/autoload.php';
$client = new MongoDB\Client('mongodb+srv://CTIG_ADMIN:<password>@ctig.cou2kb6.mongodb.net/test');
?>
<?php 
      $Voltafeg='Voltafeg'; 
      $db = 'Notícias';
      require 'vendor/autoload.php';
      $client = new MongoDB\Client('mongodb+srv://CTIG_ADMIN:<password>@ctig.cou2kb6.mongodb.net/test');
      $Voltafeg_page= $client->$db->$Voltafeg->findOne();
      $Voltafeg_data=$Voltafeg_page->jsonSerialize();
      echo '<div data-animate-feed id='.'feed-col'.' class='.'col-lg-3 col-sm-6 col-12'.'>
      <div onclick='.'window.location="'.$Voltafeg.'.php"'.' class='.'lazyload'.' id='.'feed'.' ><img id='.'feed-img'.' class='.'img-fluid'.' src="img/'.$Voltafeg_data->image0.'"></div>
      <h2>'.$Voltafeg_data->titulo.'</h2>
      </div>';
      ?>
      <?php 
      $MostraCientíficadoColégioDanteAliguiere='MostraCientíficadoColégioDanteAliguiere'; 
      $db = 'Notícias';
      require 'vendor/autoload.php';
      $client = new MongoDB\Client('mongodb+srv://CTIG_ADMIN:<password>@ctig.cou2kb6.mongodb.net/test');
      $MostraCientíficadoColégioDanteAliguiere_page= $client->$db->$MostraCientíficadoColégioDanteAliguiere->findOne();
      $MostraCientíficadoColégioDanteAliguiere_data=$MostraCientíficadoColégioDanteAliguiere_page->jsonSerialize();
      echo '<div data-animate-feed id='.'feed-col'.' class='.'col-lg-3 col-sm-6 col-12'.'>
      <div onclick='.'window.location="'.$MostraCientíficadoColégioDanteAliguiere.'.php"'.' class='.'lazyload'.' id='.'feed'.' ><img id='.'feed-img'.' class='.'img-fluid'.' src="img/'.$MostraCientíficadoColégioDanteAliguiere_data->image0.'"></div>
      <h2>'.$MostraCientíficadoColégioDanteAliguiere_data->titulo.'</h2>
      </div>';
      ?>
       <?php 
      $Teste='Teste'; 
      $db = 'Notícias';
      require 'vendor/autoload.php';
      $client = new MongoDB\Client('mongodb+srv://CTIG_ADMIN:<password>@ctig.cou2kb6.mongodb.net/test');
      $Teste_page= $client->$db->$Teste->findOne();
      $Teste_data=$Teste_page->jsonSerialize();
      echo '<div data-animate-feed id='.'feed-col'.' class='.'col-lg-3 col-sm-6 col-12'.'>
      <div class='.'lazyload'.' id='.'feed'.'><a href='.'Teste.php'.'><img id='.'feed-img'.' class='.'img-fluid'.' src='.'img/'.$Teste_data->image0.'></a></div>
      <h2>'.$Teste_data->titulo.'</h2>
      </div>';
      ?>