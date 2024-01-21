<?php
/* Ryder Dettloff
* January 2024
* https://ryderdettloff.greenriverdev.com/328/diner/
* This is my Controller
*/

//Display Errors
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload file

require_once ('vendor/autoload.php');
//instance method
$f3 = Base::instance();

//Define a default route
$f3->route('GET /', function() {
    //echo "Pet Home";
    $view= new Template();
    echo $view->render('views/home.html');
});
//run fat-free
$f3->run();