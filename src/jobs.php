<?php
    class Job
    {
        private $job_title
        private $job_salary
        private $job_duties

    function __construct($jobtitle, $jobsalary, $jobduties)
    {
        $this->jobtitle = $job_title;
        $this->jobsalary = $job_salary;
        $this->jobduties = $job_duties;
    }
    function setJobTitle($jobtitle)
    {
        $this->job_title = (string) $jobtitle;
    }
    function getJobTitle()
    {
        return $this->jobtitle;
    }
    function setJobSalary($jobsalary)
    {
        $this->job_salary = (string) $jobsalary;
    }
    function getJobSalary()
    {
        return $this->jobsalary;
    }
    function setJobDuties($jobduties)
    {
        $this->job_duties = (string) $jobduties;
    }
    function getJobDuties()
    {
        return $this->jobduties;
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
