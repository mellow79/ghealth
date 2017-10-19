<?php
/**
 * Created by PhpStorm.
 * User: CTEConsultants
 * Date: 10/18/2017
 * Time: 6:43 PM
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
    <h1>Go Health</h1>
    <div class="row">
        <div class="col-md-6">
            <form id="reg" action="" method="post" class="form-horizontal" role="form">
                <div class="form-group">
                    <legend>Register Form</legend>
                </div>
                <div class="form-group">
                    <label for="first_name">Firstname:</label>
                    <input type="text" class="form-control" id="first_name" required placeholder="Enter First name">

                    <label for="last_name">lastname:</label>
                    <input type="text" class="form-control" id="last_name" required placeholder="Enter Last name">
                </div>
                <div class="form-group">
                    <label for="dob">DOB:</label>
                    <div class="input-group date">
                        <input id="datepicker" name="dob" required type="text" class="form-control" value="12/02/1990">
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
                <div class="ins" style="display:none">
                    <div class="form-group">
                        <label for="insCarrier">Insurance Carrier:</label>
                        <input type="text" class="form-control" id="insCarrier" placeholder="Enter Insurance Carrier">
                    </div>
                    <div class="form-group">
                        <label for="insID"> Insurance ID:</label>
                        <input type="text" class="form-control" id="insID" placeholder="Enter Insurance ID">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <button type="submit" class="btn btn-primary">Submit
                        </button>
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
