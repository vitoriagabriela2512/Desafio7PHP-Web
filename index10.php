<?php require_once(__DIR__ . "/Hotel.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Reserva de Hotel</title>
    <link rel="stylesheet" href="style10.css">
</head>
<body>

<div class="container">
    <h2>Reserva de Hotel</h2>

    <form method="post">

        <input type="text" name="nome" placeholder="Nome do hóspede" required>

        <input type="number" name="noites" placeholder="Número de noites" required>

        <select name="quarto">
            <option value="simples">Quarto Simples (R$120)</option>
            <option value="luxo">Quarto Luxo (R$200)</option>
            <option value="suite">Suíte (R$350)</option>
        </select>

        <button type="submit">Reservar</button>

    </form>
</div>

<div class="resultado">
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $reserva = new Hotel(
        $_POST['nome'],
        (int)$_POST['noites'],
        $_POST['quarto']
    );

    echo "<h3>Resumo da Reserva:</h3>";
    echo $reserva->exibir();
}
?>
</div>

</body>
</html>