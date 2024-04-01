<?php

class ConexionBD {
    private static $instancia;
    private $conexion;

    private function __construct() {
        $ip = "localhost";
        $usuario = "root";
        $password = "G#5tRd@9qXs!";
        $database = "formulario";
        $this->conexion = new mysqli($ip, $usuario, $password, $database);

        if ($this->conexion->connect_error) {
            die("Conexión fallida: ". $this->conexion->connect_error);
        }
        echo "Conexión exitosa. ";
    }

    public static function obtenerInstancia() {
        if (!self::$instancia) {
            self::$instancia = new ConexionBD();
        }
        return self::$instancia;
    }

    public function obtenerConexion() {
        return $this->conexion;
    }
}
?>
