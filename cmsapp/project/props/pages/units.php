<?php
    $unit = new Unit();
    $all_units = $unit->fetch_all();
?>
<div class="main__page">
    <div class="page__content">
        <h1>Units</h1>
        <div class="page__controller">
            <a class="primary-button" href="<?=_URL_?>/units/new">Add New</a>
        </div>
        <div class="page__table">
            <table>
                <tbody>
                    <tr class="table-head">
                        <td>S/N</td>
                        <td>Name</td>
                        <td>Members</td>
                        <td colspan="2">Actions</td>
                    </tr>
                    <?php
                        foreach($all_units as $current_unit){
                            $current_unit["members"] = $unit->fetch_all_members($current_unit["id"]);
                    ?>
                        <tr>
                            <td><?=$current_unit["id"]?></td>
                            <td><?=$current_unit["unit_name"]?></td>
                            <td><?=count($current_unit["members"])?></td>
                            <td>
                                <a class="primary-button" href="<?=_URL_."/units/edit?item=".$current_unit["id"]?>">Edit</a>
                            </td>
                            <td>
                                <a class="primary-button red" href="<?=_URL_."/units/delete?item=".$current_unit["id"]?>">Delete</a>
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