<?php include 'funciones.php' ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Hospital MG | Doctores</title>
</head>
<body>
		<div class="caja">
			<h1>Doctores del Hospital MG </h1>
			<table>
			<tr>
				<th>ID del Doctor</th>
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>Fecha de Nacimiento</th>
				<th>Especialidad</th>
				<th>Genero</th>
				<th>Telefono</th>
			</tr>

			<?php  
				$query= mysqli_query($con,"SELECT * FROM doctores");

				$res=mysqli_num_rows($query);
				if ($res>0 ) {

					while ($data= mysqli_fetch_array($query)) {
			?>

			<tr>
				<td><?php echo $data['id_doc'] ?></td>
				<td><?php echo $data['Nombres'] ?></td>	
				<td><?php echo $data['Apellidos'] ?></td>	
				<td><?php echo $data['fecha_nac'] ?></td>	
				<td><?php echo $data['especialidad'] ?></td>
				<td><?php echo $data['Genero'] ?></td>
				<td><?php echo $data['telefono'] ?></td>			
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