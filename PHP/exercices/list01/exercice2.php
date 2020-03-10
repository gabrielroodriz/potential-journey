<!DOCTYPE html>
<html>
<body>

<h1>Exercice 2</h1>

<p>2.	Crie um algoritmo exiba a tabuada de 0 a 10 de acordo com o número registrado, ex: 4 Saída = 4 X 0 = 0...4 X 10 = 40.</p>

 <?php
$value = 2;

function multiplication ($value) {
  for($i = 1; $i <= 10; $i++) {
    $calc = $value * $i;
    echo "$value * $i = $calc \n";
  }
}
multiplication($value)
?>

</body>
</html>