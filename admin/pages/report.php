<style type="text/css">
   table tr td {
      padding: 1.1rem !important;
   }
</style>

<div class="content-wrapper">
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0"><span class="fa fa-sort-numeric-up-alt"></span> Age Reports</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="index.php?page=home">Home</a></li>
                  <li class="breadcrumb-item active">Reports</li>
               </ol>
            </div>
         </div>
      </div>
   </div>
   <section class="content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12 col-md-4 col-lg-4 col-xl-4">
               <div class="card">
                  <div class="card-body">
                     <div class="chart-title">
                        <h4>Report By Age Bracket </h4>
                     </div>
                     <table class="table table-bordered mytable">
                        <thead>
                           <td>
                              <h6>Age Bracket</h6>
                           </td>
                           <td>
                              <h6>Number</h6>
                           </td>
                        </thead>
                        <tbody>
                           <tr>
                              <td>60-70</td>
                              <td>
                                 <?php
                                 $row = mysqli_query($conn, "SELECT * FROM `senior` WHERE `age` >= 60 AND `age` <= 70") or die(mysqli_error($conn));
                                 $num1 = mysqli_num_rows($row);
                                 echo $num1;

                                 ?>
                              </td>
                           </tr>
                           <tr>
                              <td>71-80</td>
                              <td>
                                 <?php
                                 $row2 = mysqli_query($conn, "SELECT * FROM `senior` WHERE `age` >= 71 AND `age` <= 80") or die(mysqli_error($conn));
                                 $num2 = mysqli_num_rows($row2);
                                 echo $num2;

                                 ?>
                              </td>
                           </tr>
                           <tr>
                              <td>81-90</td>
                              <td>
                                 <?php
                                 $row3 = mysqli_query($conn, "SELECT * FROM `senior` WHERE `age` >= 81 AND `age` <= 90") or die(mysqli_error($conn));
                                 $num3 = mysqli_num_rows($row3);
                                 echo $num3;

                                 ?>
                              </td>
                           </tr>
                           <tr>
                              <td>91-100</td>
                              <td>
                                 <?php
                                 $row4 = mysqli_query($conn, "SELECT * FROM `senior` WHERE `age` >= 91 AND `age` <= 100") or die(mysqli_error($conn));
                                 $num4 = mysqli_num_rows($row4);
                                 echo $num4;

                                 ?>
                              </td>
                           </tr>
                           <tr>
                              <td>100 up</td>
                              <td>
                                 <?php
                                 $row5 = mysqli_query($conn, "SELECT * FROM `senior` WHERE `age` <= 100") or die(mysqli_error($conn));
                                 $num5 = mysqli_num_rows($row);
                                 echo $num5;

                                 ?>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
            <div class="col-12 col-md-8 col-lg-8 col-xl-8">
               <div class="card">
                  <div class="card-body">
                     <div class="chart-title">
                        <h4>Graphical Representaion of Age Report</h4><br>
                     </div>
                     <canvas id="bargraph" width="300" height="173"></canvas>
                  </div>
               </div>
            </div>
         </div>
      </div>
</div>

<?php
// Assuming $conn is your database connection

// Fetching counts from the database
$query = "SELECT 
            SUM(CASE WHEN age BETWEEN 60 AND 70 THEN 1 ELSE 0 END) AS age_60_70,
            SUM(CASE WHEN age BETWEEN 71 AND 80 THEN 1 ELSE 0 END) AS age_71_80,
            SUM(CASE WHEN age BETWEEN 81 AND 90 THEN 1 ELSE 0 END) AS age_81_90,
            SUM(CASE WHEN age BETWEEN 91 AND 100 THEN 1 ELSE 0 END) AS age_91_100,
            SUM(CASE WHEN age > 100 THEN 1 ELSE 0 END) AS age_above_100
          FROM senior";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$row = mysqli_fetch_assoc($result);

// Assigning counts to variables
$num1 = $row['age_60_70'];
$num2 = $row['age_71_80'];
$num3 = $row['age_81_90'];
$num4 = $row['age_91_100'];
$num5 = $row['age_above_100'];
?>


<script>
   document.addEventListener("DOMContentLoaded", function() {
      // Bar Chart
      var barChartData = {
         labels: ["60-70", "71-80", "81-90", "91-100", "100 up"],
         datasets: [{
            label: 'Total Senior',
            backgroundColor: 'rgb(79,129,189)',
            borderColor: 'rgba(0, 158, 251, 1)',
            borderWidth: 1,
            data: [<?php echo $num1; ?>, <?php echo $num2; ?>, <?php echo $num3; ?>, <?php echo $num4; ?>, <?php echo $num5; ?>]
         }]
      };

      var ctx = document.getElementById('bargraph').getContext('2d');
      window.myBar = new Chart(ctx, {
         type: 'bar',
         data: barChartData,
         options: {
            responsive: true,
            legend: {
               display: false,
            }
         }
      });

   });
</script>