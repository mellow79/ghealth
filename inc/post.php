<?php
/**
 * Created by PhpStorm.
 * User: CTEConsultants
 * Date: 10/18/2017
 * Time: 10:55 PM
 */

if(isset($_POST)){
  $authtoken = 'authtoken : ghmark7920';
$data = json_encode($_POST);


$url = "https://apistage.gohealthuc.com:1981/v1/eligibility_demo";

try {

  $ch = curl_init();
  if (FALSE === $ch)
    throw new Exception('failed to initialize');

  curl_setopt($ch, CURLOPT_URL,$url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array($authtoken));
 // curl_setopt( $ch, CURLOPT_ENCODING, "" );
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
//  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
 // curl_setopt($ch, CURLOPT_POST,true);
 // curl_setopt($ch, CURLOPT_HEADER,false);

  $exec = curl_exec($ch);
 // $info = curl_getinfo($ch);
  curl_close($ch);

  header('Content-type: application/json');
  echo $exec;


} catch(Exception $e) {

  trigger_error(sprintf(
    'Curl failed with error #%d: %s',
    $e->getCode(), $e->getMessage()),
    E_USER_ERROR);

}

}
