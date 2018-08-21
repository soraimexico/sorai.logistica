<?php
session_start();
ob_start();


$msg = isset($_GET['msg']) ? $_GET['msg'] : '';
    if (!$msg) $msg = "Sorai Mexico\r\nhttp://sorai.tk/";

require_once "../../config/database.php";

include "../../config/fungsi_tanggal.php";

include "../../config/fungsi_rupiah.php";

$hari_ini = date("d-m-Y");

$no = 1;

$query = mysqli_query($mysqli, "SELECT codigo,nombre,precio_venta,unidad FROM venta ORDER BY nombre ASC")
                                or die('Error '.mysqli_error($mysqli));
$count  = mysqli_num_rows($query);
?>
<html xmlns="http://www.w3.org/1999/xhtml"> 
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>INFORME VENTA</title>
        <link rel="stylesheet" type="text/css" href="../../assets/css/laporan.css" />
    </head>
    <body>
        <div id="title">
           Reporte Certificada de Compra
        </div>
        
        <hr><br>

        <div id="isi">
            <table width="100%" border="0.3" cellpadding="0" cellspacing="0">
                <thead style="background:#e8ecee">
                    <tr class="tr-title">
                        <th height="20" align="center" valign="middle"><small>NO.</small></th>
                        <th height="20" align="center" valign="middle"><small>CODIGO</small></th>
                        <th height="20" align="center" valign="middle"><small>PRODUCTO</small></th>
                        <th height="20" align="center" valign="middle"><small>PRECIO DE VENTA</small></th>
                        <th height="20" align="center" valign="middle"><small>UNIDAD</small></th>
                    </tr>
                </thead>
                <tbody>
        <?php
       
        while ($data = mysqli_fetch_assoc($query)) {
            
            $precio_venta = format_rupiah($data['precio_venta']);
          
            echo "  <tr>
                        <td width='40' height='13' align='center' valign='middle'>$no</td>
                        <td width='80' height='13' align='center' valign='middle'>$data[codigo]</td>
                        <td style='padding-left:5px;' width='180' height='13' valign='middle'>$data[nombre]</td>
                        <td style='padding-right:10px;' width='80' height='13' align='right' valign='middle'>$. $precio_venta</td>
                        <td width='80' height='13' align='center' valign='middle'>$data[unidad]</td>
                    </tr>";
            $no++;
        }
        ?>  
                </tbody>
                <br>
                <td><img src="http://api.qrserver.com/v1/create-qr-code/?format=gif&data=<?php echo urlencode($msg) ?>"height="100" width="100"/> </td>
                <td width="50">imic6822HEhL64uADSkYvp2epfWMFVzGgbrZjFtBm9UAGvtASepb97Aqr9jrmKrTU2eWWMGNczNZdd7HzXDGvHYmF
                Paa5nSD59wE3pn9mwq8yiRaxJLGiKz9B2YfM9ePMydUt8ydDEX65LKKd3FDEMAPunLBWz4pXwBQ5mLk7gbfgyMaUj9MSU 
                32KCeChuTU24xykhcFNufqYpw4B4ZwffRM8UfvvNCkCkW3gh3V36ZPCgqGdX2FT7kXni7CVhwtE85VSHKRg9X88xCAfdG
qEPxfvQ6RiFbHNfcuv3JKGQg6bfWQgbaM6bPkKD2RArdX7Fy2AuTSdBnciYaucarXBp9QDaM5QRfrXw2JKCaaVy5F6fb8CubBkSH2E9M8num56</td>
            
            </table>

            
        </div>
    </body>
</html>
<?php
$filename="INFORMDE VENTA.pdf"; 
//==========================================================================================================
$content = ob_get_clean();
$content = '<page style="font-family: freeserif">'.($content).'</page>';

require_once('../../assets/plugins/html2pdf_v4.03/html2pdf.class.php');
try
{
    $html2pdf = new HTML2PDF('P','F4','en', false, 'ISO-8859-15',array(10, 10, 10, 10));
    $html2pdf->setDefaultFont('Arial');
    $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
    $html2pdf->Output($filename);
}
catch(HTML2PDF_exception $e) { echo $e; }
?>