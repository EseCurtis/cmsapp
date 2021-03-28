<?php
    $validation = ["email", "password"];

    $response   = new Response("user/login");
    $user       = new User();

    if(multiple_isset($validation)){


        $user_email = req_var("email");
        $user_password = req_var("password");

        $user_validation = $user->validate($user_email, $user_password);
       

        if($user_validation){
            $user_id = $user->fetch_by_cred($user_email, $user_password)[0];

            $_SESSION["email"]  = $user_email;
            $_SESSION["password"] = $user_password;
            $_SESSION["id"] = $user_id;

            $response->message("11");
        }else{
            $response->message("1");
        }
    }else{
        $response->message("0");
    }

    $response->print("json");
?>