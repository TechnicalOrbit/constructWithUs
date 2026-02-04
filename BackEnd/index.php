<?php

require "require/_dbconnect.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $email = $_POST['uemail'];
  $pass = $_POST['lpass'];
  $showerr = false;
  $lsearch = "SELECT * FROM `users` WHERE `email` = '$email'";
  $lseaResult = $conn->query($lsearch);
  $row = $lseaResult->fetch_assoc();
  if ($lseaResult) {
    $hash = $row['password'];
    if (password_verify($pass, $hash)) {
      session_start();
      $_SESSION["loggedin"] = true;
      $_SESSION['name'] = $row['name'];
      echo "Your are logged in!";
      header("Location: dashbord.php");
    } else {
      $showerr = "Invalid Credential";
    }
  } else {
    $showerr = "you are not sing up! ";
  }
  echo $showerr;
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
        <div class="mb-3 ">
          <label for="uemail" class="form-label">Email</label>
          <input type="email" class="form-control " id="uemail" name="uemail">
        </div>
        <div class="mb-3">
          <label for="lpass" class="form-label">Password</label>
          <input type="password" class="form-control " id="lpass" name="lpass" aria-describedby="emailHelp">
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
        <button type="submit" class="btn btn-primary fw-bold">Sign in</button>
      </form>
      <div class="my-3">
        <b class="text-danger">Forget Password : </b>
        <a href="forget.php">Forget </a>
      </div>
    </div>
  </div>
  <?php require "common/foot.php" ?>
</body>

</html>