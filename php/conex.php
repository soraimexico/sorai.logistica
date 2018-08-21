<?php
class conex //CLASE PARA CONEXION A BASE DE DATOS
{
    public static function con()
    {
        $conexion = mysqli_connect("localhost", "root", "");
        mysqli_select_db($conexion,"medisys");
        mysqli_query($conexion,"SET NAMES 'utf8'");
        if(!$conexion)
        {
            return FALSE;
        }
        else
        {
            return $conexion;
            
        }
    }
}
?>