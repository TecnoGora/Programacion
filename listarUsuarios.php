

<!DOCTYPE html>
<html>
<head>
	<title>Listar Usuarios</title>
</head>
<body>
	<?php
		//Se emitira una lista de usaurios

		include("clUsr.php");
		$objUsuarios = new users();
		$listado = $objUsuarios->listar();
	?>

	<table>
		<tr>
			<td><input type="button" value="Agregar" onclick="javascript:location.href='registro.html'"></td>
		</tr>

		<tr>
			<td colspan="4">Listado de Usuarios</td>
		</tr>

		<tr>
			<td>Nro.</td>
			<td>Usuario</td>
			<td>Perfil</td>
			<td>Fecha Ult. Acceso</td>
			<td>Acciones</td>
		</tr>
		<?php
			$i = 0;
			while ($i<count($listado)) {
				echo "<tr>";
				echo "<td>".$listado[$i]->id."</td>";
				echo "<td>".$listado[$i]->nom_usr."</td>";
				echo "<td>".$listado[$i]->prfl_id."</td>";
				echo "<td>".$listado[$i]->dt_ultraccss."</td>";
				echo "<td><a href='form.php".$listado[$i]."'>Actualizar</a></td>";
				echo "</tr>";
				$i++;
			}

		?>
	</table>

</body>
</html>