<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script>
  function check_validation(){
    
    
    // return false;
  }
  </script>
</head>
<body>

<div class="container">
  <h2>Form</h2>
  
  <form class="form-horizontal" action="callback/form_action.php">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="pwd" name="password" placeholder="Enter password" required>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">gender:</label>
    <div class="col-sm-10">

      <input type="radio" name="gender" value="male" checked>male
      <input type="radio" name="gender" value="female">female

    </div>
  </div>



  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" onclick="check_validation()">Submit</button>
    </div>
  </div>
</form>
</div>

</body>
</html>
