<?php

$servername = "localhost:8090";
$username = "root";
$password = "";
$database = "users";

$conn = mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die("Sorry couldnot connect to database due to".mysqli_connect_error());
}


?>