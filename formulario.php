<?php

if(($id=mysql_connect("localhost:3306","root","root")) == false)
	die("Error de conexion");

if(mysql_select_db("InyectionSqlSena",$id) === false )
	die("Error en seleccionar la base de datos");

$cedula=$_POST['cedula'];


//$sql="SELECT * FROM Usuarios WHERE identifiacion = " .$cedula;

//echo "$sql<br/>";

$sql = sprintf("SELECT * FROM Usuarios where identifiacion ='%s'",
          mysql_real_escape_string($cedula));

echo $sql."<br/>";


if (($resultado = mysql_query($sql)) == false)
die("Error en la sentencia select");


while (  $myrow = mysql_fetch_row($resultado)) {
 	
 	echo "<pre>";
	print_r($myrow);
	echo "</pre>";

 }


?>

