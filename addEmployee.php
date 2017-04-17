<?php
/**
 * Created by PhpStorm.
 * User: thotar
 * Date: 4/16/2017
 * Time: 11:20 PM
 */
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
    // variables for input data
    $ctrlno = $_POST['ctrlno'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $county = $_POST['county'];
    $country = $_POST['country'];
    // variables for input data

    // sql query for inserting data into database

    $sql_query = "INSERT INTO users(first_name,last_name,user_city) VALUES('$first_name','$last_name','$city_name')";
    mysql_query($sql_query);

    // sql query for inserting data into database

}
?>