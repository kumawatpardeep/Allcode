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
    function appenddata() {
        $.ajax({
            type: "post",
            url: "data.php",
            data: {},
            dataType: "JSON",
            success: function (result) {
                $result_data = "";
                $srno = 1;

                $.each(result, function (key, monu) {

                    $result_data += '<tr>';
                    $result_data += '<td>' + $srno + '</td>';
                    $result_data += '<td>' + monu.name + '</td>';
                    $result_data += '<td>' + monu.email + '</td>';
                    $result_data += '<td>' + monu.village + '</td>';
                    $result_data += '<td><button class="btn btn-info update" data-ids="'+monu.id+'" data-name="'+monu.name+'" data-email="'+monu.email+'"data-village="'+monu.village+'">Edit</button></td>';
                    $result_data += '<td><button class="btn btn-danger trash" data-user="' + monu.id + '">Delete</button></td>';



                    $result_data += '</tr>';
                    $srno++;


                })
                $(".dataappned").html($result_data);
            }
        });
    }
    $(document).ready(function () {
        appenddata();
    })
    $(document).on('click', '.trash', function () {
        // alert();
        var user = $(this).attr('data-user');
        var conser = confirm("Are you sure for delete..!");
        if (conser) {
            $.ajax({
                type: "post",
                url: "data_delete.php",
                data: { id: user },
                dataType: "JSON",
                success: function (result) {
                    alert(result.message);
                    if (result.status == true) {



                        appenddata();

                    }
                }
            });
        }

    })
    $(document).on('click', '.add', function () {
        $("#myModal").modal('show');
    });
    $(document).on('click','.addnew',function(){
        // alert();
        var myform=$("#myform");
        $.ajax({
                type: "post",
                url: "data_add.php",
                data:myform.serialize(),
                dataType: "JSON",
                success: function (result) {

                    $('.formmessage').remove();
                if (result.errors && !result.errors == '') {

                    $.each(result.errors, (key, value) => {

                        var msg = '<label class="error formmessage error2"  style="color:red">' + value + '</label>';


                        myform.find('input[name="' + key + '"], select[name="' + key + '"], select[name="' + key + '[]"],textarea[name="' + key + '"]').after(msg);

                    });

                }
                else {
                    alert(result.message);
                    if (result.status == true) {
                        appenddata();
                        $("#myModal").modal('hide');

                    }
                }



            }
            });

    })
    $(document).on('click','.update',function(){
      var car=$(this);
      var name=$(car).attr('data-name');
      var email=$(car).attr('data-email');
      var village=$(car).attr('data-village');
      var id=$(car).attr('data-ids');

    $("#myModalEdit").modal('show');


    $("#nameEdit").val(name);
    $("#emailEdit").val(email);
    $("#villageEdit").val(village);
    $("#hidden_id").val(id);

    //   alert(id);

    });
    $(document).on('click','.addnewEdit',function(){
        // alert();
        var myformEdit=$("#myformEdit");
        $.ajax({
                type: "post",
                url: "data_update.php",
                data:myformEdit.serialize(),
                dataType: "JSON",
                success: function (result) {

                    $('.formmessage').remove();
                if (result.errors && !result.errors == '') {

                    $.each(result.errors, (key, value) => {

                        var msg = '<label class="error formmessage error2"  style="color:red">' + value + '</label>';


                        myform.find('input[name="' + key + '"], select[name="' + key + '"], select[name="' + key + '[]"],textarea[name="' + key + '"]').after(msg);

                    });

                }
                else {
                    alert(result.message);
                    if (result.status == true) {
                        appenddata();
                        $("#myModalEdit").modal('hide');

                    }
                }



            }
            });
    });
</script>

<body>

    <div class="container">
        <button class="btn btn-info add">Add</button>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>SrNo</th>

                    <th>Name</th>
                    <th>Email</th>
                    <th>Village</th>
                    <th>Edit</th>
                    <th>Delete</th>


                </tr>
            </thead>
            <tbody class="dataappned">

            </tbody>
        </table>
    </div>



    <!-- Trigger the modal with a button -->

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <form id="myform">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="village">Village:</label>
                            <input type="text" name="village" class="form-control" id="village">
                        </div>
                        
                        <button type="button" class="btn btn-info addnew">Add</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>




    <div id="myModalEdit" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <form id="myformEdit">
                    <input type="hidden" id="hidden_id" name="hidden_id">

                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" class="form-control" id="nameEdit">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" class="form-control" id="emailEdit">
                        </div>
                        <div class="form-group">
                            <label for="village">Village:</label>
                            <input type="text" name="village" class="form-control" id="villageEdit">
                        </div>
                        
                        <button type="button" class="btn btn-info addnewEdit">Add</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

</body>

</html>