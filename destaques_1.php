<?php 
    $Voltafeg='Voltafeg'; 
    $db = 'Notícias';
    require 'vendor/autoload.php';
    $client = new MongoDB\Client('mongodb+srv://CTIG_ADMIN:<password>@ctig.cou2kb6.mongodb.net/test');
    $Voltafeg_page= $client->$db->$Voltafeg->findOne();
    $Voltafeg_data=$Voltafeg_page->jsonSerialize();
    echo '<a href='.'Voltafeg.php'.'><img loading='.'lazy'.' src='.'img/'.$Voltafeg_data->image2.''.' class='.'"d-block img-fluid w-100"'.'></a>
    <div class='.'"carousel-caption sub"'.'>
      <h5>'.$Voltafeg_data->titulo.'</h5>
      <p>'.$Voltafeg_data->info.'</p>
    </div>';
    ?>