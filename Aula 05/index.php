<?php
$peso = 55;
$altura = 1.75; 

$imc = $peso / ($altura * $altura);

if ($imc < 18.5) {
    echo "Você possui magreza.\n";
} elseif ($imc >= 18.5 && $imc < 25) {
    echo "Você está no peso ideal.\n";
} elseif ($imc >= 25 && $imc < 30) {
    echo "Você possui obesidade de primeiro grau.\n";
} elseif ($imc >= 30 && $imc < 40) {
    echo "Você possui obesidade de segundo grau.\n";
} elseif ($imc >= 40) {
    echo "Você possui obesidade grave de terceiro grau.\n";
}
?>