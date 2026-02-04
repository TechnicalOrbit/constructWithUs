<?php

require "require/_dbconnect.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $email = $_POST['email'];
  $opass = $_POST['opass'];
  $npass = $_POST['npass'];

  $sqlf = "SELECT * FROM `users` WHERE `email` = '$email'";
  $result = $conn->query($sqlf);
  if ($result) {
    $row = $result->fetch_assoc();
    $uid = $row['uid'];
    $oldpass = $row['password'];
    if (password_verify($opass, $oldpass)) {
      $newHashPass = password_hash($npass, PASSWORD_DEFAULT);
      $updatesql = "UPDATE `users` SET `password` = '$newHashPass' WHERE `users`.`uid` = $uid;";
      $updateResult = $conn->query($updatesql);
      if ($updateResult) {
        echo "password changed ";
      }
    } else {
      echo "Old password are not matched!";
    }
  } else {
    echo "email is not used  ";
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <title>Sign in </title>
  <!-- require header -->
  <?php require "common/head.php" ?>

</head>

<body>
  <div class="mainContainer">
    <div class="formcontainer">
      <form class="form" action=<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?> method="post">
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control " id="email" name="email">
        </div>
        <div class="mb-3">
          <label for="opass" class="form-label">Old Password</label>
          <input type="password" class="form-control " id="opass" name="opass">
        </div>
        <div class="mb-3">
          <label for="npass" class="form-label">New Password</label>
          <input type="password" class="form-control " id="npass" name="npass" minlength="8" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">
            <ul class="text-success">
              <li>At least 8 characters</li>
              <li>At least 1 uppercase character</li>
              <li>At least 1 lowercase character</li>
              <li>At least 1 number character</li>
              <li>At least 1 special character</li>
            </ul>
          </div>
        </div>


        <button type="submit" class="btn btn-primary fw-bold">Submit</button>
      </form>
      <div class="my-3">
        <b class="text-danger">If you don't want to forget password: </b>
        <a href="index.php">Sign in </a>
      </div>
    </div>
  </div>
  <?php require "common/foot.php" ?>
</body>

</html>