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
		$_SESSION['code1']=0;
    }
   else
   {
   $sql_0= "SELECT max(idc) max_idc from codebin";
   $maxQuery = mysqli_query($link,$sql_0);
   $row_maxQuery = mysqli_fetch_assoc($maxQuery);
   $new_idc = $row_maxQuery['max_idc'];
    $new_idc++;
    $_SESSION['newidc'] = $new_idc;
    $sql = "INSERT INTO codebin(idc,code) values ('$new_idc','$code')";
   	mysqli_query($link,$sql);
   header("Location: shared.php?code1=1&idc=$new_idc");
    $_SESSION['code1'] = 1;
   }
 
}
if(isset($_POST['newpaste']))
{
	header('location: home.php');
}
?>