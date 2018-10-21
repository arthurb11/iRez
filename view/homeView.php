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
                                    <p class="text-md-center">Spécialisé depuis de nombreuses années dans le domaine informatique et situé dans la Zone des Paluds entre Aubagne et Gémenos, iRez Solutions Informatique vous propose aussi bien des services en atelier qu'à domicile pour les particuliers et les professionnels. Du dépannage de votre machine à l'assemblage de votre nouveau PC, de la sauvegarde de vos données à l'installation de votre réseau, nous répondrons à tous vos besoins.<br /><br />
                                    <a href="#services" class="btn btn-primary">Continuer</a>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="text-left" id="services">
            <h2 class="py-4 text-center">Services et conseils en informatique</h2>
            <!-- <ul class="list-unstyled">
                
               
                <li class="py-2">Formation à domicile</li>
                <li class="py-2">Aide et assistance fournisseur d'accès internet</li>

            </ul> -->

            <div class="blog-card">
                <div class="meta">
                    <div class="photo" style="background-image: url(img/1.png)"></div>
                </div>
                <div class="description">
                    <h1>Dépannage tout support</h1>
                    <h2>Windows et Mac</h2>
                    <p>Nous réparons votre ordinateur quel que soit le support: PC portable, unité centrale, téléphone portable, tablette... <strong>Atelier et domicile</strong> </p>
                    <p class="read-more">
                        <a href="#">Read More</a>
                    </p>
                </div>
            </div>

            <div class="blog-card alt">
                <div class="meta">
                    <div class="photo" style="background-image: url(img/2.png)"></div>
                </div>
                <div class="description">
                    <h1>Conseils personnalisés</h1>
                    <h2>Par mail ou telephone</h2>
                    <p>Pour un achat, une configuration, périphériques, gaming, musique assistée par ordinateur...etc</p>
                    <p class="read-more">
                        <a href="#">Read More</a>
                    </p>
                </div>
            </div>

            <div class="blog-card">
                <div class="meta">
                    <div class="photo" style="background-image: url(img/3.jpg)"></div>
                </div>
                <div class="description">
                    <h1>Montage unité centrale</h1>
                    <h2>Adapté à vos besoins</h2>
                    <p>Nous montons et assemblons votre ordinateur adapté à vos besoins: utilisation classique, gaming, M.A.O...</p>
                    <p class="read-more">
                        <a href="#">Read More</a>
                    </p>
                </div>
            </div>

            <div class="blog-card alt">
                <div class="meta">
                    <div class="photo" style="background-image: url(img/4.png)"></div>
                </div>
                <div class="description">
                    <h1>Installation et nettoyage du systeme d'exploitation</h1>
                    <h2>Windows et Mac</h2>
                    <p></p>
                    <p class="read-more">
                        <a href="#">Read More</a>
                    </p>
                </div>
            </div>

            <div class="blog-card">
                <div class="meta">
                    <div class="photo" style="background-image: url(img/5.jpg)"></div>
                </div>
                <div class="description">
                    <h1>Amélioration des performances de votre machine</h1>
                    <h2>Windows et Mac</h2>
                    <p></p>
                    <p class="read-more">
                        <a href="#">Read More</a>
                    </p>
                </div>
            </div>

            <div class="blog-card alt">
                <div class="meta">
                    <div class="photo" style="background-image: url(img/6.jpg)"></div>
                </div>
                <div class="description">
                    <h1>Récupération et sauvegarde de données </h1>
                    <h2>(Serveur N.A.S.)</h2>
                    <p>Votre disque dur a grillé ou peine à fonctionner, nous pouvons essayer de récupérer vos données avant que votre disque dur ne grille!</p>
                    <p class="read-more">
                        <a href="#">Read More</a>
                    </p>
                </div>
            </div>

            <p class="text-center">Et bien plus encore! <br /> N'hésitez pas à nous contacter par téléphone au <strong>06 36 48 38 29</strong> ou via <a href="/contact">le formulaire de contact</a></p>

        </section> 
    </article> 
</main>   
<?php $content = ob_get_clean(); ?>

<?php require('templateView.php') ?>

