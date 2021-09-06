
<!DOCTYPE html>
<html>
<head>
	<title> Edit Sofer </title>
</head>
<body>


<?php 
require "connect.php";
$sql_edit=mysqli_query($connect, "SELECT * FROM sofer WHERE ID = ".$_POST["id_edit_sofer"]);

if (!$sql_edit):
			echo "Doslo k chybe pri vytvarani dotazu";
		

		else:
			while ($sql=mysqli_fetch_row($sql_edit)):?>


<form action="insert_fc.php" method="POST">
<table border="1">
	<tr>
		<td>Meno</td>
		<td width="60" align="center"> <input type="text" name="Men_edit_sofer" value="<?php echo $sql[1];?>"> </td>
	</tr>
	<tr>
		<td>Priezvisko</td>
		<td width="150" align="center"> <input type="text" name="Prie_edit_sofer" value="<?php echo $sql[2];?>"> </td>
	</tr>
	<tr>
		<td>Vodicak</td>
		<td width="150" align="center"> 
		<select name="vod_sofer_select_edit">
			<?php
			require "connect.php";
				$sql_vod=MySQLi_Query($connect, "SELECT * FROM vodicsky_preukaz");
				if (!$sql_vod):
				echo "Doslo k chybe pri vytvarani SQL titiul dotazu !";
				else:
				$x=0;
				while ($zaznam=MySQLi_Fetch_Row($sql_vod)):
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
		<select name="auto_sofer_select_edit">
			<?php
			require "connect.php";
				$sql_aut=MySQLi_Query($connect, "SELECT * FROM auto");
				if (!$sql_aut):
				echo "Doslo k chybe pri vytvarani SQL titiul dotazu !";
				else:
				$x=0;
				while ($zaznam_auto=MySQLi_Fetch_Row($sql_aut)):
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
<input type ="Submit" name="Edit_sofer_sofer" value="Editovať">
<input type="hidden" name="edit_sofer_id" value="<?php echo $sql[0]; ?>">
<input name="edituj_sofera_sofer" type="hidden" value="true">
</form>

<?php  	endwhile;
		endif;?>


</body>
</html>
