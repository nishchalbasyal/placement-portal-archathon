<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
  header("location: login.php");
  exit;
}

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Welcome-<?php echo $_SESSION['username']; ?></title>
</head>

<body>
  <?php require 'partials/_nav.php' ?>


  <!-- Optional JavaScript; choose one of the two! -->
  <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Welcome - <?php echo $_SESSION['username']; ?> </h4>
    <p>Welcome to Project 2.This is the project developed on login system</p>
    <hr>
    <p class="mb-0">Whenever you need to, be sure to click on the logout button</p>
  </div>
  <!-- <div class="middle" style="display:flex; align-items:center;"> -->
  <ul class="list-group list-group-flush">
  <li class="list-group-item" style="font-weight:bolder; font-size:larger; text-align:center;">Please select any of the field</li>
  <li class="list-group-item" style="text-align:center;"><a href="quiz/Computer.php">Computer Engineering</a></li>
  <li class="list-group-item" style="text-align:center;"><a href="quiz/Mechanical.php">Mechanical Engineering</a></li>
  <li class="list-group-item" style="text-align:center;"><a href="quiz/Electrical.php">Electrical Engineering</a></li>
  <li class="list-group-item" style="text-align:center;"><a href="quiz/Civil.php">Civil Engineering</a></li>
  <li class="list-group-item" style="text-align:center;"><a href="quiz/php.php">PHP</a></li>
  <li class="list-group-item" style="text-align:center;"><a href="quiz/java.php">Java </a></li>
  <li class="list-group-item" style="text-align:center;"><a href="quiz/javascript.php">JavaScript </a></li>
  <li class="list-group-item" style="text-align:center;"><a href="quiz/Android.php">Android Developing</a></li>
  
</ul>
<!-- </div> -->
  <form action='/LoginSystem/logout.php'>
    <button class="btn-primary" style="color:black;" href="/LoginSystem/logout.php">Logout</button>
  </form>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>