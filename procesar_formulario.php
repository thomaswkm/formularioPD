<?php
include("ContextoFormacion.php");
include("Formacion.php");
include("FormacionFutbol.php");

error_reporting(E_ALL);
ini_set('display_errors', 1);
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $contexto = new ContextoFormacion(new FormacionFutbol());
    
    $resultado = $contexto->procesarFormacion($_POST);
    echo $resultado;
}
?>
