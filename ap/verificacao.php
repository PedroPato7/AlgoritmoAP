<?php

$cadeia = isset($_POST["cadeia"]) ? $_POST["cadeia"] : "";
$array = str_split($cadeia);

$pilha = ["Z0"];

for ($i = 0; $i < count($array); $i++) {
    $simbolo = $array[$i];
    $topo = $pilha[count($pilha) - 1]; // pegar o topo da pilha sem removê-lo
    if ($simbolo == "a" && $topo == "Z0") {
        array_pop($pilha); // remove Z0
        array_push($pilha, "Z0", "X"); // adiciona XZ0
    } else if ($simbolo == "b" && $topo == "Z0") {
        // Se 'b' e o topo é 'Z0', adiciona 'Y' e 'Z0'
        array_pop($pilha); // remove Z0
        array_push($pilha, "Z0", "Y");
    } else if ($simbolo == "a" && $topo == "X") {
        // Se 'a' e o topo é 'X', adiciona 'XX'
        array_pop($pilha); // remove X
        array_push($pilha, "X", "X");
    } else if ($simbolo == "b" && $topo == "X") {
        // Se 'b' e o topo é 'X', adiciona 'YX'
        array_pop($pilha); // remove X
    } else if ($simbolo == "b" && $topo == "Y") {
        // Se 'b' e o topo é 'Y', adiciona 'YY'
        array_pop($pilha); // remove X
        array_push($pilha, "Y", "Y");
    } else if ($simbolo == "a" && $topo == "Y") {
        // Se 'a' e o topo é 'Y'
        array_pop($pilha); // remove Y
    } else {
        // caso contrário, quebra o laço
        break;
    }
}

$valida = ($pilha[count($pilha) - 1] == "Z0") && (count($pilha) == 1);

header("location: index.php?cadeia=$cadeia&valida=$valida");
?>