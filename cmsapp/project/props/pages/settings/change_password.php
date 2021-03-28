<div class="main__page">
    <div class="page__content">
        <div class="page__header">
            <h2>Change Password</h2>
        </div>
        <form class="form centered" action="amvc.api" api-key="settings/change_password.php" async="true" method="post" callback="responseRouter">
            <p>Last password</p>
            <input type="text" class="input" placeholder="last password" name="last_password">
            <p>New Password</p>
            <input type="text" class="input" placeholder="new password" name="new_password">
            <input type="submit" value="update" class="primary-button">
        </form>
    </div>
</div>