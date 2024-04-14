<div class="content-wrapper">
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6 animated bounceInRight">
               <h1 class="m-0"><span class="fa fa-user-plus"></span> Add Senior</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="index.php?page=home">Home</a></li>
                  <li class="breadcrumb-item active">Add Senior</li>
               </ol>
            </div>
         </div>
      </div>
   </div>
   <section class="content">
      <div class="container-fluid">
         <div class="card card-info">
            <div class="card card-outline card-info">
               <form method="post" id="addSenior">
                  <div class="card-body">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="card-header">
                              <span class="fa fa-user"> Profile Information</span>
                           </div>
                           <div class="row">
                              <?php
                              $id = uniqid();
                              ?>
                              <input type="hidden" class="form-control" name="snrID" value="SNR-<?php echo $id ?>">
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" name="fname" placeholder="first name" required>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label>Middle Name</label>
                                    <input type="text" class="form-control" name="mname" placeholder="middle name" required>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" name="lname" placeholder="last name" required>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label>Gender</label>
                                    <select name="sex" class="form-control" required>
                                       <option value="Male">Male</option>
                                       <option value="Female">Female</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label>Birthday</label>
                                    <input name="bday" id="bday" type="date" class="form-control" required>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label>Age</label>
                                    <input name="age" id="age" type="number" readonly class="form-control" placeholder="Age" required>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label>Birth Place</label>
                                    <input name="bplace" type="text" class="form-control" placeholder="Birth Place" required>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label>Address</label>
                                    <textarea name="addr" class="form-control" required></textarea>
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
                                    <input type="text" name="cnum" class="form-control" placeholder="Contact Number">
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label>Email <i>(optional)</i></label>
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label>Emergency Contact Number</label>
                                    <input type="text" name="econ" class="form-control" placeholder="Emergency Contact Number" required>
                                 </div>
                              </div>

                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label>Emergency Contact Address</label>
                                    <input type="text" name="eaddr" class="form-control" placeholder="Emergency Contact Address" required>
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
                                       <option selected disabled>Select Blood Type</option>
                                       <option value="Unknown">Unknown</option>
                                       <option value="O+">O+</option>
                                       <option value="O-">O-</option>
                                       <option value="A+">A-</option>
                                       <option value="A-">A-</option>
                                       <option value="B+">B+</option>
                                       <option value="B-">B-</option>
                                       <option value="AB+">AB+</option>
                                       <option value="AB-">AB-</option>
                                    </select>
                                 </div>
                              </div>

                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label>Health Problem/Illness</label>
                                    <input type="text" name="hprob" class="form-control" placeholder="Health Problem/Illness">
                                 </div>
                              </div>

                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label>Physical Disability</label>
                                    <input type="text" name="disability" class="form-control" placeholder="Physical Disability">
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
                                       <option selected disabled>Select Highest Educational Attainment</option>
                                       <option value="Not Attended School">Not Attended School</option>
                                       <option value="Elementary Level">Elementary Level</option>
                                       <option value="Elementary Graduate">Elementary Graduate</option>
                                       <option value="Highschool Level">Highschool Level</option>
                                       <option value="Highschool Graduate">Highschool Graduate</option>
                                       <option value="Vocational">Vocational</option>
                                       <option value="College Level">College Level</option>
                                       <option value="College Graduate">College Graduate</option>
                                       <option value="Post Graduate">Post Graduate</option>
                                    </select>
                                 </div>
                              </div>

                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label>Specialization / Technical Skills</label>
                                    <input type="text" name="skill" class="form-control" placeholder="Specialization / Technical Skills">
                                 </div>
                              </div>


                           </div>
                        </div>
                     </div>

                  </div>
                  <div class="card-footer">
                     <button type="submit" class="btn btn-primary">Save</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </section>
</div>

<script src="pages/ajax/addSenior.js"></script>