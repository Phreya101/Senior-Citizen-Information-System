<style type="text/css">
   table tr td {
      padding: 0.3rem !important;
   }

   table tr td p {
      margin-top: -0.8rem !important;
      margin-bottom: -0.8rem !important;
      font-size: 0.8rem;
   }

   td a.btn {
      font-size: 0.7rem;
   }
</style>

<div class="content-wrapper">
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0"><span class="fa fa-blind"></span> Manage Senior Citizens</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="index.php?page=home">Home</a></li>
                  <li class="breadcrumb-item active">Operator</li>
               </ol>
            </div>
         </div>
      </div>
   </div>
   <section class="content">
      <div class="container-fluid">
         <div class="card card-info elevation-2">
            <br>
            <div class="col-md-12">
               <table id="example2" class="table table-bordered">
                  <thead class="btn-cancel">
                     <tr>
                        <th>ID No.</th>
                        <th>Profile Info</th>
                        <th>Contact Info</th>
                        <th>Education Info</th>
                        <th>Health Info</th>
                        <th>Address</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php $snr = mysqli_query($conn, "SELECT * FROM `senior` WHERE `status` = 'active'") or die(mysqli_error($conn));
                     while ($row = mysqli_fetch_assoc($snr)) {
                     ?>
                        <tr>
                           <td><?php echo $row['id']; ?></td>
                           <td>
                              <p class="info"><small class="text-danger">Name:</small> <?php echo $row['fname'] . ' ' . $row['mname'] . ' ' . $row['lname'] ?></p>
                              <p class="info"><small class="text-danger">Gender:</small> <?php echo $row['sex']; ?></p>
                              <p class="info"><small class="text-danger">Birthday:</small> <?php echo $row['bday']; ?></p>
                              <p class="info"><small class="text-danger">Age:</small> <?php echo $row['age']; ?></p>
                           </td>
                           <td>
                              <p class="info"><small class="text-danger">Contact Number: </small><?php if ($row['cnum'] === '') : echo '<i>none</i>';
                                                                                                   else : echo $row['cnum'];
                                                                                                   endif; ?></p>
                              <p class="info"><small class="text-danger">Email: </small><?php if ($row['email'] === '') : echo '<i>none</i>';
                                                                                          else : echo $row['email'];
                                                                                          endif; ?></p>
                              <p class="info"><small class="text-danger">Emergency Contact Number: </small><?php echo $row['econ']; ?></p>
                              <p class="info"><small class="text-danger">Emergency Contact Address: </small><?php echo $row['eaddr']; ?></p>
                           </td>
                           <td>
                              <p class="info"><small class="text-danger">Highest Educational Attainment: </small><?php echo $row['educ']; ?></p>
                              <p class="info"><small class="text-danger">Specialization: </small><?php if ($row['skill'] === '') : echo '<i>none</i>';
                                                                                                   else : echo $row['skill'];
                                                                                                   endif; ?></p>
                           </td>
                           <td>
                              <p class="info"><small class="text-danger">Blood Type: </small><?php echo $row['btype']; ?></p>
                              <p class="info"><small class="text-danger">Health Problem: </small><?php if ($row['hprob'] === '') : echo '<i>n/a</i>';
                                                                                                   else : echo $row['hprob'];
                                                                                                   endif; ?></p>
                              <p class="info"><small class="text-danger">Physical Disability: </small><?php if ($row['disability'] === '') : echo '<i>n/a</i>';
                                                                                                      else : echo $row['disability'];
                                                                                                      endif; ?></p>
                           </td>
                           <td><?php echo $row['addr']; ?></td>
                           <td class="text-center">
                              <a class="btn btn-sm btn-success edit" data-id='<?php echo $row['id']; ?>' href="#" data-toggle="modal" data-target="#edit"><i class="fa fa-user-edit"></i> update</a>
                              <a class="btn btn-sm btn-danger delete" data-id='<?php echo $row['id']; ?>' href="#" data-toggle="modal" data-target="#delete"><i class="fa fa-trash-alt"></i> delete</a>
                           </td>
                        </tr>
                     <?php } ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </section>
</div>

<div id="editSenior" class="modal fade">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <span class="fa fa-user"> Edit Senior Information</span>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
         <div class="modal-body" id="seniorcontent">
            <!-- Content loaded via AJAX will appear here -->
         </div>
      </div>
   </div>
</div>

<div id="dltSenior" class="modal fade">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-body" id="dltcontent">
            <!-- Content loaded via AJAX will appear here -->
         </div>
      </div>
   </div>
</div>

<script src="pages/ajax/manageSenior.js"></script>