<?php
    class Job
    {
<<<<<<< HEAD
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
=======
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
>>>>>>> f7ae9be675a153c138883af09d9749b0d5d99f11
    }
    function getJobTitle()
    {
        return $this->jobtitle;
    }
    function setJobSalary($jobsalary)
    {
<<<<<<< HEAD
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
=======
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
>>>>>>> f7ae9be675a153c138883af09d9749b0d5d99f11
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
