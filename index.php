<?php




$path = ltrim($_SERVER['REQUEST_URI'], '/irez/');    
$elements = explode('/', $path);                
if(empty($elements[0])) {                      
    require 'view/homeView.php';
} else switch(array_shift($elements))            
{
    case 'homeView.php':
        require 'view/homeView.php';
        break;
    case 'tarifs':
        require 'view/tarifsView.php';
        break;
    case 'tarifsView.php':
        require 'view/tarifsView.php';
        break;
    case 'contact':
        require 'controller/contactController.php';
        break;
    case 'contactController.php':
        require 'controller/contactController.php';
        break;
    case 'contactView.php':
        require 'controller/contactController.php';
        break;
    case 'mentions-legales':
        require 'view/mentionsLegalesView.php';
        break;
    case 'mentionsLegalesView.php':
        require 'view/mentionsLegalesView.php';
        break;
    case 'policyView.php':
        require 'view/policyView.php';
        break;
    case 'politique-de-confidentialite':
        require 'view/policyView.php';
        break;
    case 'planView.php':
        require 'view/planView.php';
        break;
    case 'plan-du-site':
        require 'view/planView.php';
        break;
    default:
        require 'view/404View.php';
        break;
}