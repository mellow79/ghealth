$(function () {

  var $first_name = $('#first_name');
  var $last_name = $('#last_name');
  var $phone = $('#phone');
  var $birth_date = $('#datepicker');
  var $pfirst_name = $('#pfirst_name');
  var $plast_name = $('#plast_name');
  var $insurance_carrier = $('#insCarrier');
  var $patient_id = $('#insID');

  reg.reset();

  var rad = $(this).attr("value");
  if (rad == "N") {

    $(".ins").hide('slow');

  }

  if (rad == "Y") {

    $(".ins").show('slow');

  }


  $('input[type="radio"]').click(function () {

    if ($(this).attr("value") == "N") {

      $(".ins").hide('slow');

    }
    if ($(this).attr("value") == "Y") {

      $(".ins").show('slow');


    }
  });

  $('#datepick').datepicker({format: 'yyyy-mm-dd'});

  $('#insID').focusout(function (e) {

    e.preventDefault();
    // phone: $phone.val()
    var member = {
      first_name: $first_name.val(),
      last_name: $last_name.val(),
      id: $patient_id.val(),
      birth_date: $birth_date.val()

    };

    var provider = {
      first_name: 'Marty',
      last_name: 'Seeger',
      npi: '1234567890'

    };

    var trading_partner_id = $insurance_carrier.val();

    $.ajax({
      type: "POST",
      url: "inc/post.php",
      data: {
        member: member,
        provider: provider,
        trading_partner_id: trading_partner_id
      },
      cache: false,
      success: function (response, status, jqXHR) {
        var d;


        if (response.data != "") {
          d = response.data;
          console.log(d);
          if (d.coverage.active) {

            $('#alert_msg').html('<div class="alert-success text-center"> <p> Your insurance is valid and your copay is ' + '$' + d.coverage.copay[0].copayment.amount + '</p></div>');
          }
          else {

            $('#alert_msg').html('<div class="alert-danger text-center"><p> Your insurance is invalid</p></div>');

          }

        }
      },

      error: function (jqXHR, status) {
        // error handler
        console.log(jqXHR);
        alert('fail' + status.code);
      }
    });
  });

  $('#reg').submit(function (e) {

    e.preventDefault();

    var $form = $('#reg'),
        patient = $form.find("select,textarea, input").serialize();

    $.ajax({
      type: "POST",
      url: "inc/db_post.php",
      data: patient,
      cache: false,
      success: function (response, status, jqXHR) {

        window.location.href = "https://www.gohealthuc.com/about/"

      },

      error: function (jqXHR, status) {
        // error handler
        console.log(jqXHR);
        alert('fail' + status.code);
      }
    });

  });
});


