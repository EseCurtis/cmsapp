<?php
    $render = new Render("", "php"); 
    $render->prop("login_auth");

    $validation = ["item_id", "label", "male_population", "female_population"];

    $response   = new Response("attendance/edit");
    $attendance = new Attendance();

    if(multiple_isset($validation)){

        $item_id = req_var("item_id");
        $label = req_var("label");
        $male_population = req_var("male_population");
        $female_population = req_var("female_population");

        $label_update = $attendance->update($item_id, "label", $label);
        $male_population_update = $attendance->update($item_id, "male_population", $male_population);
        $female_population_update = $attendance->update($item_id, "female_population", $female_population);

        $response->message($label_update != 1 ? "LB0" : "");
        $response->message($male_population_update != 1 ? "MP0" : "");
        $response->message($female_population_update != 1 ? "FP0" : "");

    }else{
        $response->message("0");
    }

    $response->print("json");
?>