<?php 
      $Atividade='Atividade'; 
      $Atividade='Atividade'; 
      $db = 'Notícias';
      require 'vendor/autoload.php';
      $client = new MongoDB\Client('mongodb+srv://CTIG_ADMIN:<password>@ctig.cou2kb6.mongodb.net/test');
      $Atividade_page= $client->$db->$Atividade->findOne();
      $Atividade_data=$Atividade_page->jsonSerialize();
      echo '<li><a class='.'dropdown-item'.' href='.'Atividade.php'.'>'.$Atividade_data->titulo.'</a></li>';
      ?><?php 
      $Voltafeg='Voltafeg'; 
      $db = 'Notícias';
      require 'vendor/autoload.php';
      $client = new MongoDB\Client('mongodb+srv://CTIG_ADMIN:<password>@ctig.cou2kb6.mongodb.net/test');
      $Voltafeg_page= $client->$db->$Voltafeg->findOne();
      $Voltafeg_data=$Voltafeg_page->jsonSerialize();
      echo '<li><a class='.'dropdown-item'.' href='.'Voltafeg.php'.'>'.$Voltafeg_data->titulo.'</a></li>';
      ?><?php 
      $MostraCientíficadoColégioDanteAliguiere='MostraCientíficadoColégioDanteAliguiere'; 
      $db = 'Notícias';
      require 'vendor/autoload.php';
      $client = new MongoDB\Client('mongodb+srv://CTIG_ADMIN:<password>@ctig.cou2kb6.mongodb.net/test');
      $MostraCientíficadoColégioDanteAliguiere_page= $client->$db->$MostraCientíficadoColégioDanteAliguiere->findOne();
      $MostraCientíficadoColégioDanteAliguiere_data=$MostraCientíficadoColégioDanteAliguiere_page->jsonSerialize();
      echo '<li><a class='.'dropdown-item'.' href='.'MostraCientíficadoColégioDanteAliguiere.php'.'>'.$MostraCientíficadoColégioDanteAliguiere_data->titulo.'</a></li>';
      ?><?php 
      $Teste='Teste'; 
      $db = 'Notícias';
      require 'vendor/autoload.php';
      $client = new MongoDB\Client('mongodb+srv://CTIG_ADMIN:<password>@ctig.cou2kb6.mongodb.net/test');
      $Teste_page= $client->$db->$Teste->findOne();
      $Teste_data=$Teste_page->jsonSerialize();
      echo '<li><a class='.'dropdown-item'.' href='.'Teste.php'.'>'.$Teste_data->titulo.'</a></li>';
      ?>