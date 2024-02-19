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
require_once('model/DataLayer.php');
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

        if (validate::validFirstName($_POST['firstName'])) {
            $firstName = $_POST["firstName"];
        } else {
            $f3->set('errors["firstName"]', 'invalid firstname');
        }

        if (validate::validLastName($_POST['lastName'])) {
            $lastName = $_POST["lastName"];
        } else {
            $f3->set('errors["lastName"]', 'invalid lastName');
        }

        if (validate::validEmail($_POST['email'])) {
            $email = $_POST["email"];
        } else {
            $f3->set('errors["email"]', 'invalid email');
        }

        if (validate::validPhone($_POST['phoneNumber'])) {
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

            $this->$f3->reroute('experience');
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

        if (isset($_POST['githubLink']) and validate::validGithub($_POST['githubLink'])) {
            $githubLink = $_POST['githubLink'];
        } else {
            $f3->set('errors["githubLink"]', "Invalid Github Link");
        }

        if (isset($_POST['yearsOfExperience']) and validate::validExperience($_POST['yearsOfExperience'])) {
            $yearsOfExperience = $_POST['yearsOfExperience'];
        } else {
            $f3->set('errors["yearsOfExperience"]', "Please select years of experience");
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

    $f3->set('yearsOfExperience', DataLayer::getExperience());

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
