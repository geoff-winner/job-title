<?php
    class Job
    {
        private $jobtitle
        private $jobsalary
        private $jobduties

    function __construct($jobtitle, $jobsalary, $jobduties)
    {
        $this->jobtitle = $jobtitle;
        $this->jobsalary = $jobsalary;
        $this->jobduties = $jobduties;
    }
    function setJobTitle($jobtitle)
    {
        $this->jobtitle = (string) $jobtitle;
    }
    function getJobTitle()
    {
        return $this->jobtitle;
    }
    function setJobSalary($jobsalary)
    {
        $this->jobsalary = (string) $jobsalary;
    }
    function getJobSalary()
    {
        return $this->jobsalary = (string) $jobsalary;
    }
    function setJobDuties($jobduties)
    {
        $this->jobduties;
    }
    function getJobDuties()
    {
        return $this->jobduties = (string) $jobduties;
    }
    function save()
    {
        array_push($_SESSION['list_of_jobs'], $this);
    }
    static function getAll()
    {
        return $_SESSION['list_of_jobs'];
    }
    static function deleteAll()
    {
        $_SESSION['list_of_jobs'] = array();
    }

}

?>
