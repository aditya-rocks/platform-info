<html>
<head>
<title>sign up</title>
<link rel="stylesheet" href="css/sign.css" type="text/css">
</head>
<body>
<div id="base">
<center><h1><img src="images\logo.jpg" alt="logo" width="35" height="37" align="left">INDIAN RAILWAY</h1></center>
</div>
<div id="sign">
<h1>
SIGN UP:-
</h1></div>
 <?php
        require'connect.php';
		if(isset($_POST['username']) && isset($_POST['name']) && isset($_POST['age']) && isset($_POST['city']) && isset($_POST['sex']) && isset($_POST['email']) && isset($_POST['city']) 
		&& isset($_POST['email']) && isset($_POST['number']) && isset($_POST['password']) && isset($_POST['confirmpassword'])){
		    $username=$_POST['username'];
		    $name = $_POST['name'];
			$age = $_POST['age'];
			$city = $_POST['city'];
			$sex = $_POST['sex'];
			$email = $_POST['email'];
			$number = $_POST['number'];
			$password = $_POST['password'];
			$password_hash = md5($password);
			$confirmpassword =$_POST['confirmpassword'];
			if(!empty($username) && !empty($name) && !empty($age)  && !empty($city) && !empty($sex) && !empty($email) && !empty($number) && !empty($password) && !empty($confirmpassword)){
             $query_username = "SELECT * FROM `signup` WHERE  `username` LIKE  '".$username."'";
						$query_username_run = mysql_query($query_username);
						$query_username_num_rows = mysql_num_rows($query_username_run);
						$query_email = "SELECT * FROM  `signup` WHERE  `email` LIKE  '".$email."'";
						$query_email_run = mysql_query($query_email);
						$query_email_num_rows = mysql_num_rows($query_email_run);
						if($query_username_num_rows == 1){
							 echo'username already chosen';	
					
							}
						
						else if($query_email_num_rows >=1){
							echo'email id already registered';
							}
						else if(($password != $confirmpassword)){
							echo'password combination does not match';	
							}
						else{
							$query = "INSERT INTO`signup` (`id`, `username`, `name`, `age`, `city`, `sex`, `email`, `number`, `password`) 
							VALUES (NULL, '".$username."', '".$name."', '".$age."', '".$city."', '".$sex."', '".$email."', '".$number."', '".$password_hash."')";
							 if($query_run = mysql_query($query)){
								echo'you have successfully signed up';
								}
							}
						}
						else{
						echo'please fill all the fields';
						}
					}
				
			?>
<form action="sign.php" method="POST">
<div id="tot"> 
<div id="tab"> 
<table width="500px">
<tr>
<td>USERNAME</td>
<td><input type="text" name="username" required></td>
</tr>
<tr>
<td>NAME</td>
<td><input type="text" name="name" required></td>
</tr>
<tr>
<td>AGE</td>
<td><input type="number" name="age" min="1" max="100" required></td>
</tr>
<tr>
<td>CITY</td>
<td><input type="text" name="city" required></td>
</tr>
<tr>
<td>SEX</td>
<td>	<select name="sex" required>
		<option value="male" selected>MALE</option>
		<option value="female">FEMALE</option>
	  </select>
</td>
</tr>
<tr>
<td>EMAIL</td>
<td><input type="text" name="email" required></td>
</tr>
<tr>
<td>PHONE NO.</td>
<td><input type="number" name="number" required></td>
</tr>
<tr>
<td>ENTER PASSWORD</td>
<td><input type="password" name="password" required></td>
</tr>
<tr>
<td>CONFIRM PASSWORD</td>
<td><input type="password" name="confirmpassword" required></td>
</tr>
<tr>
<td>
<input type="submit" value="submit" style="cursor:pointer;">
</td>
</tr>
<tr>
<td>
<a href="login.php"><input type="button" value="Login"></a>
</td>
</tr>
</form>
</table>
</div>
<div id="image"><img src="images\trans.jpg"/></div>
</div>
</body>
</html> 