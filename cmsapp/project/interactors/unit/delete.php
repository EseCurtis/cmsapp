<?php
    $render = new Render("", "php"); 
    $render->prop("login_auth");
    
    $validation = ["item_id"];

    $response   = new Response("unit/delete");
    $unit       = new Unit();

    if(multiple_isset($validation)){
        $item_id = req_var("item_id");

        $unit_deletion = $unit->delete($item_id);

        if($unit_deletion){
            $response->message("11");
        }else{
            $response->message("1");
        }
    }else{
        $response->message("0");
    }

    $response->print("json");
?>