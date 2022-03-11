 <?php

 if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
   $loggedin = true;
 }
 else{
   $loggedin = false;
 }
 echo'<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Project 2</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="welcome.php">Home</a>
        </li>';
      if(!$loggedin){
      echo  ' <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="signup.php">signup</a>
        </li>';
      }
      if($loggedin){
       echo ' <li class="nav-item">
          <a class="nav-link" href="logout.php">logout</a>
        </li>
        <li class="nav-item dropdown  me-2 d-flex" style="display:relative;float:right;">
          <a class="nav-link dropdown-toggle my-2 my-sm-0" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">'
          .$_SESSION['username'].  
         ' </a>
          <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
         ';
        // echo '';
      }
      
     echo ' </ul>
         
  </div>
</nav>';


?>