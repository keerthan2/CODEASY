
<?php include('server.php');
if(empty($_SESSION['username']))
{
  header('location: login.php');
}

 ?>
 <?php include('servercode.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Medula+One" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Trade+Winds" rel="stylesheet">
	<style>
		
		

		
          
	</style>
</head>
<body>
  
  <div class="top">CODEASY</div>
 
   <div class="tisto" >
      <?php if (isset($_SESSION['username'])): ?>
            Hi!<strong><?php echo ' '.$_SESSION['username']; ?></strong>
            <a href="home.php?logout='1'" style="color: red;">Logout</a>
      <?php endif ?> 
   </div> 
   <form action="home.php" method="POST">
   <div class="codeinp">
        <label>New Paste</label></br>
        <textarea cols="75" rows="20" name="code" ></textarea></br>
        <button name="newpaste" class="btn1" >New Paste</button>
        <button name="share" class="btn2" type="submit" >Share</button>

      </div>
      <div class="info">!! Enter some text to share !!</div>
   
   </form>
</body>
</html>
