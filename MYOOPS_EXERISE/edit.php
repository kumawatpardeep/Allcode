<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<script>
    $(document).ready(function(){
        $("#btn").click(function(){

            $name=$("#name").val();
            if($name==""){
                $("#name_error").html("name is rquired");
                // return false;
            }
            else{
                $("#name_error").html("");

            }
            $email=$("#email").val();
            if($email==""){
                $("#email_error").html("email is rquired");
            }
            else{
                $("#email_error").html("");

            }
            $village=$("#village").val();
            if($village==""){
                $("#village_error").html("village is rquired");
            }
            else{
                $("#village_error").html("");

            }
            return false;

        });
    });

</script>
<?php
include "Curd.php";

?>
<div class="container">
  <h2>Vertical (basic) form</h2>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="name">Name:</label>
      <span id="name_error" style="color:red;"></span>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <span id="email_error" style="color:red;"></span>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
   <div class="form-group">
    <label for="village">Village:</label>
    <span id="village_error" style="color:red;"></span>
    <input type="text" class="form-control" id="village" placeholder="Enter village" name="village">

   </div>
    <button type="submit" id="btn" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
