<?php


session_start();


if (!empty($_SESSION['user_name']) && ($_SESSION['user_logged_in'] == 1)) {

 


 } else{
     
     header("Location: login/index.php");
     
 }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet"  type="text/css" href="../css/mainui.css" />
        <!-- jQuery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

        <!-- jQuery UI--> 
        <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

        <script src="../script/ui.js"></script>
    </head>
    <body>
hello
    </body>
</html>


