<?php
    $render = new Render("", "php"); 
    $render->prop("login_auth");
    
    $validation = ["last_password", "new_password"];

    $response   = new Response("settings/change-password");
    $user       = new User();

    $user_data = $user->fetch_by_cred($_SESSION["email"], $_SESSION["password"]);

    if(multiple_isset($validation)){

        $last_password = md52(req_var("last_password"));
        $new_password  = md52(req_var("new_password"));

        if($last_password == $user_data["password"]){
            $password_update = $user->update($user_data["id"], "password", $new_password);
            $response->message($password_update != 1 ? "PU0" : "");
        }else{
            $response->message("PM0");
        }
        
    }else{
        $response->message("0");
    }

    $response->print("json");
?>