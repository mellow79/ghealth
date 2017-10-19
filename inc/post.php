<?php
/**
 * Created by PhpStorm.
 * User: CTEConsultants
 * Date: 10/18/2017
 * Time: 10:55 PM
 */

if(isset($_POST)){
$authtoken  = $_POST['authtoken'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$phone = $_POST['phone'];
$birth_date = $_POST['birth_date'];
$insurance_carrier = $_POST['insurance_carrier'];
$insurance_id = $_POST['insurance_id'];

$url = "https://apistage.gohealthuc.com:1981/v1/eligibility_demo/?authtoken=ghmark7920";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST,true);

$exec = curl_exec($ch);
$info = curl_getinfo($ch);
//print_r($info);
curl_close($ch);

$json = json_decode($exec);

print_r($json);

}