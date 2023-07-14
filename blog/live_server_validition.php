<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    .container {
    border: 1px solid;
    /* background-image: url("https://www.google.com/url?sa=i&url=https%3A%2F%2Fpngtree.com%2Ffree-backgrounds-photos%2Fform&psig=AOvVaw189eYIRXVLuOCEUUxXAiw6&ust=1677915803406000&source=images&cd=vfe&ved=0CBAQjRxqFwoTCJCbtM2hv_0CFQAAAAAdAAAAABAE"); */
}
h2.text-danger {
    text-align: center;
    width: 1000px;}
  </style>
</head>
<body>
    <script>
        // function check(){
        //     return false;
        // }
         
        
        function alphaOnly(event) {
  var key = event.keyCode;`enter code here`
  return ((key >= 65 && key <= 90) || key == 8);
};
        $(document).ready(function(){
            $("#mybtn").click(function(){
            

                var formid=$(this).closest('form').attr('id');
                var formaction=$(this).closest('form').attr('action');
    





            $.ajax({
                type: "POST",
                url: formaction,
                data: $("#"+formid ).serialize(),
                dataType: "JSON",
                success: function (response) {
                    $(".error2").remove();
                    $.each(response.error, function (key, value) {
                        console.log(key + ' ' + value);
                        var msg = '<label class="error formmessage error2" for="' + key + '" style="color:red">' + value + '</label>';
                        $("#form_live").find('input[name="' + key + '"],select[name="' + key + '"],select[name="' + key + '[]"],textarea[name="' + key + '"]').last().after(msg);
                    });
                }
            });
        }); 
        });
    
    </script>
    
<div class="container">
  <h2 class="text-danger">Application From</h2><hr>
  <form action="live_validition.php" method="post" id="form_live">
  <div class=" form-group">
    <div class=" ">
      <label for="firest name">First Name:</label>
      <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname" onkeydown="return alphaOnly(event);" autocomplete="off">
      
      </div>
      <div class="">
      <label for="last name">Last Name:</label>
      <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname" onkeydown="return alphaOnly(event);" autocomplete="off">
      </div>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="form-group">
      <label for="date">Date of Birth:</label>
      <input type="date" class="form-control" id="date" placeholder="Enter password" name="date">
    </div>
    <div class="form-group">
      <label for="Address">Address:</label>
      <textarea name="Address" id="Address" class="form-control" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group">
      <label for="city">City:</label>
     <select name="city" id="city" class="form-control">
        <option value="">select city</option>
        <option>Jhunjhunu</option>
        <option>Jaipur</option>
        <option>Siker</option>
        <option>Churu</option>
        <option>Biakner</option>
        <option>Ajmer</option>
        <option>Kota</option>

     </select>
    </div>
    <div class="form-group">
      <label for="Region">Region:</label>
     <select name="Region" id="Region" class="form-control">
        <option value="">select Region</option>
        <option>Hindu</option>
        <option>Muslim</option>
        <option>Jain</option>
        <option>Shikh</option>
     </select>
    </div>
    <div class="form-group">
      <label for="state">State:</label>
     <select name="state" id="state" class="form-control">
        <option value="">select cuntery</option>
        <option>Rajasthan</option>
        <option>Heriyana</option>
        <option>Uter pardesh</option>
        <option>Gujrat</option>
     </select>
    </div>
  
    <button type="button" class="btn btn-success"  id="mybtn">Submit</button>

  </form>
</div>

</body>
</html>
