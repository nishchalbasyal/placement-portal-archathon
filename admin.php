<?php

include('partials/_dbconnect.php');
session_start();


if ($_SESSION['username'] == 'admin123') {

  $userrole = true;
} else {
  $userrole = false;
}



?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    #f1 {
      background-color: black;
    }
  </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
  <?php require('partials/_nav.php'); ?>
  <main role="main" class="container" style="padding:30px;">
    <div class="jumbotron">
      <h1>Welcome Admin!</h1>
      <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, sed fuga. Voluptate veritatis aut adipisci. Libero illo cupiditate facilis hic distinctio accusamus placeat voluptatibus reprehenderit maxime odio. Repudiandae distinctio accusantium porro animi.</p>
      <a class="btn  btn-primary" href="welcome.php" role="button">Visit User page</a>
    </div>
  </main>
  <div class="container">
    <table class="table" id="myTable">
      <thead>
        <tr>
          <th scope="col">S.No.</th>
          <th scope="col">Full Name</th>
          <th scope="col">Username</th>
          <th scope="col">College Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php

        $sql = 'SELECT * FROM `users`';
        $result = $conn->query($sql);
        $sno = 0;
        while ($res = $result->fetch_assoc()) {
          $sno = $sno + 1;
          echo "<tr>
<th scope='row'>" . $sno . "</th>
<td>" . $res['Full_Name'] . "</td>
<td>" . $res['username'] . "</td>
<td>" . $res['College_Name'] . "</td>
<td><button class='btn edit btn-primary btn-sm mr-2' id=" . $res['sno'] . ">Approved</button><button class='btn delete btn-primary btn-sm mr-3' id=d" . $res['sno'] . ">Disaproved</button> </td>
</tr>";
        }
        ?>
      </tbody>
        </table>
  </div>
  <?php include('footer.php'); ?>
</body>

</html>