<?php 
session_start();
?>
<?php
$un=$_POST['uname'];
$_SESSION['username']=$un;
$n=$_POST['full'];
$a=$_POST['address'];
$e=$_POST['emailid'];
$s=$_POST['sex'];
$m=$_POST['mobileno'];

	$host="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname="travelagency";
	$conn = mysqli_connect($host,$dbUsername,$dbPassword,$dbname);
	if($conn){
		include 'viewplace.html';
	}
	else
	{
		die ("connection  failed because" . mysqli_connect_error());
	}
$query1="INSERT INTO userdetail(username,name,address,email,sex,mobile)VALUES('$un','$n','$a','$e','$s','$m');";
$query2="INSERT INTO userbook(username)VALUES('$un');";
$query3="INSERT INTO pay(username)VALUES('$un');";

$s1=mysqli_query($conn,$query1);
$s2=mysqli_query($conn,$query2);
$s3=mysqli_query($conn,$query3);

if(!$s1)
{
echo(mysqli_error($conn));
}

if(!$s2)
{
echo(mysqli_error($conn));
}


if(!$s3)
{
echo(mysqli_error($conn));
}
?>


