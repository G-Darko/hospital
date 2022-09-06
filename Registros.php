<?php include 'funciones.php' ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Hospital MG | Registros</title>
</head>
<body>
		<div class="caja">
			<h1>Registros del Hospital MG </h1>
			<table>
			<tr>
				<th>ID del Registro</th>
				<th>Nombres del Paciente</th>
				<th>Apellidos del Paciente</th>
				<th>Fecha de Nacimiento del Paciente</th>
				<th>Nombres del Doctor</th>
				<th>Apellidos del Doctor</th>
			</tr>

			<?php  
				$query= mysqli_query($con,"SELECT * FROM registros");

				$res=mysqli_num_rows($query);
				if ($res>0 ) {

					while ($data= mysqli_fetch_array($query)) {
			?>

			<tr>
				<td><?php echo $data['id_reg'] ?></td>
				<td><?php echo $data['nombre_P'] ?></td>	
				<td><?php echo $data['apellidos_p'] ?></td>	
				<td><?php echo $data['fecha_nac'] ?></td>	
				<td><?php echo $data['nombre_D'] ?></td>
				<td><?php echo $data['apeliidos_D'] ?></td>			
			</tr>
			<?php  
					}
					
				}
			?>
		</table>

		</div>	
	<footer>
		<p>&copy; 2021 <strong>DARKO</strong>, Desarrolla Aplicaciones WEB </p>
	</footer>
</body>
</html>