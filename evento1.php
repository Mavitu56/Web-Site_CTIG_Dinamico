<?php 
    $teste='teste'; 
    $db = 'Projetos';
    require 'vendor/autoload.php';
    $client = new MongoDB\Client('mongodb+srv://CTIG_ADMIN:<password>@ctig.cou2kb6.mongodb.net/test');
    $teste_page= $client->$db->$teste->findOne();
    $teste_data=$teste_page->jsonSerialize();
    echo '<div id='.'centered'.' class='.'container'.'>
    <div data-animate-show class='.'img-event-blue lazyload'.'><img class='.'img-event'.' src='.'img/'.$teste_data->image0.'></div>
    <div data-animate-event-left class='.'text-event-blue'.'><a href='.'teste.php'.'>
        <div class='.'event-text-blue'.'><div id='.'center'.' class='.'event-title-blue'.'>'.$teste_data->titulo.'</div>'.$teste_data->texto0.'</div>
  </a></div>
  <div class='.'img-event-fake-blue'.'></div>
</div>';?>