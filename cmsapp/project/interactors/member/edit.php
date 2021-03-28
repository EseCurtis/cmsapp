<?php
    $render = new Render("", "php"); 
    $render->prop("login_auth");

    $validation = ["item_id", "firstname", "middlename", "lastname", "gender", "age", "classification", "unit"];

    $response   = new Response("member/edit");
    $member     = new Member();

    if(multiple_isset($validation)){

        $member_id      = req_var("item_id");
        $firstname      = req_var("firstname");
        $middlename     = req_var("middlename");
        $lastname       = req_var("lastname");
        $gender         = req_var("gender");
        $age            = req_var("age");
        $classification = req_var("classification");
        $unit           = req_var("unit");

        $firstname_update       = $member->update($member_id, "firstname", $firstname);
        $middlename_update      = $member->update($member_id, "middlename", $middlename);
        $lastname_update        = $member->update($member_id, "lastname", $lastname);
        $gender_update          = $member->update($member_id, "gender", $gender);
        $age_update             = $member->update($member_id, "age", $age);
        $classification_update  = $member->update($member_id, "classification", $classification);
        $unit_update            = $member->update($member_id, "unit_id", $unit);

        $response->message($firstname_update != 1 ? "FN0" : "");
        $response->message($middlename_update != 1 ? "MN0" : "");
        $response->message($lastname_update != 1 ? "LN0" : "");
        $response->message($gender_update != 1 ? "GD0" : "");
        $response->message($age_update != 1 ? "AG0" : "");
        $response->message($classification_update != 1 ? "CF0" : "");
        $response->message($unit_update != 1 ? "UT0" : "");
        
    }else{
        $response->message("0");
    }

    $response->print("json");
?>