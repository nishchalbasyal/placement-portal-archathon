<?php

session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
        
    </style>
</head>

<body>
    <?php
    include('partials/_nav.php')
;   
    // session_ = 0;
    $q1=0;
    echo $q1;
    echo "</br>";
    $q2 =  0;
    echo $q2;
    echo "</br>";
    $q3 =  0;
    echo $q3;
    echo "</br>";
    $q4 =  0;
    echo $q4;
    echo "</br>";
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];
    $q4 = $_POST['q4'];
    $count=0;

    if ($q1 == '1') {
        $count += 1;
    }
    if ($q2 == '6') {
        $count += 1;
    }
    if ($q3 == '11') {
        $count += 1;
    }
    if ($q4 == '16') {
        $count += 1;
    }
    $percent = ($count / 4) * 100;
    echo $percent;
    if ($percent == 0) {
        echo "Sorry! " . $_SESSION['username'] . " Try next time";
    } else {
        echo "weldone!" . $_SESSION['username'] . " your result is $percent%";
    }


    ?>
    <br><br>
    <p><h2 style="text-align: center;">You are eligible for any of these companies </h2></p> <br><br>
    <div class="apply">
        <div class="section">

            <div class="card" style="width: 18rem;" class="c1">
                <img src="./img/in.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Infosys</h5>
                    <p class="card-text">Software company,Bengaluru,India.</p>
                    <a href="#" class="btn btn-primary">Apply Now</a>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="card" style="width: 18rem;" class="c1">
                <img src="./img/yudiz.png" class="card-img-top" alt="yudiz solutions" style="width: 200px; height:200px;">
                <div class="card-body">
                    <h5 class="card-title">Yudiz Solutions</h5>
                    <p class="card-text">Software company,Ahmedabad,Gujarat.</p>
                    <a href="#" class="btn btn-primary">Apply Now</a>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="card" style="width: 18rem;" class="c1">
                <img src="./img/info.jpg" class="card-img-top" alt="..." style="width: 200px; height:200px">
                <div class="card-body">
                    <h5 class="card-title">Tata Service Consultancy</h5>
                    <p class="card-text">Service Based Company,Jamshedpur,Jharkhand.</p>
                    <a href="#" class="btn btn-primary">Apply Now</a>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="card" style="width: 18rem;" class="c1">
                <img src="./img/micro.png" class="card-img-top" alt="..." style="width: 200px; height:200px;">
                <div class="card-body">
                    <h5 class="card-title">Microsoft</h5>
                    <p class="card-title">Redmond,Washington,United States</p>
                    <a href="#" class="btn btn-primary">Apply Now</a>
                </div>
            </div>
        </div>

    </div>
</body>

</html>