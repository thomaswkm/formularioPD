<?php

class FormacionFutbol implements Formacion{

    public function validar($datos){
        $arq = $datos["arq"];
        $li = $datos["li"];
        $def1 = $datos["def1"];
        $def2 = $datos["def2"];
        $ld = $datos["ld"];
        $mc1 = $datos["mc1"];
        $mcd = $datos["mcd"];
        $mc2 = $datos["mc2"];
        $ei = $datos["ei"];
        $dc = $datos["dc"];
        $ed = $datos["ed"];

        if (empty($arq) || empty($li) || empty($def1) || empty($def2) || empty($ld) || empty($mc1) || empty($mcd) || empty($mc2) || empty($ei) || empty($dc) || empty($ed)) {
            return "Error: Debes seleccionar un jugador para cada posición.";
        }
    
        $jugadores = array($arq, $li, $def1, $def2, $ld, $mc1, $mcd, $mc2, $ei, $dc, $ed);
        $jugadores_uniq = array_unique($jugadores);
        if (count($jugadores) !== count($jugadores_uniq)) {
            return "Error: Se ha seleccionado al mismo jugador para múltiples posiciones.";
        }
    
        return "";
    }

    public function procesar($datos){

        $arq = $datos["arq"];
        $li = $datos["li"];
        $def1 = $datos["def1"];
        $def2 = $datos["def2"];
        $ld = $datos["ld"];
        $mc1 = $datos["mc1"];
        $mcd = $datos["mcd"];
        $mc2 = $datos["mc2"];
        $ei = $datos["ei"];
        $dc = $datos["dc"];
        $ed = $datos["ed"];

        include("ConexionBD.php");
        $conexionBD = ConexionBD::obtenerInstancia();
        $conn = $conexionBD->obtenerConexion();
        
        $sql = "INSERT INTO equipo (arq, li, def1, def2, ld, mc1, mcd, mc2, ei, dc, ed) VALUES ('$arq', '$li', '$def1', '$def2', '$ld', '$mc1', '$mcd', '$mc2', '$ei', '$dc', '$ed')";
        
        if ($conn->query($sql) === TRUE) {
            return "Formulario enviado correctamente.";
        } else {
            return "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

?>
