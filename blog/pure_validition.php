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
        
        function alphaOnly(event) {
  var key = event.keyCode;`enter code here`
  return ((key >= 65 && key <= 90) || key == 8);
};
        function shree() {
            $.ajax({
                type: "POSt",
                url: "pure_form.php",
                data: $("#myform").serialize(),
                dataType: "JSON",
                success: function (response) {
                    $(".error2").remove();
                    $.each(response.error, function (key, value) {
                        console.log(key + ' ' + value);
                        var msg = '<label class="error formmessage error2" for="' + key + '" style="color:red">' + value + '</label>';
                        $("#myform").find('input[name="' + key + '"],select[name="' + key + '"],select[name="' + key + '[]"],textarea[name="' + key + '"]').last().after(msg);
                    });
                }
            });
            return false;
        }
    </script>

    <div class="container">
        <h2>Vertical (basic) form</h2>
        <form action="pure_form.php" method="post" id="myform">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" onkeydown="return alphaOnly(event);" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
            </div>
            <div class="form-group">
                <label for="mobile">Mobile</label>
                <input type="text" id="mobile" name="mobile" placeholder="mobile" class="form-control">

            </div>
            <div class="form-group">
                <label for="pincode">Pincode</label>
                <input type="text" id="pincode" name="pincode" placeholder="pincode" class="form-control">

            </div>
            <div class="row">
                <label for="gender">Gender</label>
                <div class="col sm-4">
                    <label for="male">Male</label>
                    <input type="radio" id="male" name="gender" value="male" >
                </div>
                <div class="col sm-4">
                <label for="female">Female</label>
                    <input type="radio" id="female" name="gender" value="female" ">
                </div>
                <div class="col sm-4">
                <label for="other">Other</label>
                    <input type="radio" id="other" name="gender" value="other" >
                </div>

            </div>
            <button type="button" class="btn btn-default" onclick="return shree()">Submit</button>
        </form>
    </div>

</body>

</html>