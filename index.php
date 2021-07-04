<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>INC. DENC</title>
</head>
<body>
	<h1>Estos son los empleados que estan en la lista</h1>
	<?php 
		require_once 'conexion.php';

		$sql = 'SELECT *FROM employees;';
		$conexion = new Conexion();
		$stm = $conexion->connection();
		$empleados = $stm->query($sql)->fetch(PDO::FETCH_OBJ);
		foreach ($empleados as $key => $value) {
			echo $value->nombre;
		}
	?>
</body>
</html>