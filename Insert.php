
<!DOCTYPE html>
<html>
<head>
	<title> Insert </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
	<style>
		table{
			border: 2px solid black;
			background-color: lightgrey;
			border-collapse: collapse;

		}
		body {
 			background: url("bkgnd.jpg") no-repeat center center fixed; 
  			-webkit-background-size: cover;
  			-moz-background-size: cover;
  			-o-background-size: cover;
  			background-size: cover;
		}
		th {
 			background-color: #4CAF50;
  			color: white;
		}
	</style>
</head>
<body>



<form action="insert_fc.php" method="POST">
	<h1>Formular pre vlozenie Auta</h1>
<table border="1">
	<tr>
		<td>Znacka</td>
		<td width="60" align="center"> <input type="text" name="Znac"> </td>
	</tr>
	<tr>
		<td>Firma</td>
		<td width="150" align="center"> <input type="text" name="Fir"> </td>
	</tr>
</table><br>
<input type ="Submit" class="button3" name="Insert1" value="Vlozit">
<input name="vloz" type="hidden" value="true">
</form>
</body>
</html>
