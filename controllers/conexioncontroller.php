<?php
//Usando constantes (No pueden cambiar de valor)
const SERVIDOR  = "localhost:3307";
const USUARIO   = "root";
const PASSWORD  = "";
const BD        = "bd_productos";

Class Conexion {

    static public function Conectar() {
        $cn = new mysqli(SERVIDOR, USUARIO, PASSWORD, BD);
        $cn->set_charset("utf8");
        return $cn;
    }

}



?>