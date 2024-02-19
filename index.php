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
require_once('model/validate.php');
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

        $firstName = '';
        $lastName = '';
        $email = '';
        $state = '';
        $phoneNumber = '';

        if (validFirstName($_POST['firstName'])) {
            $firstName = $_POST["firstName"];
        } else {
            $f3->set('errors["firstName"]', 'invalid firstname');
        }

        if (validLastName($_POST['lastName'])) {
            $lastName = $_POST["lastName"];
        } else {
            $f3->set('errors["lastName"]', 'invalid lastName');
        }

        if (validEmail($_POST['email'])) {
            $email = $_POST["email"];
        } else {
            $f3->set('errors["email"]', 'invalid email');
        }

        if (validPhone($_POST['phoneNumber'])) {
            $phoneNumber = $_POST["phoneNumber"];
        } else {
            $f3->set('errors["phoneNumber"]', 'invalid phone Number');
        }

        if (empty($f3->get('errors'))) {
            $state = $_POST['state'];
            $f3->set('SESSION.firstName', $firstName);
            $f3->set('SESSION.lastName', $lastName);
            $f3->set('SESSION.email', $email);
            $f3->set('SESSION.state', $state);
            $f3->set('SESSION.phoneNumber', $phoneNumber);

            $f3->reroute('experience');
        }
    }

    $view = new Template();
    echo $view->render('views/personal.html');
});
$f3->route('GET|POST /experience', function ($f3) {

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $biography = '';
        $githubLink = '';
        $yearsOfExperience = '';
        $relocate = '';

        if (validGithub($_POST['githubLink'])) {
            $githubLink = $_POST["githubLink"];
        } else {
            $f3->set('errors["githubLink"]', 'invalid Github Link');
        }
        if (validExperience($_POST['yearsOfExperience'])) {
            $yearsOfExperience = $_POST["yearsOfExperience"];
        } else {
            $f3->set('errors["yearsOfExperience"]', 'invalid years Of Experience');
        }
        if (empty($f3->get('errors'))) {
            $biography = $_POST['biography'];
            $relocate = $_POST['relocate'];
            $f3->set('SESSION.biography', $biography);
            $f3->set('SESSION.githubLink', $githubLink);
            $f3->set('SESSION.yearsOfExperience', $yearsOfExperience);
            $f3->set('SESSION.relocate', $relocate);

            $f3->reroute('jobOpenings');
        }
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
