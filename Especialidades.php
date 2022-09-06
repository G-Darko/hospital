<?php include 'funciones.php' ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Hospital MG | Especialidades</title>
</head>
<body>
		<div class="caja">
			<h1>Especialidades del Hospital MG </h1>
			<table>
			<tr>
				<th>Especialidad</th>
				<th>Descripción</th>
				<th>Imagen</th>
			</tr>

			<?php  
				$query= mysqli_query($con,"SELECT * FROM especialidades");

				$res=mysqli_num_rows($query);
				if ($res>0 ) {

					while ($data= mysqli_fetch_array($query)) {
			?>

			<tr>
				<td><?php echo $data['especialidad'] ?></td>
				<td><?php echo $data['descripcion'] ?></td>	
				<td><img src="<?php echo $data['imagen'] ?>" alt=""></td>	
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