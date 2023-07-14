<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdna.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
         
        .main{
            border:1px solid black;
            width: 900px;
            height: 1400px;
            background-color:black;
            margin-left:260px;
        }
        .main1{
            margin-left:40px;
        }
        .loader{
            border:10px solid #f3f3f3;
            border-radius:50%;
            border-top:10px solid #f3f3f3;
            width: 40px;
            height: 40px;
            -webkit-animation:spin 1ms linear infinite; /*Safari*/
            animation:spin 1ms linear infinite;
            display:none;
    
            
        }
        /*safari*/
        @-webkit-keyframes spin{
            0%{-webkit-transform:rotate(0deg);}
            100%{-webkit-transform:rotate(360deg);}
        }
        @keyframes spin{
            0%{transform:rotate(0deg);}
            100%{transform:rotate(360deg);}
        }

    </style>

    
   
</head>

<body>
<script>
    function validate(evt) {
  var theEvent = evt || window.event;

  // Handle paste
  if (theEvent.type === 'paste') {
      key = event.clipboardData.getData('text/plain');
  } else {
  // Handle key press
      var key = theEvent.keyCode || theEvent.which;
      key = String.fromCharCode(key);
  }
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
};
        function validition_email(){


            beforeSend:function(){
                        let loader=document.getElementById("loader").style.display="block";
                    },

            $.ajax({
                type:"POST",
                url:"action_page.php",
                data:$("#myform").serialize(),
                success:function (response){
                   
                    if(response.trim()=="email_error"){
                        $("#email_error").html("email is required")
                    }
                    else{
                        $("#email_error").html("");
                    }
                    if(response.trim()=="password_error"){
                        $("#password_error").html("password is required")
                    }
                    else{
                        $("#password_error").html("");
                    }
                    if(response.trim()=="mobile_error"){
                        $("#mobile_error").html("mobile is required")
                    }
                    else{
                        $("#mobile_error").html("");
                    }




                },
                complete:function(){
                    let loader=document.getElementById("loader").style.display="none";
                }

            });
            return false;
        }
    </script>

    <div class="container">
        <h2>Vertical (basic) form</h2>
        <form action="action_page.php" method="post" id="myform">
            <div class="form-group">
                <span id="email_error" style="color:red;"></span>
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" autocomplete="off">
            </div>
            <div class="form-group">
            <span id="password_error" style="color:red;"></span>
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
            </div>
            <div class="form-group">
            <span id="mobile_error" style="color:red;"></span>
                <label for="mobile">mobile:</label>
                <input type="text" class="form-control" id="mobile" placeholder=" mobile" name="mobile" onkeypress='validate(event)'>
            </div>
            <button type="submit" class="btn btn-default" onclick="return validition_email()">Submit</button>
        </form>
    </div>

</body>

</html>