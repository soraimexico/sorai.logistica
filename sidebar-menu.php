<?php

if ($_SESSION['permisos_acceso']=='Super Admin') { ?>

    <ul class="sidebar-menu">
        <li class="header">MENU</li>

	<?php

	if ($_GET["module"]=="start") {
		$active_home="active";
	} else {
		$active_home="";
	}
	?>
		<li class="<?php echo $active_home;?>">
			<a href="?module=start"><i class="fa fa-home"></i> Inicio </a>
	  	</li>
	<?php

  if ($_GET["module"]=="medicines" || $_GET["module"]=="form_medicines") { ?>
    <li class="active">
      <a href="?module=medicines"><i class="fa fa-folder"></i> Inventario </a>
      </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?module=medicines"><i class="fa fa-folder"></i> Inventario </a>
      </li>
  <?php
  }

  if ($_GET["module"]=="venta" || $_GET["module"]=="form_venta") { ?>
    <li class="active">
      <a href="?module=venta"><i class="fa fa-folder"></i> Ventas </a>
      </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?module=venta"><i class="fa fa-folder"></i> Ventas </a>
      </li>
  <?php
  }

  if ($_GET["module"]=="Transporte" || $_GET["module"]=="form_transporte") { ?>
    <li class="active">
      <a href="?module=transporte"><i class="fa fa-folder"></i> Transporte </a>
      </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?module=transporte"><i class="fa fa-folder"></i> Transporte </a>
      </li>
  <?php
	}

	
  if ($_GET["module"]=="transporte_transaction" || $_GET["module"]=="form_transporte_transaction") { ?>
    <li class="active">
      <a href="?module=transporte_transaction"><i class="fa fa-clone"></i> Movimiento de Transportista </a>
      </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?module=transporte_transaction"><i class="fa fa-clone"></i> Movimiento de Transportista </a>
      </li>
  <?php
  }
	

	if ($_GET["module"]=="paquete" || $_GET["module"]=="form_paquete") { ?>
    <li class="active">
      <a href="?module=paquete"><i class="fa fa-folder"></i> Logistica </a>
      </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?module=paquete"><i class="fa fa-folder"></i> Logistica </a>
      </li>
  <?php
  }
  
  
  if ($_GET["module"]=="paquete_transaction" || $_GET["module"]=="form_paquete_transaction") { ?>
    <li class="active">
      <a href="?module=paquete_transaction"><i class="fa fa-clone"></i> Movimiento de Guia </a>
      </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?module=paquete_transaction"><i class="fa fa-clone"></i> Movimiento de Guia </a>
      </li>
  <?php
  }
	

  



  if ($_GET["module"]=="medicines_transaction" || $_GET["module"]=="form_medicines_transaction") { ?>
    <li class="active">
      <a href="?module=medicines_transaction"><i class="fa fa-clone"></i> Registro de Movimientos </a>
      </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?module=medicines_transaction"><i class="fa fa-clone"></i> Registro de Movimientos </a>
      </li>
  <?php
  }

  if ($_GET["module"]=="guia_transaction" || $_GET["module"]=="form_guia_transaction") { ?>
    <li class="active">
      <a href="?module=guia_transaction"><i class="fa fa-clone"></i> Busqueda Guia </a>
      </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?module=guia_transaction"><i class="fa fa-clone"></i> Busqueda Guia </a>
      </li>
  <?php
  }

	if ($_GET["module"]=="stock_inventory") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-file-text"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
        		<li class="active"><a href="?module=stock_inventory"><i class="fa fa-circle-o"></i> Stock de Inventario </a></li>
        		<li><a href="?module=stock_report"><i class="fa fa-circle-o"></i> Imprimir Informe Movimientos</a></li>
						<li><a href="?module=stock_venta"><i class="fa fa-circle-o"></i> Imprimir Informe Venta</a></li>
            <li><a href="?module=stock_transporte"><i class="fa fa-circle-o"></i> Imprimir Informe Transporte</a></li>
      		</ul>
    	</li>
    <?php
	}

	elseif ($_GET["module"]=="stock_report") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-file-text"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
        		<li><a href="?module=stock_inventory"><i class="fa fa-circle-o"></i> Stock de Inventario </a></li>
						<li><a href="?module=stock_report"><i class="fa fa-circle-o"></i> Imprimir Informe Movimientos</a></li>
						<li><a href="?module=stock_venta"><i class="fa fa-circle-o"></i> Imprimir Informe Venta</a></li>
            <li><a href="?module=stock_transporte"><i class="fa fa-circle-o"></i> Imprimir Informe Transporte</a></li>
      		</ul>
    	</li>
    <?php
	}

	else { ?>
		<li class="treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-file-text"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
					<li><a href="?module=stock_report"><i class="fa fa-circle-o"></i> Imprimir Informe Movimientos</a></li>
						<li><a href="?module=stock_venta"><i class="fa fa-circle-o"></i> Imprimir Informe Venta</a></li>
            <li><a href="?module=stock_transporte"><i class="fa fa-circle-o"></i> Imprimir Informe Transporte</a></li>
      		</ul>
    	</li>
    <?php
	}


	if ($_GET["module"]=="user" || $_GET["module"]=="form_user") { ?>
		<li class="active">
			<a href="?module=user"><i class="fa fa-user"></i> Administrar usuarios</a>
	  	</li>
	<?php
	}

	else { ?>
		<li>
			<a href="?module=user"><i class="fa fa-user"></i> Administrar usuarios</a>
	  	</li>
	<?php
	}


	if ($_GET["module"]=="password") { ?>
		<li class="active">
			<a href="?module=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
		</li>
	<?php
	}

	else { ?>
		<li>
			<a href="?module=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
		</li>
	<?php
	}
	?>
	</ul>

<?php
}

elseif ($_SESSION['permisos_acceso']=='Gerente') { ?>
	<!-- sidebar menu start -->
    <ul class="sidebar-menu">
        <li class="header">MENU</li>

	<?php
	if ($_GET["module"]=="start") {
		$active_home="active";
	} else {
		$active_home="";
	}
	?>
		<li class="<?php echo $active_home;?>">
			<a href="?module=start"><i class="fa fa-home"></i> Inicio </a>
	  	</li>
	<?php

  if ($_GET["module"]=="medicines" || $_GET["module"]=="form_medicines") { ?>
    <li class="active">
      <a href="?module=medicines"><i class="fa fa-folder"></i> Inventario </a>
      </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?module=medicines"><i class="fa fa-folder"></i> Inventario </a>
      </li>
  <?php
  }


  if ($_GET["module"]=="medicines_transaction" || $_GET["module"]=="form_medicines_transaction") { ?>
    <li class="active">
      <a href="?module=medicines_transaction"><i class="fa fa-clone"></i> Registro de Movimientos </a>
      </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?module=medicines_transaction"><i class="fa fa-clone"></i> Registro de Movimientos </a>
      </li>
  <?php
  }

	if ($_GET["module"]=="stock_inventory") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-file-text"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
        		<li class="active"><a href="?module=stock_inventory"><i class="fa fa-circle-o"></i> Stock de Inventario </a></li>
        		<li><a href="?module=stock_report"><i class="fa fa-circle-o"></i> Imprimir Informe</a></li>
      		</ul>
    	</li>
    <?php
	}

	elseif ($_GET["module"]=="stock_report") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-file-text"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
        		<li><a href="?module=stock_inventory"><i class="fa fa-circle-o"></i> Stock de Inventario </a></li>
        		<li class="active"><a href="?module=stock_report"><i class="fa fa-circle-o"></i> Imprimir Informe </a></li>
      		</ul>
    	</li>
    <?php
	}

	else { ?>
		<li class="treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-file-text"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
        		<li><a href="?module=stock_inventory"><i class="fa fa-circle-o"></i> Stock de Inventario</a></li>
        		<li><a href="?module=stock_report"><i class="fa fa-circle-o"></i> Imprimir Informe</a></li>
      		</ul>
    	</li>
    <?php
	}


	if ($_GET["module"]=="user" || $_GET["module"]=="form_user") { ?>
		<li class="active">
			<a href="?module=user"><i class="fa fa-user"></i> Administrar usuarios</a>
	  	</li>
	<?php
	}

	else { ?>
		<li>
			<a href="?module=user"><i class="fa fa-user"></i> Administrar usuarios</a>
	  	</li>
	<?php
	}



}


if ($_SESSION['permisos_acceso']=='Almacenista') { ?>

<!-- sidebar menu start -->

<section class="content-header">
    <h1>
      <i class="fa fa-home icon-title"></i> Inicio
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=medicines"><i class="fa fa-home"></i> Inicio</a></li>
    </ol>
  </section>


<ul class="sidebar-menu">
        <li class="header">MENU</li>

       
  	</li>
	<?php


  if ($_GET["module"]=="medicines" || $_GET["module"]=="form_medicines") { ?>
    <li class="active">
      <a href="?module=medicines"><i class="fa fa-folder"></i> Inventarios </a>

      
      </li>
  <?php
  }
  else { ?>
    <li>
      <a href="?module=medicines"><i class="fa fa-folder"></i> Inventarios </a>
      </li>
  <?php
  }

  if ($_GET["module"]=="medicines_transaction" || $_GET["module"]=="form_medicines_transaction") { ?>
    <li class="active">
      <a href="?module=medicines_transaction"><i class="fa fa-clone"></i> Registro de Movimientos </a>
      </li>
  <?php
  }
  else { ?>
    <li>
      <a href="?module=medicines_transaction"><i class="fa fa-clone"></i> Registro de Movimientos </a>
      </li>
  <?php
  }

  if ($_GET["module"]=="stock_inventory") { ?>
    <li class="active treeview">
            <a href="javascript:void(0);">
              <i class="fa fa-file-text"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li class="active"><a href="?module=stock_inventory"><i class="fa fa-circle-o"></i> Stock de Inventario </a></li>
            <li><a href="?module=stock_report"><i class="fa fa-circle-o"></i> Registro de Movimientos </a></li>
          </ul>
      </li>
    <?php
  }
  elseif ($_GET["module"]=="stock_report") { ?>
    <li class="active treeview">
            <a href="javascript:void(0);">
              <i class="fa fa-file-text"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li><a href="?module=stock_inventory"><i class="fa fa-circle-o"></i> Stock de Inventario </a></li>
            <li class="active"><a href="?module=stock_report"><i class="fa fa-circle-o"></i> Registro de Movimientos </a></li>
          </ul>
      </li>
    <?php
  }
  else { ?>
    <li class="treeview">
            <a href="javascript:void(0);">
              <i class="fa fa-file-text"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
          <ul class="treeview-menu">
            <li><a href="?module=stock_inventory"><i class="fa fa-circle-o"></i> Stock de Inventarios </a></li>
            <li><a href="?module=stock_report"><i class="fa fa-circle-o"></i> Registro de movimientos </a></li>
          </ul>
      </li>
    <?php
  }


}

if ($_SESSION['permisos_acceso']=='Visitante') { ?>

  <!-- sidebar menu start -->
  
  <section class="content-header">
      <h1>
        <i class="fa fa-home icon-title"></i> Inicio
      </h1>
      <ol class="breadcrumb">
        <li><a href="?module=start"><i class="fa fa-home"></i> Inicio</a></li>
      </ol>
    </section>
  
  
  <ul class="sidebar-menu">
          <li class="header">MENU</li>
  
         
      </li>
    <?php
  
  if ($_GET["module"]=="guia_transaction" || $_GET["module"]=="form_guia_transaction") { ?>
    <li class="active">
      <a href="?module=guia_transaction"><i class="fa fa-clone"></i> Busqueda Guia </a>
      </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?module=guia_transaction"><i class="fa fa-clone"></i> Busqueda Guia </a>
      </li>
  <?php
  }


    
    }
  
     ?>


