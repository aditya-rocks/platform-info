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
<h1>ADMIN LOG IN:-</h1>
</div>
<?php
require'connect.php';
if(isset($_POST['admin_name']) && isset($_POST['admin_password'])){
		$admin_name = $_POST['admin_name'];
		$admin_password = $_POST['admin_password'];
		$password_hash = md5($admin_password);
		if(!empty($admin_name) && !empty($admin_password)){
		        $query = "SELECT `id` FROM `signup` WHERE `username`='aditya' 
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
<form action ="admin login.php" method="POST">
<h2>
Admin Username:<input type="text" name="admin_name"><br/>
Admin Password:<input type="password" name="admin_password"><br/>
</h2>
<input type="checkbox" style="cursor:pointer;">keep me logged in<br/>
<input type="submit" value="LOGIN" style="cursor:pointer;">
</form>
</div>
</center>
</body>
</html>