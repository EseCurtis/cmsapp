<?php
    $dom    = new DOM();
    $unit   = new Unit();
    $member = new Member();

    $member         = $member->fetch_by_id($_data["item_id"]);
    $member["unit"] = $unit->fetch_by_id($member["unit_id"]);

    
    $unit_options_dom = $unit->options_dom($member["unit"]["unit_name"]);

    $gender_options = [
        [
            "label"=>"Male",
            "value"=>"male"
        ],
        [
            "label"=>"Female",
            "value"=>"female"
        ],
        [
            "label"=>"Unspecified",
            "value"=>"unspecified"
        ]
    ];
    $classification_options = [
        [
            "label"=>"Adult",
            "value"=>"adult"
        ],
        [
            "label"=>"Child",
            "value"=>"child"
        ]
    ];


    $gender_options_dom = $dom->option_tags($member["gender"], $gender_options);
    $classification_options_dom = $dom->option_tags($member["classification"], $classification_options);
?>

<div class="main__page">
    <div class="page__content">
        <div class="page__header">
            <h2>Add New member</h2>
        </div>
        <form class="form centered double-pane" action="amvc.api" api-key="member/edit.php" async="true" method="post" callback="responseRouter">
            <input type="hidden" name="item_id" value="<?=$member["id"]?>">
            <p>Firstname</p>
            <input type="text" class="input" placeholder="Firstname" name="firstname" value="<?=$member["firstname"]?>">
            <p>Middlename</p>
            <input type="text" class="input" placeholder="Middlename" name="middlename" value="<?=$member["middlename"]?>">
            <p>Lastname</p>
            <input type="text" class="input" placeholder="Lastname" name="lastname" value="<?=$member["lastname"]?>">
            <p>Gender</p>
            <select name="gender" id="" class="input">
                <?=$gender_options_dom?>
            </select>
            <p>Age</p>
            <input type="number" class="input" placeholder="20" name="age" value="<?=$member["age"]?>">
            <p>classification</p>
            <select name="classification" id="" class="input">
                <?=$classification_options_dom?>
            </select>
            <p>Unit</p>
            <select name="unit" id="" class="input">
                <?=$unit_options_dom?>
            </select>
            <input type="submit" value="Update" class="primary-button">
        </form>
    </div>
</div>