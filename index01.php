<?php require_once(__DIR__ . "/Funcionario.php");?>
<!DOCTYPE html>
<html lang="pt-br">
<link rel="stylesheet" href="style01.css">
    
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Funcionário</title>
</head>
<body>
    <div class = "container">
     <h2>Informações do Funcionário</h2>
    <form method="post">
        <label>Nome: <input type="text" name="nome" required></label><br><br>
        <label>Cargo: <input type="text" name="cargo" required></label><br><br>
        <label>Salário: <input type="number" step="0.01" name="salario" required></label><br><br>
        <label>Carga Horária Semanal: <input type="number" name="carga" required></label><br><br>
        <label>Bônus: <input type="number" step="0.01" name="bonus" required></label><br><br>
        <label>Horas Extras: <input type="number" name="extras" required></label><br><br>
        <button type="submit">Calcular</button>
    </form>
    </div>
   
    <div class ="resultado">
     <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $func = new Funcionario(
            $_POST['nome'],
            $_POST['cargo'],
            (float)$_POST['salario'],
            (int)$_POST['carga']
        );

        echo "<h3>Resultado:</h3>";
        echo $func->exibirDetalhes((float)$_POST['bonus'], (int)$_POST['extras']);
    }
    ?>
    </div>
   
</body>
</html>
