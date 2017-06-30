<?php include('servercode.php'); 
   session_start(); 
if($_SESSION)
   ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		
		p
		   {
               border: none;
               margin: 0px 20px 0px 20px
               height: 130px;
               background-color: #00334d;
               text-align: center;
               font-size: 60px;
               color: white;
		   }

		
          
	</style>
</head>
<body>
  <p>CODEASY</p>
  <div class="box">
    <?php 
         echo $_SESSION['code'];
         unset($_SESSION['code']);
     ?>
  </div>
<form action="shared.php" method="POST">
  <button name="newpaste" class="btn11" >New Paste</button>
</form>
</body>
</html>