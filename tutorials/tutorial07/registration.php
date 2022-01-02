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
        <form class="form-container">
        <div class="form-group">
          <h4 class="text-center font-weight-bold"> Sign up </h4>
          <label for="InputName">Name:</label>
          <input type="text" class="form-control" name="name"id="InputName" placeholder="Your Name" required="">
        </div>

          <div class="form-group">
          <label for="InputEmail1">Email:</label>
           <input type="email" class="form-control" name="email" id="InputEmail1" aria-describeby="emailHelp" placeholder="Enter email" required="">
        </div>
        <div class="form-group">
          <label for="InputPassword1">Password:</label>
          <input type="password" class="form-control" name="pass" id="InputPassword1" placeholder="Password" required="">
        </div>
        <div class="form-group">
            <label for="InputConPass">Confirm Password:</label>
            <input type="password" class="form-control" name="con_pass" id="InputPassword1" placeholder=" Confirm Password" required="">
          </div>
          <div class="form-group">
            <label for="InputAge">Age:</label>
            <input type="number" class="form-control" name="age" id="InputAge" placeholder=" Enter Age" required="">
          </div>
          <div class="form-group">
            <label for="InputBirth">Birth Date:</label>
            <input type="date" class="form-control" name="birth" id="InputDob" placeholder=" DD/MM/YYYY" required="">
          </div>
          <div class="form-group">
            <label for="InputCountry">Country:</label>
            <input type="text" class="form-control" name="Country" id="InputCountry" placeholder=" Country Name" required="">
          </div>
          <div class="form-group">
            <label for="InputState">State:</label>
            <input type="text" class="form-control" name="state" id="InputState" placeholder=" State Name" required="">
          </div>
          <div class="form-group">
            <label for="InputCity">City:</label>
            <input type="text" class="form-control" name="city" id="InputCity" placeholder=" City Name" required="">
          </div>
          <div class="form-group">
            <label for="InputProfile">Profile Picture:</label>
            <input type="file" class="form-control" name="picture" id="InputProfile"  required="">
          </div>
          <div class="form-group">
            <label for="InputNote">Note:</label>
            <textarea class="form-control" name="note" id="InputNote" rows="4" cols="50"  required=""></textarea>
          </div>
        <button type="submit" class="btn btn-primary btn-block">Register</button>
        <div class="form-footer">
            <p> Already have an account? <a href="login.php">Login Here</a></p> 
          
        </div>
        </form>
      </section>
    </section>
  </section>
  </body>
</html>