<?php
session_start();
$un=$_POST['un'];
$_SESSION['username']=$un;
$host="localhost";
$dbUsername="root";
$dbPassword="";
$dbname="travelagency";
$conn = mysqli_connect($host,$dbUsername,$dbPassword,$dbname);
if ($_POST['up']=='viacation@123')
	{
	include 'viewplace.html';
}
else
{
 echo "Invalid username and password";
}

 $query1="INSERT INTO userbook(username) VALUES('$un');";
 $query2="INSERT INTO pay(username) VALUES('$un');";

$s1=mysqli_query($conn,$query1);
$s2=mysqli_query($conn,$query2);

if(!$s1)
{
echo(mysqli_error($conn));
}

if(!$s2)
{
echo(mysqli_error($conn));
}

?>

