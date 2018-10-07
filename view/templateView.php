<!doctype html>
<html lang="en">
    <head>
      
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link rel="stylesheet" href="asserts/css/style.css">
        <title> <?= $title ?> </title>
    </head>
    <header>
        <!-- Navigation -->
        <div class="container-fluid fixed-top">
            <div class="row">
                <div class="col-12 no-padding-nav">
                    <nav class="navbar navbar-expand-lg navbar-light bg-anthra">  
                        <a class="navbar-brand text-white py-3" href="#"><img class="img-fluid logonav" src="asserts/img/logo-test5.png" alt="..."></a>
                        <button class="navbar-toggler bg-dark " type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        
                        <div class="collapse navbar-collapse text-uppercase justify-content-end" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-item nav-link text-white active" href="/">Accueil<span class="sr-only">(current)</span></a>
                                <a class="nav-item nav-link text-white" href="tarifs">Tarifs</a>
                                <a class="nav-item nav-link text-white" href="contact">Contact</a>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-12 no-padding-nav">
                    <div class="bg-black-opacity" id="contact-header">
                        <div class="text-right text-white">
                            <ul class="list-inline pt-2" id="contact-ul">
                                <li class="list-inline-item"><i class="fas fa-phone"></i></li>
                                <li class="list-inline-item">07 00 00 00 00</li>
                                <li class="list-inline-item">|</li>
                                <li class="list-inline-item"><i class="fas fa-envelope"></i></li>
                                <li class="list-inline-item">irez@gmail.com</li>
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

    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</html>




