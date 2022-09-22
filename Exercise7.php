<!DOCTYPE html> 
<html lang="en">
<head>
	<meta charset ="UTF-8">
    	<meta http-equiv ="X-UA-Compatible"content="IE=edge">
    	<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>Exercise 7</title>
</head>
<style>
	.table{
		width:70%;
		background-color:skyblue
        ;
		border-spacing; 12px;
		border:6px solid;
	}
</style>
<body>
<?php
	echo '<table class="table">';
		for($row = 1; $row <= 7; $row++){
			echo "<td>";
		for($col = 1; $col <= 7; $col++)
			echo "<td>". $row * $col ."<td>";
			echo "</tr>";
		}
		echo '</table>';
?>
</body>
</html>
	