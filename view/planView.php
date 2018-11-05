<?php $title = 'Plan du site - iRez, Solutions Informatiques'; ?>
      
<?php ob_start(); ?>        
    <main role="main">
        <section id="plan">
            <div class="container-fluid">
                <h2 class="py-4 m-5 text-center text-uppercase"> <i class="fas fa-sitemap mr-3"></i>Plan du site</h2>
                <ul class="list-inline list-unstyled text-center" style="padding-top: 100px; ">
                    <li class="list-inline-item"><a href="/">Accueil</a></li>
                    <li class="list-inline-item"><a href="/tarifs">Tarifs</a></li>
                    <li class="list-inline-item"><a href="/contact">Contact</a></li>
                    <li class="list-inline-item"><a href="/mentions-légales">Mentions légales</a></li>
                    <li class="list-inline-item"><a href="/politique-de-confidentialite">Politique de confidentialité</a></li>
                <ul>
            </div>
        </section>
    </main>   
<?php $content = ob_get_clean(); ?>
        
<?php require('templateView.php') ?>