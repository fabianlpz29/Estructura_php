<?php
$puntos = 500; //cantidad de puntos ganados
$premio = null; // Premio ganado

echo "<h1>Ejercicio 4</h1>";
if ($puntos <= 500) { //si la cantidad del puntaje es valido evaulua los premios
    if ($puntos == 100){
        $premio = 40;
        echo"Su puntaje es de $puntos y su premio es de: $$premio";
    }else if ($puntos == 200){
        $premio = 60;
        echo"Su puntaje es de $puntos y su premio es de: $$premio";
    }else if ($puntos == 400){
        $premio = 80;
        echo"Su puntaje es de $puntos y su premio es de: $$premio";
    }else if ($puntos == 500){
        $premio = 100;
        echo"Su puntaje es de $puntos y su premio es de: $$premio";
    }else{ //Cuando tenga un puntaje que no sea exacto
        echo"No gano nigun premio";
    }
}else{ //si el puntaje no es valido
    echo "Puntaje no valido";
}
?>