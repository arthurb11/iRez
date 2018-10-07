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
    
        <section id="services">
            <h1>SERVICES</h1> 
        </section> 
    </article> 
</main>   
<?php $content = ob_get_clean(); ?>
        
<?php require('templateView.php') ?>

        