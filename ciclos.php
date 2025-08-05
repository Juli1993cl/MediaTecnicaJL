<!-- 
# Desde un formulario ingresamos un numero y 
# tenemos de devolver la tabla de multiplicar 
# del 1 al 10, utilizndo la etiqueta de tablas de html
-->
<form method="GET" action="">
    <input type="number" name="tabares">
    <input type="submit" value="enviar">
</form>


<?php
if($_SERVER["REQUEST_METHOD"]=="GET"){
    $numero=$_GET["tabares"];

    echo '<table>
    <tr>
        <th>multiplicando</th>
        <th>multiplicador</th>
        <th>producto</th>
    </tr>';
    for ($i=1; $i <= 10; $i++) { 
        # code...
        echo '    <tr>
        <td>' . $numero . '</td>
        <td>' . $i .'</td>
        <td>' . $numero*$i . '</td>
    </tr>';

    }
}

