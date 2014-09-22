<?php include('_header.php'); ?>
<div class="uk-vertical-align uk-text-center uk-height-1-1">
    ::before
    <div class="uk-vertical-align-middle" style="width: 250px;">

        <img class="uk-margin-bottom" width="220" height="120" src="http://interservelabs.com/image/interserve-logo.svg" alt="">
        <?php if ($login->passwordResetLinkIsValid() == true) { ?>
            <form class="uk-panel uk-panel-box uk-form" method="post" action="password_reset.php" name="new_password_form">
                <input type='hidden' name='user_name' value='<?php echo $_GET['user_name']; ?>' />
                <input type='hidden' name='user_password_reset_hash' value='<?php echo $_GET['verification_code']; ?>' />

                <div class="uk-form-row">
                    <input class="uk-width-1-1 uk-form-large" id="user_password_new" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" placeholder="<?php echo WORDING_NEW_PASSWORD; ?>">
                </div>
                <div class="uk-form-row">
                    <input class="uk-width-1-1 uk-form-large" id="user_password_repeat" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" placeholder="<?php echo WORDING_NEW_PASSWORD_REPEAT; ?>">
                </div>
                <div class="uk-form-row">
                    <button  class="uk-width-1-1 uk-button uk-button-primary uk-button-large" type="submit" name="submit_new_password"><?php echo WORDING_SUBMIT_NEW_PASSWORD; ?></button>
                </div>

        
            <!-- no data from a password-reset-mail has been provided, so we simply show the request-a-password-reset form -->
        <?php } else { ?>
            <form  class="uk-panel uk-panel-box uk-form" method="post" action="password_reset.php" name="password_reset_form">
                <div class="uk-form-row">
                    <label class="uk-float-left" for="user_name"><?php echo WORDING_REQUEST_PASSWORD_RESET; ?></label>
                    <input  class="uk-width-1-1 uk-form-large" id="user_name" type="text"  name="user_name" required placeholder="Username" />
                </div>
                
                <div class="uk-form-row">
                    <button  class="uk-width-1-1 uk-button uk-button-primary uk-button-large" type="submit" name="request_password_reset"><?php echo WORDING_RESET_PASSWORD; ?></button>
                </div>

          
        <?php } ?>
            <br/>
        <div class="uk-form-row">
            <a  class="uk-width-1-1 uk-button uk-button-primary uk-button-large" href="index.php"><?php echo WORDING_BACK_TO_LOGIN; ?></a>
        </div>
            </form>
    </div>
</div>
<?php include('_footer.php'); ?>

