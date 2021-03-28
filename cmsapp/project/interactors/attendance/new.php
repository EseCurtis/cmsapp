<?php
    $render = new Render("", "php"); 
    $render->prop("login_auth");
    
    $validation = ["label", "male_population", "female_population"];

    $response   = new Response("attendance/new");
    $attendance = new Attendance();

    if(multiple_isset($validation)){

        $label = req_var("label");
        $male_population = req_var("male_population");
        $female_population = req_var("female_population");

        $attendance_creation = $attendance->create($label, $male_population, $female_population);

        if($attendance_creation == 1){
            $response->message("1");
        }else{
            $response->message("0");
        }
    }else{
        $response->message("0");
    }

    $response->print("json");
?>