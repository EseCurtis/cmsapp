<?php
    $render = new Render("", "php"); 
    $render->prop("login_auth");
    
    $validation = ["event_name", "event_description", "event_date"];

    $response   = new Response("event/new");
    $event       = new Event();

    if(multiple_isset($validation)){

        $event_name = req_var("event_name");
        $event_description = req_var("event_description");
        $event_date = req_var("event_date");

        $event_creation = $event->create($event_name, $event_description, $event_date);

        if($event_creation == 1){
            $response->message("11");
        }else if($event_creation === "E001"){
            $response->message("1");
        }
    }else{
        $response->message("0");
    }

    $response->print("json");
?>