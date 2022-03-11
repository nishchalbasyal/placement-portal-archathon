<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit;
}


$show = false;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
   .btn{
       background-color: cyan;
       height: 40px;
       border-radius: 5px;
       cursor: pointer;
   }
</style>
<body>
    <?php  include('partials/_nav.php'); ?>
    <form action="result.php" method="post">
<div class="questions">  
                <p>1.A computer network permits sharing of</p>
                A. <input type="radio" name="q1" value="1">Resources <br>
                B. <input type="radio" name="q1" value="2">Information <br>
                C. <input type="radio" name="q1" value="3">Both a&b <br>
                D. <input type="radio" name="q1" value="4">None of these <br>

                <p>2.Network of networks is known as________</p>
                A. <input type="radio" name="q2" value="5">internet <br>
                B. <input type="radio" name="q2" value="6">intranet <br>
                C. <input type="radio" name="q2" value="7">both a and b <br>
                D. <input type="radio" name="q2" value="8">None of these<br>

                <p>3.Which of the following statement about functions of false?</p>
                A. <input type="radio" name="q3" value="9">A function can call itself. <br>
                B. <input type="radio" name="q3" value="10">A function can call another function. <br>
                C. <input type="radio" name="q3" value="11">Constants can appear in the formal argument list. <br>
                D. <input type="radio" name="q3" value="12"> More than one function is allowed in a program unit.

<br>
                
                <p>4.Number of primitive data types in Java are?</p>
                A. <input type="radio" name="q4" value="13">6 <br>
                B. <input type="radio" name="q4" value="14">7 <br>
                C. <input type="radio" name="q4" value="15">8 <br>
                D. <input type="radio" name="q4" value="16">9 <br>
                
                </div><br><br>

                <button class="btn">Finish & Submit</button>
        </form>
</body>
</html>