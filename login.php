<html>
<head>
<title>log in</title>
<link rel="stylesheet" href="css/log in.css" type="text/css">
</head>
<body>
<div id="header">
<center>
<h1><img src="images\logo.jpg" alt="logo" width="35" height="37" align="left">
INDIAN RAILWAY
</h1>
</center>
</div>
<div id="log">
<h1>LOG IN:-</h1>
</div>
<?php   
		require'core.inc.php';
        require'connect.php';
		if(isset($_POST['username']) && isset($_POST['password'])){
			$username= $_POST['username'];
			$password= $_POST['password'];
			$password_hash = md5($password);
			if(!empty($username) && !empty($password)){
		      $query = "SELECT `id` FROM `signup` WHERE `username`='".mysql_real_escape_string($username)."' 
			  AND `password`='".mysql_real_escape_string($password_hash)."'";
		 
		 if($query_run = mysql_query($query)){
			 $query_num_rows = mysql_num_rows($query_run);
			 if($query_num_rows == 0)
			 {
				 echo'invalid username/password';
			 }
			 else {
				 $user_id = mysql_result($query_run,0,'id');
                 $_SESSION['user_id'] = $user_id;
                 header('Location: main.php');
				 }
		 }
		 
		 
		 
	 }
	 else {
			 echo'please fill all fields';
		 
	 }
 }
 ?>
<center>
<div id="box">
<form action ="<?php echo $current_file; ?>" method="POST">
<h2>
Username:<input type="text" name="username"><br/>
Password:<input type="password" name="password"><br/>
</h2>
<input type="checkbox" style="cursor:pointer;">keep me logged in<br/>
<input type="submit" value="LOGIN" style="cursor:pointer;">
</form>
<form action="sign.php" method="POST">
<input type="submit" value="CREATE USER ID" style="cursor:pointer;">
</form>
</div>
</center>
</body>
</html>