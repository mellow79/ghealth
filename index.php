<?php
/**
 * Created by PhpStorm.
 * User: CTEConsultants
 * Date: 10/18/2017
 * Time: 11:43 PM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Page Description">
    <meta name="author" content="CTEConsultants">
    <title>Go Health Coding</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-datepicker.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    <h4 class="text-center">GO HEALTH REGISTRATION FORM</h4>
    <div class="row">

        <div class="col-md-6">

            <form id="reg" name="reg" action="" class="form-horizontal" method="post" role="form">
                <fieldset>
                <div class="form-group">
                    <legend>Patient Information</legend>
                </div>
                <div class="form-group">
                    <label for="first_name">Firstname:</label>
                    <input type="text" class="form-control" name="first_name" id="first_name" required placeholder="Enter First name">
                </div>
                    <div class="form-group">
                    <label for="last_name">Lastname:</label>
                    <input type="text" class="form-control"  name="last_name" id="last_name" required placeholder="Enter Last name">
                </div>
                <div class="form-group">
                    <label for="dob">DOB:</label>
                    <div class="input-group date">
                        <input id="datepick" name="dob" required type="text" class="form-control" value="1991-10-31">
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" id="phone" name="phone" class="form-control bfh-phone" data-format="+1 (ddd) ddd-dddd" required>
                </div>
                <div class="form-group">
                    <label class="control-label" for="mRadio">Do you have insurance?</label>
                    <label class="radio-inline"> <input type="radio" name="optInsurance" value="N" required checked> No </label>
                    <label class="radio-inline"> <input type="radio" name="optInsurance" value="Y"> Yes </label>
                </div>
                </fieldset>
                <div class="ins" style="display:none">
                    <fieldset>
                        <legend>Provider Information</legend>
                        <div id="alert_msg"></div>
                    <!--<div class="form-group">
                        <label for="pfirst_name">Providers Firstname:</label>
                        <input type="text" class="form-control" id="pfirst_name" required placeholder="Provider First name">
                    </div>
                    <div class="form-group">
                        <label for="plast_name">Providers Lastname:</label>
                        <input type="text" class="form-control" id="plast_name" required placeholder="Provider Last name">
                    </div> -->
                    <div class="form-group">
                        <label for="insCarrier">Insurance Carrier:</label>
                        <select name="insCarrier" class="form-control" id="insCarrier">
                            <option value="" selected>Select a carrier</option>
                            <option value="aetna">Aetna</option>
                            <option value="united_health_care">United Health Care</option>
                            <option value="blue_cross_blue_shield">Blue Cross/Blue Shield</option>
                            <option value="cigna">cigna</option>
                            <option value="no_insurance">No Insurance</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="insID"> Insurance ID:</label>
                        <input type="text" class="form-control" name="insID" id="insID" placeholder="Enter Insurance ID">
                    </div>
                    </fieldset>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <input type="submit" id="submitButton" class="btn btn-primary" name="submitButton" value="Submit">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-formhelpers-phone.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
