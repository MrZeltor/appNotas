<?php
session_start();
// isset() = permite evaluar si no variable está inicializada, no importando su valor.
// empty() = permite evaluar si una variable está vacia.
if ( empty($_SESSION["nombreUsuario"]) ) {
    echo '<script>
        window.location.href = "login.php";
    </script>';
}
?>