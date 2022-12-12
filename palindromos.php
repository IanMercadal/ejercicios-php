<?php
// Se trara de retornar true o false en el caso de que una palabra se escribe igual si está al revés.

function palindromos($palabra) {
    $palabra_inversa = strrev($palabra);
    if($palabra === $palabra_inversa) {
        echo $palabra . " es igual a " . $palabra_inversa . "\n";
        return true;
    } else {
        echo $palabra . " no es igual a " . $palabra_inversa . "\n";
        return false;
    }
}
echo palindromos("ian"); // ian = false
echo palindromos("otto"); // otto = true
?>