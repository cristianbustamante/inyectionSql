<?php

if(($id=mysql_connect("localhost:3306","root","root")) == false)
	die("Error de conexion");

if(mysql_select_db("InyectionSqlSena",$id) === false )
	die("Error en seleccionar la base de datos");

$cedula=$_GET['cedula'];


$sql="DELETE FROM Usuarios WHERE identifiacion = " .$cedula;

echo "$sql<br/><br/><br/>";


if (($resultado = mysql_query($sql)) == false)
die("Error en la sentencia select");

echo "Se ha eliminado el usuario " . $cedula ;

mysql_close();
?>

