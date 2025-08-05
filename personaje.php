<?php
class Personaje {
    public $nombre;
    public $edad;
    public function saludar() {
        return "Hola, soy " . $this->nombre;
    }
}
$pj = new Personaje();
$pj->nombre = "Juan Esteban";
$pj->edad = 17;
echo $pj->saludar();
echo "<br>";
echo $pj->edad;
echo "<br>";
$pj1 = new Personaje();
$pj1->nombre = "Michel Juliana";
echo $pj1->saludar();
echo "<br>";
$pj1->edad = 16;
echo $pj1->edad;
echo "<br>";
$pj2 = new Personaje();
$pj2->nombre = "Carolina";
echo $pj2->saludar();
echo "<br>";
$pj2-> edad =15 ;
echo $pj2->edad;
echo "<br>";  
?>