<?php
    $render = new Render("", "php"); 
    $render->prop("login_auth");
    
    $validation = ["item_id"];

    $response   = new Response("member/delete");
    $member       = new Member();

    if(multiple_isset($validation)){
        $item_id = req_var("item_id");

        $member_deletion = $member->delete($item_id);

        if($member_deletion){
            $response->message("11");
        }else{
            $response->message("1");
        }
    }else{
        $response->message("0");
    }

    $response->print("json");
?>