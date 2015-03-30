<?php
class Conexion{
     
    private $host;
    private $db;
    private $user;
    private $pass;
         
    public function conectar ($host = "localhost", $db = "quiensabe", $user = "acofre", $pass = "acofre"){
         
        $this->host = $host;
        $this->db = $db;
        $this->user = $user;
        $this->pass = $pass;
         
        if (!$link = mysql_connect($this->host,$this->user,$this->pass)) {
            echo "<script> alert ('No se pudo conectar al servidor.')</script>";
        }
        if (!$link = mysql_select_db($this->db)) 
        {
            echo "<script> alert ('No se pudo conectar a la base de datos.')</script>";
        }
        if ($link = mysql_connect($this->host,$this->user,$this->pass) && $link = mysql_select_db($this->db)) {
            //echo "<script> alert ('Conecto correctamente.')</script>";
        }
    }
     
    public function desconectar (){
        mysql_close();
        //echo "<script> alert ('Desconectado!.')</script>";
    }
}
?>