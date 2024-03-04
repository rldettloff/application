<?php

class Applicant_SubscribedToLists extends Applicant {
    private $_selectionsJobs;
    private $_selectionsVerticals;

    public function __construct($fname, $lname, $email, $state, $phone) {
        parent::__construct($fname, $lname, $email, $state, $phone);//call parent to use its variables
        $this->_selectionsJobs = array();
        $this->_selectionsVerticals = array();
    }
    public function setSelectionsJobs($selectionsJobs) {
        $this->_selectionsJobs = $selectionsJobs;
    }

    public function setSelectionsVerticals($selectionsVerticals) {
        $this->_selectionsVerticals = $selectionsVerticals;
    }
    public function getSelectionsJobs() {
        return $this->_selectionsJobs;
    }

    public function getSelectionsVerticals() {
        return $this->_selectionsVerticals;
    }
}
