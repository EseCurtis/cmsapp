<?php
    $render = new Render("", "php"); 
    $render->prop("login_auth");
    
    $validation = ["item_id"];

    $response   = new Response("event/delete");
    $event      = new Event();

    if(multiple_isset($validation)){
        $item_id = req_var("item_id");

        $event_deletion = $event->delete($item_id);

        if($event_deletion){
            $response->message("11");
        }else{
            $response->message("1");
        }
    }else{
        $response->message("0");
    }

    $response->print("json");
?>