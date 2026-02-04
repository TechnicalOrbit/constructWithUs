<?php
session_start();
require "require/_dbconnect.php";

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  $user = $_SESSION["name"];
  $sql = "SELECT * FROM `order` WHERE `material`='cement'";
  $result = $conn->query($sql);
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
  <title>Total Enquiry</title>
  <!-- require  -->
  <?php require "common/head.php" ?>
  <link rel="stylesheet" href="assest/css/dataTable.css">
</head>

<body>
  <!-- required header -->
  <?php require "common/header.php"; ?>

  <div class="d-flex gap-3">
    <!-- required Sidebar -->
    <div class="sidebar">
      <?php require "common/sidebar.php"; ?>
    </div>
    <div class="container my-5">
      <table class="table" id="myTable">
        <thead>
          <tr>
            <th scope="col">Sr.</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">Material</th>
            <th scope="col">Message</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $c = 0;
          while ($row = $result->fetch_assoc()) {
            $c += 1;
            $name = $row['name'];
            $email = $row['email'];
            $mobile = $row['mobile'];
            $material = $row['material'];
            $msg = $row['message'];

            echo "<tr>
            <th scope='row'>$c</th>
            <td>$name</td>
            <td>$email</td>
            <td>$mobile</td>
            <td>$material</td>
            <td>$msg</td>
          </tr>";
          }

          ?>


        </tbody>
        <tfoot>
          <tr>
            <th scope="col">Sr.</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">Material</th>
            <th scope="col">Message</th>
          </tr>
        </tfoot>
      </table>
    </div>

  </div>







  <!-- require  -->
  <?php require "common/foot.php" ?>
  <script src="assest/js/dataTables.js"></script>
  <script src="assest/js/jquery.js" integrity="sha256-9fsHeVnKBvqh3FB2HYu7g2xseAZ5MlN6Kz/qnkASV8U=" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function() {
      $('#myTable').DataTable();
    });
  </script>

</body>

</html>