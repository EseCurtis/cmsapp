<div class="main__page">
    <div class="page__content">
        <div class="page__header">
            <h2>Add New Unit</h2>
        </div>
        <form class="form centered" action="amvc.api" api-key="unit/new.php" async="true" method="post" callback="responseRouter">
            <p>Unit name</p>
            <input type="text" class="input" placeholder="unit name" name="unit_name">
            <input type="submit" value="Add" class="primary-button">
        </form>
    </div>
</div>