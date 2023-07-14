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
        function validition_form(){
            $.ajax({
                type:"POST",
                url:"form_output.php",
                data:$("#form_vali").serialize(),
                success:function(response){
                    if(response.trim()=="name_error"){
                        $("#error_name").html("Enter Name");
                    }else{
                        $("#error_name").html("");
                    }

                    if(response.trim()=="email_error"){
                        $("#error_email").html("enter email");
                    }else if(response.trim()=="invalidemail_error"){
                        $("#error_email").html("enter valid email");
                    }
                    else{
                        $("#error_email").html("");
                    }
                    
                    if(response.trim()=="password_error"){
                        $("#error_password").html("enter password");
                    }else{
                        $("#error_password").html("");
                    }

                    if(response.trim()=="mobile_error"){
                        $("#error_mobile").html("enter mobile");
                    }else{
                        $("#error_mobile").html("");
                    }

                    if(response.trim()=="city_error"){
                        $("#error_city").html("select city");
                    }else{
                        $("#error_city").html("");
                    }

                    if(response.trim()=="gender_error"){
                        $("#error_gender").html("select gender");
                    }else{
                        $("#error_gender").html("");
                    }
                }
            });
            return false;
        }
    </script>

    <div class="container">
        <h2>Vertical (basic) form</h2>
        <form action="form_output.php" method="post" id="form_vali">
            <div class="form-group">
                <span id="error_name" style="color:red"></span>
                <label for="name">name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
            </div>
            <div class="form-group">
            <span id="error_email" style="color:red"></span>
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
            <span id="error_password" style="color:red"></span>
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
            </div>
            <div class="form-group">
            <span id="error_mobile" style="color:red"></span>
                <label for="mobile">mobile:</label>
                <input type="text" class="form-control" id="mobile" placeholder="Enter mobile" name="mobile">
            </div>
            <div class="form-group">
            <span id="error_city" style="color:red"></span>
                <label for="city">City:</label>
                <select name="city" id="city" class="form-control">
                    <option value="">select city</option>
                    <option>jhunjhunu</option>
                    <option>jaipur</option>
                    <option>siker</option>
                    <option>churu</option>
                    <option>bikaner</option>
                    <option>ajmer</option>

                </select>
            </div>
            <div class="form-group">
            <span id="error_gender" style="color:red"></span>
                <label for="gender">Gender:</label>
                
                <input type="radio" class="form-control" id="male" name="gender[]" value="male">Male
                <input type="radio" class="form-control" id="Female" name="gender[]" value="female">Female
                <input type="radio" class="form-control" id="other" name="gender[]" value="other">other


            </div>
           
            <button type="submit" class="btn btn-success" onclick="return validition_form()">Submit</button>
        </form>
    </div>

</body>

</html>