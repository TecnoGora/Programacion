<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario</title>
</head>
<body>
	<form method="POST" action="registrarUsuario.php">
		<table>
			<tr>
				<td colspan="2">Registro de Usuario</td>
			</tr>
			<tr>
				<td>Nombre de Usurio</td>
				<td>
					<input type="text" name="usr" placeholder="Ingrese su nombre de Usuario">
				</td>
			</tr>
			<tr>
				<td>Contraseña</td>
				<td>
					<input type="password" name="pwrd" placeholder="Ingrese su Contraseña">
				</td>
			</tr>
			<tr>
				<td>Confirme su contraseña</td>
				<td>
					<input type="password" name="pwrd" placeholder="Ingrese su Contraseña">
				</td>
			</tr>
			<tr>
				
				<td>Perfil</td>
				<td>
					<select name="pfl_id" id="pfl_id">
						<option value="">Seleccione</option>
						<option value="1">Administrador</option>
						<option value="2">Consultor</option>
						<option value="3">Supervisor</option>
					</select>
				</td>
			</tr>


			<tr>
				<td colspan="2"><input type="submit" value="Guardar"></td>
			</tr>
		</table>
		
	</form>
</body>
</html>