<?php
session_start();


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
        <link rel="stylesheet" href="//interservelabs.com/css/uikit.gradient.min.css" />
        <script src="js/uikit.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


    <body class="uk-height-1-1">


        <div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom">

            <nav class="uk-navbar uk-margin-large-bottom">
                <a class="uk-navbar-brand uk-hidden-small" href="index.php"><img  width="36" height="36" src="http://interservelabs.com/image/interserve-hydra.svg" alt="home"></a>
                <ul class="uk-navbar-nav uk-hidden-small">
                    <li>
                        <a href="#">Projects</a>
                    </li>
                    <li>
                        <a href="#">Web Applications</a>
                    </li>
                    <li>
                        <a href="#">Blog</a>
                    </li>
                    <li>
                        <a href="./login/index.php?logout">Log Out</a>
                    </li>

                </ul>
                <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas=""></a>
                <div class="uk-navbar-brand uk-navbar-center uk-visible-small">Home</div>
            </nav>

            <div class="uk-grid" data-uk-grid-margin="">
                <div class="uk-width-medium-1-1">

                    <div class="uk-vertical-align uk-text-center" style="background: url(&#39;data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNi4wLjQsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkViZW5lXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB3aWR0aD0iMTEzMHB4IiBoZWlnaHQ9IjQ1MHB4IiB2aWV3Qm94PSIwIDAgMTEzMCA0NTAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDExMzAgNDUwIiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxyZWN0IGZpbGw9IiNGNUY1RjUiIHdpZHRoPSIxMTMwIiBoZWlnaHQ9IjQ1MCIvPg0KPC9zdmc+DQo=&#39;) 50% 0 no-repeat; height: 350px;">
                        <div class="uk-vertical-align-middle uk-width-1">
                            <h1 class="uk-heading-large">Welcome to Interserve Labs</h1>
                            <p class="uk-text-large">A place to share &amp; expand new ideas.</p>
                            <p>
                                <a class="uk-button uk-button-primary uk-button-large" href="http://getuikit.com/docs/layouts_frontpage.html#">Learn More</a>
                            </p>
                        </div>
                    </div>

                </div>
            </div>


            <hr class="uk-grid-divider">
            <h2 class="uk-h2">Projects:</h2>
            <div class="uk-grid" data-uk-grid-margin="10">
                <div class="uk-width-medium-1-1">
                    <div class="uk-panel uk-panel-box">
                        <p><strong>Maximo - Audit Table Viewer:</strong> Using REST API to view audit table data.<a class="uk-button uk-button-primary uk-margin-left uk-float-right" href="http://getuikit.com/docs/layouts_frontpage.html#">More Info...</a></p>
                    </div>
                </div>
            </div>
            <div class="uk-grid" data-uk-grid-margin="10">
                <div class="uk-width-medium-1-1">
                    <div class="uk-panel uk-panel-box">
                        <p><strong>Maximo - CSV to XML Converter:</strong> Validate and convert data to XML before loading in Maximo via the MIF.<a class="uk-button uk-button-primary uk-margin-left uk-float-right" href="http://getuikit.com/docs/layouts_frontpage.html#">More Info...</a></p>
                    </div>
                </div>
            </div>
            <div class="uk-grid" data-uk-grid-margin="10">
                <div class="uk-width-medium-1-1">
                    <div class="uk-panel uk-panel-box">
                        <p><strong>Maximo - Themes:</strong> Change the look and feel of Maximo using themes.<a class="uk-button uk-button-primary uk-margin-left uk-float-right" href="http://getuikit.com/docs/layouts_frontpage.html#">More Info...</a></p>
                    </div>
                </div>
            </div>
            <div class="uk-grid" data-uk-grid-margin="10">
                <div class="uk-width-medium-1-1">
                    <div class="uk-panel uk-panel-box">
                        <p><strong>Maximo - Location Identifier Replacement:</strong> Change the unique identifier of a location record.<a class="uk-button uk-button-primary uk-margin-left uk-float-right" href="http://getuikit.com/docs/layouts_frontpage.html#">More Info...</a></p>
                    </div>
                </div>
            </div>


        </div>
        <div id="offcanvas" class="uk-offcanvas">
            <div class="uk-offcanvas-bar">
                <ul class="uk-nav uk-nav-offcanvas">
                    <li>
                        <a href="#">Web Applications</a>
                    </li>
                    <li>
                        <a href="#">Blog</a>
                    </li>
                    <li>
                        <a href="#">Documentation</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>



    </body>
</html>


