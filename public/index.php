<?php




$path = ltrim($_SERVER['REQUEST_URI'], '/');    // Trim leading slash(es)
$elements = explode('/', $path);                // Split path on slashes
if(empty($elements[0])) {                       // No path elements means home
    require '../view/homeView.php';
} else switch(array_shift($elements))            
{
    case 'homeView.php':
        require '../view/homeView.php';
        break;
    case 'tarifs':
        require '../view/tarifsView.php';
        break;
    case 'tarifsView.php':
        require '../view/tarifsView.php';
        break;
    case 'contact':
        require '../controller/contactController.php';
        break;
    case 'contactController.php':
        require '../controller/contactController.php';
        break;
    case 'contactView.php':
        require '../controller/contactController.php';
        break;
    case 'mentions-legales':
        require '../view/mentionsLegalesView.php';
        break;
    case 'mentionsLegalesView.php':
        require '../view/mentionsLegalesView.php';
        break;
    case 'policyView.php':
        require '../view/policyView.php';
        break;
    case 'policy':
        require '../view/policyView.php';
        break;
    default:
        require '../view/404View.php';
        break;
}