<?php
/* Ryder Dettloff
* January 2024
* https://ryderdettloff.greenriverdev.com/328/application/
* This is my Controller
*/

// Display Errors
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_save_path('/home/ryderdet/public_html');
// Require the autoload file
require_once('vendor/autoload.php');
require_once('controller/controller.php');
require_once('model/model.php');
require_once('model/DataLayer.php');
require_once('model/Applicant.php');

session_start();

// Instance method
$f3 = Base::instance();


$controller = new Controller($f3);

// Define a default route
$f3->route('GET /', function () use ($controller) {
    $controller->home();
});

$f3->route('GET|POST /personal', function ($f3){
    $GLOBALS['controller']->personal();
});

$f3->route('GET|POST /experience', function ($f3){
    $GLOBALS['controller']->experience();});

$f3->route('GET|POST /jobOpenings', function ($f3) {
    $GLOBALS['controller']->jobOpenings();});

$f3->route('GET /summary', function (){
    $GLOBALS['controller']->summary();});

$f3->route('GET /home', function (){
    $GLOBALS['controller']->home();});

// Run Fat-Free
$f3->run(); //instance method
