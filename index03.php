<?php require_once(__DIR__ . "/Pedido.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pedido</title>
    <link rel="stylesheet" href="style03.css">
</head>
<body>

<div class="container">
    <h2>Cadastro de Pedido</h2>

    <form method="post">
        <input type="text" name="produto" required placeholder = "produto">

        <input type="number" name="quantidade" required placeholder = "quantidade">

        <input type="number" step="0.01" name="preco" required placeholder = "preço">

        <label>Tipo de Cliente:</label>
        <select name="tipo">
            <option value="normal">Normal</option>
            <option value="premium">Premium</option>
        </select>

        <button type="submit">Calcular</button>
    </form>
</div>

<div class="resultado">
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $pedido = new Pedido(
        $_POST['produto'],
        (int)$_POST['quantidade'],
        (float)$_POST['preco'],
        $_POST['tipo']
    );

    echo "<h3>Resumo do Pedido:</h3>";
    echo $pedido->exibirResumo();
}
?>
</div>

</body>
</html>