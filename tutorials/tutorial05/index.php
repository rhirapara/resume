<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Month</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body >
    <style>
        .a{
            margin-left: 350px;
            margin-top: 150px;
        }
        </style>
    <div class="container ">
    <div class="row">
        <div class="col col-md-3 col-md-offset-4  a">
                <form class="form-control bg-secondary text-center" action="result.php" method="post">
                    <select name="month" id="" required class=" " >
                        <option value="" >select month</option>
                        <option value="1">January</option>
                        <option value="2">February</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">June</option>
                        <option value="7">July</option>
                        <option value="8">August</option>
                        <option value="9">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select><br><br/>
                    <input type="submit" value="Submit" class="btn btn-success">
                </form>
        </div>
    </div>
    </div>
</body>
</html>