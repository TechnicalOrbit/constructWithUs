<?php
session_start();
require "require/_dbconnect.php";

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  $user = $_SESSION["name"];
  $sql = "SELECT * FROM `order`";
  $result = $conn->query($sql);
  $total = $result->num_rows;

  if ($result) {
  } else {
    echo "Records are not found";
  }
} else {
  header("locatioin: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Admin Dashboard</title>
  <!-- require  -->
  <?php require "common/head.php" ?>
</head>

<body>
  <!-- required header -->
  <?php require "common/header.php"; ?>

  <div class="d-flex gap-3">
    <!-- required Sidebar -->
    <div class="sidebar">
      <?php require "common/sidebar.php"; ?>
    </div>
    <div class="container my-5 mb-5">
      <div class="row ">
        <div class="col-md-5">
          <div class="card">
            <div class="card-body text-center">
              <img src="assest/img/totalcount1.png" alt="" class="img-fluid mb-2 " width="100px">
              <h3 class="card-title"><?php echo $total; ?></h3>
              <h5 class="card-text">Total Enquary</h5>
              <hr>
              <a href="showTotal.php" class="text-decoration-none">Show all</a>
            </div>
          </div>

        </div>
        <?php

        $sqlcement = "SELECT * FROM `order` WHERE `material` = 'cement'";
        $cement = $conn->query($sqlcement);
        $totalCement = $cement->num_rows;
        ?>
        <div class="col-md-5 mb-5">
          <div class="card">
            <div class="card-body text-center">
              <img src="assest/img/totalcount2.png" alt="" class="img-fluid mb-2 " width="100px">
              <h3 class="card-title"><?php echo $totalCement; ?></h3>
              <h5 class="card-text">Total Cement Equary</h5>
              <hr>
              <a href="totalCement.php" class="text-decoration-none">Show all</a>
            </div>
          </div>
        </div>
        <?php

        $sqlbars = "SELECT * FROM `order` WHERE `material` = 'Bars-&gt;(Chhad)'";
        $bars = $conn->query($sqlbars);
        $totalBars = $bars->num_rows;
        ?>
        <div class="col-md-5 mb-5">
          <div class="card">
            <div class="card-body text-center">
              <img src="assest/img/totalcount3.png" alt="" class="img-fluid mb-2 " width="100px">
              <h3 class="card-title"><?php echo $totalBars; ?></h3>
              <h5 class="card-text">Total Bars Equary</h5>
              <hr>
              <a href="totalBars.php" class="text-decoration-none">Show all</a>
            </div>
          </div>
        </div>
        <?php

        $sqlsand = "SELECT * FROM `order` WHERE `material` = 'Sand-&gt;(Balu)'";
        $sand = $conn->query($sqlsand);
        $totalsand = $sand->num_rows;
        ?>
        <div class="col-md-5 mb-5">
          <div class="card">
            <div class="card-body text-center">
              <img src="assest/img/totalcount4.png" alt="" class="img-fluid mb-2 " width="100px">
              <h3 class="card-title"><?php echo $totalsand; ?></h3>
              <h5 class="card-text">Total Sand Equary</h5>
              <hr>
              <a href="totalSand.php" class="text-decoration-none">Show all</a>
            </div>
          </div>
        </div>
        <?php

        $sqlaggerate = "SELECT * FROM `order` WHERE `material` = 'Aggerate-&gt;(Gitti)'";
        $aggerate = $conn->query($sqlaggerate);
        $totalAggerate = $aggerate->num_rows;
        ?>
        <div class="col-md-5 mb-5">
          <div class="card">
            <div class="card-body text-center">
              <img src="assest/img/totalcount4.png" alt="" class="img-fluid mb-2 " width="100px">
              <h3 class="card-title"><?php echo $totalAggerate; ?></h3>
              <h5 class="card-text">Total Aggerate Equary</h5>
              <hr>
              <a href="totalAggerate.php" class="text-decoration-none">Show all</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>







  <!-- require  -->
  <?php require "common/foot.php" ?>

</body>

</html>