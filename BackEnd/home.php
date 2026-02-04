<?php
session_start();
require "require/_dbconnect.php";

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $slider1 = $_POST['slider1'];
    $slider2 = $_POST['slider2'];
    $slider3 = $_POST['slider3'];
    $slider4 = $_POST['slider4'];
    $slider5 = $_POST['slider5'];
    $sql = "UPDATE `homeslider` SET `slider1` = '$slider1', `slider2` = '$slider2', `slider3` = '$slider3', `slider4` = '$slider4', `slider5` = '$slider5' WHERE `homeslider`.`sliderId` = 1;";

    $result = $conn->query($sql);
    if ($result) {
      echo "data inserted succefully";
    } else {
      echo "data not inserted";
    }
  }
} else {
  header("locatioin: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Home</title>
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
    <div class="container my-4 mb-5">
      <form method="post" action=<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>>
        <div class="mb-3">
          <label for="slider1" class="form-label">Slider 1</label>
          <input type="file" accept="image/*" class="form-control slider" id="slider1" name="slider1">
        </div>
        <div class="mb-3">
          <label for="slider2" class="form-label">Slider 2</label>
          <input type="file" accept="image/*" class="form-control slider" id="slider2" name="slider2">
        </div>
        <div class="mb-3">
          <label for="slider3" class="form-label">Slider 3</label>
          <input type="file" accept="image/*" class="form-control slider" id="slider3" name="slider3">
        </div>
        <div class="mb-3">
          <label for="slider4" class="form-label">Slider 4</label>
          <input type="file" accept="image/*" class="form-control slider" id="slider4" name="slider4">
        </div>
        <div class="mb-3">
          <label for="slider5" class="form-label">Slider 5</label>
          <input type="file" accept="image/*" class="form-control slider" id="slider5" name="slider5">
        </div>


        <button type="submit" class="btn btn-primary slider w-25">Submit</button>
      </form>
    </div>
  </div>


  <!-- require  -->
  <?php require "common/foot.php" ?>

  <script>
    document.querySelectorAll('input[type="file"]').forEach(input => {
      input.addEventListener('change', function() {
        const file = this.files[0];
        if (!file || !file.type.startsWith('image/')) return;

        let preview = this.nextElementSibling;
        if (!preview || preview.tagName !== 'IMG') {
          preview = document.createElement('img');
          preview.style.maxWidth = '200px';
          preview.style.marginTop = '10px';
          preview.style.display = 'block';
          this.parentNode.appendChild(preview);
        }

        const reader = new FileReader();
        reader.onload = e => preview.src = e.target.result;
        reader.readAsDataURL(file);
      });
    });
  </script>

</body>

</html>