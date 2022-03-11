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
  <div>
  Departments:
<ul>
  <li >Computer Engineering</li>
  <li>Mechanical Engineering</li>
  <li>Electrical Engineering</li>
  <li>Civil Engineering</li>
</ul>
</div>
  <form action='/LoginSystem1/Placement-Portal-Archathon1/logout.php'>
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