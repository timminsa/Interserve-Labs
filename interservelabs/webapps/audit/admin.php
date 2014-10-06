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
        <title>Interserve Labs - Maximo Audit Viewer</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="//interservelabs.com/css/uikit.gradient.min.css" />
        <script src="//interservelabs.com/js/jquery-1.11.1.min.js"></script>
        <script src="//interservelabs.com/js/uikit.min.js"></script>
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css" />
        <script src="//cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
        <script src="js/maximopost.js"></script>
    </head>

    <body class="uk-height-1-1">


        <div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom">

            <nav class="uk-navbar uk-margin-large-bottom">
                <a class="uk-navbar-brand uk-hidden-small" href="index.php"><img  width="36" height="36" src="http://interservelabs.com/image/interserve-hydra.svg" alt="home"></a>
                <ul class="uk-navbar-nav uk-hidden-small">
                    <li>
                        <a href="./admin.php">Admin</a>
                    </li>
                </ul>
                <div class="uk-navbar-brand uk-hidden-small">Maximo Audit Viewer</div>
                <div class="uk-navbar-flip">
                    <ul class="uk-navbar-nav uk-hidden-small">
                        <li>
                            <a href="/login/index.php?logout">Log Out</a>
                        </li>
                    </ul>
                </div>
                <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas=""></a>
                <div class="uk-navbar-brand  uk-visible-small">Home</div>
                <span class="uk-navbar-center uk-navbar-nav"></span> 
            </nav>    



            <div class="uk-grid" data-uk-grid-margin="">
                <div class="uk-width-medium-1-1">

                    <button id="getOS" class="uk-button uk-button-primary" type="button">Refresh    <i class="uk-icon-refresh"></i></button>

                    <div id="ddObjStruct" class="uk-button-dropdown" data-uk-dropdown="{mode:'click'}">
                        <button class="uk-button">Object Structures   <i class="uk-icon-caret-down"></i></button>
                        <div class="uk-dropdown">
                            <ul id="ulObjStruct" class="uk-nav uk-nav-dropdown">
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="uk-grid" data-uk-grid-margin="10">
                <div class="uk-width-medium-1-1">



                    <button id="getData"  class="uk-button uk-button-primary" type="button">Get Data <i></i></button>
                </div> 
            </div>   
            <div  class="uk-grid" data-uk-grid-margin="10">
                <div  class="uk-width-medium-1-1">
                    <table id="dataResult">
                        <thead>

                        </thead>
                        <tbody>

                        </tbody>
                    </table>



                </div> 
            </div>   

            <hr class="uk-grid-divider">

        </div>
    </body>
</html>