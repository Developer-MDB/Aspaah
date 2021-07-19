<?php
	
	include_once "includes/connect.php";

	$connect = new ConnectionDB();
	$conn = $connect->iniciarDB();

	$go = $_REQUEST["go"];


	// Dashboard - Inicio
	if ($go == "bar") {
		$query = "SELECT month(fnacimiento) as Mes, COUNT(idsocios) as Cantidad FROM socios GROUP BY month(fnacimiento)";
		$res = $conn->query($query);
		$row = array();
		while($data = $res->fetch_array(PDO::FETCH_ASSOC)){
			$row [] = $data;
		}
		print_r(json_encode($row));
	}

	if ($go == "pie") {
		$query = "SELECT (SELECT tm_nombre FROM tipo_maquinaria WHERE tm_id = id_tipo_maquinaria_FK), COUNT(mac_id) AS Total FROM maquinarias GROUP BY id_tipo_maquinaria_FK";
		$res = $conn->query($query);
		$row = array();
		while($data = $res->fetch_array(PDO::FETCH_ASSOC)){
			$row [] = $data;
		}
		print_r(json_encode($row));
	}
