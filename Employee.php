<?php

/**
 * Created by PhpStorm.
 * User: thotar
 * Date: 4/20/2017
 * Time: 3:46 PM
 */
class Employee
{
    public $ctrl_no;
    public $fname;
    public $lname;
    public $email;
    public $city;
    public $state;
    public $zip;
    public $county;
    public $country;
    public $job_roles = array();

    public function __construct($ctrl_no = '', $fname = '', $lname = '', $email = '', $city = '', $state = '', $zip = '', $county = '', $country = '', job_roles = array())
    {
        $this->ctrl_no = $ctrl_no;
        $this->fname = $fname;
        $this->lname = $lname;
        $this->email = $email;
        $this->city = $city;
        $this->state=$state;
        $this->zip=$zip;
        $county->county=$county;
        $country->country=$country;
       // $job_roles->job_roles = $job_roles;

    }
}