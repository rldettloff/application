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

    /**
     * @param $fname
     * @param $lname
     * @param $email
     * @param $state
     * @param $phone
     *
     * constructor for person
     */
    public function __construct($fname, $lname, $email, $state, $phone)
    {
        $this->_fname = $fname;
        $this->_lname = $lname;
        $this->_email = $email;
        $this->_state = $state;
        $this->_phone = $phone;
    }

    /**
     * @param $fname
     * @return void
     * first name setter
     */
    public function setFname($fname)
    {
        $this->_fname = $fname;
    }

    /**
     * @param $lname
     * @return void
     * last name setter
     */
    public function setLname($lname)
    {
        $this->_lname = $lname;
    }

    /**
     * @param $email
     * @return void
     * email setter
     *
     */
    public function setEmail($email)
    {
        $this->_email = $email;
    }

    /**
     * @param $state
     * @return void
     * state setter
     */
    public function setState($state)
    {
        $this->_state = $state;
    }

    /**
     * @param $phone
     * @return void
     * phone setter
     */
    public function setPhone($phone)
    {
        $this->_phone = $phone;
    }

    /**
     * @param $githubLink
     * @return void
     * github link setter
     */
    public function setGithubLink($githubLink)
    {
        $this->_github = $githubLink;
    }

    /**
     * @param $yearsOfExperience
     * @return void
     * years experience setter
     */
    public function setYearsOfExperience($yearsOfExperience)
    {
        $this->_experience = $yearsOfExperience; // Correct the variable name
    }

    /**
     * @param $relocate
     * @return void
     * relocation setter
     */
    public function setRelocate($relocate)
    {
        $this->_relocate = $relocate;
    }

    /**
     * @param $bio
     * @return void
     * bio setter
     */
    public function setBio($bio)
    {
        $this->_bio = $bio;
    }

    /**
     * @return mixed
     * first name getter
     */
    public function getFname()
    {
        return $this->_fname;
    }

    /**
     * @return mixed
     * last name getter
     */
    public function getLname()
    {
        return $this->_lname;
    }

    /**
     * @return mixed
     * email getter
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * @return mixed
     * state getter
     */
    public function getState()
    {
        return $this->_state;
    }


    /**
     * @return mixed
     * phone getter
     */
    public function getPhone()
    {
        return $this->_phone;
    }

    /**
     * @return mixed
     * github link getter
     */
    public function getGithub()
    {
        return $this->_github;
    }

    /**
     * @return mixed
     * experience getter
     */
    public function getExperience()
    {
        return $this->_experience;
    }


    /**
     * @return mixed
     * relocation getter
     */
    public function getRelocate()
    {
        return $this->_relocate;
    }


    /**
     * @return mixed
     * Bio getter
     */
    public function getBio()
    {
        return $this->_bio;
    }
}



