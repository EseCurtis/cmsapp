<div class="main__page">
    <div class="page__content">
        <div class="page__header">
            <h2>Add New User</h2>
        </div>
        <form class="form centered" action="amvc.api" api-key="user/new.php" async="true" method="post" callback="responseRouter">
            <p>Email</p>
            <input type="text" class="input" placeholder="username or email" name="email">
            <p>Password</p>
            <input type="password" class="input" placeholder="password" name="password">
            <p>Role</p>
            <select name="role" id="" class="input">
                <option value="admin">Admin</option>
                <option value="Moderator">Moderator</option>
            </select>
            <input type="submit" value="Add" class="primary-button">
        </form>
    </div>
</div>