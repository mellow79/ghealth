<?php
/**
 * Created by PhpStorm.
 * User: CTEConsultants
 * Date: 10/18/2017
 * Time: 10:55 PM
 */
include_once ('config.php'); // retrieve database

// Checks to see if POST array has been set and not null
if (isset($_POST)) {

    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $birth_date = new DateTime($_POST['dob']);
    $phone_number = stripslashes($_POST['phone']);
    $insurance_carrier = $_POST['insCarrier'];
    $insurance_id = $_POST['insID'];

    $birth_date = $birth_date->format('d/m/Y');

    $sql = "Insert into gohealth.patient 
      (firstname
      , lastname
      , birth_date
      , phone_number
      , insurance_carrier
      , insurance_id) 
      VALUES
      ('$firstname'
      ,'$lastname'
      ,'$birth_date'
      ,'$phone_number'
      ,'$insurance_carrier'
      ,'$insurance_id'
      )";

    echo $sql;

    $go = mysqli_query($con,$sql);

    if($go){

      return true;

    } else {

      return false;
    }

}
