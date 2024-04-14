<script>
    $(document).ready(function() {
        // Add click event to .nav-item
        $('.nav-item').click(function() {
            // Toggle the visibility of the child nav-treeview
            $(this).find('.nav-treeview').slideToggle();
        });
    });
</script>
<aside class="main-sidebar sidebar-light-primary>
            <!-- Brand Logo -->
            <a href=" index.html" class="brand-link">
    <img src="../asset/img/logo.png" alt="DSMS Logo" width="200">
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="index.php?page=home" class="nav-link">
                        <i class="nav-icon fa fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-blind"></i>
                        <p>
                            Senior Citizen
                        </p>
                        <i class="right fas fa-angle-left"></i>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="index.php?page=addSenior" class="nav-link">
                                <i class="nav-icon fa fa-user-plus"></i>
                                <p>Add</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?page=manageSenior" class="nav-link">
                                <i class="nav-icon fa fa-user-edit"></i>
                                <p>Manage</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-user-tie"></i>
                        <p>
                            Users
                        </p>
                        <i class="right fas fa-angle-left"></i>
                    </a>
                    <ul class="nav nav-treeview">
                        <!-- <li class="nav-item">
                           <a href="barangay.html" class="nav-link">
                              <i class="nav-icon fa fa-house-user"></i>
                              <p>Barangay</p>
                           </a>
                        </li> -->
                        <li class="nav-item">
                            <a href="index.php?page=manageUser" class="nav-link">
                                <i class="nav-icon fa fa-user-shield"></i>
                                <p>Admin</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-chart-pie"></i>
                        <p>
                            Reports
                        </p>
                        <i class="right fas fa-angle-left"></i>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="index.php?page=report" class="nav-link">
                                <i class="nav-icon fa fa-sort-numeric-up-alt"></i>
                                <p>Age Bracket</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>