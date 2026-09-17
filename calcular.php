<?php
//Entrada
$n1 = (float) $_POST['n1'];
$n2 = (float) $_POST['n2'];

//Processamento
$adicao = $n1 + $n2;
$subtracao = $n1 - $n2;
$multiplicacao = $n1 * $n2;

$divisaoValida = $n2 != 0;
if ($divisaoValida == true) {
    $divisao = $n1 / $n2;
    $modulo= $n1 % $n2;
}

$potencia= $n1 ** $n2;
$concatenacao = $n1.$n2; //O ponto junta o texto e, não soma como número

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operações Aritiméticas</title>
</head>
<body>
    <div class="card">
        <h1 aling="center">Operações Aritiméticas</h1>
        <h2 aling="center">Resultados</h2>
        <hr>
        <h3>
            <?php echo "$n1 + $n2 = $adicao"; ?>
        </h3>
        <h3>
            <?php echo "$n1 - $n2 = $subtracao"; ?>
        </h3>
        <h3>
            <?php echo "$n1 * $n2 = $multiplicacao"; ?>
        </h3>
        <h3>
            <?php if ($divisaoValida == true) {
                echo "$n1 / $n2 = $divisao"; 
                echo "<br>";
                echo "$n1 % $n2 = $modulo";
            }
            else {
                echo"Não há divisão por zero.";
            }
            ?>
        </h3>
        <h3>
            <?php echo "$n1 ** $n2 = $potencia"; ?>
        </h3>
        <h3>
            <?php echo "$n1 . $n2 = $concatenacao"; ?>
        </h3>
        <h3>
            <?php echo "$n1 <sup> $n2 </sup> = $potencia"; ?>
        </h3>
    </div>
</body>
</html>