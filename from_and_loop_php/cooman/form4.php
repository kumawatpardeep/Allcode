<?php
include "header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script>
    function check(){
      var email=document.getElementById("email").value;
      var pwd=document.getElementById("pwd").value;
      var remember=document.getElementById("remember").value;
      var datas=$("#myform").serialize();

      $.ajax({
        type:"POST",
        url:"ramu_action.php",
        data:datas,
        success:(response)=>{
          $(".container").html(response);
        }
      });
      return false;
    }
  </script>
</head>
<body>
    

<div class="container" style="color:red;">
  <h2>Vertical (basic) form</h2>
  <form action="ramu_action.php" method="post" id="myform">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember" id="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default" onclick="return check()">Submit</button>
  </form>
</div>

</body>
</html>