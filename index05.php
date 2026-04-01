<?php require_once(__DIR__ . "/Produto.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Controle de Estoque</title>
    <link rel="stylesheet" href="style05.css">
</head>
<body>

<div class="container">
    <h2>Controle de Produto</h2>

    <form method="post">
        <label>Nome:</label>
        <input type="text" name="nome" required>

       
        <input type="number" name="estoque" required placeholder = "estoque">

        <input type="number" step="0.01" name="valor" required placeholder = "valor">

        <input type="number" name="quantidade" required placeholder = "quantidade">

        <label>Tipo de operação:</label>
        <select name="operacao">
            <option value="entrada">Entrada</option>
            <option value="saida">Saída</option>
        </select>

        <button type="submit">Executar</button>
    </form>
</div>

<div class="resultado">
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $produto = new Produto(
        $_POST['nome'],
        (int)$_POST['estoque'],
        (float)$_POST['valor']
    );

    if ($_POST['operacao'] === "entrada") {
        $produto->entrada((int)$_POST['quantidade']);
        echo "<p>Entrada realizada!</p>";
    } else {
        echo "<p>" . $produto->saida((int)$_POST['quantidade']) . "</p>";
    }

    echo "<h3>Status do Estoque:</h3>";
    echo $produto->exibir();
}
?>
</div>

</body>
</html>