<?php require_once(__DIR__ . "/Aluno.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style02.css">
    <title>Aluno</title>
</head>
<body>

<div class="container">
<h2>Cadastro de Aluno</h2>

<form method="post">
<input type="text" name="nome" placeholder="Nome" required>
<input type="text" name="disciplina" placeholder="Disciplina" required>
<input type="number" step="0.1" name="n1" placeholder="Nota 1" required>
<input type="number" step="0.1" name="n2" placeholder="Nota 2" required>
<input type="number" step="0.1" name="n3" placeholder="Nota 3" required>
<button type="submit">Calcular</button>
</form>

</div>

<div class="resultado">
<?php
if ($_POST) {
    $aluno = new Aluno(
        $_POST['nome'],
        $_POST['disciplina'],
        $_POST['n1'],
        $_POST['n2'],
        $_POST['n3']
    );

    echo $aluno->exibir();
}
?>
</div>

</body>
</html>