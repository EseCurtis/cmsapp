<?php
    $user  = new User();
    $user_validation = $user->validate($_SESSION["email"], $_SESSION["password"]);

    if(!$user_validation){
        if(@!$_data["is_public"]){
            header("location:"._URL_."/login");
        }
    }else{
        if(@$_data["is_public"]){
            header("location:"._URL_."/home");
        }
    }
?>