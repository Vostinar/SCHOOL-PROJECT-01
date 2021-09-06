
<?php

if($_POST['Edit_sofer_sofer']){

header('Location: test.php');

require "connect.php";

if (!$connect):
echo "SPOJENIE SA POKAZILO...";
else:
$sql="UPDATE sofer set Meno='".$_POST["Men_edit_sofer"]."', Priezvisko= '".$_POST["Prie_edit_sofer"]."' , Vodicky_preukaz= '".$_POST["vod_sofer_select_edit"][0]."' , Auto= '".$_POST["auto_sofer_select_edit"][0]."' WHERE ID =".$_POST["edit_sofer_id"];
$sql_result_insert = MySQLi_Query($connect, $sql);

if(!$sql_result_insert):
echo "ZLY INSERT";
echo($sql);

else:

	endif;
endif;
}

if($_POST['Insert_sofer']){

header('Location: test.php');

require "connect.php";

if (!$connect):
echo "SPOJENIE SA POKAZILO...";
else:
$sql="INSERT INTO sofer (Meno, Priezvisko, Vodicky_preukaz, Auto) VALUES ('".$_POST["Men"]."', '".$_POST["Prie"]."', '".$_POST["vod_sofer_select"][0]."' , '".$_POST["auto_sofer_select"][0]."')";
$sql_result_insert = MySQLi_Query($connect, $sql);

if(!$sql):
echo "ZLY INSERT";

else:

	endif;
endif;
}

if($_POST['vloz']){

header('Location: test.php');

require "connect.php";

if (!$connect):
echo "SPOJENIE SA POKAZILO...";
else:
$sql="INSERT INTO auto (Znacka, Firma) VALUES ('".$_POST["Znac"]."', '".$_POST["Fir"]."')" ;
$sql_result_insert = MySQLi_Query($connect, $sql);

if(!$sql):
echo "ZLY INSERT";

else:

	endif;
endif;
}

if($_POST['edituj']){

header('Location: test.php');

require "connect.php";

if (!$connect):
echo "SPOJENIE SA POKAZILO...";
else:
$sql="update auto set Znacka='".$_POST["Znac_edit"]."', Firma= '".$_POST["Fir_edit"]."' WHERE ID =".$_POST["ID_edit"];
$sql_result_insert = MySQLi_Query($connect, $sql);

if(!$sql):
echo "ZLY INSERT";

else:

	endif;
endif;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title> Insert_fc </title>


</head>
<body>



</body>
</html>
