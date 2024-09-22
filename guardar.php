<?php
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL); 
include("includes/db.php"); 


if (isset($_POST["id"]) && isset($_POST["email"]) && isset($_POST["password"])) {
    $id = $_POST["id"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    if (!preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/', $password)) {
    die("La contraseña debe tener al menos 8 caracteres, incluir letras y números.");
}

    $sentencia = $conx->prepare("UPDATE usuarios SET email = ?, `password` = ? WHERE id = ?");
    $sentencia->bind_param("ssi", $email, $password, $id);
    if ($sentencia->execute()) {
        header("Location: listado.php?mensaje=actualizado");
        exit();
    } else {
        echo "Error al actualizar el usuario.";
    }
} else {
    echo "Faltan datos necesarios.";
}
?>
