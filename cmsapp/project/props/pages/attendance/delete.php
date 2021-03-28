<div class="main__page">
    <div class="page__content">
        <div class="page__header">
            <h2>Delete Confirmation</h2>
        </div>
        <form class="form centered" action="amvc.api" api-key="attendance/delete.php" async="true" method="post" callback="responseRouter">
            <h3>Are you sure you want to delete this Record?</h3>
            <div class="row-buttons">
                <input type="hidden" name="item_id" value="<?=$_data["item_id"]?>">
                <a class="primary-button" href="<?=_URL_?>/attendance">Cancel</a>
                <input type="submit" value="Delete" class="primary-button red">
            </div>
        </form>
    </div>
</div>