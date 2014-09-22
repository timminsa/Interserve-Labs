<?php include('_header.php'); ?>

<!-- show registration form, but only if we didn't submit already -->
<?php if (!$registration->registration_successful && !$registration->verification_successful) { ?>
<div class="uk-vertical-align uk-text-center uk-height-1-1">
    ::before
    <div class="uk-vertical-align-middle" style="width: 250px;">

        <img class="uk-margin-bottom" width="220" height="120" src="http://interservelabs.com/image/interserve-logo.svg" alt="">

        <form class="uk-panel uk-panel-box uk-form" method="post" action="register.php" name="registerform">
            <div class="uk-form-row">
                <input  class="uk-width-1-1 uk-form-large" id="user_name" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required autocomplete="off"  placeholder="<?php echo WORDING_USERNAME; ?>">
            </div>
            <div class="uk-form-row">
                <input  class="uk-width-1-1 uk-form-large" id="user_email" type="email" name="user_email" required autocomplete="off"  placeholder="<?php echo WORDING_REGISTRATION_EMAIL; ?>">
            </div>
            <div class="uk-form-row">
                <input class="uk-width-1-1 uk-form-large" id="user_password_new" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" placeholder="<?php echo WORDING_REGISTRATION_PASSWORD; ?>">
            </div>
            <div class="uk-form-row">
                <input class="uk-width-1-1 uk-form-large" id="user_password_repeat" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" placeholder="<?php echo WORDING_REGISTRATION_PASSWORD_REPEAT; ?>">
            </div>
            <div class="uk-form-row uk-text-small">
                <img src="tools/showCaptcha.php" alt="captcha" />

                <label class="uk-float-left"><?php echo WORDING_REGISTRATION_CAPTCHA; ?></label>
                <input class="uk-width-1-1 uk-form-large" type="text" name="captcha" required />
            </div>
            <div class="uk-form-row">
                <button  class="uk-width-1-1 uk-button uk-button-primary uk-button-large" type="submit" name="register"><?php echo WORDING_REGISTER; ?></button>
            </div>
            <br/>
        <div class="uk-form-row">
            <a  class="uk-width-1-1 uk-button uk-button-primary uk-button-large" href="index.php"><?php echo WORDING_BACK_TO_LOGIN; ?></a>
        </div>
        </form>

    </div>
</div>
<?php } ?>



<?php include('_footer.php'); ?>



