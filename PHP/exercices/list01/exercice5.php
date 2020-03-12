<!DOCTYPE html>
<html>
<body>

<h1>Exercice 5</h1>

<p>5. Desenvolva uma função para calcular a exponenciação x elevado a y. <br>A função deve recevber os dois parâmetros e retornar o resultado. Caso segundo parâmetro
não seja enviado, deve calcular a potência de 2</p>

 <?php
$expo = 3;
$number = 3;

function exponential($number, $expo=2) {
    $calcu = pow($number, $expo);
    echo "Value: $number * $expo = $calcu";
}

exponential($number);
?>

</body>
</html>