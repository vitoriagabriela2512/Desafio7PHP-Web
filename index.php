<?php require_once(__DIR__ . "/Conversor.php"); ?>
<link rel="stylesheet" href="style.css">

<div class="container">
<h2>Conversor</h2>
<form method="post">
<input name="valor" type="number" placeholder="Reais">
<input name="cotacao" type="number" placeholder="Cotação">
<button>Converter</button>
</form>
</div>

<div class="resultado">
<?php
if($_POST){
    $c = new Conversor();
    echo "Convertido: ".$c->converter($_POST['valor'],$_POST['cotacao']);
}
?>
</div>