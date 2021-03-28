<?php
    $render = new Render("", "php"); 
    $render->prop("login_auth");
    
    $validation = ["email", "password", "role"];

    $response   = new Response("user/new");
    $user       = new User();

    if(multiple_isset($validation)){

        $user_email = req_var("email");
        $user_password = req_var("password");
        $user_role = req_var("role");

        $user_creation = $user->create($user_email, $user_password, $user_role);

        if($user_creation == 1){
            $response->message("11");
        }else if($user_creation == "E001"){
            $response->message("1");
        }
    }else{
        $response->message("0");
    }

    $response->print("json");
?>