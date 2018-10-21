<?php $title = 'Plan du site - iRez, Solutions Informatiques'; ?>
      
<?php ob_start(); ?>        
    <main role="main">
        <div class="container">
            <h1 class="text-center">Plan du site</h1>
            <ul>
                <li><a href="/">Accueil</a></li>
                <li><a href="/tarifs">Tarifs</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/mentions-légales">Mentions légales</a></li>
                <li><a href="/politique-de-confidentialite">Politique de confidentialité</a></li>
            <ul>
        </div>
    </main>   
<?php $content = ob_get_clean(); ?>
        
<?php require('templateView.php') ?>