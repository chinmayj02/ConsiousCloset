<?php
if(isset($_POST['submit']))
{
    $full_name=$_POST['full_name'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $gstno=$_POST['gstno'];
    $CN1=null;
    $CN2=null;
    $CN3=null;
    $CN4=null;
    $CN5=null;
    
    
        /* API FOR VERIFICATION OF CERTIFICATES*/
        $CN1=$_POST['CN1'];
        $CN2=$_POST['CN2'];
        $CN3=$_POST['CN3'];
        $CN4=$_POST['CN4'];
        $CN5=$_POST['CN5'];
        $conn=mysqli_connect("localhost","root","","consciousapparel")or die(mysqli_error($conn));
        mysqli_query($conn,"INSERT INTO `Brands`(`name`, `email`, `address`, `gstno`, `CN1`, `CN2`, `CN3`, `CN4`, `CN5`) VALUES ('$full_name','$email','$address','$gstno','$CN1','$CN2','$CN3','$CN4','$CN5');");
        echo "<script>alert('Insertion succesful');</script>";
        header("location:../views/register.php");
    
    
    
}
?>