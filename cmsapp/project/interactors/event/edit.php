<?php
    $render = new Render("", "php"); 
    $render->prop("login_auth");

    $validation = ["item_id", "event_name", "event_description", "event_date"];

    $response   = new Response("event/edit");
    $event      = new Event();

    if(multiple_isset($validation)){

        $event_id = req_var("item_id");
        $event_name = req_var("event_name");
        $event_description = req_var("event_description");
        $event_date = req_var("event_date");

        $event_name_update = $event->update($event_id, "event_name", $event_name);
        $event_description_update = $event->update($event_id, "event_description", $event_description);
        $event_date_update = $event->update($event_id, "event_date", $event_date);

        $response->message($event_name_update != 1 ? "EN0" : "");
        $response->message($event_description_update != 1 ? "ED0" : "");
        $response->message($event_date_update != 1 ? "EDT0" : "");

    }else{
        $response->message("0");
    }

    $response->print("json");
?>