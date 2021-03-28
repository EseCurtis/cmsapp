<?php
    $attendance = new Attendance();
    $all_records = $attendance->fetch_all();
?>
<div class="main__page">
    <div class="page__content">
        <h1>Attendance</h1>
        <div class="page__controller">
            <a class="primary-button" href="<?=_URL_?>/attendance/new">Add New</a>
        </div>
        <div class="page__table">
            <table>
                <tbody>
                    <tr class="table-head">
                        <td>S/N</td>
                        <td>Label</td>
                        <td>Male population</td>
                        <td>Female population</td>
                        <td>Date Created</td>
                        <td colspan="2">Actions</td>
                    </tr>
                    <?php
                        foreach($all_records as $current_record){
                    ?>
                        <tr>
                            <td><?=$current_record["id"]?></td>
                            <td><?=$current_record["label"]?></td>
                            <td><?=$current_record["male_population"]?></td>
                            <td><?=$current_record["female_population"]?></td>
                            <td><?=$current_record["date_created"]?></td>
                            <td>
                                <a class="primary-button" href="<?=_URL_."/attendance/edit?item=".$current_record["id"]?>">Edit</a>
                            </td>
                            <td>
                                <a class="primary-button red" href="<?=_URL_."/attendance/delete?item=".$current_record["id"]?>">Delete</a>
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