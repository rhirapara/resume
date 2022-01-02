<?php
session_start();
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    if($email=='admin@gmail.com' && $pass=='admin')
        {
            $_SESSION['user']=$email;
            header('location:index.php');
        }
        else
        {
           
            header('location:login.php');
        }


        if(!empty($_POST["remember"])) {
            setcookie ("email", $_POST["email"], time()+ (3600*24*30));
            setcookie ("pass", $_POST["pass"], time()+ (3600*24*30));
            echo "Cookies Set Successfully";
        } else {
            setcookie("email","");
            setcookie("pass","");
            echo "Cookies Not Set";
        }



?>

