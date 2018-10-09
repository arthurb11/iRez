<?php

require('../view/contactView.php'); //ici on appelle la vue




function dbConnect() {
    try
    {
        return new PDO('mysql:host=localhost;dbname=irez;charset=utf8','root', '');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}


function fieldsArefilled() {
    if(!empty($_POST["name"]) AND !empty($_POST["first_name"]) AND !empty($_POST["email"]) AND !empty($_POST["content"])) {
        return true;
    }
    return false;
}







    




