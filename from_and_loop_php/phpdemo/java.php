<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="java_action.php" method="post" enctype="multipart/form-data">
        <label for="fname">First Name:</label>
        <input type="text" name="fname" id="fname" placeholder="first name"><br>
        <label for="lname">Last Nmae</label>
        <input type=" text" name="last name" id="last name" placeholder="last name"><br>
        <input type="file" name="photo" accept=""><br>
        <button type="submit" onclick="return check()">submit</button>
    </form>
</body>
</html>