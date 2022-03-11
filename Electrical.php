<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit;
}


$show = false;
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello</title>
    <style>
        .center {
            text-align: center;
            font-weight: bolder;
            font-size: larger;
        }

        .rules {
            font-weight: bold;
        }
       
    </style>
   
</head>

<body>

    <!-- <h1>Hello, world!</h1> -->
    <div class="alert alert-primary" role="alert" style="text-align:center;">
        All the best <?php echo $_SESSION['username']; ?>
    </div>
    <form action='electrical1.php' method="post">
        <div class="info">
            <p> Our electrical questions focuses on all areas of electrical.
                These questions are chosen from the collection of authoritative and best reference books
            </p>
            <p class="center">
                Multiple choise Test
            </p>
            <p class="rules">
                Rules and Regulations
            </p>
            <ul>
                <li>The given times for this quiz is 45 minutes.After that ,the form will be closed for you.</li>
                <li>Students who will not submit their answers in time then it will be automatically fetched.</li>
                <li>You cannot change your answer after submission.</li>
                <li>Each question has its own grading points.After you submit your answer we will evaluate your answers and let you know your grades later </li>
                <li>If you have any technical problem during the quiz,please take screenshot or screen recording and send us.</li>
                <!-- <li></li> -->
            </ul>
        <div class="submit">
            <input type="submit" value="Start your test now">
        </div>
            

          

        </div>


    </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>