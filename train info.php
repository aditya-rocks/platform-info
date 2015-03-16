<?php
require 'connect.php';

if(isset($_POST['from']) && isset($_POST['to']) && isset($_POST['class']) && isset($_POST['day']) && isset($_POST['date']) && isset($_POST['year'])){ 
    $from = $_POST['from'];
    $to = $_POST['to'];
	$class=$_POST['class'];
    $day = $_POST['day'];
    $date = $_POST['date'];
    $year = $_POST['year'];
    echo $date.''.$year;
    if(!empty($from) && !empty($to) && !empty($day) && !empty($date) && !empty($year)){
<html>
<head>
	<title>
	train enquiry
	</title>
</head>
<body>
        <table cellpadding="10" border="1">
        <tr>
            <td>TRAIN NAME</td>
			<td>STATION</td>
			<td>EXPECTED TIME</td>
			<td>PLATFORM NO. 1</td>
			<td>PLATFORM NO. 2</td>
			<td>PLATFORM NO. 3</td>
			<td>PLATFORM NO. 4</td>
		</tr>
		</table>
</body>
</html>		