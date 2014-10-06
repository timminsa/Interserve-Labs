<!DOCTYPE html>
<html lang="en-gb" dir="ltr" class="uk-height-1-1 uk-notouch">
    <head>
        <meta charset="UTF-8">
        <title>Interserve Labs</title>

         <link rel="stylesheet" href="../css/uikit.gradient.min.css" />
        <script src="../js/uikit.min.js"></script>



<body class="uk-height-1-1">

        <?php
// show potential errors / feedback (from login object)
        if (isset($login)) {
            if ($login->errors) {
                foreach ($login->errors as $error) {
                  echo '<div class="uk-alert uk-alert-danger">'.  $error.'</div>';
                }
            }
            if ($login->messages) {
                foreach ($login->messages as $message) {
                                        echo '<div class="uk-alert uk-alert-success">'.  $message.'</div>';
                }
            }
        }
        ?>

        <?php
// show potential errors / feedback (from registration object)
        if (isset($registration)) {
            if ($registration->errors) {
                foreach ($registration->errors as $error) {
                         echo '<div class="uk-alert uk-alert-danger">'.  $error.'</div>';
                }
            }
            if ($registration->messages) {
                foreach ($registration->messages as $message) {
                    echo '<div class="uk-alert uk-alert-success">'.  $message.'</div>';
                }
            }
        }
        ?>
