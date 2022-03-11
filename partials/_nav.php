 <?php

 if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
   $loggedin = true;
 }
 else{
   $loggedin = false;
 }
 echo'<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/LoginSystem">Project 2</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/LoginSystem/welcome.php">Home</a>
        </li>';
      if(!$loggedin){
      echo  ' <li class="nav-item">
          <a class="nav-link" href="/LoginSystem/login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/LoginSystem/signup.php">signup</a>
        </li>';
      }
      if($loggedin){
       echo ' <li class="nav-item">
          <a class="nav-link" href="/LoginSystem/logout.php">logout</a>
        </li>';
      }
     echo ' </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
    
  </div>
</nav>';


?>