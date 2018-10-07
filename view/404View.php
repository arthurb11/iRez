<?php $title = '404! - iRez, Solutions Informatiques'; ?>
      
<?php ob_start(); ?>        
    <main role="main">
        <p style="color:black; margin-top: 200px;">Erreur 404!</p>     
    </main>   
<?php $content = ob_get_clean(); ?>
        
<?php require('templateView.php') ?>