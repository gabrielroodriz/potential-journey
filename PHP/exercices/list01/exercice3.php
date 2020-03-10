<!DOCTYPE html>
<html>
<body>

<h1>Exercice 3</h1>

<p>3.	Crie um algoritmo que faça o cálculo fatorial de um número, exiba o resultado na tela. Ex: Entrada = 3 Processamento: (3 * 2) * 1 Saída: 6</p>

<?php
$value = 5;
$i = 1;

function calculatedFactorial ($value) {
  $factorial = 1;
  for ($i = 1; $i <= $value; $i++) {
    $factorial = $factorial * $i;
    echo "Input = $value  Process: ($factorial * $i) Output: $factorial \n";
  }
}
calculatedFactorial($value);
?>

</body>
</html>