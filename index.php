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
require_once('validation.php');
// Instance method
$f3 = Base::instance();


// Define a default route
$f3->route('GET /', function () {
    // Load the home view
    $view = new Template();
    echo $view->render('views/home.html');
});


$f3->route('GET|POST /personal', function ($f3) {


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $state = $_POST['state'];
        $phoneNumber = $_POST['phoneNumber'];

        $f3->set('SESSION.firstName', $firstName);
        $f3->set('SESSION.lastName', $lastName);
        $f3->set('SESSION.email', $email);
        $f3->set('SESSION.state', $state);
        $f3->set('SESSION.phoneNumber', $phoneNumber);

        $f3->reroute('experience');
    }

    $view = new Template();
    echo $view->render('views/personal.html');

});
$f3->route('GET|POST /experience', function ($f3) {

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $biography = $_POST['biography'];
        $githubLink = $_POST['githubLink'];
        $yearsOfExperience = $_POST['yearsOfExperience'];
        $relocate = $_POST['relocate'];

        $f3->set('SESSION.biography', $biography);
        $f3->set('SESSION.githubLink', $githubLink);
        $f3->set('SESSION.yearsOfExperience', $yearsOfExperience);
        $f3->set('SESSION.relocate', $relocate);

        $f3->reroute('jobOpenings');
    }

    $newView = new Template();
    echo $newView->render('views/experience.html');
});
$f3->route('GET|POST /jobOpenings', function ($f3) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (isset($_POST['softwareDevelopmentJobs'])) {
            $softwareDevelopmentJobs = implode(', ', $_POST['softwareDevelopmentJobs']);
        }else{
            $softwareDevelopmentJobs = "None Selected";
        }
        if (isset($_POST['industryVerticals'])) {
            $industryVerticals = implode(', ', $_POST['industryVerticals']);
        }else{
            $industryVerticals = "None Selected";
        }


        $f3->set('SESSION.softwareDevelopmentJobs', $softwareDevelopmentJobs);
        $f3->set('SESSION.industryVerticals', $industryVerticals);

        $f3->reroute('summary');
    }
    $newView = new Template();
    echo $newView->render('views/jobOpenings.html');
});
$f3->route('GET|POST /summary', function () {

    $newView = new Template();
    echo $newView->render('views/summary.html');
});
$f3->route('GET /home', function () {
    // Load the home view
    $newView = new Template();
    echo $newView->render('views/home.html');
});


// Run Fat-Free
$f3->run();
?>
