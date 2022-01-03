<?php
// Load Flight library
require'../includes/flight-master/flight/Flight.php';
// Load Smarty library
require'../includes/smarty-3.1.35/libs/Smarty.class.php';

require "routes/routes.php";


Flight::register('view', 'Smarty', array(), function($smarty){
    $smarty->template_dir = './templates/';
    $smarty->compile_dir = './templates_c/';
    $smarty->config_dir = './config/';
    $smarty->cache_dir = './cache/';
});

Flight::map('render', function($template, $data){
    Flight::view()->assign($data);
    Flight::view()->display($template);
});
// Lancement de la  session
session_start();

// Assignation d'une session à l'utilisateur
if (isset($_SESSION['user']))
{
    Flight::view()->assign('user', $_SESSION['user']);
}
Flight::start();
?>