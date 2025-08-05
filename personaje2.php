<?php
class Personaje {
    public $nombre;
    public $edad;
public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function saludar() {
        return "Hola, soy " . $this->nombre;
    }
}
$pj3 = new Personaje("Juan Esteban", 58);
echo $pj3->saludar();
echo "<br>";
echo $pj3->edad;
echo "<br>";