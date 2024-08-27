<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <?php
        $frase = $_GET['frase'];
        echo $frase . "<br>";

        echo "<h3>Transforme a frase em letras maiúsculas</h3>";
        $UP = Strtoupper($frase);
        echo $UP . "<br>";

        echo "<h3>Exiba qual é caractere que está na posição do meio da frase</h3>";
        $meio = $frase[intval(strlen($frase)/2)];
        echo $meio . "<br>";

        echo "<h3>Troque todas as vogais pela letra X</h3>";
        $vogais = array("a","e","i","o","E");
        print_r(str_replace($vogais,"x",$frase) . "<br>");

        echo "<h3>Exiba quantidade caracteres que não são vogais</h3>";
        $tamanho = str_replace($vogais,"",$frase);
        echo strlen($tamanho) . "<br>";

        echo "<h3>Crie uma nova frase a partir da letra 'd'</h3>";
        $nova = substr($frase, 10, 32);
        echo $nova . "<br>";

        echo "<h3>Exiba a frase de forma inversa</h3>";
        echo strrev($nova) . "<br>";

        $partes = explode(" ", $nova);
        $parte1 = $partes[4];
        $parte2 = $partes[3];
        $parte3 = $partes[2];
        $parte4 = $partes[1];
        $parte5 = $partes[0];
        $reverse = $parte1 . " " . $parte2 . " " . $parte3 . " " . $parte4 . " " . $parte5 . "<br>";
        echo $reverse;
    ?>
</body>
</html>