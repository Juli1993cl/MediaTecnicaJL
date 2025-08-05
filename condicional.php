<form method="post" action="">
  <input type="text" name="nombre">
  <input type="submit" value="Enviar">
</form>



<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
    echo "El nombre ingresado es: " . $nombre;
} else {
    echo "No se recibió ningún nombre.";
}
?>



