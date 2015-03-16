<?php
require 'connect.php';
if(isset($_POST['search']) && !empty($_POST['search'])){
	$search = $_POST['search'];
	$query = "SELECT * FROM `traininfo` WHERE `train_no` LIKE '%$search%' OR `train_name` LIKE '$search%' OR `stop` LIKE '$search'";
	if($query_run = mysql_query($query)){
	while($result = mysql_fetch_array($query_run)){
		 $search = $result["train_name"];
		 $time = $result['stop'];
		 echo '<a href="result.php?train_no='.$result["train_no"].'&train_name='.$result["train_name"].
		 '&station='.$result["station"].'&stop='.$result["stop"].'&time='.$result["$time"].'">'.$search.'</a><br>';
	}
	}else {
		echo 'not run';
		}
}
else {
	echo 'Please enter values';
	}



?>