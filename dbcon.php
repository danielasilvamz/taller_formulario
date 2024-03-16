<?php
//Base de datos local:
/*$server="localhost";
$user="root";
$pass='';
$dbname='sistema_quejas';
$db_port = "3306";

$con1=mysqli_connect($server,$user,$pass,$dbname);

if(!$con1)
echo("Failled");*/

//Base de datos remota:
$server="sql.freedb.tech";
$user="freedb_daniela02";
$pass='FT$Mf7!79HvV5aV';
$dbname='freedb_student';
$db_port = "3306";

$con1=mysqli_connect($server,$user,$pass,$dbname);

if(!$con1)
echo("Failled");
?>
