<html>
<head>
<title>
result
</title>
<link rel="stylesheet" href="css/result.css" type="text/css">
</head>
<body background="images\bss.jpg">
<div id="header">
<center>
<h1><img src="images\logo.jpg" alt="logo" width="35" height="37" align="left">PLATFORM DETAILS</h1>
</center>
</div>
<form action="index.html">
<input type="submit" value="Logout" style="float:right; cursor:pointer;">
</form>
</body>
</html>
<?php
if(isset($_REQUEST['train_no']) && isset($_REQUEST['train_name']) && isset($_REQUEST['station']) && isset($_REQUEST['stop']) && isset($_REQUEST['time']))
{
		$train_no = $_REQUEST['train_no'];
		$train_name = $_REQUEST['train_name'];
		$station = $_REQUEST['station'];
		$stop = $_REQUEST['stop'];
		$time = $_REQUEST['time'];
		if(!empty($train_no) && !empty($train_name) && !empty($station) && !empty($stop) && !empty($time))
		{
			echo '<center><table bgcolor="#85C1F5" cellpadding="10" width="600" border="2">
						<tr>
							<th>Train No</th>
							<th>Train Name</th>
							<th>Station</th>
							<th>Platform</th>
							<th>Time</th>
						</tr>
						<tr>
							<td>'.$train_no.'</td>
							<td>'.$train_name.'</td>
							<td>'.$station.'</td>
							<td>'.$stop.'</td>
							<td>'.$time.'</td>
						</tr>
				  </table></center>
			';
		}
		else 
		{
			echo 'you are trying to pass incorrect value';
		}
		
}
else 
{
	echo 'An error has been occured';
}
?>