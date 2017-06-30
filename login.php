<?php include('server.php');

// if user is not loggedin,they cannot access this page



 ?>
<!DOCTYPE html>
<html>
<head>
   
      <link rel="stylesheet" type="text/css" href="style.css">
      <style >
         form{
   width: 30%;
   margin: 0px auto;
   padding: 20px;
   border : 1px solid #ff9999 ;
   background : white;
   border-radius: 0px 0px 10px 10px;
}
      </style>
</head>
<body>
<div class="top">CODEASY</div>
<div class="header1">
   <h2>LOG IN</h2>
</div>
 
 <form action="login.php" method="POST">
    <?php include('errors.php'); ?>
    <div class="input-group">
       <label>username</label>
       <input type="text" name="username" value="<?php echo $uname; ?>" /><br />
    </div>
    
    <div class="input-group">
       <label>password</label>
       <input type="password" name="password" /><br />
    </div>
    
    <div class="input-group">
       <button name="login" class="btnlog">Log In</button>
    </div>
    <p>
        <a href="register.php">Sign up</a>
    </p>
    </form>

</body>
</html>