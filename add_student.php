
<?php
session_start();
if(isset($_SESSION['id']))
{
if(isset($_POST['upload']))
{	
$user=$_POST['user'];
//$id=$_POST['id'];
$mail=$_POST['mail'];
$location=$_POST['location'];
$im=$_FILES['image']['name'];
$temp=$_FILES['image']['tmp_name'];
move_uploaded_file($temp,"photos/$im");
$con=mysqli_connect("localhost","root","","project");
//echo $user.$id.$mail.$location.$im.$temp;
$q="INSERT INTO `add_student`(`name`, `email`, `location`, `image`) VALUES ('$user','$mail','$location','$im')";
mysqli_query($con,$q);
header('location:admin_home.php');
}
}
else
{
	header('location:admin_login1.php');
}

?>