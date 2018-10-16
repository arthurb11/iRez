<?php


    $request = $_SERVER['REDIRECT_URL'];

    switch ($request) {
        case '/' :
            require __DIR__ . '../index.php';
            break;
        case '' :
            require __DIR__ . '../index.php';
            break;
        case '/about' :
            require __DIR__ . '../tarifs.php';
            break;
        case '/contact' :
            require __DIR__ . '../contact.php';
            break;
        default: 
            require __DIR__ . '../error.php';
            break;
    }


?>