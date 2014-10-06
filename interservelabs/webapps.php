<?php
include_once('includes/header.php');


if (isset($_GET['id'])) {

    Post('webapps', $_GET['id']);
} else {
    ?>
    <h2 class="uk-h2">Web Applications:</h2>
    <?php
    PostLoop('webapps');
};
?>
<hr class="uk-article-divider">
<?php
include_once('includes/footer.php');
