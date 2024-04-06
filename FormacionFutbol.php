<?php

class FormacionFutbol implements Formacion
{

    public function procesar($datos)
    {

        $form1_arq = $datos["form1_arq"];
        $form1_def1 = $datos["form1_def1"];
        $form1_def2 = $datos["form1_def2"];
        $form1_def3 = $datos["form1_def3"];
        $form1_def4 = $datos["form1_def4"];
        $form1_mc1 = $datos["form1_mc1"];
        $form1_mc2 = $datos["form1_mc2"];
        $form1_mc3 = $datos["form1_mc3"];
        $form1_del1 = $datos["form1_del1"];
        $form1_del2 = $datos["form1_del2"];
        $form1_del3 = $datos["form1_del3"];

        $form2_arq = $datos["form2_arq"];
        $form2_def1 = $datos["form2_def1"];
        $form2_def2 = $datos["form2_def2"];
        $form2_def3 = $datos["form2_def3"];
        $form2_def4 = $datos["form2_def4"];
        $form2_mc1 = $datos["form2_mc1"];
        $form2_mc2 = $datos["form2_mc2"];
        $form2_mc3 = $datos["form2_mc3"];
        $form2_del1 = $datos["form2_del1"];
        $form2_del2 = $datos["form2_del2"];
        $form2_del3 = $datos["form2_del3"];

        include ("ConexionBD.php");
        $conexionBD = ConexionBD::obtenerInstancia();
        $conn = $conexionBD->obtenerConexion();

        $sql1 = "INSERT INTO Equipo (arq, def1, def2, def3, def4, mc1, mc2, mc3, del1, del2, del3) 
        VALUES ('$form1_arq', '$form1_def1', '$form1_def2', '$form1_def3', '$form1_def4', '$form1_mc1', '$form1_mc2',
         '$form1_mc3', '$form1_del1', '$form1_del2', '$form1_del3')";

        $sql2 = "INSERT INTO Equipo (arq, def1, def2, def3, def4, mc1, mc2, mc3, del1, del2, del3) 
        VALUES ('$form2_arq', '$form2_def1', '$form2_def2', '$form2_def3', '$form2_def4', '$form2_mc1', '$form2_mc2', '$form2_mc3',
         '$form2_del1', '$form2_del2', '$form2_del3')";

        if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE) {
            return "Formulario enviado correctamente.";
        } else {
            return "Error: " . $sql1 . "<br>" . $conn->error;
        }
    }

}

?>