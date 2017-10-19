$(function () {

  var $first_name = $('#first_name');
  var $last_name = $('#last_name');
  var $phone = $('#phone');
  var $birth_date = $('#datepicker');
  var $insurance_carrier = $('#insCarrier');
  var $insurance_id = $('#insID');

  reg.reset();

  var rad =  $(this).attr("value");
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

  $('#datepicker').datepicker();


  $('#insID')
      .focusout(function() {

          var params = {
          authtoken: '',
          first_name : $first_name.val(),
          last_name : $last_name.val(),
          birth_date : $birth_date.val(),
          phone : $phone.val(),
          insurance_carrier : $insurance_carrier.val(),
          insurance_id : $insurance_id.val()

        };



        $.ajax({
          type: "POST",
          url: "inc/post.php",
          data: params,// now data come in this function
          cache: false,
          success: function (data, status, jqXHR) {
 console.log(data);
            //alert("success");// write success in " "
          },

          error: function (jqXHR, status) {
            // error handler
            console.log(jqXHR);
            alert('fail' + status.code);
          }
        });


      })

});


