<?
$router->get('/', 'HomeController@index');
?>

<?php

use App\Controllers\HomeController;

// Route vers la page d'accueil
$router->get('/', [HomeController::class, 'index']);
?>



<?php
$router->get('/', 'HomeController@index');
?>