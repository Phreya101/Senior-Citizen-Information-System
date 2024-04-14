<?php
include('../auth/conn.php');
session_start();

if (!isset($_SESSION['id'])) {
   header("Location:../index.php?error=Please Login First!");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <?php
   include('includes/head.php');
   ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">

   <div id="loading">
      <div class="spinner"></div>
   </div>

   <div class="wrapper">
      <?php
      include('includes/header.php');
      include('includes/sidebar.php');
      ?>

      <?php
      $page = $_GET['page'];
      if ($page == 'home') :
         include('pages/home.php');
      elseif ($page == 'addSenior') :
         include('pages/addSenior.php');
      elseif ($page == 'manageSenior') :
         include('pages/manageSenior.php');
      elseif ($page == 'manageUser') :
         include('pages/manageUser.php');
      else :
         include('pages/report.php');
      endif;

      ?>


   </div>

   <script>
      function showLoading() {
         $('#loading').show(); // Show loading message
      }

      function hideLoading() {
         $('#loading').hide(); // Hide loading message
      }
   </script>
   <?php
   include('includes/footer.php');
   ?>
</body>

</html>