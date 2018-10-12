
<?php $title = 'Me contacter - iRez, Solutions Informatiques'; ?>

<?php ob_start(); ?>        
<main role="main">
    <section id="contact">
        <h1 class="text-center">Me contacter</h1>
        <div class="container-fluid">
        
            <div class="row" id="contact_div">
            
                <div class="my-4 offset-1 col-md-5">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27629.728852277018!2d5.588931234178065!3d43.28876679026767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12c9a3996eea0ba5%3A0xd5c9f5d8e88af14b!2s240+Chemin+de+Saint-Martin%2C+13420+G%C3%A9menos!5e0!3m2!1sfr!2sfr!4v1539079028835" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="my-4 col-md-5">
                <?php if ($error != ''): ?>
                    <div class="alert <?php echo $error_class; ?>"> <?php echo $error; ?> </div>
                <?php endif; ?>
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" class="needs-validation" novalidate>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" class="form-control" name="name" placeholder="Nom *" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>" required minlength="3" maxlength="15">
                                    <div class="invalid-feedback">
                                        Veuillez entrer votre nom <ul><li>3 caractères minimum</li><li>pas de caractères spéciaux</li></ul>
                                    </div>
<!--
                                <div class="valid-feedback">
                                    ok
                                </div>
-->
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="first_name" placeholder="Prénom *" value="<?php echo isset($_POST['first_name']) ? $firstname : ''; ?>" required minlength="3" maxlength="15">
                                    <div class="invalid-feedback">
                                        Veuillez entrer votre prenom <ul><li>3 caractères minimum</li><li>pas de caractères spéciaux</li></ul>
                                    </div>
<!--
                                <div class="valid-feedback">
                                    ok
                                </div>
-->
                            </div>
                            <div class="col">
                                <input type="tel" class="form-control" name="tel" value="<?php echo isset($_POST['tel']) ? $tel : ''; ?>" id="tel_input" placeholder="Téléphone *" required minlength="10" maxlength="10" >
<!--
                                <div class="valid-feedback">
                                    ok
                                </div>
-->
                                <div class="invalid-feedback">
                                    Veuillez entrer votre numéro de téléphone
                                </div>
                            </div> 
                        </div>
                        <div class="my-3">
                            <input type="email" class="form-control" id="mail "name="email" value="<?php echo isset($_POST['email']) ? $email : ''; ?>" placeholder="votreEmail@exemple.fr *" required>
<!--
                            <div class="valid-feedback">
                                ok
                            </div>
-->
                            <div class="invalid-feedback">
                                Veuillez entrer un mail valide
                            </div>
                        </div>
                        <div class="my-3">
                            <textarea class="form-control" rows="11" name="content" value="<?php echo isset($_POST['content']) ? $message : ''; ?>" placeholder="Tapez votre message ici... *" required></textarea>
                            <div class="invalid-feedback">
                                Veuillez taper votre message
                            </div>
                        </div>
                        <div class="mx-auto">
                            <button type="submit" name="submit" class="btn btn-primary">Envoyer</button>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </section>
</main>   
<?php $content = ob_get_clean(); ?>

<?php require('templateView.php'); ?>
