
<html>
	<head>
		<title>Probando text</title>
	</head>
	<body>
	<form  method="POST">
		Introduzca la cadena a buscar:
		<input type="text" name="cadena" value="valor por defecto" size="20">
		<input type="submit" value="Aceptar">
	</form>
	</body>
</html>

<?php
   $cadena = $_POST['cadena']; 
   print ($cadena);
?>
