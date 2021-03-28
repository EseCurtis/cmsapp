<?php
    $event  = new Event();
    $event  = $event->fetch_by_id($_data["item_id"]);
?>

<div class="main__page">
    <div class="page__content">
        <div class="page__header">
            <h2>Edit Event</h2>
        </div>
        <form class="form centered double-pane" action="amvc.api" api-key="event/edit.php" async="true" method="post" callback="responseRouter">
            <input type="hidden" name="item_id" value="<?=$event["id"]?>">
            <p>Event name</p>
            <input type="text" class="input" placeholder="Event name" name="event_name" value="<?=$event["event_name"]?>">
            <p>Event description</p>
            <textarea type="text" class="input"  name="event_description"><?=$event["event_description"]?></textarea>
            <p>Event date</p>
            <input type="date" class="input" placeholder="Event Date" name="event_date" value="<?=$event["event_date"]?>">
            <input type="submit" value="Update" class="primary-button">
        </form>
    </div>
</div>