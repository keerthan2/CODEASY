<?php

$errors= array();
$errors1=array();
$errors2=array();
$errors3=array();
$paste = array();

$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"delta task");

if(isset($_POST['share']))
{
	$code = mysqli_real_escape_string($link,$_POST['code']);

	if(empty($code))
	{
		header('location: home.php');
    }
   else
   {
   	$sql = "INSERT INTO codebin(code) VALUES ('$code')";
   	mysqli_query($link,$sql);
    $_SESSION['code'] = $code;
    header('location: shared.php');
   }
 
}
if(isset($_POST['newpaste']))
{
	header('location: home.php');
}
?>