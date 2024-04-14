<?php include('auth/conn.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Senior Citizen Profiling System</title>
   <!-- Google Font: Source Sans Pro -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="asset/fontawesome/css/all.min.css">
   <!-- Theme style -->
   <link rel="stylesheet" href="asset/css/adminlte.min.css">
   <!-- Sweet Alert -->
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

   <style>
      body {
         background-image: url('asset/img/bg.jpeg');
         background-repeat: no-repeat;
         /* Additional background properties if needed */
         background-size: cover;
         /* Adjust as needed */
         background-position: center;
         /* Adjust as needed */

      }

      .card-body {
         box-shadow: 20px 20px 20px rgb(0, 0, 0);
      }
   </style>

</head>

<body class="hold-transition login-page">
   <div class="login-box">
      <!-- /.login-logo -->
      <div class="card card-outline card-danger">
         <div class="card-header text-center">
            <a href="index.php" class="brand-link">
               <img src="asset/img/logo.png" alt="SCPS Logo" width="300">
            </a>
            <!-- Mission and Vision -->
            <h3 style="text-decoration: underline; margin-top: -15px;"> Mission </h3>
            <p>
               An Empowered Senior Citizen Organization
               Partnership With Responsive Goverment Agencies, Civil Society
               And Private Sector To Easily Access Goods And Services Leading
               To A Graceful And Enjoyable Aging.
            </p>

            <h3 style="text-decoration: underline;"> Vision </h3>
            <p>
               To Plan, Implement And Monitor The Work Programs In Pursuant To The Objectives Of RA 9994.
            </p>

            <!-- Logo -->

         </div>
         <div class="card-body">
            <form action="process.php" method="post">


               <?php if (isset($_GET['error'])) { ?>

                  <p class="mb-0 text-danger text-sm">
                     <?php echo $_GET['error']; ?>
                  </p>

               <?php } ?>
               <div class="input-group mb-3">
                  <input name="uname" type="text" class="form-control" placeholder="Username">
                  <div class="input-group-append">
                     <div class="input-group-text">
                        <span class="fas fa-user"></span>
                     </div>
                  </div>
               </div>
               <div class="input-group mb-3">
                  <input name="pass" type="password" class="form-control" placeholder="Password">
                  <div class="input-group-append">
                     <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-6 offset-3">
                     <button name="login" type="submit" class="btn btn-block btn-bg" style="background-color: rgba(231,67,100);">Login</button>
                  </div>
               </div>
            </form>
         </div>
         <!-- /.card-body -->
      </div>
      <!-- /.card -->
   </div>
   <!-- /.login-box -->
</body>

</html>