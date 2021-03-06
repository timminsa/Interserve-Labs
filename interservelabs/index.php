<?php
include_once('includes/header.php');
?>



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

<?php
PostLoop('projects');
?>

<hr class="uk-grid-divider">
<h2 class="uk-h2">Web Applications:</h2>

<?php
PostLoop('webapps');
?>
<hr class="uk-grid-divider">
<?php
include_once('includes/footer.php');
