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


$f3->route('GET /apply-now', function () { //confusion with my rerouting
    //getting a 404 error. routing with the apply now button is causing an issue.

    $newView = new Template();
    echo $newView->render('views/personal.php');
});

// Run Fat-Free
$f3->run();
?>
