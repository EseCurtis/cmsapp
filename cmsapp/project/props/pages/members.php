<?php
    $member = new Member();
    $all_members = $member->fetch_all();
?>
<div class="main__page">
    <div class="page__content">
        <h1>Members</h1>
        <div class="page__controller">
            <a class="primary-button" href="<?=_URL_?>/members/new">Add New</a>
        </div>
        <div class="page__table">
            <table>
                <tbody>
                    <tr class="table-head">
                        <td>S/N</td>
                        <td colspan="3">Full Name</td>
                        <td>Gender</td>
                        <td>Age</td>
                        <td>Classification</td>
                        <td colspan="2">Actions</td>
                    </tr>
                    <?php
                        foreach($all_members as $current_member){
                    ?>
                        <tr>
                            <td><?=$current_member["id"]?></td>
                            <td><?=$current_member["firstname"]?></td>
                            <td><?=$current_member["middlename"]?></td>
                            <td><?=$current_member["lastname"]?></td>
                            <td><?=$current_member["gender"]?></td>
                            <td><?=$current_member["age"]?></td>
                            <td><?=$current_member["classification"]?></td>
                            <td>
                                <a class="primary-button" href="<?=_URL_."/members/edit?item=".$current_member["id"]?>">Edit</a>
                            </td>
                            <td>
                                <a class="primary-button red" href="<?=_URL_."/members/delete?item=".$current_member["id"]?>">Delete</a>
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