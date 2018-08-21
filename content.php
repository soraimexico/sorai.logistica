<?php
require_once "config/database.php";
require_once "config/fungsi_tanggal.php";
require_once "config/fungsi_rupiah.php";


if (empty($_SESSION['username']) && empty($_SESSION['password'])){
	echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}
else {
	if ($_GET['module'] == 'start') {
		include "modules/start/view.php";
	}

	elseif ($_GET['module'] == 'medicines') {
		include "modules/medicines/view.php";
	}

	elseif ($_GET['module'] == 'form_medicines') {
		include "modules/medicines/form.php";
	}

	elseif ($_GET['module'] == 'venta') {
		include "modules/venta/view.php";
	}

	elseif ($_GET['module'] == 'form_venta') {
		include "modules/venta/form.php";
	}
	elseif ($_GET['module'] == 'guia_transaction') {
		include "modules/guia_transaction/view.php";
	}

	elseif ($_GET['module'] == 'medicines_transaction') {
		include "modules/medicines_transaction/view.php";
	}

	elseif ($_GET['module'] == 'form_medicines_transaction') {
		include "modules/medicines_transaction/form.php";
	}

	elseif ($_GET['module'] == 'venta_transaction') {
		include "modules/venta_transaction/view.php";
	}

	elseif ($_GET['module'] == 'form_venta_transaction') {
		include "modules/venta_transaction/form.php";
	}

	elseif ($_GET['module'] == 'transporte_transaction') {
		include "modules/transporte_transaction/view.php";
	}

	elseif ($_GET['module'] == 'form_transporte_transaction') {
		include "modules/transporte_transaction/form.php";
	}

	elseif ($_GET['module'] == 'paquete_transaction') {
		include "modules/paquete_transaction/view.php";
	}

	elseif ($_GET['module'] == 'form_paquete_transaction') {
		include "modules/paquete_transaction/form.php";
	}

	elseif ($_GET['module'] == 'paquete') {
		include "modules/paquete/view.php";
	}

	elseif ($_GET['module'] == 'form_paquete') {
		include "modules/paquete/form.php";
	}

	elseif ($_GET['module'] == 'stock_inventory') {
		include "modules/stock_inventory/view.php";
	}

	elseif ($_GET['module'] == 'stock_report') {
		include "modules/stock_report/view.php";
	}
	elseif ($_GET['module'] == 'stock_transporte') {
		include "modules/stock_transporte/view.php";
	}

	elseif ($_GET['module'] == 'stock_venta') {
		include "modules/stock_venta/view.php";
	}

	elseif ($_GET['module'] == 'transporte') {
		include "modules/transporte/view.php";
	}

	elseif ($_GET['module'] == 'form_transporte') {
		include "modules/transporte/form.php";
	}

	elseif ($_GET['module'] == 'user') {
		include "modules/user/view.php";
	}


	elseif ($_GET['module'] == 'form_user') {
		include "modules/user/form.php";
	}

	elseif ($_GET['module'] == 'profile') {
		include "modules/profile/view.php";
		}


	elseif ($_GET['module'] == 'form_profile') {
		include "modules/profile/form.php";
	}

	elseif ($_GET['module'] == 'password') {
		include "modules/password/view.php";
	}
}
?>