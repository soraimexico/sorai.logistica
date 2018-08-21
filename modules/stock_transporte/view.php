

<section class="content-header">
  <h1>
    <i class="fa fa-file-text-o icon-title"></i> Transporte

    <a class="btn btn-primary btn-social pull-right" href="modules/stock_transporte/print.php" target="_blank">
      <i class="fa fa-print"></i> Imprimir
    </a>
  </h1>

</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-body">
        
          <table id="dataTables1" class="table table-bordered table-striped table-hover">
          
            <thead>
              <tr>
                <th class="center">No.</th>
                <th class="center">Codigo Transportista</th>
                <th class="center">Transportista</th>
               <th class="center">paquete</th>
                <th class="center">Unidad</th>
              </tr>
            </thead>
          
            <tbody>
            <?php  
            $no = 1;
          
            $query = mysqli_query($mysqli, "SELECT codigo,nombre,ubicacion,stock,unidad FROM transporte ORDER BY nombre ASC")
                                            or die('Error: '.mysqli_error($mysqli));

           
            while ($data = mysqli_fetch_assoc($query)) { 
             
             
              echo "<tr>
                      <td width='30' class='center'>$no</td>
                      <td width='80' class='center'>$data[codigo]</td>
                      <td width='180'>$data[nombre]</td>
                      <td width='180'>$data[ubicacion]</td>
                      <td width='80' align='right'>$data[stock]</td>
                      <td width='80' class='center'>$data[unidad]</td>
                    </tr>";
              $no++;
            }
            ?>
            </tbody>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!--/.col -->
  </div>   <!-- /.row -->
</section><!-- /.content