<?php
ini_set("display_errors", 1); // Muestra los errores de PHP
ini_set("display_startup_errors", 1); // Muestra los errores de inicio de PHP
include("includes/db.php"); // Incluye el archivo de conexión a la base de datos

$id = $_GET["id"]; // Obtiene el ID del usuario desde la URL
$sentencia = $conx->prepare("SELECT * FROM usuarios WHERE id = ?"); // Prepara la consulta para seleccionar un usuario por ID

$sentencia->bind_param("i", $id); // Vincula el parámetro ID a la consulta
$sentencia->execute(); // Ejecuta la consulta
$resultado = $sentencia->get_result(); // Obtiene el resultado de la consulta
$usuario = $resultado->fetch_object(); // Extrae el usuario como un objeto
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"> <!-- Define la codificación de caracteres como UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Permite que la página sea responsive -->
    <title>Editar Usuario</title> <!-- Título de la página -->
    <style>
        body {
            font-family: Arial, sans-serif; /* Establece la fuente para el texto */
            margin: 20px; /* Añade un margen alrededor del cuerpo */
            background-color: #e9f5e9; /* Color de fondo suave */
        }
        h1 {
            color: #4CAF50; /* Color verde para el título */
        }
        form {
            background-color: white; /* Fondo blanco para el formulario */
            padding: 20px; /* Espaciado interno */
            border-radius: 5px; /* Bordes redondeados */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra ligera para el formulario */
        }
        label {
            display: block; /* Hace que las etiquetas ocupen toda la línea */
            margin: 10px 0 5px; /* Margen alrededor de las etiquetas */
        }
        input[type="text"] {
            width: 100%; /* Hace que los campos de texto ocupen el 100% del ancho */
            padding: 8px; /* Espaciado interno para los campos de texto */
            border: 1px solid #ccc; /* Borde gris claro para los campos de texto */
            border-radius: 4px; /* Bordes redondeados para los campos de texto */
        }
        button {
            background-color: #4CAF50; /* Fondo verde para el botón */
            color: white; /* Color del texto del botón */
            padding: 10px; /* Espaciado interno para el botón */
            border: none; /* Sin borde para el botón */
            border-radius: 4px; /* Bordes redondeados para el botón */
            cursor: pointer; /* Cambia el cursor al pasar sobre el botón */
        }
        button:hover {
            background-color: #45a049; /* Color más oscuro al pasar el mouse */
        }
    </style>
</head>
<body>
    <h1>Editar Usuario</h1> <!-- Título de la sección -->
    <form action="guardar.php" method="post"> <!-- Formulario que envía datos a guardar.php -->
        <input type="hidden" name="id" value="<?php echo $usuario->id; ?>"> <!-- Campo oculto para el ID del usuario -->
        <div>
            <label>Email</label>
            <input type="text" name="email" value="<?php echo $usuario->email; ?>" /> <!-- Campo para editar el Email -->
        </div>
        <div>
            <label>Password</label>
            <input type="text" name="password" value="<?php echo $usuario->password; ?>" /> <!-- Campo para editar el Password -->
        </div>
        <button>Guardar</button> <!-- Botón para enviar el formulario -->
    </form>
</body>
</html>
