<?php
$id = $_GET['id'];
?>
<img src="../asset/img/sent.png" alt="" width="50" height="46">
<h3>Are you sure you want to delete this account?</h3>
<div class="m-t-20">
    <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
    <button type="button" id="delete" data-id="<?php echo $id ?>" class="btn btn-danger">Delete</button>
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
                    action: 'deleteUser'
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