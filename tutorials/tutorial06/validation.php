<?php
session_start();
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $a=isset(($_POST['remember'])?true ($_POST['remember']):flase; 

    if($a==true)
    {
        echo("true");
    }else{
        echo("flase");
    }


    if($email=='admin@gmail.com' && $pass=='admin')
        {
            $_SESSION['user']=$email;
            header('location:index.php');
        }
        else
        {
           
            header('location:login.php');
        }

?>

