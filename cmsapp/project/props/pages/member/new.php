<?php
    $dom = new DOM();
    $unit = new Unit();

    $unit_options_dom = $unit->options_dom();
?>

<div class="main__page">
    <div class="page__content">
        <div class="page__header">
            <h2>Add New member</h2>
        </div>
        <form class="form centered double-pane" action="amvc.api" api-key="member/new.php" async="true" method="post" callback="responseRouter">
            <p>Firstname</p>
            <input type="text" class="input" placeholder="Firstname" name="firstname">
            <p>Middlename</p>
            <input type="text" class="input" placeholder="Middlename" name="middlename">
            <p>Lastname</p>
            <input type="text" class="input" placeholder="Lastname" name="lastname">
            <p>Gender</p>
            <select name="gender" id="" class="input">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="unspecified">Unspecified</option>
            </select>
            <p>Age</p>
            <input type="number" class="input" placeholder="20" name="age">
            <p>classification</p>
            <select name="classification" id="" class="input">
                <option value="adult">Adult</option>
                <option value="child">Child</option>
            </select>
            <p>Unit</p>
            <select name="unit" id="" class="input">
                <?=$unit_options_dom?>
            </select>
            <input type="submit" value="Add" class="primary-button">
        </form>
    </div>
</div>