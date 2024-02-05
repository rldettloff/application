<?php
/* Ryder Dettloff
* January 2024
* https://ryderdettloff.greenriverdev.com/328/application/
* This is my Controller
*/

// Display Errors
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require the autoload file
require_once('vendor/autoload.php');

// Instance method
$f3 = Base::instance();

// Define a default route
$f3->route('GET /', function () {
    // Load the home view
    $view = new Template();
    echo $view->render('views/home.html');
});


$f3->route('GET /personal', function () {

    $newView = new Template();
    echo $newView->render('views/personal.php');
});
$f3->route('GET /experience', function () {

    $newView = new Template();
    echo $newView->render('views/experience.php');
});
$f3->route('GET /jobOpenings', function () {

    $newView = new Template();
    echo $newView->render('views/jobOpenings.php');
});
$f3->route('GET /summary', function () {

    $newView = new Template();
    echo $newView->render('views/summary.php');
});
$f3->route('GET /home', function () {
    // Load the home view
    $newView = new Template();
    echo $newView->render('views/home.html');
});


// Run Fat-Free
$f3->run();
?>
