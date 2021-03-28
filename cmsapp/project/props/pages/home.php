<?php
    $users    = new User();
    $members = new Member();
    $events  = new Event();
    $units   = new Unit();
?>

<div class="main__page">
    <div class="page__content">
        <h3>Welcome <?=$_SESSION["email"];?>,</h3>
        <div class="page__controller">
        </div>
        <div class="page__grid">
            <div class="grid__item">
                <h3>Users</h3>
                <p class="bubble">
                    <?=count($users->fetch_all())?>
                </p>
            </div>
            <div class="grid__item">
                <h3>Members</h3>
                <p class="bubble">
                    <?=count($members->fetch_all())?>
                </p>
            </div>
            <div class="grid__item">
                <h3>Events</h3>
                <p class="bubble">
                    <?=count($events->fetch_all())?>
                </p>
            </div>
            <div class="grid__item">
                <h3>Units</h3>
                <p class="bubble">
                    <?=count($units->fetch_all())?>
                </p>
            </div>
        </div>
    </div>
</div>