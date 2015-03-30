<?php
require ("../Conexion.php");
$salida="";
$id_provincia=$_POST["elegido"];
// construimos el combo de ciudades deacuerdo al pais seleccionado
$con = new Conexion;
$con->conectar();
$combog = mysql_query("CALL sp_comunas(".$id_provincia.");");
  while($sql_p = mysql_fetch_row($combog))
  {
   $salida.= "<option value='".$sql_p[0]."'>".$sql_p[1]."</option>";
  }  
echo $salida;
$con->desconectar();
?>