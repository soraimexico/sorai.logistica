 <?php  

include('phpqrcode/qrlib.php'); 
$content = $data;
QRcode::png($content,"barcode.png",QR_ECLEVEL_L,10,2);

if ($_GET['form']=='add') { ?> 

  <section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Agregar Guias
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=start"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=transporte"> Guias</a></li>
      <li class="active"> Logistica </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="modules/paquete/proses.php?act=insert" method="POST">
            <div class="box-body">
              <?php  
          
              $query_id = mysqli_query($mysqli, "SELECT RIGHT(codigo,6) as codigo FROM paquete
                                                ORDER BY codigo DESC LIMIT 1")
                                                or die('error '.mysqli_error($mysqli));

              $count = mysqli_num_rows($query_id);

              if ($count <> 0) {
            
                  $data_id = mysqli_fetch_assoc($query_id);
                  $codigo    = $data_id['codigo']+1;
              } else {
                  $codigo = 1;
              }


              $buat_id   = str_pad($codigo, 8, "1", STR_PAD_LEFT);
              $codigo = "7$buat_id";
              ?>

              <div class="form-group">
                <label class="col-sm-2 control-label">Guia</label>
                <div class="col-sm-5">
                <input type="text" class="form-control" name="codigo" value="<?php echo $codigo; ?>" readonly required>
                </div>
                                  
                         
                  
                </div>
                
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Transportista</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="nombre" autocomplete="off" required>
                </div>
              </div>

              
              <div class="form-group">
                <label class="col-sm-2 control-label">Destino</label>
                <div class="col-sm-5">
                  <div class="input-group">
                    <span class="input-group-addon"><img src="assets\img\result.png" height="23" width="23"></span>
                    <input type="text" class="form-control" name="ubicacion" autocomplete="off" required>
                  </div>
                </div>
              </div>


               <div class="form-group">
                <label class="col-sm-2 control-label">Entregar</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="entregar" autocomplete="off" required>
                </div>
              </div>

               
              </div>
       
            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
                  <a href="?module=paquete" class="btn btn-default btn-reset">Cancelar</a>
                </div>
              </div>
            </div><!-- /.box footer -->
          </form>
        </div><!-- /.box -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->
<?php
}

elseif ($_GET['form']=='edit') { 
  if (isset($_GET['id'])) {

      $query = mysqli_query($mysqli, "SELECT codigo,nombre,ubicacion,entregar FROM paquete WHERE codigo='$_GET[id]'") 
                                      or die('error: '.mysqli_error($mysqli));
      $data  = mysqli_fetch_assoc($query);
    }
?>

  <section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Modificar
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=start"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=paquete"> Guia </a></li>
      <li class="active"> Modificar </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="modules/paquete/proses.php?act=update" method="POST">
            <div class="box-body">
              
              <div class="form-group">
                <label class="col-sm-2 control-label">guia</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="codigo" value="<?php echo $data['codigo']; ?>" readonly required>
                </div>
              </div>
              

              <div class="form-group">
                <label class="col-sm-2 control-label">Transportista</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="nombre" autocomplete="off" value="<?php echo $data['nombre']; ?>" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Ubicacion</label>
                <div class="col-sm-5">
                  <div class="input-group">
                    <span class="input-group-addon"><img src="assets\img\result.png" height="23" width="23"></span>
                    <input type="text" class="form-control" name="ubicacion" autocomplete="off" required>
                  </div>
                </div>
              </div>

              
              <div class="form-group">
                <label class="col-sm-2 control-label">Entregar</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="entregar" autocomplete="off" required>
                </div>
              </div>

              

                  <img src='barcode.png'/>
                </div>


              

            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
                  <a href="?module=transporte" class="btn btn-default btn-reset">Cancelar</a>
                </div>
              </div>
            </div><!-- /.box footer -->
          </form>
        </div><!-- /.box -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->
<?php
}
?>