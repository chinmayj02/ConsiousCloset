<?php
if(isset($_POST['login']))
{
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    header("location:../views/admindash.php");
}
?>