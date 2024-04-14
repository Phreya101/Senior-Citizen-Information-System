<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><span class="fa fa-tachometer-alt"></span> Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php?page=home">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6">
                    <div class="info-box">
                        <span class="info-box-icon bg-success"><i class="fas fa-blind"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">
                                <h5>Senior Citizens</h5>
                            </span>
                            <span class="info-box-number">
                                <?php
                                $total = mysqli_query($conn, "SELECT * FROM `senior` WHERE `status` = 'active'") or die(mysqli_error($con));
                                $total = mysqli_num_rows($total);
                                ?>
                                <h2><?php echo $total ?></h2>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-12 col-sm-6 col-md-6">
                     <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="fas fa-user-check"></i></span>

                        <div class="info-box-content">
                           <span class="info-box-text">
                              <h5>With Pensions</h5>
                           </span>
                           <span class="info-box-number">
                              <h2>75</h2>
                           </span>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-sm-6 col-md-6">
                     <div class="info-box">
                        <span class="info-box-icon bg-danger"><i class="fas fa-user-times"></i></span>

                        <div class="info-box-content">
                           <span class="info-box-text">
                              <h5>Without Pensions</h5>
                           </span>
                           <span class="info-box-number">
                              <h2>25</h2>
                           </span>
                        </div>
                     </div>
                  </div> -->
                <div class="col-12 col-sm-6 col-md-6">
                    <div class="info-box">
                        <span class="info-box-icon bg-primary"><i class="fas fa-male"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">
                                <h5>Male</h5>
                            </span>
                            <span class="info-box-number">
                                <?php
                                $male = mysqli_query($conn, "SELECT * FROM `senior` WHERE `status` = 'active' AND `sex` = 'Male'") or die(mysqli_error($con));
                                $male = mysqli_num_rows($male);
                                ?>
                                <h2><?php echo $male ?></h2>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6">
                    <div class="info-box">
                        <span class="info-box-icon bg-indigo"><i class="fas fa-female"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">
                                <h5>Female</h5>
                            </span>
                            <span class="info-box-number">
                                <?php
                                $female = mysqli_query($conn, "SELECT * FROM `senior` WHERE `status` = 'active' AND `sex` = 'Female'") or die(mysqli_error($con));
                                $female = mysqli_num_rows($female);
                                ?>
                                <h2><?php echo $female ?></h2>
                            </span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>