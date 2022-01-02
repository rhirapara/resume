<?php
    session_start();
    $user = isset($_COOKIE['email'])?$_COOKIE['email']:"";
    $pass = isset($_COOKIE['pass'])?$_COOKIE['pass']:"";
    // $checkme = isset($_POST['remember'])?true:false;
?>

<html>
<head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <link rel="stylesheet" href="../css/style.css">
</head>
 
<body>

  <section class="container-fluid">
  
    <section class="row justify-content-center">
      <section class="col-12 col-sm-6 col-md-4">
        <form class="form-container" action="validation.php" method="post">
        <div class="form-group">
          <h4 class="text-center font-weight-bold"> Sign in </h4>
          <label for="InputEmail1">Email:</label>
           <input type="email" class="form-control" name="email" value="<?= $user ?>" id="InputEmail1" aria-describeby="emailHelp" placeholder="Enter email" required="">
        </div>
        <div class="form-group">
          <label for="InputPassword1">Password:</label>
          <input type="password" class="form-control" name="pass" value="<?= $pass ?>"  id="InputPassword1" placeholder="Password" required="">
        </div>
        <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember">
        <label class="form-check-label" for="exampleCheck1">Remember Me</label>
  </div>
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
        <div class="form-footer">
          <p> Don't have an account? <a href="registration.php">Sign Up</a></p>
          
        </div>
        </form>
      </section>
    </section>
  </section>
  </body>
</html>