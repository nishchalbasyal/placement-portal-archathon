<?php
$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include 'partials/_dbconnect.php';
  $username = $_POST["username"];
  $password = $_POST["password"];


  // $exists=false;

  $sql = "SELECT * FROM users WHERE username = '$username'";
  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);
  if ($num == 1) {
    while ($row = mysqli_fetch_assoc($result)) {
      if (password_verify($password, $row['password'])) {
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        if($_SESSION['username']=='suman'){
          header("location: admin.php");
        }else{
        header("location: welcome.php");}
      } else {
        $showError = "Invalid Credentials!";
      }
    }
  } else {
    $showError = "Invalid Credentials!";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Placement Portal</title>
  <style>
    #f1{
      background-color: black;
    }
    .container{
      height: 75vh;
    }
  </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
  <?php include('partials/_nav.php') ?>
  <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Sign Up To Get Job Oportunities</h1>
        <p class="col-lg-10 fs-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur dolor numquam nam repudiandae atque ipsum aperiam, assumenda odio laboriosam commodi, ea eos reprehenderit quibusdam explicabo libero, cumque perspiciatis consectetur. Pariatur, illum possimus!</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form class="p-4 p-md-5 border rounded-3 bg-light" action="login.php" method="post">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name='username' placeholder="john123">
            <label for="floatingInput" >Username</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
            <label for="floatingPassword">Password</label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
          <hr class="my-4">
          <small class="text-muted">if You haven't Registered Yet, <a href="signup.php">Sign Up</a> Now!</small>
        </form>
      </div>
    </div>
  </div>
  <?php  include('footer.php');  ?>
</body>

</html>