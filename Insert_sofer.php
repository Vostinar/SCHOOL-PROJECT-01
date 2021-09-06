<!DOCTYPE html>
<html>
<head>
	<title>Insert Sofer</title>
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
	<h1>Formular pre vlozenie sofera</h1>
<form action="insert_fc.php" method="POST">
<table border="1">
	<tr>
		<td>Meno</td>
		<td width="60" align="center"> <input type="text" name="Men"> </td>
	</tr>
	<tr>
		<td>Priezvisko</td>
		<td width="150" align="center"> <input type="text" name="Prie"> </td>
	</tr>
	<tr>
		<td>Vodicak</td>
		<td width="150" align="center"> 
		<select name="vod_sofer_select">
			<?php
			require "connect.php";
				$sql=MySQLi_Query($connect, "SELECT * FROM vodicsky_preukaz");
				if (!$sql):
				echo "Doslo k chybe pri vytvarani SQL titiul dotazu !";
				else:
				$x=0;
				while ($zaznam=MySQLi_Fetch_Row($sql)):
				$x=$x+1;
			?>
		<option Value="<?php echo $zaznam[0];?>"><?php echo $zaznam[1];?>

		<?php
			endwhile;
		endif;
		?>
		</select> </td>
	</tr>
	<tr>
		<td>Auto</td>
		<td width="150" align="center"> 
		<select name="auto_sofer_select">
			<?php
			require "connect.php";
				$sql=MySQLi_Query($connect, "SELECT * FROM auto");
				if (!$sql):
				echo "Doslo k chybe pri vytvarani SQL titiul dotazu !";
				else:
				$x=0;
				while ($zaznam_auto=MySQLi_Fetch_Row($sql)):
				$x=$x+1;
			?>
		<option Value="<?php echo $zaznam_auto[0];?>"><?php echo $zaznam_auto[0];?>

		<?php
			endwhile;
		endif;
		?>
		</select> </td>
	</tr>
</table><br>
<input type ="Submit" class="button3" name="Insert_sofer" value="Vlozit">
<input name="vloz_sofera" type="hidden" value="true">
</form>
</body>
</html>