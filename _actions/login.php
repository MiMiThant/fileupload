<?php

session_start();

$email=$_POST['email'];
$password=$_POST['password'];

if($email==='alice@gmail.com' and $password==='alice')
{
    $_SESSION['user']=['username'=>"alice"];
    header('location: ../profile.php');
}else{
    header('location: ../index.php?incorrect=1');
}