<?php require_once(__DIR__ . "/FInanceira.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora Financeira</title>
    <link rel="stylesheet" href="style08.css">
</head>
<body>

<div class="container">
    <h2>Calculadora Financeira</h2>

    <form method="post">

        <input type="number" step="0.01" name="valor" placeholder="Valor da compra (R$)" required>

        <input type="number" name="parcelas" placeholder="Número de parcelas" required>

        <input type="number" step="0.01" name="juros" placeholder="Taxa de juros (ex: 0.05 = 5%)" required>

        <button type="submit">Calcular</button>
    </form>
</div>

<div class="resultado">
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $calc = new FInanceira(
        (float)$_POST['valor'],
        (int)$_POST['parcelas'],
        (float)$_POST['juros']
    );

    echo "<h3>Resultado:</h3>";
    echo $calc->exibir();
}
?>
</div>

</body>
</html>