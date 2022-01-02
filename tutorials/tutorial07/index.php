<?php 
    session_start();

    if($_SESSION['user'] == 0){
        header('Location:login.php');
    }
     $msg= $_SESSION['user'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial-06</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 
</head>
<body>
   

<div class="container-fluid">
    <div class="row">
        <div class="col col-6">
        <h3 class="text-success ">Welcome, <?php echo($msg)?></h3>
        </div>
        <div class="col col-6">
        
        <a href="logout.php" class="btn btn-danger float-right ml-3">logout</a>
        <a href="registration.php" class="btn btn-info float-right ">Add</a>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">

    <div class="col">
 
    <table class="table" >
        <thead class="thead-dark">
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">City</th>
           
          </tr>
        </thead>
        <tbody>
          <tr id="t1">
            <th scope="row">1</th>
            <td>Rutvik</td>
            <td>21</td>
            <td>Atkot</td>
           
          </tr>
          <tr id="t2">
            <th scope="row">2</th>
            <td>Harshil</td>
            <td>21</td>
            <td>Atkot</td>
           
          </tr>
          <tr id="t3">
            <th scope="row">3</th>
            <td>Khodidas</td>
            <td>20</td>
            <td>Rajkot</td>
            
          </tr>
          <tr id="t4">
            <th scope="row">4</th>
            <td>Dhaval</td>
            <td>22</td>
            <td>Rajkot</td>
            
          </tr>
          <tr id="t5">
            <th scope="row">5</th>
            <td>Henil</td>
            <td>21</td>
            <td>Jasdan</td>
            
          </tr>
        </tbody>
      </table>
      

    </div>
    </div>
</div>
</body>
</html>