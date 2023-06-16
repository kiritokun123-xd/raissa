<!DOCTYPE html>
<html lang="es-es">

<head>
	<meta charset="utf-8">
	<title>Contacto</title>

	<head>

	<body>
		<?php
		// Definimos el archivo exportado
		$arquivo = 'articulos.xls';

		// Crear la tabla HTML
		$html = '';
		$html .= '<table border="1">';
		$html .= '<tr>';
		$html .= '<td colspan="9">INVENTARIO DE ARTICULOS '.date_format(date_create(date('Y-m-d')),'d-m-Y').'</tr>';
		$html .= '</tr>';
		$html .= '<tr>';
		$html .= '<td><b>ID</b></td>';
		$html .= '<td><b>CODIGO</b></td>';
		$html .= '<td><b>DESCRIPCION</b></td>';
		$html .= '<td><b>AREA</b></td>';
		$html .= '<td><b>TIPO</b></td>';
		$html .= '<td><b>TIPO NA</b></td>';
		$html .= '<td><b>UM</b></td>';
		$html .= '<td><b>CANTIDAD</b></td>';
		$html .= '<td><b>COSTO</b></td>';
		$html .= '</tr>';

        foreach($articulos as $articulo) :
			$html .= '<tr>';
			$html .= '<td>' . $articulo->id . '</td>';
			$html .= '<td>' . $articulo->codigo . '</td>';
			$html .= '<td>' . $articulo->descripcion . '</td>';
			$html .= '<td>' . $articulo->area . '</td>';
			$html .= '<td>' . $articulo->tipo . '</td>';
			$html .= '<td>' . $articulo->tipo_na . '</td>';
			$html .= '<td>' . $articulo->um . '</td>';
			$html .= '<td>' . $articulo->cantidad . '</td>';
			$html .= '<td>' . $articulo->costo . '</td>';	
			$html .= '</tr>';
        endforeach;
		// Configuración en la cabecera
		header("Expires: Mon, 26 Jul 2227 05:00:00 GMT");
		header("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
		header("Cache-Control: no-cache, must-revalidate");
		header("Pragma: no-cache");
		header("Content-type: application/x-msexcel");
		header("Content-Disposition: attachment; filename=\"{$arquivo}\"");
		header("Content-Description: PHP Generado Data");
		// Envia contenido al archivo
		echo $html;
		exit; ?>
	</body>
</html>
