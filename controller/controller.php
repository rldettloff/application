<?php

class Controller {

    public function __construct($f3)
    {
        $this->f3 = $f3;
    }

    public function home()
    {
        $view = new Template();
        echo $view->render('views/home.html');
    }
    public function personal()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $email = $_POST['email'];
            $state = $_POST['state'];
            $phoneNumber = $_POST['phoneNumber'];
            $subscribeMailingLists = isset($_POST['subscribeMailingLists']);

            if (model::validFirstName($_POST['firstName'])) {
                $firstName = $_POST["firstName"];
            } else {
                $this->f3->set('errors["firstName"]', 'invalid firstname');
            }

            if (model::validLastName($_POST['lastName'])) {
                $lastName = $_POST["lastName"];
            } else {
                $this->f3->set('errors["lastName"]', 'invalid lastName');
            }

            if (model::validEmail($_POST['email'])) {
                $email = $_POST["email"];
            } else {
                $this->f3->set('errors["email"]', 'invalid email');
            }

            if (model::validPhone($_POST['phoneNumber'])) {
                $phoneNumber = $_POST["phoneNumber"];
            } else {
                $this->f3->set('errors["phoneNumber"]', 'invalid phone Number');
            }

            if (empty($this->f3->get('errors'))) {
                if ($subscribeMailingLists) {
                    $applicant = new Applicant_SubscribedToLists($firstName, $lastName, $email, $state, $phoneNumber);
                } else { //gets same data however applicants subscribed to list will inherit the subcribed class.
                    $applicant = new Applicant($firstName, $lastName, $email, $state, $phoneNumber);
                }

                $this->f3->reroute('experience');
                return;
            }
        }

        // Load personal information form
        $view = new Template();
        echo $view->render('views/personal.html');
    }


    public function experience()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $biography = '';
            $githubLink = '';
            $yearsOfExperience = '';
            $relocate = '';

            if (isset($_POST['githubLink']) and model::validGithub($_POST['githubLink'])) {
                $githubLink = $_POST['githubLink'];
            } else {
                $this->f3->set('errors["githubLink"]', "Invalid Github Link");
            }

            if (isset($_POST['yearsOfExperience']) and model::validExperience($_POST['yearsOfExperience'])) {
                $yearsOfExperience = $_POST['yearsOfExperience'];
            } else {
                $this->f3->set('errors["yearsOfExperience"]', "Please select years of experience");
            }

            if (empty($this->f3->get('errors'))) {
                $biography = $_POST['biography'];
                $relocate = $_POST['relocate'];
                $this->f3->set('SESSION.biography', $biography);
                $this->f3->set('SESSION.githubLink', $githubLink);
                $this->f3->set('SESSION.yearsOfExperience', $yearsOfExperience);
                $this->f3->set('SESSION.relocate', $relocate);

                $this->f3->reroute('jobOpenings');
            }
        }

        $this->f3->set('yearsOfExperience', DataLayer::getExperience());

        $newView = new Template();
        echo $newView->render('views/experience.html');
    }

    public function jobOpenings()
    {
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


            $this->f3->set('SESSION.softwareDevelopmentJobs', $softwareDevelopmentJobs);
            $this->f3->set('SESSION.industryVerticals', $industryVerticals);

            $this->f3->reroute('summary');
        }
        $newView = new Template();
        echo $newView->render('views/jobOpenings.html');
    }

    public function summary()
    {
        $newView = new Template();
        echo $newView->render('views/summary.html');
    }

}