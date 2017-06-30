<?php 
session_start();
$uname = "";
$email1 ="";

$errors= array();
$errors1=array();

$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"delta task");

//Registeration
if(isset($_POST['register']))
 {  
 $username = mysqli_real_escape_string($link,$_POST['username']);
 $email = mysqli_real_escape_string($link,$_POST['email']);
 $password_1 = mysqli_real_escape_string($link,$_POST['password_1']);
 $password_2 = mysqli_real_escape_string($link,$_POST['password_2']);

 if(empty($username))
 {
    array_push($errors,"Username is required");
 }
 if(empty($email))
 {
    array_push($errors,"email-id is required");
 }
 if(empty($password_1))
 {
    array_push($errors,"password is required");
 }
 
 if($password_1 != $password_2)
 {
   array_push($errors, "Passwords do not match");
 }
if(count($errors) == 0)
   {
   $password = md5($password_1);
   $sql = "INSERT INTO users(uname,email,pass) VALUES ('$username','$email','$password')";
   mysqli_query($link,$sql);
   $query = "SELECT * FROM users WHERE uname = '$username'";
   $result = mysqli_query($link,$query);
   if(mysqli_num_rows($result)==1)
   {$_SESSION['username'] = $username;
   $_SESSION['success'] = "You are now logged in";
   header('location: home.php');}
   else
   {
    array_push($errors1,"Username already exists");
   }   
    
 }

}


// log user in from login page
if(isset($_POST['login']))
{
   $username = mysqli_real_escape_string($link,$_POST['username']);
   $password = mysqli_real_escape_string($link,$_POST['password']);
 

 if(empty($username))
 {
    array_push($errors,"Username is required");
 }
 
 if(empty($password))
 {
    array_push($errors,"password is required");
 }
 if(count($errors)==0)
 {
   $password = md5($password);
   $query = "SELECT * FROM users WHERE uname = '$username' AND pass = '$password'";
   $result = mysqli_query($link,$query);
   if(mysqli_num_rows($result)==1)
      //log in user
     { 
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: home.php');
      }

    else
    {
      array_push($errors,"wrong username/password");
      header('login.php');
     } 
 }   
else
{
   array_push($errors,"wrong username/password combination");

}
}


// logout
 if(isset($_GET['logout']))
 {
  session_destroy();
  unset($_SESSION['username']);
  header('location: login.php');
 }


?>
