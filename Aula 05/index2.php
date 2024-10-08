<?php
$peso = 55;
$altura = 1.75; 

$imc = $peso / ($altura * $altura);

switch ($imc) {
    case $imc < 18.5:
       echo "Você possui magreza.";
    break;
 case $imc >= 18.5 && $imc < 25 :
     echo "Você está no peso ideal.";
    break;
 case ($imc >= 25 && $imc < 30) :
     echo "Você possui obesidade de primeiro grau.";
    break;
 case ($imc >= 30 && $imc < 40) :
    echo "Você possui obesidade de segundo grau.";
     break;
 case ($imc >= 40) :
    echo "Você possui obesidade grave de terceiro grau.";
    break;

default :
echo "IMC invalido";
}
?>