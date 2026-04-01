<?php require_once(__DIR__ . "/Viagem.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Planejamento de Viagem</title>
    <link rel="stylesheet" href="style07.css">
</head>
<body>

<div class="container">
    <h2>Planejamento de Viagem</h2>

    <form method="post">
        <input type="text" name="origem" required placeholder = "Origem">

        <input type="text" name="destino" required placeholder = "Destino">

        <input type="number" step="0.1" name="distancia" required placeholder = "Distancia">
  
        <input type="number" step="0.1" name="tempo" required placeholder = "Horas estimada">

        <label>Tipo de veículo:</label>
        <select name="veiculo">
            <option value="carro">Carro</option>
            <option value="moto">Moto</option>
            <option value="caminhao">Caminhão</option>
        </select>

        <button type="submit">Calcular</button>
    </form>
</div>

<div class="resultado">
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $viagem = new Viagem(
        $_POST['origem'],
        $_POST['destino'],
        (float)$_POST['distancia'],
        (float)$_POST['tempo'],
        $_POST['veiculo']
    );

    echo "<h3>Resumo da Viagem:</h3>";
    echo $viagem->exibir();
}
?>
</div>

</body>
</html>