
<!DOCTYPE html>
<html>
<head>
	<title> Edit </title>
</head>
<body>


<?php 
require "connect.php";
$sql_edit=mysqli_query($connect, "SELECT * FROM Auto WHERE ID = ".$_POST["id_edit"]);

if (!$sql_edit):
			echo "Doslo k chybe pri vytvarani dotazu";
		

		else:
			while ($sql=mysqli_fetch_row($sql_edit)):?>


<form action="insert_fc.php" method="POST">
<table border="1">
	<tr>
		<td>Znacka</td>
		<td width="60" align="center"> <input type="text" name="Znac_edit" value="<?php echo $sql[1]; ?>"> </td>
	</tr>
	<tr>
		<td>Firma</td>
		<td width="150" align="center"> <input type="text" name="Fir_edit" value="<?php echo $sql[2]; ?>"> </td>
	</tr>
</table><br>
<input type ="Submit" name="Edit" value="Edit">
<input type="hidden" name="ID_edit" value="<?php echo $sql[0]; ?>">
<input name="edituj" type="hidden" value="true">
</form>
<?php  	endwhile;
		endif;?>

</body>
</html>
