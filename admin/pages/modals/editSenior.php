<?php include_once("../../../auth/conn.php");
$id = $_GET['id'];
$sql = mysqli_query($conn, "SELECT * FROM `senior` WHERE  `id` = '$id'")->fetch_assoc() or die(mysqli_error($conn));
?>

<form method="post" id="editSenior">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card-header">
                    <span class="fa fa-user"> Profile Information</span>
                </div>
                <div class="row">
                    <input type="hidden" name="snrID" class="form-control" value="<?php echo $sql['id']; ?>">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Senior ID</label>
                            <input type="text" class="form-control" value="<?php echo $sql['id']; ?>" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" class="form-control" name="fname" placeholder="first name" value="<?php echo $sql['fname']; ?>" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Middle Name</label>
                            <input type="text" class="form-control" name="mname" placeholder="middle name" value="<?php echo $sql['mname']; ?>" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control" name="lname" placeholder="last name" value="<?php echo $sql['lname']; ?>" required>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Gender</label>
                            <select name="sex" class="form-control" required>
                                <?php if ($sql['sex'] == 'Male') : ?>
                                    <option selected value="Male">Male</option>
                                    <option value="Female">Female</option>
                                <?php else : ?>
                                    <option value="Male">Male</option>
                                    <option selected value="Female">Female</option>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Birthday</label>
                            <input id="bday" name="bday" type="date" value="<?php echo $sql['bday']; ?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Age</label>
                            <input name="age" id="age" type="number" value="<?php echo $sql['age']; ?>" class="form-control" placeholder="Age" required readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Birth Place</label>
                            <input name="bplace" type="text" value="<?php echo $sql['bplace']; ?>" class="form-control" placeholder="Birth Place" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Address</label>
                            <textarea name="addr" class="form-control" required> <?php echo $sql['addr']; ?></textarea>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="card-header">
                            <span class="fa fa-phone"> Contact Information</span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Contact Number</label>
                            <input type="text" name="cnum" value="<?php echo $sql['cnum']; ?>" class="form-control" placeholder="Contact Number">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email <i>(optional)</i></label>
                            <input type="email" name="email" value="<?php echo $sql['email']; ?>" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Emergency Contact Number</label>
                            <input type="text" name="econ" value="<?php echo $sql['econ']; ?>" class="form-control" placeholder="Emergency Contact Number" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Emergency Contact Address</label>
                            <input type="text" name="eaddr" value="<?php echo $sql['eaddr']; ?>" class="form-control" placeholder="Emergency Contact Address" required>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="card-header">
                            <span class="fa fa-notes-medical"> Health Information</span>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Blood Type</label>
                            <select name="btype" class="form-control" required>
                                <option disabled>Select Blood Type</option>
                                <option value="Unknown" <?php if ($sql['btype'] == "Unknown") echo "selected"; ?>>Unknown</option>
                                <option value="O+" <?php if ($sql['btype'] == "O+") echo "selected"; ?>>O+</option>
                                <option value="O-" <?php if ($sql['btype'] == "O-") echo "selected"; ?>>O-</option>
                                <option value="A+" <?php if ($sql['btype'] == "A+") echo "selected"; ?>>A+</option>
                                <option value="A-" <?php if ($sql['btype'] == "A-") echo "selected"; ?>>A-</option>
                                <option value="B+" <?php if ($sql['btype'] == "B+") echo "selected"; ?>>B+</option>
                                <option value="B-" <?php if ($sql['btype'] == "B-") echo "selected"; ?>>B-</option>
                                <option value="AB+" <?php if ($sql['btype'] == "AB+") echo "selected"; ?>>AB+</option>
                                <option value="AB-" <?php if ($sql['btype'] == "AB-") echo "selected"; ?>>AB-</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Health Problem/Illness</label>
                            <input type="text" name="hprob" value="<?php echo $sql['hprob']; ?>" class="form-control" placeholder="Health Problem/Illness">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Physical Disability</label>
                            <input type="text" name="disability" value="<?php echo $sql['disability']; ?>" class="form-control" placeholder="Physical Disability">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="card-header">
                            <span class="fa fa-user-graduate"> Education Information</span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Highest Educational Attainment</label>
                            <select name="educ" class="form-control" required>
                                <option disabled>Select Highest Educational Attainment</option>
                                <option value="Not Attended School" <?php if ($sql['educ'] == "Not Attended School") echo "selected"; ?>>Not Attended School</option>
                                <option value="Elementary Level" <?php if ($sql['educ'] == "Elementary Level") echo "selected"; ?>>Elementary Level</option>
                                <option value="Elementary Graduate" <?php if ($sql['educ'] == "Elementary Graduate") echo "selected"; ?>>Elementary Graduate</option>
                                <option value="Highschool Level" <?php if ($sql['educ'] == "Highschool Level") echo "selected"; ?>>Highschool Level</option>
                                <option value="Highschool Graduate" <?php if ($sql['educ'] == "Highschool Graduate") echo "selected"; ?>>Highschool Graduate</option>
                                <option value="Vocational" <?php if ($sql['educ'] == "Vocational") echo "selected"; ?>>Vocational</option>
                                <option value="College Level" <?php if ($sql['educ'] == "College Level") echo "selected"; ?>>College Level</option>
                                <option value="College Graduate" <?php if ($sql['educ'] == "College Graduate") echo "selected"; ?>>College Graduate</option>
                                <option value="Post Graduate" <?php if ($sql['educ'] == "Post Graduate") echo "selected"; ?>>Post Graduate</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Specialization / Technical Skills</label>
                            <input type="text" value="<?php echo $sql['skill']; ?>" name="skill" class="form-control" placeholder="Specialization / Technical Skills">
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>
    <div class="card-footer">
        <a href="#" class="btn btn-cancel" data-dismiss="modal">Cancel</a>
        <button type="submit" name="save" class="btn btn-primary">Save Changes</button>
    </div>
</form>

<script>
    $(document).ready(function() {
        // Get the current date
        var currentDate = new Date();

        // Calculate the date 60 years ago
        var maxDate = new Date(currentDate);
        maxDate.setFullYear(currentDate.getFullYear() - 60);

        // Format the date as YYYY-MM-DD (required by the date input)
        var formattedMaxDate = maxDate.toISOString().split("T")[0];

        // Set the max attribute of the date input element
        document.getElementById("bday").setAttribute("max", formattedMaxDate);
    });

    $(document).ready(function() {
        // Function to calculate age
        function calculateAge(birthDate) {
            var currentDate = new Date();
            var age = currentDate.getFullYear() - birthDate.getFullYear();
            var monthDiff = currentDate.getMonth() - birthDate.getMonth();
            if (
                monthDiff < 0 ||
                (monthDiff === 0 && currentDate.getDate() < birthDate.getDate())
            ) {
                age--;
            }
            return age;
        }

        // Get references to the date input and age input elements
        var bdayInput = document.getElementById("bday");
        var ageInput = document.getElementById("age");

        // Add event listener to the date input
        bdayInput.addEventListener("change", function() {
            // Get the selected date from the input
            var selectedDate = new Date(this.value);

            // Check if a valid date is selected
            if (!isNaN(selectedDate.getTime())) {
                // Calculate age
                var age = calculateAge(selectedDate);

                // Update the age input value
                ageInput.value = age;
            } else {
                // If an invalid date is selected, clear the age input
                ageInput.value = "";
            }
        });
    });

    $(document).ready(function() {
        $('#editSenior').submit(function(e) {
            e.preventDefault();

            // Serialize form data
            // var editSenior = $('#editSenior').serialize();
            var editSeniorData = {
                'snrID': $('input[name="snrID"]').val(),
                'fname': $('input[name="fname"]').val(),
                'mname': $('input[name="mname"]').val(),
                'lname': $('input[name="lname"]').val(),
                'sex': $('select[name="sex"]').val(),
                'bday': $('input[name="bday"]').val(),
                'age': $('input[name="age"]').val(),
                'bplace': $('input[name="bplace"]').val(),
                'addr': $('textarea[name="addr"]').val(),
                'cnum': $('input[name="cnum"]').val(),
                'email': $('input[name="email"]').val(),
                'econ': $('input[name="econ"]').val(),
                'eaddr': $('input[name="eaddr"]').val(),
                'btype': $('select[name="btype"]').val(),
                'hprob': $('input[name="hprob"]').val(),
                'disability': $('input[name="disability"]').val(),
                'educ': $('select[name="educ"]').val(),
                'skill': $('input[name="skill"]').val(),
                'action': 'editSenior'
            };

            $.ajax({
                url: 'ajax.php',
                method: 'POST', // Ensure that the method is set to 'POST'
                data: editSeniorData,
                success: function(response) {
                    // Handle success response
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
                    // Handle error response
                    Swal.fire({
                        position: "top-end",
                        icon: "error",
                        title: "Something Went Wrong!",
                        showConfirmButton: false,
                    });
                }
            });
        });
    });
</script>



<script>
    $(document).ready(function() {
        $('#bday').click(function() {
            $(this).attr('type', 'date');
        });
    });
</script>