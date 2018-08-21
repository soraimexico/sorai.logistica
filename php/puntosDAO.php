<?php
include_once 'conex.php';//INCLUIR CONEXION DE BASE DE DATOS

class puntosDao
{
    private $r;
    public function __construct()
    {
        $this->r = array();
    }
    public function grabar($titulo, $cx,$cy)//METODO PARA GRABAR A LA BD
    {
        $con = conex::con();
        $titulo = mysqli_real_escape_string($con,$titulo);
        $cx = mysqli_real_escape_string($con,$cx);
        $cy = mysqli_real_escape_string($con,$cy);
        $q = "insert into puntos (Titulo, cx, cy)".
             "values ('".addslashes($titulo)."','".addslashes($cx)."','".addslashes($cy)."')";
        $rpta = mysqli_query($con, $q);
        mysqli_close($con);
        if($rpta==1)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
    public function listar_todo()
    {
        $q = "select * from puntos";
        $con = conex::con();
        $rpta = mysqli_query($con, $q);
        mysqli_close($con);
        while($fila = mysqli_fetch_assoc($rpta))
        {
            $this->r[] = $fila;
        }
        return $this->r;
    }
    public function borrar($idPunto)//METODO PARA BORRAR DE LA BD
    {
        $con = conex::con();
        $idPunto = mysqli_real_escape_string($con,$idPunto);
        $q = "delete from puntos where IdPunto = ".(int)$idPunto;
        $rpta = mysqli_query($con, $q);
        mysqli_close($con);
        if($rpta==1)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
    public function actualizar($Id, $titulo, $cx,$cy)//METODO PARA ACTUALIZAR A LA BD
    {
        $con = conex::con();
        $Id = mysqli_real_escape_string($con,$Id);
        $titulo = mysqli_real_escape_string($con,$titulo);
        $cx = mysqli_real_escape_string($con,$cx);
        $cy = mysqli_real_escape_string($con,$cy);
        $q = "update puntos set Titulo='".$titulo."', cx='".$cx."' , cy ='".$cy."' where IdPunto =".$Id;
        $rpta = mysqli_query($con, $q);
        mysqli_close($con);
        if($rpta==1)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    public function buscar($p)
    {
        $con = conex::con();
        //SEGURIDAD
        $p = mysqli_real_escape_string($con,$p);
        
        $q = "select * from puntos WHERE Titulo LIKE '%".$p."%'";
        
        $rpta = mysqli_query($con, $q);
        mysqli_close($con);
        while($fila = mysqli_fetch_assoc($rpta))
        {
            $this->r[] = $fila;
        }
        return $this->r;
    }
}
?>