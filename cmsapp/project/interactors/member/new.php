<?php
    $render = new Render("", "php"); 
    $render->prop("login_auth");
    
    $validation = ["firstname", "middlename", "lastname", "gender", "age", "classification", "unit"];

    $response   = new Response("member/new");
    $member     = new Member();

    if(multiple_isset($validation)){

        $firstname = req_var("firstname");
        $middlename = req_var("middlename");
        $lastname = req_var("lastname");
        $gender = req_var("gender");
        $age = req_var("age");
        $classification = req_var("classification");
        $unit = req_var("unit");

        $member_creation = $member->create($firstname, $middlename, $lastname, $gender, $age, $classification, $unit);
        
        if($member_creation == 1){
            $response->message("11");
        }else if($member_creation == "E001"){
            $response->message("1");
        }
    }else{
        $response->message("0");
    }

    $response->print("json");
?>