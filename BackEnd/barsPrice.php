<?php
session_start();
require "require/_dbconnect.php";

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $barsprice = $_POST['bars'];
    $csql = "UPDATE `price` SET `bars` = '$barsprice' WHERE `price`.`pId` = 1";
    $result = $conn->query($csql);
    // if ($result) {
    //   echo "Price updated successfully";
    // } else {
    //   echo "Price is not updated ";
    // }
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
          <label for="bars" class="form-label">Bars Price</label>
          <input type="file" accept="image/*" class="form-control slider" id="bars" name="bars">
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