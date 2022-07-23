<?php
$servername="localhost";
$username="root";
$dbpassword="";
$dbname="contact_form";
$conn = mysqli_connect($servername, $username, $dbpassword, $dbname);
if(!$conn){
	echo "connection failure";
}
echo "connection established"."<br>";
if($_SERVER['REQUEST_METHOD']==='POS')
{
	$a=$b=$c=$d='';
	$a= $_POST['Name'];
	$b= $_POST['Email'];
	$c= $_POST['Subject'];
	$d= $_POST['Message'];
	echo $a ."<br>";
	echo $b ."<br>";
	echo $c ."<br>";
	echo $d ."<br>";
}
$a=$b=$c=$d='';
$temp= "INSERT INTO info(Name, Email, Subject, Message) VALUES ('$a','$b','$c','$d')";
mysqli_query($conn, $temp) or die("Query failed");
echo '<script>alert("Data Submitted")</script>';
header("Refresh:2; url=index.php ");
mysqli_close($conn);
?>