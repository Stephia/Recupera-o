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

        $UP = Strtoupper($frase);
        echo $UP . "<br>";

        
    ?>
</body>
</html>
Crie um script PHP que receba a seguinte frase: “Esta prova de PHP esta molezinha.”, ¬/
                                                 012345678910
transforme a frase em letras maiúsculas, ¬/
exiba qual é caractere que está na posição do meio da frase.  
Troque todas as vogais pela letra X e
exiba quantidade caracteres que não são vogais.
Crie uma nova frase a partir da letra ”d” e
exiba a frase de forma inversa.