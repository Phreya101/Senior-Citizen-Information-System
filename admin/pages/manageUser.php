<style type="text/css">
   table tr td {
      padding: 0.3rem !important;
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
               <h1 class="m-0"><span class="fa fa-user-shield"></span> Admin Users</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="index.php?page=home">Home</a></li>
                  <li class="breadcrumb-item active">Admin Users</li>
               </ol>
            </div>
            <a class="btn btn-sm elevation-2" href="#" data-toggle="modal" data-target="#add" style="margin-top: 20px;margin-left: 10px;background-color: #e4c79f;"><i class="fa fa-user-plus"></i>
               Add New</a>
         </div>
      </div>
   </div>
   <section class="content">
      <div class="container-fluid">
         <div class="card card-info elevation-2">
            <br>
            <div class="col-md-12">
               <table id="manageUser" style="width: 100%;" class="table table-bordered">
                  <thead class="btn-cancel">
                     <tr>
                        <th>Full Name</th>
                        <th>Contact Number</th>
                        <th>Username</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                     $cid = $_SESSION['id'];
                     $row = mysqli_query($conn, "SELECT * FROM `user` WHERE `status` = 'active' OR `status` = 'disabled';");
                     while ($user = $row->fetch_assoc()) :
                     ?>
                        <tr>
                           <td <?php if ($user['status'] == 'disabled') {
                                    echo "style='text-decoration: line-through;'";
                                 } ?>>
                              <?php echo $user['fname'];
                              if ($user['id'] === $cid) {
                                 echo '<i style="font-size:x-small; color:#007bff;">(you)</i>';
                              }
                              ?>

                           </td>

                           <td <?php if ($user['status'] == 'disabled') {
                                    echo "style='text-decoration: line-through;'";
                                 } ?>><?php echo $user['num']; ?>
                           </td>

                           <td <?php if ($user['status'] == 'disabled') {
                                    echo "style='text-decoration: line-through;'";
                                 } ?>><?php echo $user['uname']; ?>
                           </td>

                           <td class="text-center">
                              <?php if ($_SESSION['id'] == $user['id'] && $user['status'] == 'active') : ?>
                                 <a class="btn btn-sm btn-success edit-user-btn" href="#" data-user-id="<?php echo $user['id']; ?>" data-toggle="modal" data-target="#edit_<?php echo $_SESSION['id']; ?>"><i class="fa fa-user-edit"></i> update</a>
                              <?php elseif ($_SESSION['id'] != $user['id'] && $user['status'] == 'active') : ?>
                                 <a class="btn btn-sm btn-success edit-user-btn" href="#" data-user-id="<?php echo $user['id']; ?>" data-toggle="modal" data-target="#edit_<?php echo $user['id']; ?>"><i class="fa fa-user-edit"></i> update</a>
                                 <a class="btn btn-sm btn-secondary userDisable" href="#" data-user-id="<?php echo $user['id']; ?>" data-toggle="modal" data-target="#delete"><i class="fa fa-user-slash"></i> disable</a>
                                 <a class="btn btn-sm btn-danger deleteUser" href="#" data-user-id="<?php echo $user['id']; ?>" data-toggle="modal"><i class="fa fa-trash"></i> delete</a>
                              <?php elseif ($_SESSION['id'] != $user['id'] && $user['status'] == 'disabled') : ?>
                                 <a class="btn btn-sm btn-primary enableUser" href="#" data-user-id="<?php echo $user['id']; ?>" data-toggle="modal"><i class="fa fa-user"></i> enable</a>
                                 <a class="btn btn-sm btn-danger deleteUser" href="#" data-user-id="<?php echo $user['id']; ?>" data-toggle="modal"><i class="fa fa-trash"></i> delete</a>
                              <?php endif; ?>
                           </td>
                        </tr>
                     <?php
                     endwhile;
                     ?>

                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </section>
</div>



<!-- the modal -->
<div id="editUser" class="modal fade">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <span class="fa fa-user"> Edit Admin Information</span>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
         <div class="modal-body" id="usercontent">
            <!-- Content loaded via AJAX will appear here -->
         </div>
      </div>
   </div>
</div>

<div id="dltUser" class="modal fade">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-body" id="dltcontent">
            <!-- Content loaded via AJAX will appear here -->
         </div>
      </div>
   </div>
</div>

<script src="pages/ajax/manageUser.js"></script>

<?php

include('modals/addUser.php');
?>