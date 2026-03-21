<?php

$con=mysqli_connect('localhost','pmauser','password_here','travel');

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$city=$_POST['city'];
$destination=$_POST['destination'];
$guest=$_POST['guest'];
$checkin=$_POST['checkin'];
$checkout=$_POST['checkout'];
$travel=$_POST['travel'];



$sql="INSERT INTO `submit`(`id`,`name`,`email`,`phone`,`city`,`destination`,`guest`,`checkin`,`checkout`,`travel`) VALUES (0,'$name','$email','$phone','$city','$destination','$guest','$checkin','$checkout','$travel')";
$result = mysqli_query($con,$sql);

if(isset($_POST['submit'])){
	$_SESSION['success_message'] = "Booked successfully.we will contact you soon!";
	header('location:booking.html');
}


?>