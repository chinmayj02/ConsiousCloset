<?php
if(isset($_POST['submit']))
{
    $full_name=$_POST['full_name'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $gstno=$_POST['gstno'];
    $password=md5($_POST['password']);
    $confirm_password=md5($_POST['password']);
    if($password==$confirm_password)
    {
        $CN1=$_POST['CN1'];
        $CN2=$_POST['CN2'];
        $CN3=$_POST['CN3'];
        $CN4=$_POST['CN4'];
        $CN5=$_POST['CN5'];
        $conn=mysqli_connect("localhost","root","","consciousapparel")or die(mysqli_error($conn));
        mysqli_query($conn,"INSERT INTO `Brands`(`name`, `email`, `address`, `rank`, `nos_of_products`, `gstno`, `customer_count`, `bid`, `CN1`, `CN2`, `CN3`, `CN4`, `CN5`) VALUES ('$full_name','$email','$address','','','$gstno','$CN1','$CN2','$CN3','$CN4','$CN5')");
        echo "<script>prompt('Insertion succesful');</script>";
    }
    else
    {
        
    }
}
?>