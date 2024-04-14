 <style>
     /* Optional: Style to ensure dropdown aligns properly */
     .dropdown-menu {
         right: 0;
         left: auto;
     }

     .title {
         float: left;
         letter-spacing: 5px;

     }
 </style>
 <nav class="main-header navbar navbar-expand navbar-light" style="background-color: rgb(131,219,214)">
     <!-- Left navbar links -->

     <h3 class="title">Allacapan Senior Citizen Organization</h1>

         <ul class="navbar-nav ml-auto">
             <li class="nav-item">

                 <div class="dropdown">
                     <!-- Dropdown Toggle Button -->
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <img src="../asset/img/avatar.png" class="img-circle" alt="User Image" width="30">
                     </a>

                     <!-- Dropdown Menu -->
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                         <a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt"></i> logout</a>
                         <!-- <div class="dropdown-divider"></div> -->
                     </div>
                 </div>
             </li>
         </ul>
 </nav>