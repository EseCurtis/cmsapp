<?php
    $event = new Event();
    $all_events = $event->fetch_all();
?>
<div class="main__page">
    <div class="page__content">
        <h1>Events</h1>
        <div class="page__controller">
            <a class="primary-button" href="<?=_URL_?>/events/new">Add New</a>
        </div>
        <div class="page__table">
            <table>
                <tbody>
                    <tr class="table-head">
                        <td>S/N</td>
                        <td>Name</td>
                        <td>Description</td>
                        <td>Due Date</td>
                        <td>Date Created</td>
                        <td colspan="2">Actions</td>
                    </tr>
                    <?php
                        foreach($all_events as $current_event){
                    ?>
                        <tr>
                            <td><?=$current_event["id"]?></td>
                            <td><?=$current_event["event_name"]?></td>
                            <td><?=$current_event["event_description"]?></td>
                            <td><?=$current_event["event_date"]?></td>
                            <td><?=$current_event["date_created"]?></td>
                            <td>
                                <a class="primary-button" href="<?=_URL_."/events/edit?item=".$current_event["id"]?>">Edit</a>
                            </td>
                            <td>
                                <a class="primary-button red" href="<?=_URL_."/events/delete?item=".$current_event["id"]?>">Delete</a>
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