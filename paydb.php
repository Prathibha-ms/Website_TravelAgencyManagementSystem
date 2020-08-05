<?php 
session_start();
?>
<?php
$c=$_POST['c'];
$un=$_SESSION['username'];
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
    $query="UPDATE pay set cardno='$c' where username='$un';";
    $s=mysqli_query($conn,$query);
    if(!$s)
    {
    echo(mysqli_error($conn));
    }
?>


