<?php
    $render = new Render("", "php"); 
    $render->prop("login_auth");
    
    $validation = ["item_id"];

    $response   = new Response("attendance/delete");
    $attendance      = new Attendance();

    if(multiple_isset($validation)){
        $item_id = req_var("item_id");

        $attendance_deletion = $attendance->delete($item_id);

        if($attendance_deletion){
            $response->message("11");
        }else{
            $response->message("1");
        }
    }else{
        $response->message("0");
    }

    $response->print("json");
?>