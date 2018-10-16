<?php $title = '404! - iRez, Solutions Informatiques'; ?>
      
<?php ob_start(); ?>        
    <main role="main">
        <div class="text-wrapper_404">
            <div class="title_404" data-content="404">
                404
            </div>

            <div class="subtitle_404">
                Oops, la page que vous recherchez n'existe pas.
            </div>

            <div class="buttons_404">
                <a class="button_404" href="/">Retour à la page d'accueil</a>
            </div>
        </div>
    </main>   
<?php $content = ob_get_clean(); ?>
        
<?php require('templateView.php') ?>