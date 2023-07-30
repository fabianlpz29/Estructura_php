<?php
echo "<h1>Ejercicio 4</h1>";
$credito = 5; //credito disponible para jugar
$precio = 1.50; //Precio que cuesta cada jugada

while ($credito >= 1) {
    echo "<p>Seguir Jugando</p>";
    $credito = $credito - $precio; //cada que se juegue se le resta al credito al precio
}
?>