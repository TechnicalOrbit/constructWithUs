<?php
include_once("require/_dbconnect.php");
$sql = "SELECT * FROM `price`";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php require "common/head.php" ?>
  <link rel="stylesheet" href="assest/css/owlcarousel.css">
  <link rel="stylesheet" href="assest/css/owDefault.css">
</head>

<body>

  <?php require "common/header.php" ?>

  <!-- Start Main -->
  <main>
    <div class="container my-3 text-center">
      <img src="assest/img/<?php echo $row['aggerate']; ?>" class="img-fluid" alt="">
    </div>
  </main>

  <!-- End Main -->

  <!-- include footer file -->
  <?php require "common/footer.php" ?>

  <!-- include foot file -->
  <?php require "common/foot.php" ?>





</body>

</html>