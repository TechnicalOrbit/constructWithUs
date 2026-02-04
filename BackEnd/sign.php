<?php

require "require/_dbconnect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['Sname'];
  $email = $_POST['Semail'];
  $pass = $_POST['Spass'];
  $cpass = $_POST['Cpass'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];

  $search = "SELECT `email` FROM `users` WHERE `email` = '$email'";
  $seaResult = $conn->query($search);
  $seaNums = $seaResult->num_rows;
  echo $seaNums;
  if ($seaNums == 0) {
    if ($pass == $cpass) {
      $hash = password_hash($pass, PASSWORD_DEFAULT);
      $insert = "INSERT INTO `users` ( `name`, `email`, `password`, `city`, `state`, `zip`, `created`) VALUES ( '$name', '$email', '$hash', '$city', '$state', '$zip', current_timestamp());";
      $insResult = $conn->query($insert);
      if ($insResult) {
        echo "Data inserted Successfully";
        header("location: index.php");
      } else {
        echo "Data is not Inserted Successfully";
      }
    } else {
      echo "Passwords are not matched!";
    }
  } else {
    echo "You are already sing up! ";
  }
}


?>

<!doctype html>
<html lang="en">

<head>
  <title>Sign Up </title>
  <!-- require header -->
  <?php require "common/head.php" ?>
</head>

<body>
  <div class="container-fluid d-flex justify-content-center align-items-center bg-black " style="min-height:100vh;">
    <div class="formWidth">
      <div class="container bg-white  my-md-0 my-1 p-5">
        <form class="row g-3 form" action=<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?> method="post">
          <div class="col-md-6">
            <label for="Sname" class="form-label">Name</label>
            <input type="text" class="form-control" id="Sname" name="Sname" placeholder="Username">
          </div>
          <div class="col-md-6">
            <label for="Semail" class="form-label">Email</label>
            <input type="email" class="form-control" id="Semail" name="Semail" placeholder="Email">
          </div>
          <div class="col-md-6">
            <label for="Spass" class="form-label">Password</label>
            <input type="password" class="form-control" id="Spass" name="Spass" placeholder="Password">
          </div>
          <div class="col-md-6">
            <label for="Cpass" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="Cpass" name="Cpass" placeholder="Confirm password">
          </div>
          <!-- <div class="col-12">
          <label for="address" class="form-label">Address</label>
          <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St">
        </div> -->
          <div class="col-md-4">
            <label for="city" class="form-label">City</label>
            <input type="text" class="form-control" id="city" name="city">
          </div>
          <div class="col-md-5">
            <label for="state" class="form-label">State</label>
            <select id="state" class="form-select" name="state">
              <option selected>Choose...</option>
              <option value="Uttar Pradesh">UP</option>
              <option value="Uttar Pradesh">UP</option>
              <option value="Uttar Pradesh">UP</option>
              <option value="Uttar Pradesh">UP</option>
              <option value="Uttar Pradesh">UP</option>
            </select>
          </div>
          <div class="col-md-3">
            <label for="zip" class="form-label">Zip</label>
            <input type="text" class="form-control" id="zip" name="zip">
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary fw-bold fs-6 px-4 py-2">Sign Up</button>
          </div>
        </form>
        <div class="my-3">
          <b class="text-danger">If you have already account: </b>
          <a href="index.php">Sign in Now</a>
        </div>
      </div>
    </div>
  </div>
  <?php require "common/foot.php" ?>
</body>

</html>