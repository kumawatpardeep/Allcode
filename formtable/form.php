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
    function pardeep_kumawat(){
        // alert();


         return false;
    }
  </script>
</head>
<body>

<div class="container" >
  <h2>Vertical (basic) form</h2>
  <form action="form_action.php">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
    <div class="form-group">
        <label for="fname">First Name:</label>
        <input type="text" name="fname" id="fname" placeholder="fname" required>
    </div>
    <div class="form-group">
        <label for="lname">Last Name:</label>
        <input type="text" name="lname" id="lname" placeholder="lname" required>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="text" class="form-control" id="address" placeholder="Enter address" name="address" required>
    </div>
    
    <button type="submit" class="btn btn-default" onclick="pardeep_kumawat()">Submit</button>
  </form>
</div>

</body>
</html>
