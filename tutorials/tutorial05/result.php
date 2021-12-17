<?php

    echo "<pre>";
    print([$_POST]);
    echo "</pre>";

    $val=$_POST['month'];
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
              <select name="" id="">
                <option >select month</option>
                <option <?php ?>>January</option>
                <option >February</option>
                <option >March</option>
                <option >April</option>
                <option >May</option>
                <option >June</option>
                <option >July</option>
                <option >August</option>
                <option >September</option>
                <option >October</option>
                <option >November</option>
                <option >December</option>
            </select>
</body>
</html>
