<?php $title = 'Home - iRez, Solutions Informatiques'; ?>

<?php ob_start(); ?>        
<main role="main">
    <article>
        <section id="carousel-home">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 m-0 p-0">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active" style="background-image: url('asserts/img/slide-a.jpg');"></div>
                                <div class="carousel-item" style="background-image: url('asserts/img/slide-b.jpg');"></div>
                                <div class="carousel-item" style="background-image: url('asserts/img/slide-c.jpg');"></div>
                            </div>
                        </div>
                        <div id="presentation">
                            <div class="text-center text-white">
                                <h1 class="text-uppercase">Solutions Informatiques</h1>
                                <p class="text-md-center">Spécialisé depuis de nombreuses années dans le domaine informatique et situé dans la Zone des Paluds entre Aubagne et Gémenos, iRez Solutions Informatique vous propose aussi bien des services en atelier qu'à domicile pour les particuliers et les professionnels. Du dépannage de votre machine à l'assemblage de votre nouveau PC, de la sauvegarde de vos données à l'installation de votre réseau, nous répondrons à tous vos besoins.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="text-justify" id="services">
            <h2 class="py-4">Nous vous proposons tous types de services et conseils en informatique</h2>
            <!-- <ul class="list-unstyled">
                <li class="py-2">Dépannage tout support Windows et MacOs (PC portable, unité centrale, téléphone portable, tablette ...)</li>
                <li class="py-2">Dépannage en atelier et à domicile</li>
                <li class="py-2">Conseils personnalisés pour un achat, une configuration, périphériques, gaming, musique informatique etc…</li>
                <li class="py-2">Formation à domicile</li>
                <li class="py-2">Aide et assistance fournisseur d'accès internet</li>
                <li class="py-2">Assemblage d'unité centrale : bureautique, multimédia, gamer ou même M.A.O. (Home Studio)</li>
                <li class="py-2">Installation et nettoyage de système d'exploitation</li>
                <li class="py-2">Amélioration des performances de votre machine</li>
                <li class="py-2">Récupération et sauvegarde de données (Serveur N.A.S.)</li>
                <li class="py-2">Et bien plus encore. N'hésitez pas à nous contacter par téléphone au 06.06.06.06.06 ou via <a href="contact">le formulaire de contact</a></li>
            </ul>
            <p class="py-2">A tout problème sa solution.</p> -->
            <div class="blog-card">
                <div class="meta">
                    <div class="photo" style="background-image: url(https://storage.googleapis.com/chydlx/codepen/blog-cards/image-1.jpg)"></div>
                </div>
                <div class="description">
                    <h1>Dépannage tout support</h1>
                    <h2>Windows et MacOs</h2>
                    <p>Nous réparons votre ordinateur quel que soit le support: PC portable, unité centrale, téléphone portable, tablette... </p>
                    <p class="read-more">
                        <a href="#">Read More</a>
                    </p>
                </div>
            </div>

            <div class="blog-card alt">
                <div class="meta">
                    <div class="photo" style="background-image: url(https://storage.googleapis.com/chydlx/codepen/blog-cards/image-2.jpg)"></div>
                </div>
                <div class="description">
                    <h1>Mastering the Language</h1>
                    <h2>Java is not the same as JavaScript</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim dicta praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
                    <p class="read-more">
                        <a href="#">Read More</a>
                    </p>
                </div>
            </div>

        </section> 
    </article> 
</main>   
<?php $content = ob_get_clean(); ?>

<?php require('templateView.php') ?>

