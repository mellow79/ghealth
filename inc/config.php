<?php
/**
 * Created by PhpStorm.
 * User: CTEConsultants
 * Date: 10/20/2017
 * Time: 8:56 PM
 */


$HOST = 'localhost';
$DBNAME = 'gohealth';
$DBPASS =  '';
$DBUSER = 'root';

$con = mysqli_connect($HOST, $DBUSER, $DBPASS, $DBNAME) or die("Credentials to connect to DB are wrong");

if(!$con){
   echo "Can't connect to the database";
}