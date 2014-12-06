<?php
$conexion=mysql_connect("localhost","root","") or die ("error hosting");
$base=mysql_select_db("preguntas",$conexion) or die ("error base");
mysql_query('SET NAMES utf8');
?>
