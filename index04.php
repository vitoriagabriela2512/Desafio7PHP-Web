<?php require_once(__DIR__ . "/Carro.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Carro</title>
    <link rel="stylesheet" href="style04.css">
</head>
<body>

<div class="container">
    <h2>Dados do Carro</h2>

    <form method="post">
        <label>Modelo:</label>
        <input type="text" name="modelo" required>

        <select name="combustivel">
            <option value="gasolina">Gasolina</option>
            <option value="etanol">Etanol</option>
        </select>
        <input type="number" step="0.1" name="Litros" required placeholder = "Litros">

        <input type="number" name="km" required placeholder = "km rodados">

        <button type="submit">Calcular</button>
    </form>
</div>

<div class="resultado">
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $carro = new Carro(
        $_POST['modelo'],
        $_POST['combustivel'],
        (float)$_POST['Litros'],
        (float)$_POST['km']
    );

    echo "<h3>Resultado:</h3>";
    echo $carro->exibir();
}
?>
</div>

</body>
</html>