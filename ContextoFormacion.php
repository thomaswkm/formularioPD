<?php

class ContextoFormacion{

    private $formacion;

    public function __construct(Formacion $formacion){
        $this->formacion = $formacion;
    }

    public function validarFormacion($datos) {
        return $this->formacion->validar($datos);
    }

    public function procesarFormacion($datos) {
        return $this->formacion->procesar($datos);
    }

}

?>
