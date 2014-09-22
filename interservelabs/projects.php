<?php
include_once('includes/header.php');

if (!$_GET['id']){
  ?>
<h2 class="uk-h2">Projects:</h2>
<?php
    
    PostLoop('projects');  
}else{
    Post('projects',$_GET['id']);     
};


?>
<hr class="uk-article-divider">
<?php

include_once('includes/footer.php');