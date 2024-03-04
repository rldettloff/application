<?php

/**
 * Ryder Dettloff
 * This is my Application class, it creates variables for each applicant
 * March 2024
 */
class Applicant
{
    private $_fname;
    private $_lname;
    private $_email;
    private $_state;
    private $_phone;
    private $_github;
    private $_experience; // Define the property for experience
    private $_relocate;
    private $_bio;

    public function __construct($fname, $lname, $email, $state, $phone)
    {
        $this->_fname = $fname;
        $this->_lname = $lname;
        $this->_email = $email;
        $this->_state = $state;
        $this->_phone = $phone;
    }

    // Setters
    public function setFname($fname)
    {
        $this->_fname = $fname;
    }

    public function setLname($lname)
    {
        $this->_lname = $lname;
    }

    public function setEmail($email)
    {
        $this->_email = $email;
    }

    public function setState($state)
    {
        $this->_state = $state;
    }

    public function setPhone($phone)
    {
        $this->_phone = $phone;
    }

    public function setGithubLink($githubLink)
    {
        $this->_github = $githubLink;
    }

    public function setYearsOfExperience($yearsOfExperience)
    {
        $this->_experience = $yearsOfExperience; // Correct the variable name
    }

    public function setRelocate($relocate)
    {
        $this->_relocate = $relocate;
    }

    public function setBio($bio)
    {
        $this->_bio = $bio;
    }

    // Getters
    public function getFname()
    {
        return $this->_fname;
    }

    public function getLname()
    {
        return $this->_lname;
    }

    public function getEmail()
    {
        return $this->_email;
    }

    public function getState()
    {
        return $this->_state;
    }

    public function getPhone()
    {
        return $this->_phone;
    }

    public function getGithub()
    {
        return $this->_github;
    }

    public function getExperience()
    {
        return $this->_experience;
    }

    public function getRelocate()
    {
        return $this->_relocate;
    }

    public function getBio()
    {
        return $this->_bio;
    }
}

    /**
     * Ryder Dettloff
     * This is the child class of the Applicant class. it is for those who
     * click the subscribe button
     * March 2024
     **/
class Applicant_SubscribedToLists extends Applicant
{
    private $_softwareDevelopmentJobs;
    private $_industryVerticals; // Corrected property name

    public function __construct($fname, $lname, $email, $state, $phone)
    {
        parent::__construct($fname, $lname, $email, $state, $phone);
        $this->_softwareDevelopmentJobs = array();
        $this->_industryVerticals = array(); // Corrected property name
    }

    public function setSoftwareDevelopmentJobs($softwareDevelopmentJobs)
    {
        $this->_softwareDevelopmentJobs = $softwareDevelopmentJobs;
    }

    public function setIndustryVerticals($industryVerticals)
    {
        $this->_industryVerticals = $industryVerticals;
    }

    public function getSoftwareDevelopmentJobs()
    {
        return $this->_softwareDevelopmentJobs;
    }

    public function getIndustryVerticals()
    {
        return $this->_industryVerticals;
    }
}

