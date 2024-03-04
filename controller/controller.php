<?php
/**
 * Ryder Dettloff
 * this is my controller which handles routing
 * March 2024
 **/
class controller
{

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
            $mailingListCheckbox = isset($_POST['mailingListCheckbox']);

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
                if ($mailingListCheckbox) {
                    $applicant = new Applicant_SubscribedToLists($firstName, $lastName, $email, $state, $phoneNumber);
                } else { //gets same data however applicants subscribed to list will inherit the subcribed class.
                    $applicant = new Applicant($firstName, $lastName, $email, $state, $phoneNumber);
                }
                $_SESSION['applicant'] = $applicant; //create new session to store applicant dat
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
            // Retrieve form data
            $biography = $_POST['biography'];
            $githubLink = $_POST['githubLink'];
            $yearsOfExperience = $_POST['yearsOfExperience'];
            $relocate = $_POST['relocate'];
            //get the session information
            if (isset($_SESSION['applicant'])) {
                $applicant = $_SESSION['applicant'];
                if (!empty($githubLink) && model::validGithub($githubLink)) {
                    $applicant->setGithubLink($githubLink);
                } else {
                    $this->f3->set('errors["githubLink"]', "Invalid Github Link");
                }

                if (!empty($yearsOfExperience) && model::validExperience($yearsOfExperience)) {
                    $applicant->setYearsOfExperience($yearsOfExperience);
                } else {
                    $this->f3->set('errors["yearsOfExperience"]', "Please select years of experience");
                }

                if (empty($this->f3->get('errors'))) {
                    $applicant->setBiography($biography);
                    $applicant->setRelocate($relocate);
                    $applicant->setGithub($githubLink);
                    $applicant->setYears($yearsOfExperience);


                    $_SESSION['applicant'] = $applicant;
                }
            }
            $this->f3->reroute('jobOpenings');
            return;
        }

        // Load the experience form
        $this->f3->set('yearsOfExperience', DataLayer::getExperience());
        $newView = new Template();
        echo $newView->render('views/experience.html');
    }


    public function jobOpenings()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Check if the applicant session is set and not null
            if (isset($_SESSION['applicant']) && $_SESSION['applicant'] != null) {
                $applicant = $_SESSION['applicant'];

                // Perform validation checks
                if (isset($_POST['softwareDevelopmentJobs'])) {
                    $softwareDevelopmentJobs = implode(', ', $_POST['softwareDevelopmentJobs']);
                    $applicant->setSoftwareDevelopmentJobs($softwareDevelopmentJobs);

                } else {
                    $softwareDevelopmentJobs = "None Selected";
                }
                if (isset($_POST['industryVerticals'])) {
                    $industryVerticals = implode(', ', $_POST['industryVerticals']);
                } else {
                    $industryVerticals = "None Selected";
                }

                // Update session with job openings info
                $applicant->setSoftwareDevelopmentJobs($softwareDevelopmentJobs);
                $applicant->setIndustryVerticals($industryVerticals);
                $_SESSION['applicant'] = $applicant;


            }
            $this->f3->reroute('summary');
            return;
        }

        //render job openings
        $newView = new Template();
        echo $newView->render('views/jobOpenings.html');
    }


    public function summary()
    {
        //check session data
        if (isset($_SESSION['applicant'])) {
            $applicant = $_SESSION['applicant'];
            $this->f3->set('applicant', $applicant);

            $view = new Template();
            echo $view->render('views/summary.html');

        }
    }
}