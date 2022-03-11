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
  <style>
        .apply {
            display: flex;
            flex-direction: row;
            margin-top: 30px;
            /* align-items: center; */
            text-align: center;
            padding-left: 10px;
            padding-right: 10px;
        }

        .apply p {
            padding-top: 20px;
            margin-left: 10px;
            /* border: 2px solid red; */
        }
        .apply .section{
            margin-right: 40px;
            margin-left: 3px;
        }
       ul li a{
          text-decoration: none;
        }
        ul li:hover{
          background-color: cyan;
          cursor: pointer;
          color: black;
        }
        ul li a:hover{
          color:black;
        }
        #f1{
          background-color: black;
        }
       
       </style>
</head>

<body>
  <?php require 'partials/_nav.php' ?>


  <!-- Optional JavaScript; choose one of the two! -->
  <div class="alert alert-info" role="alert">
    <h4 class="alert-heading">Welcome - <?php echo $_SESSION['username']; ?> </h4>
    <p>This is Placement portal where you can get opportunities to get placed at prestigious companies</p>
    
    
  </div>
  <!-- <div class="middle" style="display:flex; align-items:center;"> -->
  <ul class="list-group list-group-flush">
  <li class="list-group-item" style="font-weight:bolder; font-size:larger; text-align:center;">Please select any of the field</li>
  <li class="list-group-item" style="text-align:center;"><a href="Computer.php">Computer Engineering</a></li>
  <li class="list-group-item" style="text-align:center;"><a href="Mechanical.php">Mechanical Engineering</a></li>
  <li class="list-group-item" style="text-align:center;"><a href="Electrical.php">Electrical Engineering</a></li>
  <li class="list-group-item" style="text-align:center;"><a href="Civil.php">Civil Engineering</a></li>
  <li class="list-group-item" style="text-align:center;"><a href="php.php">PHP</a></li>
  <li class="list-group-item" style="text-align:center;"><a href="java.php">Java </a></li>
  <li class="list-group-item" style="text-align:center;"><a href="Android.php">Android Developing</a></li>
  
</ul><hr>
<h2 style="text-align: center;">Our Recruiters</h2>
<div class="apply">
        <div class="section">

            <div class="card" style="width: 18rem;" class="c1">
                <img src="./img/in.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Infosys</h5>
                    <p class="card-text">Software company,Bengaluru,India.</p>
                    
                </div>
            </div>
        </div>

        <div class="section">
            <div class="card" style="width: 18rem;" class="c1">
                <img src="./img/yudiz.png" class="card-img-top" alt="yudiz solutions" style="width: 200px; height:200px;">
                <div class="card-body">
                    <h5 class="card-title">Yudiz Solutions</h5>
                    <p class="card-text">Software company,Ahmedabad,Gujarat.</p>
                    
                </div>
            </div>
        </div>
        <div class="section">
            <div class="card" style="width: 18rem;" class="c1">
                <img src="./img/info.jpg" class="card-img-top" alt="..." style="width: 200px; height:200px">
                <div class="card-body">
                    <h5 class="card-title">Tata Service Consultancy</h5>
                    <p class="card-text">Service Based Company,Jamshedpur,Jharkhand.</p>
                    
                </div>
            </div>
        </div>
        <div class="section">
            <div class="card" style="width: 18rem;" class="c1">
                <img src="./img/micro.png" class="card-img-top" alt="..." style="width: 200px; height:200px;">
                <div class="card-body">
                    <h5 class="card-title">Microsoft</h5>
                    <p class="card-title">Redmond,Washington,United States</p>
                    
                </div>
            </div>
        </div>

    </div>
d
<!-- </div> -->
 
<!-- <div class="container"> -->
 
<!-- </div> -->
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <?php include('footer.php') ?>
</body>

</html>