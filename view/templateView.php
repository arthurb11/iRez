<!doctype html>
<html lang="fr">
    <head>
        <!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->

        <!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
        <script type="text/javascript">
            window.cookieconsent_options = {"message":"En poursuivant votre navigation sur ce site, vous acceptez l’utilisation de cookies.","dismiss":"J'accepte","learnMore":"Plus d'infos","link":"/policy","theme":"light-floating"};
        </script>

        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js"></script>
        <!-- End Cookie Consent plugin -->

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Noto+Sans" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link rel="stylesheet" href="asserts/css/style.css">
        <link rel="shortcut icon" type="image/png" href="../asserts/img/favicon-irez.png" alt="favicon iRez">
        <title> <?= $title ?> </title>
    </head>
    
    <header>
        <!-- Navigation -->
        <div class="container-fluid fixed-top">
            <div class="row">
                <div class="col-12 no-padding-nav">
                    <nav class="nav navbar navbar-expand-lg navbar-light bg-anthra">  
                        <a class="navbar-brand text-white py-3" href="/"><img class="img-fluid logonav col-lg-5 col-xl-3" src="asserts/img/logo-irez-solutions-informatiques.png" alt="Logo iRez Solutions Informatiques"></a>
                        <button class="navbar-toggler bg-dark " type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        
                        <!-- ces 2 lignes de php pour creer une variable page qui contiendra 
                        l'URL de la page courante pour y inserer la classe active -->
                        <?php $page = $_SERVER['REQUEST_URI']; $page = str_replace("/irez.fr/", "", $page); ?>
                        <!--*********************************************************************************** -->
                        
                        <div class="collapse navbar-collapse text-uppercase justify-content-end col-lg-7 col-xl-9" id="navbarNavAltMarkup">
                            <div class="navbar-nav square">
                                <a <?php if($page == "/"){echo 'class="active"';} ?> class="nav-item nav-link text-white effect-1 dropdown" href="/">Accueil<span class="sr-only">(current)</span></a>
                                <a <?php if($page == "/tarifs"){echo 'class="active"';} ?> class="nav-item nav-link text-white effect-1 dropdown" href="tarifs">Tarifs</a>
                                <a <?php if($page == "/contact"){echo 'class="active"';} ?> class="nav-item nav-link text-white effect-1 dropdown" href="contact">Contact</a>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-12 no-padding-nav">
                    <div class="bg-black-opacity" id="contact-header">
                        <div class="text-right text-white">
                            <ul class="list-inline pt-2" id="contact-ul">
                                <li class="list-inline-item"><i class="fas fa-phone"></i></li>
                                <li class="list-inline-item">06 36 48 38 29</li>
                                <li class="list-inline-item barre_separation">|</li>
                                <li class="list-inline-item"><i class="fas fa-envelope"></i></li>
                                <li class="list-inline-item">irez.solutions.info@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
        <!-- fin Navigation -->  
    </header>
    

    <body>
        <?= $content ?>
    </body>



    <footer>
        <div class="container-fluid bg-anthra" id="footer">
            <div class="text-center text-white py-2">
                <a class="py-2 " href="contact"><i class="fas fa-envelope pt-2"></i></a>
                <p class="pt-3">06 36 48 38 29 | irez.solutions.info@gmail.com</p>
                <p>240 Chemin Saint Martin 13420 Gémenos</p>
            </div>
        </div>
        <div class="container-fluid bg-dark text-white pt-3" id="sous-footer">
            <div class="row">
                <div class="col-md-6 col-sm-6" id="responsive-p">
                    <p>iRez 2018 <span class="barre_separation">|</span> Tous droits réservés ©</p>
                </div>
                <div class="col-md-6 col-sm-6 text-right">
                    <ul class="list-inline">
                        <li class="list-inline-item cacher-element"><a href="/mentions-legales">Mentions légales</a></li>
                        <li class="list-inline-item barre_separation cacher-element">|</li>
                        <li class="list-inline-item cacher-element"><a href="/politique-de-confidentialite">Politique de confidentialité</a></li>
                        <li class="list-inline-item barre_separation cacher-element">|</li>
                        <li class="list-inline-item cacher-element"><a href="/plan-du-site">Plan du site</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- Optional JavaScript -->
    <script src="asserts/js/main.js"></script>
</html>




