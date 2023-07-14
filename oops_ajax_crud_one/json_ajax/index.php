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
<script>
    function allDataGet() {
        $.ajax({
            type: "post",
            url: "mydata.php",
            data: {},
            dataType: "JSON",
            success: function (response) {
                $dataappendajax = "";
                $srno = 1;
                $.each(response, function (index, value) {
                    $dataappendajax += '<tr>';
                    $dataappendajax += '<td>' + $srno + '</td>';
                    $dataappendajax += '<td>' + value.name + '</td>';
                    $dataappendajax += '<td>' + value.email + '</td>';
                    $dataappendajax += '<td>' + value.mobile + '</td>';
                    $dataappendajax += '<td><button class="btn btn-info updeter" data-ids="'+value.id+'"data-name="'+value.name+'"data-email="'+value.email+'"data-mobile="'+value.mobile+'">Update</button> <button class="btn btn-danger trush" data-user="' + value.id + '">Delete</button></td>';



                    $dataappendajax += '</tr>';
                    $srno++;

                });
                $(".aapneddata").html($dataappendajax);
            }
        });
    }
    $(document).ready(function () {
        allDataGet();
    });
    $(document).on('click', '.trush', function () {
        var user = $(this).attr('data-user');

        var confirmes = confirm("are you sure for delete..!");

        if (confirmes == true) {

            $.ajax({
                type: "post",
                url: "mydata_dalete.php",
                data: { id: user },
                dataType: "JSON",
                success: function (response) {
                    alert(response.message);
                    if (response.status == true) {
                        allDataGet();
                    }
                }
            });
        }

    })

    $(document).on('click', '.adds', function () { //alert();
        $("#myModal").modal("show");
    });

    $(document).on('click', '.addnew', function () {
        
        $.ajax({
            type: "post",
            url: "mydata_add.php",
            data: $("#myform").serialize(),
            dataType: "JSON",
            success: function (result) {
                $('.formmessage').remove();
                if (result.errors && !result.errors == '') {

                    $.each(result.errors, (key, value) => {

                        var msg = '<label class="error formmessage error2"  style="color:red">' + value + '</label>';


                        $("#myform").find('input[name="' + key + '"], select[name="' + key + '"], select[name="' + key + '[]"],textarea[name="' + key + '"]').after(msg);

                    });

                }
                else {
                    alert(result.message);
                    if (result.status == true) {
                        allDataGet();
                        $("#myModal").modal("hide");
                    }
                }








            }
        });
    })
  $(document).on('click','.updeter',function(){
    var currant=$(this);
    var name=$(currant).attr('data-name');
  var email=$(currant).attr('data-email');
  var mobile=$(currant).attr('data-mobile');
  var id=$(currant).attr('data-ids');


    // alert(id);
    

    $("#myModalEdit").modal('show');

    $("#nameEdit").val(name);
    $("#emailEdit").val(email);
    $("#mobileEdit").val(mobile);
    $("#hidden_id").val(id);



    // alert(name);
  });
  $(document).on('click','.updatenew',function(){
   
    $.ajax({
            type: "post",
            url: "mydata_update.php",
            data: $("#myformEdit").serialize(),
            dataType: "JSON",
            success: function (result) {
                $('.formmessage').remove();
                if (result.errors && !result.errors == '') {

                    $.each(result.errors, (key, value) => {

                        var msg = '<label class="error formmessage error2"  style="color:red">' + value + '</label>';


                        $("#myformEdit").find('input[name="' + key + '"], select[name="' + key + '"], select[name="' + key + '[]"],textarea[name="' + key + '"]').after(msg);

                    });

                }
                else {
                    alert(result.message);
                    if (result.status == true) {
                        allDataGet();
                        $("#myModalEdit").modal("hide");
                    }
                }








            }
        });
  })
</script>

<body>

    <div class="container">
        <button class="btn btn-info adds">Add</button>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>SrNo:</th>
                    <th>Name:</th>
                    <th>Email:</th>
                    <th>Mobile:</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="aapneddata">

            </tbody>
        </table>
    </div>
    <!-- Trigger the modal with a button -->
    <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->

    <!--ADD MODAL -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add user</h4>

                </div>
                <div class="modal-body">
                    <form id="myform">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="email">
                        </div>
                        <div class="form-group">
                            <label for="mobile">Mobile:</label>
                            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="mobile">
                        </div>

                        <button type="button" class="btn btn-success addnew">Add</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <!-- ADD MODAL -->


    <!-- UPDATE MODAL -->

    <div id="myModalEdit" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal Contant -->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Update User</h4>


                </div>
                <div class="modal-body">
                    <form id="myformEdit">
                    <input type="hidden" id="hidden_id" name="hidden_id">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" class="form-control" id="nameEdit" placeholder="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="emailEdit" name="email" placeholder="email">
                        </div>
                        <div class="form-group">
                            <label for="mobile">Mobile:</label>
                            <input type="text" class="form-control" id="mobileEdit" name="mobile" placeholder="mobile">
                        </div>

                        <button type="button" class="btn btn-success updatenew">Update</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <!-- UPDATE MODAL -->
</body>

</html>