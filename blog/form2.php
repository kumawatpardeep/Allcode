<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
  <script>
    function check() {
      $.ajax({



        type: "POST",
        url: "form2_action.php",
        data: $("#form_vali").serialize(),
        dataType: "JSON",
        success: function (response) {

          if (response.status == true) {
            $("#email_error").html('');
            $("#password_error").html('');
            $("#mobile_error").html('');
            // alert();

          }
          else {
               

            var types = response.type;
            if (types == 'email') {
              $("#email_error").html(response.message);
            }
            else {
              $("#email_error").html("");
            }



            if (types == 'password') {
              $("#password_error").html(response.message);
            }
            else {
              $("#password_error").html("");
            }






            if (types == 'mobile') {


              $("#mobile_error").html(response.message);
            }
            else {
              $("#mobile_error").html("");
            }
          

          }
        
      }
      });
      return false;
    }
  </script>

  <div class="container">
    <h2></h2>
    <form action="form2_action.php" method="post" id="form_vali">
      <div class="form-group">
        <label for="email">Email:</label>
        <span id="email_error" style="color:red;"></span>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <span id="password_error" style="color:red;"></span>
        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
      </div>
      <div class="form-group">
        <span id="mobile_error" style="color:red;"></span>
        <label for="mobile">mobile:</label>
        <input type="text" class="form-control" id="mobile" placeholder=" mobile" name="mobile">
      </div>

      <button type="button" class="btn btn-default" onclick="return check()">Submit</button>
    </form>
  </div>

</body>

</html>