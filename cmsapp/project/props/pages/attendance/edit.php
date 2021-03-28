<?php
    $attendance  = new Attendance();
    $attendance  = $attendance->fetch_by_id($_data["item_id"]);
?>
<div class="main__page">
    <div class="page__content">
        <div class="page__header">
            <h2>Edit Attendance Record</h2>
        </div>
        <form class="form centered" action="amvc.api" api-key="attendance/edit.php" async="true" method="post" callback="responseRouter">
            <input type="hidden" name="item_id" value="<?=$_data["item_id"]?>">
            <p>Attendance Label</p>
            <input type="text" class="input" placeholder="Event name" name="label" value="<?=$attendance["label"]?>">
            <p>Male population</p>
            <input type="number" class="input" name="male_population" value="<?=$attendance["male_population"]?>">
            <p>Female population</p>
            <input type="number" class="input" name="female_population" value="<?=$attendance["female_population"]?>">
            <input type="submit" value="Update" class="primary-button">
        </form>
    </div>
</div>