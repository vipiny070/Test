<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>", id = 'login'>
  	<?php include('error.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>

  
        <!-- start PHP code -->
        

  
</body>
</html>
<?php

            $db = mysqli_connect('localhost', 'root', '', 'notify_me'); // Connect to database server(localhost) with UserID and PIN.
          

            if(isset($_REQUEST['username']) && !empty($_REQUEST['username']) AND isset($_REQUEST['password']) && !empty($_REQUEST['password'])){
                $UserID = mysqli_escape_string($db, $_REQUEST['username']);
                $PIN = mysqli_escape_string($db,md5($_REQUEST['password']));

                $search = mysqli_query($db, "SELECT user_id, password FROM user WHERE user_id='$UserID' AND password='$PIN'") or die(mysqli_error($db)); 
                $match  = mysqli_num_rows($search);

                if($match == 0){
                    
                    $msg = 'Login Failed!<br /> Please make sure that you enter the correct details and that you have activated your account.';
                    // header('location: Fail.php');
                }else{
                    $msg = 'Login Complete! Thanks';
                    header('location: index.php');
                }
            }


        ?>
        <!-- stop PHP Code -->
        <?php 
            if(isset($msg)){ // Check if $msg is not empty
                echo '<div class="statusmsg">'.$msg.'</div>'; // Display our message and add a div around it with the class statusmsg
            } ?>