<?php require_once(__DIR__ . "/IMC.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cálculo de IMC</title>
    <link rel="stylesheet" href="style09.css">
</head>
<body>

<div class="container">
    <h2>Cálculo de IMC</h2>

    <form method="post">

        <input type="text" name="nome" placeholder="Seu nome" required>

        <input type="number" step="0.1" name="peso" placeholder="Peso (kg)" required>

        <input type="number" step="0.01" name="altura" placeholder="Altura (ex: 1.70)" required>

        <button type="submit">Calcular</button>

    </form>
</div>

<div class="resultado">
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $pessoa = new IMC(
        $_POST['nome'],
        (float)$_POST['peso'],
        (float)$_POST['altura']
    );

    echo "<h3>Resultado:</h3>";
    echo $pessoa->exibir();
}
?>
</div>

</body>
</html>