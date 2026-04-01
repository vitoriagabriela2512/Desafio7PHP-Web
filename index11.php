<?php require_once(__DIR__ . "/Geo.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora Geométrica</title>
    <link rel="stylesheet" href="style11.css">
</head>
<body>

<div class="container">
    <h2>Calculadora Geométrica</h2>

    <form method="post">

        <select name="figura" id="figura" onchange="alterarCampos()">
            <option value="quadrado">Quadrado</option>
            <option value="retangulo">Retângulo</option>
            <option value="circulo">Círculo</option>
        </select>

        <input type="number" step="0.1" name="valor1" id="valor1" placeholder="Lado" required>

        <input type="number" step="0.1" name="valor2" id="valor2" placeholder="Altura">

        <button type="submit">Calcular</button>

    </form>
</div>

<div class="resultado">
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $geo = new Geo(
        $_POST['figura'],
        (float)$_POST['valor1'],
        isset($_POST['valor2']) ? (float)$_POST['valor2'] : 0
    );

    echo "<h3>Resultado:</h3>";
    echo $geo->exibir();
}
?>
</div>

<script>
function alterarCampos() {
    const figura = document.getElementById("figura").value;
    const v1 = document.getElementById("valor1");
    const v2 = document.getElementById("valor2");

    if (figura === "quadrado") {
        v1.placeholder = "Lado";
        v2.style.display = "none";
    } 
    else if (figura === "retangulo") {
        v1.placeholder = "Base";
        v2.placeholder = "Altura";
        v2.style.display = "block";
    } 
    else if (figura === "circulo") {
        v1.placeholder = "Raio";
        v2.style.display = "none";
    }
}

alterarCampos();
</script>

</body>
</html>