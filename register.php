<?php include('server.php'); ?>

<!DOCTYPE html>
<html>
<head>
   
      <link rel="stylesheet" type="text/css" href="style.css">
      <style >
         form{
   width: 30%;
   margin: 0px auto;
   padding: 20px;
   border : 1px solid #9fdf9f ;
   background : white;
   border-radius: 0px 0px 10px 10px;
}
      </style>
</head>
<body>
<div class="top">CODEASY</div>
<div class="header">
   <h2>REGISTER</h2>
</div>
 
 <form action="register.php" method="POST">
    <?php include('errors.php'); ?>
    <?php include('errors1.php'); ?>
    <div class="input-group">
       <label>username</label>
       <input type="text" name="username" value="<?php echo $uname; ?>" /><br />
    </div>
    <div class="input-group">
       <label>email</label>
       <input type="text" name="email" value="<?php echo $email1; ?>"/><br />
    </div>
    <div class="input-group">
       <label>password</label>
       <input type="password" name="password_1" /><br />
    </div>
    <div class="input-group">
       <label>confirm password</label>
       <input type="password" name="password_2" /><br />
    </div>
    <div class="input-group">
       <button type="submit" name="register" class="btn">Register</button>
    </div>
    <p>
       Already a member? <a href="login.php">Sign In</a>
    </p>
    </form>

</body>
</html>