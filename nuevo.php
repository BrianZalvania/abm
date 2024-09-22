<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> <!-- Define la codificación de caracteres como UTF-8 -->
	<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Permite que la página sea responsive -->
	<title>Nuevo Usuario</title> <!-- Título de la página -->
	<!-- Estilos CSS básicos para mejorar la presentación del formulario -->
	<style>
		body {
			font-family: Arial, sans-serif; /* Establece la fuente para el texto */
			margin: 20px; /* Añade un margen alrededor del cuerpo */
		}
		h1 {
			color: #333; /* Color del título */
		}
		form {
			max-width: 400px; /* Ancho máximo del formulario */
			margin: auto; /* Centra el formulario en la página */
			padding: 20px; /* Espacio interno del formulario */
			border: 1px solid #ccc; /* Borde del formulario */
			border-radius: 5px; /* Esquinas redondeadas */
			background-color: #f9f9f9; /* Color de fondo del formulario */
		}
		div {
			margin-bottom: 15px; /* Espacio entre los campos del formulario */
		}
		label {
			display: block; /* Hace que las etiquetas ocupen todo el ancho */
			margin-bottom: 5px; /* Espacio entre la etiqueta y el campo de entrada */
		}
		input[type="text"] {
			width: 100%; /* Campo de entrada ocupa el 100% del ancho disponible */
			padding: 10px; /* Espacio interno del campo de entrada */
			border: 1px solid #ccc; /* Borde del campo de entrada */
			border-radius: 3px; /* Esquinas redondeadas del campo de entrada */
		}
		button {
			padding: 10px 15px; /* Espacio interno del botón */
			background-color: #007BFF; /* Color de fondo del botón */
			color: white; /* Color del texto del botón */
			border: none; /* Sin borde */
			border-radius: 3px; /* Esquinas redondeadas del botón */
			cursor: pointer; /* Cambia el cursor al pasar el mouse */
		}
		button:hover {
			background-color: #0056b3; /* Color del botón al pasar el mouse */
		}
	</style>
</head>
<body>
	<h1>Nuevo usuario</h1> <!-- Título de la página -->
	
	<!-- Formulario para agregar un nuevo usuario, enviando datos a 'insertar.php' -->
	<form action="insertar.php" method="post">
		<div>
			<label>Email</label> <!-- Etiqueta para el campo de Email -->
			<input type="text" name="email" value="" /> <!-- Campo de entrada para el Email -->
		</div>
		<div>
			<label>Password</label> <!-- Etiqueta para el campo de Password -->
			<input type="text" name="password" value=""/> <!-- Campo de entrada para el Password -->
		</div>
		<button>Guardar</button> <!-- Botón para enviar el formulario -->
	</form>
</body>
</html>
