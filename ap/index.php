<!DOCTYPE html>
<?php
    $cadeia = isset($_GET["cadeia"]) ? $_GET["cadeia"] : "";
    $valida = isset($_GET["valida"]) ? $_GET["valida"] : false;
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autômato de Pilha</title>
</head>
<body>
    <p>Insira uma cadeia para verificar se ela pertence à linguagem de ab's balanceados, como, por exemplo, ab, abbbaa, etc.: </p>
    <form action="verificacao.php" method="post">
        <p>Cadeia: <input type="text" name="cadeia" required></p>
        <button type="submit" name="acao" value="verificar">Verificar</button>
    </form>
    <?php
        if($cadeia != ""){
            if($valida)
                echo "<p>A cadeia $cadeia é válida.</p>";
            else
                echo "<p>A cadeia $cadeia é inválida.</p>";
        }
    ?>
</body>
</html>