

<?php
session_start();

require_once "../../config/database.php";

if (empty($_SESSION['username']) && empty($_SESSION['password'])){
    echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}

else {
    if ($_GET['act']=='insert') {
        if (isset($_POST['Guardar'])) {
            
            $codigo_transaccion = mysqli_real_escape_string($mysqli, trim($_POST['codigo_transaccion']));
            
			$fecha         = mysqli_real_escape_string($mysqli, trim($_POST['fecha_a']));
            $exp             = explode('-',$fecha);
            $fecha_a   = $exp[2]."-".$exp[1]."-".$exp[0];
            
            $codigo       = mysqli_real_escape_string($mysqli, trim($_POST['codigo']));
            
            
            $evento= mysqli_real_escape_string($mysqli, trim($_POST['evento']));
            $created_user    = $_SESSION['id_user'];

          
            $query = mysqli_query($mysqli, "INSERT INTO transaccion_paquete(codigo_transaccion,fecha,codigo,created_user,evento) 
                                            VALUES('$codigo_transaccion','$fecha_a','$codigo','$created_user','$evento')")
                                            or die('Error: '.mysqli_error($mysqli));    

           
            if ($query) {
                
                $query1 = mysqli_query($mysqli, "UPDATE medicamentos SET stock        = '$total_stock'
                                                              WHERE codigo   = '$codigo'")
                                                or die('Error: '.mysqli_error($mysqli));
               
                if ($query1) {                       
                    
                    header("location: ../../main.php?module=paquete_transaction&alert=1");
                }
            }   
        }   
    }
}       
?>