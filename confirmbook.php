<?php 
session_start();
?>
<?php
$p=$_POST['tc'];
$s=$_POST['s'];
$f=$_POST['f'];
$t=$_POST['c1'];
$d=$_POST['d'];
$un=$_SESSION['username'];

	$host="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname="travelagency";
	$conn = mysqli_connect($host,$dbUsername,$dbPassword,$dbname);
	if($conn){
		include 'confirmbook2.php';
	}
	else
	{
		die ("connection  failed because" . mysqli_connect_error());
  }
  $query="UPDATE userbook set place='$p',stay='$s',food='$f',travel='$t',date='$d' where username='$un';";
  $s=mysqli_query($conn,$query);
  if(!$s)
  {
  echo(mysqli_error($conn));
  } 

?>


