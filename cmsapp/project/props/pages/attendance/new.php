<div class="main__page">
    <div class="page__content">
        <div class="page__header">
            <h2>Add New Attendance Record</h2>
        </div>
        <form class="form centered" action="amvc.api" api-key="attendance/new.php" async="true" method="post" callback="responseRouter">
            <p>Attendance Label</p>
            <input type="text" class="input" placeholder="Event name" name="label" value="">
            <p>Male population</p>
            <input type="number" class="input" name="male_population" value="">
            <p>Female population</p>
            <input type="number" class="input" name="female_population" value="">
            <input type="submit" value="Add" class="primary-button">
        </form>
    </div>
</div>