<?php
session_start();

include('functions.php');

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
        <link rel="stylesheet" href="/css/uikit.gradient.min.css" />
        <script src="/js/jquery-1.11.1.min.js"></script>
        <script src="/js/uikit.min.js"></script>
        <script src="js/maximopost.js"></script>

    </head>
    <body class="uk-height-1-1">


        <div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom">

            <nav class="uk-navbar uk-margin-large-bottom">
                <a class="uk-navbar-brand uk-hidden-small" href="index.php"><img  width="36" height="36" src="/image/interserve-hydra.svg" alt="home"></a>
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




            <div class="uk-grid" data-uk-grid-margin="10">
                <div class="uk-width-medium-1-1">
                    <form class="uk-form uk-form-horizontal">
                        <div class="uk-form-row">
                            <label class="uk-form-label" for="ulObjStruct">Object Structure:</label>
                            <select id="selObjStruct" class="uk-form-width-large">
                                <option>Select One...</option>
                            </select>
                        </div>
                        <div class="uk-form-row">
                            <label class="uk-form-label">Description:</label>
                            <input id="txtObjDescription" type="text" placeholder="" class="uk-form-width-large" disabled>
                        </div>
                        <div class="uk-form-row">
                            <label class="uk-form-label">Main Object:</label>
                            <input id="txtMainObj" type="text" placeholder="" class="uk-form-width-large" disabled>
                        </div>
                        <div class="uk-form-row uk-form-right">
                            <button id="getOS" class="uk-button uk-button-primary" type="button">Refresh Objects   <i class="uk-icon-refresh"></i></button>
                        </div>

                    </form>
                </div>
            </div>
            <hr class="uk-grid-divider">
            <h3 class="uk-h3">Filters:</h3>
            <div class="uk-grid" data-uk-grid-margin="10">
                <div class="uk-width-medium-1-1">
                    <form class="uk-form uk-form-horizontal">
                        <table class="uk-table uk-table-striped uk-table-condensed" id="filterTable">
                            <thead>
                            <th>Field Name</th>
                            <th>Operator</th>
                            <th>Value</th>
                            <th></th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><select  class="uk-form-width-small"></select></td>
                                    <td><select  class="uk-form-width-small">
                                            <option>=</option>
                                            <option>&lt;=</option>
                                            <option>&gt;=</option>
                                            <option>LIKE</option>
                                        </select></td>
                                    <td><input  type="text"  class="uk-form-width-small" ></td>
                                    <td><button  class="uk-button uk-button-danger uk-float-right removefilter" type="button">Remove <i class="uk-icon-minus"></i></button></td>
                                </tr>   
                            </tbody>
                        </table>
                        <button id="addFilter" class="uk-button uk-button-primary uk-float-right" type="button">Add Filter <i class="uk-icon-plus"></i></button>
                    </form>
                </div>
            </div>
            <div class="uk-grid" data-uk-grid-margin="10">
                <div class="uk-width-medium-1-1">
                    <button id="getData"  class="uk-button uk-button-primary" type="button">Get Data <i class="uk-icon-refresh"></i></button>
                </div> 
            </div>   
            <hr class="uk-grid-divider">
            <div  class="uk-grid" data-uk-grid-margin="10">
                <div  class="uk-width-medium-1-1">
                    <table class="uk-table uk-table-hover uk-table-striped uk-table-condensed" id="dataResult">
                        <thead>

                        </thead>
                        <tbody>

                        </tbody>
                    </table>



                </div> 
            </div>   

            <hr class="uk-grid-divider">

            <div  class="uk-grid" data-uk-grid-margin="1">
                <div  class="uk-width-medium-1-1">
                    <button class="uk-button" type="button">Download as HTML <i class="uk-icon-file-code-o"></i></button>
                    <button class="uk-button" type="button">Download as CSV <i class="uk-icon-file-text-o"></i></button>
                    <button class="uk-button" type="button">Download as Excel <i class="uk-icon-file-excel-o"></i></button>
                </div>

            </div>
            <hr class="uk-grid-divider">
        </div>
    </body>
</html>