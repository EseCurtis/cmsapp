<?php
    $render = new Render("", "php"); 
    $render->prop("login_auth");
    
    $validation = ["item_id", "email", "role"];

    $response   = new Response("user/edit");
    $user       = new User();

    if(multiple_isset($validation)){

        $user_id = req_var("item_id");
        $user_email = req_var("email");
        $user_role = req_var("role");

        $email_update = $user->update($user_id, "email", $user_email);
        $role_update = $user->update($user_id, "role", $user_role);

        $response->message($email_update != 1 ? "EM0" : "");
        $response->message($role_update != 1 ? "RO0" : "");

    }else{
        $response->message("0");
    }

    $response->print("json");
?>