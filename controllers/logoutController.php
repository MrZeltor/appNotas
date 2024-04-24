<?php 
//Inicia sesión
session_start();
//destruye sesion iniciada
session_destroy();
echo '<script>
    window.location.href = "../login.php"
</script>';
?>