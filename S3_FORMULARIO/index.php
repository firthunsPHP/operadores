<?php

if ($_POST) {

    echo $_POST['nombre'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario</title>
</head>
<body>
<!--<form action="recibe.php" name="formulario_contacto" method="" id="" class="">-->
<!--<form action="recibe.php" name="formulario_contacto" method="get">-->
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"  method="post">
		<input type="text" placeholder="Nombre:" name="nombre" id="nombre">
		<input type="text" placeholder="Edad:" name="edad" id="edad">
		<br>

<!-- Radio Button -->
		<label for="hombre">Hombre</label>
		<input type="radio" name="sexo" id="hombre" value="hombre">
		<br>

		<label for="mujer">Mujer</label>
		<input type="radio" name="sexo" id="mujer" value="mujer">
		<br>

<!-- Combobox -->
		<select name="year" id="year">
			<option value="2000">2000</option>
			<option value="2001">2001</option>
		</select>
		<br>

<!-- Checkbox -->
		<label for="terminos">Terminos y Condiciones</label>
		<input type="checkbox" name="terminos" value="ok" id="terminos">
		<br>

		<input type="submit" name="btn-enviar" vale="Enviar">
	</form>
</body>
</html>