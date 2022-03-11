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
          <a class="nav-link active" aria-current="page" href="/LoginSystem1/Placement-Portal-Archathon1/welcome.php">Home</a>
        </li>';
      if(!$loggedin){
      echo  ' <li class="nav-item">
          <a class="nav-link" href="/LoginSystem1/Placement-Portal-Archathon1/login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/LoginSystem1/Placement-Portal-Archathon1/signup.php">signup</a>
        </li>';
      }
      if($loggedin){
       echo ' <li class="nav-item">
          <a class="nav-link" href="/LoginSystem1/Placement-Portal-Archathon1/logout.php">logout</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>';
        // echo '';
      }
      
     echo ' </ul>
         
  </div>
</nav>';


?>