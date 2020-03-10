<!DOCTYPE html>
<html>
<body>

<h1>Exercice 1</h1>

<p>1.	Crie um algoritmo que verifique se um número é positivo, negativo ou igual a zero.<br>
 A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero".</p>

<?php
$value = -2;

if ($value == 0) {
  echo "Equal zero";
}
elseif ($value < 0){
  echo "Negative value";
} else {
  echo "Positive value";
}
?>

</body>
</html>