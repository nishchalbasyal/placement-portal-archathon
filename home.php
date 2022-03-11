
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Placement Portal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
  <?php include('partials/_nav.php') ?>
  <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Sign Up To Get Job Oportunities</h1>
        <p class="col-lg-10 fs-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur dolor numquam nam repudiandae atque ipsum aperiam, assumenda odio laboriosam commodi, ea eos reprehenderit quibusdam explicabo libero, cumque perspiciatis consectetur. Pariatur, illum possimus!</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form class="p-4 p-md-5 border rounded-3 bg-light" action="login.php" method="post">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name='username' placeholder="john123">
            <label for="floatingInput" >Username</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
            <label for="floatingPassword">Password</label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
          <hr class="my-4">
          <small class="text-muted">if You haven't Registered Yet, <a href="signup.php">Sign Up</a> Now!</small>
        </form>
      </div>
    </div>
  </div>
</body>

</html>