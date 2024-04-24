<?php
include_once("../models/usuariosModel.php");

$user = $_POST["usuario"];
$pass = $_POST["password"];

$resultado = UsuariosModel::IniciarSesion($user, $pass);

if ($resultado->num_rows == 1) {
    $fila = $resultado->fetch_assoc();
    $nombre = $fila["nombre"];
    $apellido = $fila["apellido"];
    session_start();
    $_SESSION["nombreUsuario"] = $nombre." ".$apellido;
    echo "ok";

} else {
    echo "error";
}

?>