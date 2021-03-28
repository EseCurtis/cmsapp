<?php
    $render = new Render("", "php"); 
    $render->prop("login_auth");
    
    $validation = ["item_id"];

    $response   = new Response("user/delete");
    $user       = new User();

    if(multiple_isset($validation)){
        $item_id = req_var("item_id");

        $user_deletion = $user->delete($item_id);

        if($user_deletion){
            $response->message("11");
        }else{
            $response->message("1");
        }
    }else{
        $response->message("0");
    }

    $response->print("json");
?>