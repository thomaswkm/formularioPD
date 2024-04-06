<?php
include ("ConexionBD.php");

function generarOpcionPorPosicion($posicion)
{
    $conexionBD = ConexionBD::obtenerInstancia();
    $conn = $conexionBD->obtenerConexion();

    $jugadores = mysqli_query($conn, "SELECT Jugadores.*
    FROM Jugadores
    INNER JOIN Jugador_Posicion ON Jugadores.numero = Jugador_Posicion.jugador_numero
    INNER JOIN Posiciones ON Jugador_Posicion.posicion_id = Posiciones.id
    WHERE Posiciones.nombre = '$posicion';
    ");
    echo '<option value="">Elige</option>';
    while ($j = mysqli_fetch_array($jugadores)) {
        echo '<option value="' . $j['numero'] . '">' . $j['numero'] . '. ' . $j['nombre'] . ' - ' . $posicion . ' - ' . $j['equipo'] . '</option>';
    }
}
?>