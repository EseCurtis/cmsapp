<?php
    //execute all neccessary functions
    include 'bin/php/amvc.php';
    include 'src/assets/php/Controllers.php';

    session_start();
    
    $config = (array) include_json("project.json");
    $app    = new AMVC($config);

    $app->connect_database();
    $app->run();  
    
?>


