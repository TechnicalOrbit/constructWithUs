 <?php

  require "require/_dbconnect.php";

  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $user = $_SESSION["name"];
  }

  ?>


 <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary" style=" height:580px;" id="sidebar">
   <a href="dashbord.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
     <svg class="bi pe-none me-2" width="40" height="32" aria-hidden="true">
       <use xlink:href="#bootstrap"></use>
     </svg> <span class="fs-4">Dashboard</span>
   </a>
   <hr>
   <ul class="nav nav-pills flex-column mb-auto sidebar">
     <li class="nav-item">
       <a href="home.php" class="nav-link link-body-emphasis" aria-current="page"> <svg class="bi pe-none me-2" width="16" height="16" aria-hidden="true">
         </svg>
         Home
       </a>
     </li>
     <li>
       <a href="#" class="nav-link link-body-emphasis"> <svg class="bi pe-none me-2" width="16" height="16" aria-hidden="true">
           <use xlink:href="#speedometer2"></use>
         </svg>
         About
       </a>
     </li>
     <li>
       <a href="cementPrice.php" class="nav-link link-body-emphasis"> <svg class="bi pe-none me-2" width="16" height="16" aria-hidden="true">
           <use xlink:href="#speedometer2"></use>
         </svg>
         Cement Price
       </a>
     </li>
     <li>
       <a href="barsPrice.php" class="nav-link link-body-emphasis"> <svg class="bi pe-none me-2" width="16" height="16" aria-hidden="true">
           <use xlink:href="#speedometer2"></use>
         </svg>
         Bars Price
       </a>
     </li>
     <li>
       <a href="aggeratePrice.php" class="nav-link link-body-emphasis"> <svg class="bi pe-none me-2" width="16" height="16" aria-hidden="true">
           <use xlink:href="#speedometer2"></use>
         </svg>
         Aggerate Price
       </a>
     </li>
     <li>
       <a href="sandPrice.php" class="nav-link link-body-emphasis"> <svg class="bi pe-none me-2" width="16" height="16" aria-hidden="true">
           <use xlink:href="#speedometer2"></use>
         </svg>
         Sand Price
       </a>
     </li>
     <li> <a href="#" class="nav-link link-body-emphasis"> <svg class="bi pe-none me-2" width="16" height="16" aria-hidden="true">
           <use xlink:href="#table"></use>
         </svg>
         FAQ
       </a> </li>
     <li> <a href="#" class="nav-link link-body-emphasis"> <svg class="bi pe-none me-2" width="16" height="16" aria-hidden="true">
           <use xlink:href="#grid"></use>
         </svg>
         Contact
       </a> </li>
     <!-- <li> <a href="#" class="nav-link link-body-emphasis"> <svg class="bi pe-none me-2" width="16" height="16" aria-hidden="true">
            <use xlink:href="#people-circle"></use>
          </svg>
          Bars->(Chhad)
        </a> </li> -->
   </ul>
   <hr>
   <div class="dropdown">
     <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
       <img src="assest/img/owner.jpeg" alt="" width="32" height="32" class="rounded-circle me-2"> <strong><?php echo strtoupper($user); ?></strong>
     </a>
     <ul class="dropdown-menu text-small shadow">
       <li><a class="dropdown-item" href="#">Profile</a></li>
       <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
     </ul>
   </div>
 </div>