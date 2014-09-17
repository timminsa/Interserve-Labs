<?php include('_header.php'); ?>

<div class="login-content">
    <div class="login-panel">
        <form method="post" action="index.php" name="loginform">
            <label for="user_name"><?php echo WORDING_USERNAME; ?></label>
            <div>
                <input id="user_name" type="text" name="user_name" required />
            </div>
            <label for="user_password"><?php echo WORDING_PASSWORD; ?></label>
            <div>
                <input id="user_password" type="password" name="user_password" autocomplete="off" required />
            </div>
            <a href="password_reset.php"><?php echo WORDING_FORGOT_MY_PASSWORD; ?></a>
            <div>
            <input type="checkbox" id="user_rememberme" name="user_rememberme" value="1" />
            <label for="user_rememberme"><?php echo WORDING_REMEMBER_ME; ?></label>
            </div>
            <div>
                <input type="submit" name="login" value="<?php echo WORDING_LOGIN; ?>" />
            </div>
        </form>

        <a href="register.php"><?php echo WORDING_REGISTER_NEW_ACCOUNT; ?></a>

    </div>
</div>
<?php include('_footer.php'); ?>
