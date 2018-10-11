<?php

require('../model/contactRepository.php');


//ici les requetes 


/*********** essai de mailing raté ***********/ 
// $message = $_POST['content'];
// $headers = 'FROM: klamc.sg@gmail.com';

// mail('klamc.sg@gmail.com', 'formulaire de contact' , $message, $headers);
/***********/ 



$error = '';
$error_class = '';



if (filter_has_var(INPUT_POST, 'submit')) {
    $lastname = htmlspecialchars($_POST['name']); 
    $firstname = htmlspecialchars($_POST['first_name']);
    $tel = htmlspecialchars($_POST['tel']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['content']);
    
    $rgx_name = '/[^A-Za-zÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ]/'; 
    $rgx_tel = '/[^0[1-9][0-9]{8}]/';

    if (isset($lastname) AND isset($firstname) AND isset($tel) AND isset($email) AND isset($message)) {
        if (!empty($lastname) AND !empty($firstname) AND isset($tel) AND !empty($email) AND !empty($message)) {
            if (strlen($lastname) > 2 OR strlen($firstname) > 2){
                if (!preg_match($rgx_name, $lastname)){
                    if (!preg_match($rgx_name, $firstname)) {
                        if (!preg_match($rgx_tel, $tel)) {
                            if (strlen($tel) == 0 OR strlen($tel) == 10) {
                                if (filter_var($email, FILTER_VALIDATE_EMAIL) != false ) {
                                    //***************mailing ***************
                                    ini_set("SMTP", "smtp.gmail.com");
        
                                    $mailTo = 'irez.solutions.infos@gmail.com';
                                    $subject = $lastname . ' ' . $firstname . ' via www.irez.fr';
                                    $body = $message;
                                    $headers = 'From: ' . $lastname . ' ' . $firstname . ' ' . '<'.$email.'>' . '| tel: ' . $tel;
        
                                    if (mail($mailTo, $subject, $body, $headers)) {
                                        
                                        $error = 'Merci! Message transmis, nous vous repondrons dans les plus brefs délais!';
                                        $error_class = 'alert-success';

                                        if (!isContactExist($email)) {
                                            insertContactInDatabase();//si le mail a été envoyé, on insere le contact dans la bdd
                                        }
                                    }
                                    else {
                                        $error = 'Votre message ne s\'est pas envoyé, veuillez recommencer';
                                        $error_class = 'alert-danger';  
                                    } 
                                }
                                else{
                                    $error = 'Entrez un mail valide';
                                    $error_class = 'alert-danger';
                                }
                            }
                            else {
                                $error = 'Le numéro de telephone est composé de 10 chiffres';
                                $error_class = 'alert-danger'; 
                            }   
                        }    
                        else {
                            $error = 'Le numéro de telephone est composé de 10 chiffres';
                            $error_class = 'alert-danger';
                        }
                    }
                    else {
                        $error = 'Les chiffres et caractères spéciaux ne sont pas autorisés pour le nom et le prénom';
                        $error_class = 'alert-danger';
                    }
                }
                else{
                    $error = 'Les chiffres et caractères spéciaux ne sont pas autorisés pour le nom et le prénom';
                    $error_class = 'alert-danger';
                }  
            }    
            else{ 
                $error = 'Le nom ET le prénom doivent contenir minimum 3 caracteres';
                $error_class = 'alert-danger';
            } 
        }
        else{
            $error = 'Veuillez remplir tous les champs obligatoires(*)';
            $error_class = 'alert-danger';
        }
    }
    else{
        $error = 'Veuillez remplir tous les champs obligatoires(*)';
        $error_class = 'alert-danger';
    }
}

require('../view/contactView.php'); //ici on appelle la vue


// var_dump($_POST);




