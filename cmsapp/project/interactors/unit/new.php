<?php
    $render = new Render("", "php"); 
    $render->prop("login_auth");

    $validation = ["unit_name"];

    $response   = new Response("unit/new");
    $unit       = new Unit();

    if(multiple_isset($validation)){

        $unit_name = req_var("unit_name");

        $unit_creation = $unit->create($unit_name);

        if($unit_creation == 1){
            $response->message("11");
        }else if($unit_creation == "E001"){
            $response->message("1");
        }
    }else{
        $response->message("0");
    }

    $response->print("json");
?>