<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form ajax submit</title>
    <style>
        .main{
            border:1px solid black;
            width: 900px;
            height: 1400px;
            background-color:orange;
            margin-left:260px;
            
        }
        .main1{
            margin-left:40px;
        }
        .loader{
            background-color:orangered;
            border:10px solid black;
            border-radius:50%;
            border-top:100px solid #f3f3f3;
            width: 100px;
            height: 100px;
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        function check(){
            var fname=document.getElementById("fname").value;
            var lname=document.getElementById("lname").value; 
            var address=document.getElementById("address").value;
             var city=document.getElementById("city").value; 
             var state=document.getElementById("state").value; 
             var pincode=document.getElementById("pincode").value;
             var email=document.getElementById("email").value;
             var number=document.getElementById("number").value;
             var datas=$("#myform").serialize();
            //  var image=document.getElementById("file").value;
             
            

             $.ajax({

                    beforeSend:function(){
                        let loader=document.getElementById("loader").style.display="block";
                    },

                type:"POST",
                url:"vihan_action.php",
                data:datas,
                success:function(response){
                    $(".success").html(response);
                },
                error:function(errors){
                    alert("errors");
                },
                complete:function(){
                    let loader=document.getElementById("loader").style.display="none";
                }
              
             })

             return false;

        }
    </script>
</head>
<body>
    <div class="main">
        
        <div class="success" style="color:red;"></div>
        <div class="main1"><h1 style="color:red; text-decoration:underline; margin-left:250px;">Job Application</h1></div>
        <form id="myform"  required>
            <label for="name"><h3 style="margin-top:30px; text-decoration:underline;">Name:</h3></label><br>
            <input type="text" name="fname" id="fname" placeholder="First Name" required style="width:400px; height:40px;">
            <input type="text" name="lname" id="lname" placeholder="Last Name" required style="width:400px; height:40px;"><br><br>
            <label for="address"><h3 style="text-decoration:underline;">Address:</h3></label><br>
            <textarea name="address" id="address" placeholder="Address" required style="width:800px"></textarea><br><br>
            <label for="city"><h3 style="text-decoration:underline;">City:</h3></label><br>
            <select name="city" id="city" required style="width:800px; height:40px;">
                
                <option value="">select city</option>
                <option value="Jhunjhunu">Jhunjhunu</option>
                <option value="Jaipur">Jaipur</option>
                <option value="Bikaner">Bikaner</option>
                <option value="Siker">Siker</option>
                <option value="Churu">Churu</option>
                <option value="Ajmer">Ajmer</option>
                <option value="Hanumaanghar">Hanumaanghar</option>

            </select><br><br>
            <label for="state"><h3 style="text-decoration:underline;">State:</h3></label><br>
            <select name="state" id="state" required style="width:800px; height:40px;">
                <option value="">Select State</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Haryana">Haryana</option>
                <option value="Uter pardes">Uterpardes</option>
                <option value="Gujrat">Gujrat</option>
                <option value="Mdhye prades">Mdhye prades</option>
                <option value="Himachal pardes">Himachal pardes</option>
                <option value="jamu">jamu</option>

            </select><br><br>

            <label for="pincode"><h3 style="text-decoration:underline;"">PinCode:</h3></label><br>
            <input type="pincode" name="pincode" id="pincode" placeholder="pincode" required style="width:800px; height:40px;"><br><br>
            <label for="email"><h3  style="text-decoration:underline;">Email:</h3></label><br>
            <input type="email" name="email" id="email" placeholder="Enter Email" required style="width:800px; height:40px;"><br><br>
            <label for="mobile nmber"><h3 style="text-decoration:underline;">Mobile Number</h3></label><br>
            <input type="number" name="number" id="number" placeholder="mobile number" style="width:800px; height:40px;"><br>
            <label for="file"><h3 style="text-decoration:underline;">file</h3></label><br>
            <!-- <input type="file" name="photo" accept="image/jepg" id="file" required style="margin-top:-400px;"> -->
            
            <button type="submit" onclick="return check()" style="background-color:blue;  border-radius: 20px; width:200px;height:100px; margin-left:200px; margin-top:40px;"><h2 >submit</h2></button>
        </form>
        <div class="loader" id="loader"></div>
    </div>
    
</body>
</html>