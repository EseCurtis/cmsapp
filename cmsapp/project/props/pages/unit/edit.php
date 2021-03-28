<?php
    $unit = new Unit();

    $unit = $unit->fetch_by_id($_data["item_id"]);

    $unit_id   = $unit["id"];
    $unit_name = $unit["unit_name"];
?>
<div class="main__page">
    <div class="page__content">
        <div class="page__header">
            <h2>Edit Unit</h2>
        </div>
        <form class="form centered" action="amvc.api" api-key="unit/edit.php" async="true" method="post" callback="responseRouter">
            <input type="hidden" name="item_id" value="<?=$unit_id?>">
            <p>Unit name</p>
            <input type="text" class="input" placeholder="Unit name" name="unit_name" value="<?=$unit_name?>">
            <input type="submit" value="Add" class="primary-button">
        </form>
    </div>
</div>