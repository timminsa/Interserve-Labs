<?php include('_header.php'); ?>





    <div class="uk-vertical-align uk-text-center uk-height-1-1">
        ::before
        <div class="uk-vertical-align-middle" style="width: 250px;">

            <img class="uk-margin-bottom" width="220" height="120" src="http://interservelabs.com/image/interserve-logo.svg" alt="">

            <form class="uk-panel uk-panel-box uk-form" method="post" action="index.php" name="loginform">
                <div class="uk-form-row">
                    <input class="uk-width-1-1 uk-form-large" id="user_name" type="text" name="user_name" required placeholder="<?php echo WORDING_USERNAME; ?>">
                </div>
                <div class="uk-form-row">
                    <input class="uk-width-1-1 uk-form-large" id="user_password" type="password" name="user_password" autocomplete="off" required placeholder="<?php echo WORDING_PASSWORD; ?>">
                </div>
                <div class="uk-form-row">
                    <button  class="uk-width-1-1 uk-button uk-button-primary uk-button-large" type="submit" name="login"><?php echo WORDING_LOGIN; ?></button>
                </div>
                <div class="uk-form-row uk-text-small">
                    <label class="uk-float-left"><input id="user_rememberme" name="user_rememberme" value="1" type="checkbox"> Remember Me</label>
                    <a class="uk-float-right uk-link uk-link-muted" href="password_reset.php">Forgot Password?</a>
                </div>
                <div class="uk-form-row uk-text-small">
                    <a class="uk-float-left uk-link uk-link-muted" href="register.php"><?php echo WORDING_REGISTER_NEW_ACCOUNT; ?></a>
                </div>
            </form>

        </div>
    </div>


    <?php include('_footer.php'); ?>
