<?php
$email = $_POST["email"];
$password = $_POST["password"];

if (!preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/', $password)) {
    die("La contraseña debe tener al menos 8 caracteres, incluir letras y números.");
}
include_once("includes/db.php");
$sentencia = $conx->prepare("INSERT INTO usuarios (email, password) VALUES (?, ?) ");
$sentencia->bind_param("ss", $email, $password);
$sentencia->execute();
header("Location: listado.php");
  ?>