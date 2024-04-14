<?php
include_once("../../../auth/conn.php");
$id = $_GET['id'];
$snr = mysqli_query($conn, "SELECT `id`, CONCAT(fname, ' ', mname, ' ', lname) AS full_name FROM `senior` WHERE id = '$id'")->fetch_assoc() or die(mysqli_error($con));
?>
<img src="../asset/img/sent.png" alt="" width="50" height="46">
<h4>Are you sure want to delete the record of <i><?php echo $snr['full_name']; ?></i> ?</h4>
<div class="m-t-20">
    <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
    <button id="delete" type="button" data-id='<?php echo $snr['id'] ?>' class="btn btn-danger">Delete</button>
</div>

<script>
    $(document).ready(function() {
        $('#delete').click(function() {
            var id = $(this).data('id');
            $.ajax({
                url: 'ajax.php',
                method: 'post',
                data: {
                    id: id,
                    action: 'deleteSenior'
                },
                success: function(response) {
                    if (response === 'success') {
                        Swal.fire({
                            position: "top-end",
                            icon: "success",
                            title: "Successfully Deleted!",
                            showConfirmButton: false,
                            timer: 1500,
                        });
                        setTimeout(function() {
                            location.reload();
                        }, 1500)
                    } else {
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
                }
            })
        })
    })
</script>