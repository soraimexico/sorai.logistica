<?php
#Agregar un retardo de 2 segundo para poder apreciar los mensajes.
#sleep(2);
header('content-type: application/json; charset=utf-8');//HEADER PARA JSON
include_once 'php/puntosDAO.php';
$ac = isset($_POST["tipo"])?$_POST["tipo"]:"x"; //PARAMETRO PARA DETERMINAR LA ACCION

switch ($ac) {
    case "grabar":
        $p = new puntosDao();
        $exito = $p->grabar($_POST["titulo"], $_POST["cx"], $_POST["cy"]);
        if($exito)
        {
            $r["estado"] = "Aprobacion en servidor";
            $r["mensaje"] = "Se Ha registrado la Guia con el mapa";
        }
        else
        {
            $r["estado"] = "error 405";
            $r["mensaje"] = "error no es posible Guardar en el servidor!";
        }
    break;

    case "listar":
        $p = new puntosDao();
        $resultados = $p->listar_todo();
        if(sizeof($resultados)>0)
        {
            $r["estado"] = "ok";
            $r["mensaje"] = $resultados;
        }
        else
        {
            $r["estado"] = "error 103";
            $r["mensaje"] = "No hay registros";
        }
    break;
    case "borrar":
        $p = new puntosDao();
        $resultados = $p->borrar($_POST["id"]);
        if($resultados)
        {
            $r["estado"] = "Aprobacion del servidor 103";
            $r["mensaje"] = "Borrado Correctamente";
        }
        else
        {
            $r["estado"] = "error 406";
            $r["mensaje"] = "Error al borrar";
        }
    break;
    
    case "actualizar":
        $p = new puntosDao();
        $exito = $p->actualizar($_POST["id"], $_POST["titulo"], $_POST["cx"], $_POST["cy"]);
        if($exito)
        {
            $r["estado"] = "Aprobacion del Servidor";
            $r["mensaje"] = "Actualizado Correctamente";
        }
        else
        {
            $r["estado"] = "error 900";
            $r["mensaje"] = "error al actualizar!";
        }
    break;

    case "buscar":
        $p = new puntosDao();
        $resultados = $p->buscar($_POST["palabra_buscar"]);
        if(sizeof($resultados)>0)
        {
            $r["estado"] = "ok";
            $r["mensaje"] = $resultados;
        }
        else
        {
            $r["estado"] = "error 600";
            $r["mensaje"] = "No hay registros";
        }
    break;
    
    default:
        $r["estado"] = "error 404";
        $r["mensaje"] = "datos no válidos";
    break;
}
echo json_encode($r);//IMPRIMIR JSON
?>