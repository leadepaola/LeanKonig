<?php 



	// En este vector tengo todos los ids seleccionados
	$ids_pedidos 	= $_POST['ids_pedidos'];

	require('../../lib/excel/vendor/autoload.php');

		
	use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
    use PhpOffice\PhpSpreadsheet\Writer\Xls;
    use PhpOffice\PhpSpreadsheet\IOFactory;



    require('../../../server_local/conections/DB_export_excel.php');
    //$conn = new mysqli("127.0.0.1", "root", "", "lowcostweb");

    $exportArray = array();











	/*
	#####  #####  ###### #####    ##   #####   ####  
	#    # #    # #      #    #  #  #  #    # #    # 
	#    # #    # #####  #    # #    # #    # #    # 
	#####  #####  #      #####  ###### #####  #    # 
	#      #   #  #      #      #    # #   #  #    # 
	#      #    # ###### #      #    # #    #  ####

	 ####  #    # ###### #####  #   # 
	#    # #    # #      #    #  # #  
	#    # #    # #####  #    #   #   
	#  # # #    # #      #####    #   
	#   #  #    # #      #   #    #   
	 ### #  ####  ###### #    #   # 
	*/

    // 1 PARTE
	$sql_pedidos_datos_usuarios = 'SELECT * 
	FROM 		ti_pedidos_datos_usuarios 	user
	INNER JOIN 	ti_pedidos_facturacion 		Fact ON user.id_pedido = Fact.id_pedido

	WHERE user.id_pedido 		= '.	$ids_pedidos[0]			.' 
	OR Fact.id_pedido 			= '.	$ids_pedidos[0]			.'
	';

	// 2 PARTE
	//Variable para for
	$cant_pedidos = 0;

	//Recorro el array de pedido
	for ($cant_pedidos=1; $cant_pedidos <count($ids_pedidos); $cant_pedidos++) { 

		// 2° parte - Armo query
		$sql_pedidos_datos_usuarios .= 
		'
		OR user.id_pedido 			= '.	$ids_pedidos[$cant_pedidos]			.'
		OR Fact.id_pedido 			= '.	$ids_pedidos[$cant_pedidos]			.'
		';
	}

	// 3 PARTE
	// Termino de crear query
	$sql_pedidos_datos_usuarios .= 'ORDER BY user.id_pedido DESC';

















    $query = mysqli_query($conn, $sql_pedidos_datos_usuarios);

    $exp=0;

    if(mysqli_num_rows($query) > 0){

        while ($row = mysqli_fetch_assoc($query)) {

            $exportArray[$exp]['id_pedido'] 		= $row['id_pedido'];
            $exportArray[$exp]['name_user'] 		= $row['name_user'];
            $exportArray[$exp]['phone'] 			= $row['phone'];
            $exportArray[$exp]['email'] 			= $row['email'];
            $exportArray[$exp]['direccion']			= $row['direccion'];
            $exportArray[$exp]['altura'] 			= $row['altura'];
            $exportArray[$exp]['piso'] 				= $row['piso'];
            $exportArray[$exp]['dpto'] 				= $row['dpto'];
            $exportArray[$exp]['localidad'] 		= $row['localidad'];
            $exportArray[$exp]['zona'] 				= $row['zona'];
            $exportArray[$exp]['fecha_d_entrega'] 	= $row['fecha_d_entrega'];
            $exportArray[$exp]['metodo_d_pago'] 	= $row['metodo_d_pago'];
            $exportArray[$exp]['comentario'] 		= $row['comentario'];
            $exportArray[$exp]['subtotal'] 			= $row['subtotal'];
            $exportArray[$exp]['dato_descuento'] 	= $row['dato_descuento'];
            $exportArray[$exp]['descuento'] 		= $row['descuento'];
            $exportArray[$exp]['costo_d_envio'] 	= $row['costo_d_envio'];
            $exportArray[$exp]['total'] 			= $row['total'];
            $exportArray[$exp]['fecha'] 			= $row['fecha'];
            $exportArray[$exp]['hora'] 				= $row['hora'];
            $exportArray[$exp]['dispositivo'] 		= $row['dispositivo'];

            $exp++;

        }

    }

    $array = array();

    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    $sheet->setCellValue('A1', 'ID Pedido');
    $sheet->setCellValue('B1', 'Nombre');
    $sheet->setCellValue('C1', 'Telefono');
    $sheet->setCellValue('D1', 'Email');
    $sheet->setCellValue('E1', 'Direccion');
	$sheet->setCellValue('F1', 'Altura');
	$sheet->setCellValue('G1', 'Piso');
	$sheet->setCellValue('H1', 'Dpto');
	$sheet->setCellValue('I1', 'Localidad');
	$sheet->setCellValue('J1', 'Zona de entrega');
	$sheet->setCellValue('K1', 'Fecha de entrega');
	$sheet->setCellValue('L1', 'Metodo de pago');
	$sheet->setCellValue('M1', 'Comentario');
	$sheet->setCellValue('N1', 'Subtotal');
	$sheet->setCellValue('O1', '% de descuento');
	$sheet->setCellValue('P1', 'Descuento');
	$sheet->setCellValue('Q1', 'Costo de envío');
	$sheet->setCellValue('R1', 'Total');
	$sheet->setCellValue('S1', 'Fecha');
	$sheet->setCellValue('T1', 'Hora');
	$sheet->setCellValue('U1', 'Dispositivo');

    $rowCount = 2;
    foreach ($exportArray as $value) {

        $sheet->setCellValue('A' . $rowCount, $value['id_pedido']);
        $sheet->setCellValue('B' . $rowCount, $value['name_user']);
        $sheet->setCellValue('C' . $rowCount, $value['phone']);
        $sheet->setCellValue('D' . $rowCount, $value['email']);
        $sheet->setCellValue('E' . $rowCount, $value['direccion']);
        $sheet->setCellValue('F' . $rowCount, $value['altura']);
        $sheet->setCellValue('G' . $rowCount, $value['piso']);
        $sheet->setCellValue('H' . $rowCount, $value['dpto']);
        $sheet->setCellValue('I' . $rowCount, $value['localidad']);
        $sheet->setCellValue('J' . $rowCount, $value['zona']);
        $sheet->setCellValue('K' . $rowCount, $value['fecha_d_entrega']);
        $sheet->setCellValue('L' . $rowCount, $value['metodo_d_pago']);
        $sheet->setCellValue('M' . $rowCount, $value['comentario']);
        $sheet->setCellValue('N' . $rowCount, $value['subtotal']);
        $sheet->setCellValue('O' . $rowCount, $value['dato_descuento']);
        $sheet->setCellValue('P' . $rowCount, $value['descuento']);
        $sheet->setCellValue('Q' . $rowCount, $value['costo_d_envio']);
        $sheet->setCellValue('R' . $rowCount, $value['total']);
        $sheet->setCellValue('S' . $rowCount, $value['fecha']);
        $sheet->setCellValue('T' . $rowCount, $value['hora']);
        $sheet->setCellValue('U' . $rowCount, $value['dispositivo']);
        $rowCount++;
    }

    $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
	header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
	header('Content-Disposition: attachment;filename="Datos_pedidos.xlsx"');
	header('Cache-Control: max-age=0');
	header('Cache-Control: max-age=1');
	header('Cache-Control: cache, must-revalidate');
	header('Pragma: public');

	$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
	$writer->save('php://output');
    //exit();






