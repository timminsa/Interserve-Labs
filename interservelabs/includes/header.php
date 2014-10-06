<?php
session_start();

include('includes/functions.php');

if (!empty($_SESSION['user_name']) && ($_SESSION['user_logged_in'] == 1)) {
    
} else {

    header("Location: login/index.php");
}
?>
<!DOCTYPE html>
<html lang="en-gb" dir="ltr" class="uk-height-1-1 uk-notouch">
    <head>
        <meta charset="UTF-8">
        <title>Interserve Labs</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/uikit.gradient.min.css" />
        <script src="js/uikit.min.js"></script>



    <body class="uk-height-1-1">


        <div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom">

            <nav class="uk-navbar uk-margin-large-bottom">
                <a class="uk-navbar-brand uk-hidden-small" href="index.php"><img  width="36" height="36" src="./image/interserve-hydra.svg" alt="home"></a>
                <ul class="uk-navbar-nav uk-hidden-small">
                    <li>
                        <a href="projects.php">Projects</a>
                    </li>
                    <li>
                        <a href="webapps.php">Web Applications</a>
                    </li>
                    <li>
                        <a href="blog.php">Blog</a>
                    </li>
                </ul>
                <div class="uk-navbar-flip">
                    <ul class="uk-navbar-nav uk-hidden-small">
                        <li>
                            <a href="./login/index.php?logout">Log Out</a>
                        </li>
                    </ul>
                </div>
                <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas=""></a>
                <div class="uk-navbar-brand uk-navbar-center uk-visible-small">Home</div>
            </nav>