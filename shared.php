<?php include('servercode.php'); 
   session_start();
   if (isset($_GET["code1"])) {
   $_SESSION["code1"] = $_GET["code1"];
} 
 if (isset($_GET["idc"])) {
   $_SESSION['newidc'] = $_GET["idc"];
} 
if($_SESSION['code1'] != 1){ header('location: home.php');}
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
        $url_idc= $_SESSION['newidc'];
        $code = "SELECT code from codebin where idc=$url_idc";
        $codeQuery = mysqli_query($link,$code);
        $row_codeQuery = mysqli_fetch_assoc($codeQuery);
        $codeshared = $row_codeQuery['code'];
        echo $codeshared;
    ?>
  </div>
<form action="shared.php" method="POST">
  <button name="newpaste" class="btn11" >New Paste</button>
</form>
</body>
</html>