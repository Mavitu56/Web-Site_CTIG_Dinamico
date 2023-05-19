<?php 
      $Jornal2°Edição='Jornal2°Edição'; 
      $db = 'Jornal';
      require 'vendor/autoload.php';
      $client = new MongoDB\Client('mongodb+srv://CTIG_ADMIN:<password>@ctig.cou2kb6.mongodb.net/test');
      $Jornal2°Edição_page= $client->$db->$Jornal2°Edição->findOne();
      $Jornal2°Edição_data=$Jornal2°Edição_page->jsonSerialize();
                        echo '<img loading='.'lazy'.' id='.'journal'.' src=img/'.$Jornal2°Edição_data->image0.'>';
                        echo '<img loading='.'lazy'.' id='.'journal'.' src=img/'.$Jornal2°Edição_data->image1.'>';
                        echo '<img loading='.'lazy'.' id='.'journal'.' src=img/'.$Jornal2°Edição_data->image2.'>';
                        echo '<img loading='.'lazy'.' id='.'journal'.' src=img/'.$Jornal2°Edição_data->image3.'>';
                        echo '<img loading='.'lazy'.' id='.'journal'.' src=img/'.$Jornal2°Edição_data->image4.'>';
                        echo '<img loading='.'lazy'.' id='.'journal'.' src=img/'.$Jornal2°Edição_data->image5.'>';
                        echo '<img loading='.'lazy'.' id='.'journal'.' src=img/'.$Jornal2°Edição_data->image6.'>';
      ?>