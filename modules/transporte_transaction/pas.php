
<script type="text/javascript">
  function tampil_obat(input){
    var num = input.value;

    $.post("modules/transporte_transaction/medicines.php", {
      dataidobat: num,
    }, function(response) {      
      $('#stok').html(response)

      document.getElementById('jumlah_masuk').focus();
    });
  }

  function cek_jumlah_masuk(input) {
    jml = document.formObatMasuk.jumlah_masuk.value;
    var jumlah = eval(jml);
    if(jumlah < 1){
      alert('Jumlah Masuk Tidak Boleh Nol !!');
      input.value = input.value.substring(0,input.value.length-1);
    }
  }

  function hitung_total_stok() {
    bil1 = document.formObatMasuk.stok.value;
    bil2 = document.formObatMasuk.jumlah_masuk.value;
	tt = document.formObatMasuk.transaccion.value;
	
    if (bil2 == "") {
      var hasil = "";
    }
    else {
      var Entregado = eval(bil1) - eval(bil2);
	  var hasil = eval(bil1) + eval(bil2);
    }

	if (tt=="Entregado"){
		document.formObatMasuk.total_stok.value = (Entregado);
	}	else {
		document.formObatMasuk.total_stok.value = (hasil);
	} 
    
  }
</script>

<?php  

if ($_GET['form']=='add') { ?> 

  <section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> entradas / salidas 
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=start"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=transporte_transaction"> Entrada </a></li>
      <li class="active"> Agregar </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="modules/transporte_transaction/proses.php?act=insert" method="POST" name="formObatMasuk">
            <div class="box-body">
              <?php  
            
              $query_id = mysqli_query($mysqli, "SELECT RIGHT(codigo_transaccion,6) as codigo FROM transaccion_transporte
                                                ORDER BY codigo_transaccion DESC LIMIT 1")
                                                or die('Error : '.mysqli_error($mysqli));

              $count = mysqli_num_rows($query_id);

              if ($count <> 0) {
                 
                  $data_id = mysqli_fetch_assoc($query_id);
                  $codigo   = $data_id['codigo']+1;
              } else {
                  $codigo = 1;
              }

             
              $tahun          = date("Y");
              $buat_id        = str_pad($codigo, 6, "0", STR_PAD_LEFT);
              $codigo_transaccion = "M-$tahun-$buat_id";
              ?>

              <div class="form-group">
                <label class="col-sm-2 control-label">Codigo de Transacción </label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="codigo_transaccion" value="<?php echo $codigo_transaccion; ?>" readonly required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Fecha</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" name="fecha_a" autocomplete="off" value="<?php echo date("d-m-Y"); ?>" required>
                </div>
              </div>

              

              <hr>

              <div class="form-group">  
                <label class="col-sm-2 control-label">Nombre</label>
                <div class="col-sm-5">
                  <select class="chosen-select" name="codigo" data-placeholder="-- Seleccionar Transporte --" onchange="tampil_obat(this)" autocomplete="off" required>
                    <option value=""></option>
                    <?php
                      $query_obat = mysqli_query($mysqli, "SELECT codigo, nombre FROM transporte ORDER BY nombre ASC")
                                                            or die('error '.mysqli_error($mysqli));
                      while ($data_obat = mysqli_fetch_assoc($query_obat)) {
                        echo"<option value=\"$data_obat[codigo]\"> $data_obat[codigo] | $data_obat[nombre] </option>";
                      }
                    ?>
                  </select>
                </div>
              </div>

              <div class="form-group">  
                <label class="col-sm-2 control-label">Ubicacion</label>
                <div class="col-sm-5">
                  <select class="chosen-select" name="ubicacion" data-placeholder="-- Seleccionar origen --" onchange="tampil_obat(this)" autocomplete="off" required>
                    <option value=""></option>
                    <?php
                      $query_obat = mysqli_query($mysqli, "SELECT nombre, ubicacion FROM transporte ORDER BY nombre ASC")
                                                            or die('error '.mysqli_error($mysqli));
                      while ($data_obat = mysqli_fetch_assoc($query_obat)) {
                        echo"<option value=\"$data_obat[nombre]\"> $data_obat[nombre] | $data_obat[ubicacion] </option>";
                      }
                    ?>
                  </select>
                </div>
              </div>

               <div class="form-group">
                <label class="col-sm-2 control-label">Destino</label>
                <div class="col-sm-5">
                  <div class="input-group">
                    <span class="input-group-addon"><img src="assets\img\result.png" height="23" width="23"></span>
                    <input type="text" class="form-control" name="destino" autocomplete="off" required>
                  </div>
                </div>
              </div>


             
              
              <span id='stok'>
              <div class="form-group">
                <label class="col-sm-2 control-label">paquetes</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="stok" name="stock" readonly required>
                </div>
              </div>
              </span>

              <div class="form-group">
                <label class="col-sm-2 control-label">Cantidad</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="jumlah_masuk" name="num" autocomplete="off" onKeyPress="return goodchars(event,'0123456789',this)" onkeyup="hitung_total_stok(this)&cek_jumlah_masuk(this)" required>
                </div>
              </div>
			  
			  <div class="form-group">
                <label class="col-sm-2 control-label">historico</label>
                <div class="col-sm-5">
                  <select name="historico" id="historico" required class='form-control' onchange="hitung_total_stok();">
					<option value="Registro">Registro</option>
					<option value="Carga">Carga</option>
          <option value="Salida">Salida</option>
          <option value="En Ruta">En Ruta</option>
          <option value="Zona de Alto Riesgo y/o de difícil acceso">Zona de Alto Riesgo y/o de difícil acceso</option>
          <option value="Retarso por mal Clima">Retraso por mal Clima</option>
          <option value="Bloqueo de Carretera">Bloqueo de Carretera</option>
          <option value="Daño del Transporte">Daño del Transporte</option>
          <option value="Perdida de senaL del GPS">Perdida de senaL del GPS </option>
          <option value="Entregado">Entregado</option>
          <option value="Regreso a la Estacion">Regreso a la Estacion</option>


				  </select>
                </div>
              </div>


               <div class="form-group">
                <label class="col-sm-2 control-label">Total</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="total_stok" name="total_stock" readonly required>
                </div>
              </div>


            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
                  <a href="?module=transporte_transaction" class="btn btn-default btn-reset">Cancelar</a>
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