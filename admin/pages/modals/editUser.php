<?php
include_once("../../../auth/conn.php");
$id = $_GET['id'];
$user = mysqli_query($conn, "SELECT * FROM `user` WHERE id = $id")->fetch_assoc() or die(mysqli_error($con));
?>

<form id="fedit" method='POST'>
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <input type="hidden" name="id" placeholder="" value="<?php echo $user['id']; ?>">

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" name="fname" class="form-control" placeholder="" value="<?php echo $user['fname']; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Contact Number</label>
                        <input type="text" name="num" class="form-control" placeholder="" value="<?php echo $user['num']; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="uname" class="form-control" placeholder="" value="<?php echo $user['uname']; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="pass" class="form-control" value="<?php echo $user['pass']; ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <a href="#" class="btn btn-cancel" data-dismiss="modal">Cancel</a>
        <input type="submit" name="saveUser" id="saveUser" class="btn btn-info" value="Save">
    </div>
</form>

<script>
    $(document).ready(function() {
        $("#fedit").submit(function(e) {
            e.preventDefault();

            var editForm = $('#fedit').serialize();
            editForm += "&action=editUser";

            $.ajax({
                url: 'ajax.php',
                method: 'POST',
                data: editForm,
                success: function(response) {
                    Swal.fire({
                        position: "top-end",
                        icon: "success",
                        title: "Your work has been saved",
                        showConfirmButton: false,
                        timer: 1500,
                    });
                    setTimeout(function() {
                        location.reload();
                    }, 1500)
                },
                error: function(xhr, status, error) {
                    Swal.fire({
                        position: "top-end",
                        icon: "error",
                        title: "Something Went Wrong!",
                        showConfirmButton: false,
                    });
                    setTimeout(function() {
                        location.reload();
                    }, 1500)
                }
            });
        });
    });
</script>