<?php
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


    /**
     * @param $fname
     * @param $lname
     * @param $email
     * @param $state
     * @param $phone
     * constructor for person with subscription box checked
     */
    public function __construct($fname, $lname, $email, $state, $phone)
    {
        parent::__construct($fname, $lname, $email, $state, $phone);
        $this->_softwareDevelopmentJobs = array();
        $this->_industryVerticals = array(); // Corrected property name
    }

    /**
     * @param $softwareDevelopmentJobs
     * @param $industryVerticals
     * @return void
     * setters
     */
    public function setSoftwareDevelopmentJobs($softwareDevelopmentJobs)
    {
        $this->_softwareDevelopmentJobs = $softwareDevelopmentJobs;
    }

    public function setIndustryVerticals($industryVerticals)
    {
        $this->_industryVerticals = $industryVerticals;
    }

    /**
     * @return
     * Getters for jobs and verticals
     */
    public function getSoftwareDevelopmentJobs()
    {
        return $this->_softwareDevelopmentJobs;
    }

    public function getIndustryVerticals()
    {
        return $this->_industryVerticals;
    }
}
