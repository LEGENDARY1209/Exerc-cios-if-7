<?php
// Array com números de 1 a 20
$numeros = range(1, 20);

// loop for para o array
for ($i = 0; $i < count($numeros); $i++) {

// Verificar se o número é par
    if ($numeros[$i] % 2 === 0) {
        
// Imprimir apenas os números pares
        echo $numeros[$i] . "\n";
    }
}
?>
