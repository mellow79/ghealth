<?php
/**
 * Created by PhpStorm.
 * User: CTEConsultants
 * Date: 10/18/2017
 * Time: 10:55 PM
 */

// Checks to see if POST array has been set and not null
if (isset($_POST)) {

  $authtoken = 'authtoken : ghmark7920';
  $data = json_encode($_POST);

  // API url
  $url = "https://apistage.gohealthuc.com:1981/v1/eligibility_demo";

  //added error handling
  try {

      $ch = curl_init();
      if (FALSE === $ch) {
        throw new Exception('failed to initialize');
      }

      // sends auth to api and retrieves patient data
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
      curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
      curl_setopt($ch, CURLOPT_HTTPHEADER, [$authtoken]);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

      $exec = curl_exec($ch);
      curl_close($ch);

      header('Content-type: application/json');
      echo $exec;

  } catch (Exception $e) {

      trigger_error(sprintf(
        'Curl failed with error #%d: %s',
        $e->getCode(), $e->getMessage()),
        E_USER_ERROR);

  }

}
