<?php
    $user = new User();
    $all_users = $user->fetch_all();
    //print_r($all_users);
?>
<div class="main__page">
    <div class="page__content">
        <h1>Users</h1>
        <div class="page__controller">
            <a class="primary-button" href="<?=_URL_?>/users/new">Add New</a>
        </div>
        <div class="page__table">
            <table>
                <tbody>
                    <tr class="table-head">
                        <td>S/N</td>
                        <td>Username</td>
                        <td>Email</td>
                        <td>Role</td>
                        <td colspan="2">Actions</td>
                    </tr>
                    <?php
                        foreach($all_users as $current_user){
                    ?>
                        <tr>
                            <td><?=$current_user["id"]?></td>
                            <td><?=$current_user["username"]?></td>
                            <td><?=$current_user["email"]?></td>
                            <td><?=$current_user["role"]?></td>
                            <td>
                                <a class="primary-button" href="<?=_URL_."/users/edit?item=".$current_user["id"]?>">Edit</a>
                            </td>
                            <td>
                                <a class="primary-button red" href="<?=_URL_."/users/delete?item=".$current_user["id"]?>">Delete</a>
                            </td>
                        </tr>
                    <?php    
                       }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>