<div class="main__page">
    <div class="page__content">
        <div class="page__header">
            <h2>Add New Event</h2>
        </div>
        <form class="form centered" action="amvc.api" api-key="event/new.php" async="true" method="post" callback="responseRouter">
            <p>Event name</p>
            <input type="text" class="input" placeholder="Event name" name="event_name" value="<?=$event["event_name"]?>">
            <p>Event description</p>
            <textarea type="text" class="input" rows="6" name="event_description" value="<?=$event["event_description"]?>"></textarea>
            <p>Event date</p>
            <input type="date" class="input" placeholder="Event Date" name="event_date" value="<?=$event["event_date"]?>">
            <input type="submit" value="Add" class="primary-button">
        </form>
    </div>
</div>