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
    function dataGetOnly() {
        $.ajax({
            type: "post",
            url: "data_table.php",
            data: {},
            dataType: "JSON",
            success: function (response) {
                $protected = "";
                $noer = 1;
                $.each(response, function (index, value) {
                    $protected += '<tr>';
                    $protected += '<td>' + $noer + '</td>';
                    $protected += '<td>' + value.name + '</td>';
                    $protected += '<td>' + value.email + '</td>';
                    $protected += '<td>' + value.village + '</td>';
                    $protected += '<td>' + value.gender + '</td>';
                    $protected += '<td>' + value.cast + '</td>';
                    $protected += '<td>' + value.mobile + '</td>';
                    $protected += '<td><button class="btn btn-info editer" data-ids="' + value.id + '" data-name="' + value.name + '" data-email="' + value.email + '" data-village="' + value.village + '" data-gender="' + value.gender + '" data-cast="' + value.cast + '" data-mobile="' + value.mobile + '">Edit</button> <button class="btn btn-danger trush" data-user="' + value.id + '">Delete</button></td>';


                    $protected += '</tr>';
                    $noer++;


                })
                $("#appneddata").html($protected);
            }
        });
    }
    $(document).ready(function () {
        dataGetOnly();
    })

    // DELETE TABLE

    $(document).on('click', '.trush', function () {
        // alert();
        var user = $(this).attr('data-user');
        var confiram = confirm("Are You Sure For Delete..!");
        if (confiram) {
            $.ajax({
                type: "post",
                url: "table_data_delete.php",
                data: { id: user },
                dataType: "JSON",
                success: function (response) {
                    alert(response.message);
                    if (response.status == true) {
                        dataGetOnly();
                    }



                }
            });
        }
    })

    // DELETE TABLE

    // ADD DATA
    $(document).on('click', '.add', function () {
        $("#myModal").modal('show');
    });
    $(document).on('click', '.addnew', function () {
        var myform = $("#myform");
        $.ajax({
            type: "post",
            url: "table_data_add.php",
            data: myform.serialize(),
            dataType: "JSON",
            success: function (response) {
                $('.formmessage').remove();
                if (response.errors && !response.errors == '') {

                    $.each(response.errors, (key, value) => {

                        var msg = '<label class="error formmessage error2"  style="color:red">' + value + '</label>';


                        myform.find('input[name="' + key + '"], select[name="' + key + '"], select[name="' + key + '[]"],textarea[name="' + key + '"]').after(msg);

                    });

                }
                else {
                    alert(response.message);
                    if (response.status == true) {
                        dataGetOnly();
                        $("#myModal").modal('hide');

                    }
                }



            }
        });

    })

    // ADD DATA

    // EDIT AND UPDATE

    $(document).on('click', '.editer', function () {
        // alert();
        var curr = $(this);
        var name = $(curr).attr('data-name');
        var email = $(curr).attr('data-email');
        var village = $(curr).attr('data-village');
        var gender = $(curr).attr('data-gender');
        var cast = $(curr).attr('data-cast');
        var mobile = $(curr).attr('data-mobile');
        var id = $(curr).attr('data-ids');

        $("#myModalEdit").modal('show');

        $("#nameEdit").val(name);
        $("#emailEdit").val(email);
        $("#villageEdit").val(village);
        $("#ganderEdit").val(gender);
        $("#castEdit").val(cast);
        $("#mobileEdit").val(mobile);
        $("#hidden_id").val(id);



        // alert(gender);
    });
    $(document).on('click', '.addnewedit', function () {
        var myformedit = $("#myformEdit");
        $.ajax({
            type: "post",
            url: "table_data_edit.php",
            data: myformedit.serialize(),
            dataType: "JSON",
            success: function (response) {
                $('.formmessage').remove();
                if (response.errors && !response.errors == '') {

                    $.each(response.errors, (key, value) => {

                        var msg = '<label class="error formmessage error2"  style="color:red">' + value + '</label>';


                        myformedit.find('input[name="' + key + '"], select[name="' + key + '"], select[name="' + key + '[]"],textarea[name="' + key + '"]').after(msg);

                    });

                }
                else {
                    alert(response.message);
                    if (response.status == true) {
                        dataGetOnly();
                        $("#myModalEdit").modal('hide');

                    }
                }



            }
        });
    })

</script>

<body>

    <div class="container">
        <button class="btn btn-success add">Add Data</button>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>SrNo</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Village</th>
                    <th>Gender</th>
                    <th>Cast</th>
                    <th>Mobile</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody id="appneddata">

            </tbody>
        </table>
    </div>

    <!-- ADD DATA MODAL START-->
    <!-- Trigger the modal with a button -->
    <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->

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
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label for="village">Village:</label>
                            <input type="text" name="village" class="form-control" id="village"
                                placeholder="Enter Village">
                        </div>
                        <div class="form-group">
                            <label>Gender:</label><br>
                            <select name="gander" id="gander" class="form-control">
                                <option value="">Select</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>other</option>

                            </select>

                        </div>
                        <div class="form-group">
                            <label for="cast">Cast:</label>
                            <select id="cast" name="cast" value="select" class="form-control">
                                <option value="">Select</option>
                                <option>Obc</option>
                                <option>Sc</option>
                                <option>St</option>
                            </select>

                        </div>
                        <div class="form-group">
                            <label for="mobile">Mobile:</label>
                            <input type="text" name="mobile" class="form-control" id="mobile"
                                placeholder="Enter Mobile">
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

    <!-- ADD DATA MODAL END-->

    <!-- EDIT DATA START-->
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
                            <input type="text" name="name" class="form-control" id="nameEdit" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" class="form-control" id="emailEdit"
                                placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label for="village">Village:</label>
                            <input type="text" name="village" class="form-control" id="villageEdit"
                                placeholder="Enter Village">
                        </div>
                        <div class="form-group">
                            <label>Gender:</label><br>
                            <select name="gender" id="ganderEdit" class="form-control">
                                <option value="">Select</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>other</option>

                            </select>

                        </div>
                        <div class="form-group">
                            <label for="cast">Cast:</label>
                            <select id="castEdit" name="cast" value="select" class="form-control">
                                <option value="">Select</option>
                                <option>Obc</option>
                                <option>Sc</option>
                                <option>St</option>
                            </select>

                        </div>
                        <div class="form-group">
                            <label for="mobile">Mobile:</label>
                            <input type="text" name="mobile" class="form-control" id="mobileEdit"
                                placeholder="Enter Mobile">
                        </div>

                        <button type="button" class="btn btn-success addnewedit">Add</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <!-- EDIT DATA END -->

</body>

</html>