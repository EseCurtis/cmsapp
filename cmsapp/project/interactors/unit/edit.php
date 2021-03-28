<?php
    $render = new Render("", "php"); 
    $render->prop("login_auth");

    $validation = ["item_id", "unit_name"];

    $response   = new Response("unit/edit");
    $unit       = new Unit();

    if(multiple_isset($validation)){

        $unit_id = req_var("item_id");
        $unit_name = req_var("unit_name");

        $unit_name_update = $unit->update($unit_id, "unit_name", $unit_name);

        $response->message($unit_name_update != 1 ? "UNM0" : "");

    }else{
        $response->message("0");
    }

    $response->print("json");
?>