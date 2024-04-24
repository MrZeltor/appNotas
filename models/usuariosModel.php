<?php
include_once("../controllers/conexionController.php");

Class UsuariosModel {

    static public function IniciarSesion($usuario, $password) {
        $cn = Conexion::Conectar();
        $sql = "SELECT * FROM usuarios 
                WHERE correo = '$usuario' 
                and contrasena = '$password'";
        $resultado = $cn->query($sql);

        return $resultado;

    }

}

?>