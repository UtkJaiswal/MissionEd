<?php
$con=mysqli_connect("localhost","root","","MissionEd")
        or die(mysqli_error($con));
$email=mysqli_real_escape_string($con,$_POST['email']);
$username=mysqli_real_escape_string($con,$_POST['username']);
$hackos=mysqli_real_escape_string($con,$_POST['hackos']);
$user_registration_query="insert into loginform (email, username, hackos)"
        . "values('$email', '$username','$hackos')";

$user_registration_submit=mysqli_query($con,$user_registration_query)
        or die(mysqli_error($con));
echo "Info successfully updated";
?>