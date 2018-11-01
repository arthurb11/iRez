<?php $title = 'Plan du site - iRez, Solutions Informatiques'; ?>
      
<?php ob_start(); ?>        
    <main role="main">
        <section id="plan">
            <div class="container">
                <h2 class="py-4 m-5 text-center text-uppercase">Plan du site</h2>
                <ul>
                    <li><a href="/">Accueil</a></li>
                    <li><a href="/tarifs">Tarifs</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/mentions-légales">Mentions légales</a></li>
                    <li><a href="/politique-de-confidentialite">Politique de confidentialité</a></li>
                <ul>
            </div>
        </section>
    </main>   
<?php $content = ob_get_clean(); ?>
        
<?php require('templateView.php') ?>