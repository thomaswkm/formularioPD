<?php

class ContextoFormacion{

    private $formacion;

    public function __construct(Formacion $formacion){
        $this->formacion = $formacion;
    }

    public function procesarFormacion($datos) {
        return $this->formacion->procesar($datos);
    }

}

?>
