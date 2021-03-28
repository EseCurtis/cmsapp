<?php
    $user = new User();
    $dom = new DOM();
    $user = $user->fetch_by_id($_data["item_id"]);

    $user_id    = $user["id"];
    $user_email = $user["email"];
    $user_role  = $user["role"];

    $roles = [
        [
            "label"=>"Admin",
            "value"=>"admin"
        ],
        [
            "label"=>"Moderator",
            "value"=>"moderator"
        ]
    ];
    
    $roles_options = $dom->option_tags($user_role, $roles);
?>
<div class="main__page">
    <div class="page__content">
        <div class="page__header">
            <h2>Edit user</h2>
        </div>
        <form class="form centered" action="amvc.api" api-key="user/edit.php" async="true" method="post" callback="responseRouter">
            <input type="hidden" name="item_id" value="<?=$user_id?>">    
            <p>Email</p>
            <input type="text" class="input" placeholder="username or email" name="email" value="<?=$user_email?>">
            <p>Role</p>
            <select name="role" id="" class="input">
                <?=$roles_options?>
            </select>
            <input type="submit" value="Update" class="primary-button">
        </form>
    </div>
</div>