<?php

$salario = 800; // Variable que tendrá el salario

echo "<h1>Ejercicio 1</h1>";

if ($salario >= 1 && $salario <= 450) {
    $descuento = $salario * 0.08;
    $total = $salario - $descuento;
    echo "Su salario es: $$salario. <br>" .
         "El descuento a realizar es: $$descuento <br>" .
         "Total a pagar: $$total";
} else if ($salario <= 600) {
    $descuento = $salario * 0.15;
    $total = $salario - $descuento;
    echo "Su salario es: $$salario. <br>" .
         "El descuento a realizar es: $$descuento <br>" .
         "Total a pagar: $$total";
} else if ($salario <= 800) {
    $descuento = $salario * 0.18;
    $total = $salario - $descuento;
    echo "Su salario es: $$salario. <br>" .
         "El descuento a realizar es: $$descuento <br>" .
         "Total a pagar: $$total";
} else if ($salario > 800) {
    $descuento = $salario * 0.20;
    $total = $salario - $descuento;
    echo "Su salario es: $$salario. <br>" .
         "El descuento a realizar es: $$descuento <br>" .
         "Total a pagar: $$total";
}

?>
