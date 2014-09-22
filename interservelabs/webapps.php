<?php
include_once('includes/header.php');


if (!$_GET['id']){
  ?>
<h2 class="uk-h2">Web Applications:</h2>
<?php
    
    PostLoop('webapps');  
}else{
    Post('webapps',$_GET['id']);     
};


?>
<hr class="uk-article-divider">
<?php

include_once('includes/footer.php');