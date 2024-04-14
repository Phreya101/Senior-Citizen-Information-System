<div id="add" class="modal animated rubberBand delete-modal" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body text-center">
                <form method="post" id="addUser">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-header">
                                    <span class="fa fa-user-shield"> Admin Profile Information</span>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Full Name</label>
                                            <input type="text" name="fname" required class="form-control" placeholder="Full Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Contact Number</label>
                                            <input type="text" name="num" required class="form-control" placeholder="Contact Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" name="uname" required class="form-control" placeholder="Username">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="pass" required class="form-control" placeholder="************">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <a href="#" class="btn btn-cancel" data-dismiss="modal">Cancel</a>
                        <button type="submit" class="btn btn-info">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#addUser').submit(function(e) {
            e.preventDefault();

            var add = $(this).serialize();

            add += '&action=addUser';

            $.ajax({
                url: 'ajax.php',
                method: 'post',
                data: add,
                success: function(response) {
                    Swal.fire({
                        position: "top-end",
                        title: "Registered!",
                        text: "The account has been added successfully.",
                        icon: "success",
                        showConfirmButton: false,
                        timer: 1500,
                    });
                    setTimeout(function() {
                        location.reload();
                    }, 1500);
                }
            })
        })
    })
</script>