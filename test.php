<?php

if(isset($_POST['delete_sofer'])){

require "connect.php";

if (!$connect):
echo "SPOJENIE SA POKAZILO...";
else:
$sql="DELETE FROM sofer WHERE ID = ".$_POST["ID_delete_sofer"];
$sql_result_delete = MySQLi_Query($connect, $sql);

if(!$sql):
echo "ZLY Delete";

else:

	endif;
endif;
}

?>

<?php

if(isset($_POST['delete'])){

require "connect.php";

if (!$connect):
echo "SPOJENIE SA POKAZILO...";
else:
$sql="DELETE FROM auto WHERE ID = ".$_POST["ID_delete"];
$sql_result_delete = MySQLi_Query($connect, $sql);

if(!$sql):
echo "ZLY Delete";

else:

	endif;
endif;
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Databaza</title>
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
	<h1>Databaza vozidiel a vodicov</h1>

<table border="1">
	<tr>
		<th align="center">ID Auta</th>
		<th align="left">Znacka</th>
		<th align="left">Firma</th>
		<th align="left">Edituj</th>
		<th align="left">Vymaz</th>
	</tr>

<?php
 
require "connect.php";

$sql=MySQLi_Query($connect,"select * from auto");

if (!$sql):
	echo "Prislo k chybe dotazu";
else:
while ($zaznam = MySQLi_Fetch_Row($sql)):
	?>
		<tr>
		<td width="80" align="center"> <?php echo $zaznam[0] ?> </td>
		<td width="100" align="left"> <?php echo $zaznam[1] ?> </td>
		<td width="100" align="left"> <?php echo $zaznam[2] ?> </td>
		<td>
			<form action="edit.php" method="post">
			<input type="hidden" name="id_edit" value="<?php echo $zaznam[0]; ?>">
			<input type="Submit" class="button1" name="edit" value="Edit">
		</form>
		</td>
		<td>
			<form action="test.php" method="post">
			<input type="hidden" name="ID_delete" value="<?php echo $zaznam[0]; ?>">
			<input type="Submit" class="button2" name="delete" value="Delete">
		</form>
		</td>
	</tr>

<?php
endwhile;
endif;


?>
</table><br>


<form action="insert.php" method="post">
			<input type="hidden" name="znacka_edit">
			<input name="firma_edit" type="hidden">
			<input type="Submit" class="button3" name="Insert" value="Vlozit">
		</form>
		
<br>

<table border="1">
	<tr>
		<th width="100" align="center">ID Vodica</th>
		<th width="100" align="left">Meno</th>
		<th width="100" align="left">Priezvisko</th>
		<th width="130" align="left">Vodicsky Preukaz</th>
		<th width="100" align="left">ID Auta</th>
		<th align="left">Edituj</th>
		<th align="left">Vymaz</th>
	</tr>

<?php




$sql_sofer=MySQLi_Query($connect,"SELECT sof.ID, sof.Meno, sof.Priezvisko, vod.Typ_vodicak, au.ID FROM sofer sof, vodicsky_preukaz vod, auto au WHERE sof.Vodicky_preukaz=vod.ID AND sof.Auto=au.ID");

if (!$sql_sofer):
	echo "Prislo k chybe dotazu";
else:
while ($zaznam_sofer = MySQLi_Fetch_Row($sql_sofer)):
	?>
		<tr>
		<td width="30" align="center"> <?php echo $zaznam_sofer[0] ?> </td>
		<td width="60" align="left"> <?php echo $zaznam_sofer[1] ?> </td>
		<td width="100" align="left"> <?php echo $zaznam_sofer[2] ?> </td>
		<td width="100" align="center"> <?php echo $zaznam_sofer[3] ?> </td>
		<td width="100" align="center"> <?php echo $zaznam_sofer[4] ?> </td>
		<td>
			<form action="edit_sofer.php" method="post">
			<input type="hidden" name="id_edit_sofer" value="<?php echo $zaznam_sofer[0]; ?>">
			<input type="Submit" class="button1" name="edit_sofer" value="Edit">
		</form>
		</td>
		<td>
			<form action="test.php" method="post">
			<input type="hidden" name="ID_delete_sofer" value="<?php echo $zaznam_sofer[0]; ?>">
			<input type="Submit" class="button2" name="delete_sofer" value="Delete">
		</form>
		</td>
	</tr>

<?php
endwhile;
endif;


?>
</table>

<br>


<form action="Insert_sofer.php" method="post">
			<input type="Submit" class="button3" name="Insert_sofer" value="Vlozit">
		</form>
		



</body>
</html>
