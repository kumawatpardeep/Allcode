<!DOCTYPE html>
<html>


<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<style>
    .loader {
        border: 16px solid #f3f3f3;
        border-radius: 50%;
        border-top: 16px solid #3498db;
        width: 120px;
        height: 120px;
        -webkit-animation: spin 2s linear infinite;
        /* Safari */
        animation: spin 2s linear infinite;
        /* display: none; */
        display: block;
    }

    /* Safari */
    @-webkit-keyframes spin {
        0% {
            -webkit-transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(360deg);
        }
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
</style>
<script>

    function callAjaxForIndex() {
        $.ajax({
            beforeSend: function () {
                $(".loader").show();
            },

            type: "post",
            url: "mydata.php",
            data: {},
            dataType: 'JSON',

            success: function (response) {
                // console.log(response);
                // $(".mydataappend").html(response);
                $myappneddata = "";
                $srno = 1;
                $.each(response, function (index, value) {

                    $myappneddata += '<tr>';
                    $myappneddata += '<td>' + $srno + '</td>';
                    $myappneddata += '<td>' + value.name + '</td>';
                    $myappneddata += '<td>' + value.email + '</td>';
                    $myappneddata += '<td>' + value.mobile + '</td>';
                    $myappneddata += '<td><button class="btn btn-info">Update</button><button class="btn btn-danger trash" data-ids="' + value.id + '">Delete</button></td>';

                    $myappneddata += '</tr>';

                    $srno++;

                });
                // console.log($myappneddata);
                $(".mydataappend").html($myappneddata);
            },

            complete: function () {
                $(".loader").hide();
            }
        });
    }

    $(document).ready(function () {
        callAjaxForIndex();
    });

    $(document).on('click', '.aadbtn', function () {
        $("#myModals").modal('show');
    });
    $(document).on('click', '.addnew', function () {
        var myform = $("#myform");
        $.ajax({
            type: "post",
            url: "my_data_add.php",
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
                        callAjaxForIndex();
                        $("#myModals").modal('hide');

                    }
                }



            }
        });

    })

    $(document).on('click', '.trash', function () {
        var ids = $(this).attr('data-ids');
        // print(ids)
        // alert(ids);
        var confiram = confirm("Are you sure to Trash...!");
        if (confiram == true) {
            $.ajax({
                beforeSend: function () {
                    $(".loader").show();
                },

                type: "post",
                url: "my_data_delete.php",
                data: { id: ids },
                dataType: 'JSON',
                success: function (response) {
                    // console.log(response);
                    // $(".mydataappend").html(response);
                    alert(response.message);
                    if (response.status == true) {
                        callAjaxForIndex();

                    }
                },

                complete: function () {
                    $(".loader").hide();
                }
            });
        }
    })
</script>

<body>
    <div class="container">
        <button class="btn btn-info aadbtn">Add</button>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Sr.No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="mydataappend">


            </tbody>
        </table>
    </div>


    <!-- Modal -->
    <div id="myModals" class="modal fade" role="dialog">
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
                            <input type="text" name="name" placeholder="Enter Name" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" placeholder="Enter Email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="mobile">Mobile:</label>
                            <input type="text" name="mobile" maxlength="10" class="form-control" id="mobile">
                        </div>
                       
                        <button type="button"  class="btn btn-info addnew">Add</button>
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