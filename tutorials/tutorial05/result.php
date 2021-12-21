<?php

    // echo "<pre>";
    // print_r([$_POST]);
    // echo "</pre>";

    $val=$_POST['month'];
  //  echo $val;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
  
<style>

.sele{
    margin-left:250px;
    margin-top:150px;
}
h3{
  color:green;
}
</style>
<div class="sele">
 
<h3>Selected Month Is</h3>  <select name="" id="">
                <option >select month</option>
                <option <?php  if($val==1) echo "Selected"; ?>>January</option>
                <option <?php  if($val==2) echo "Selected"; ?>>February</option>
                <option <?php  if($val==3) echo "Selected"; ?> >March</option>
                <option <?php  if($val==4) echo "Selected"; ?>>April</option>
                <option <?php  if($val==5) echo "Selected"; ?>>May</option>
                <option <?php  if($val==6) echo "Selected"; ?>>June</option>
                <option <?php  if($val==7) echo "Selected"; ?>>July</option>
                <option <?php  if($val==8) echo "Selected"; ?>>August</option>
                <option <?php  if($val==9) echo "Selected"; ?>>September</option>
                <option <?php  if($val==10) echo "Selected"; ?>>October</option>
                <option <?php  if($val==11) echo "Selected"; ?>>November</option>
                <option <?php  if($val==12) echo "Selected"; ?>>December</option>
            </select>
</div>
</body>
</html>
