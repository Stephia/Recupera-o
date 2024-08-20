<?php

    $raio = $_GET['raio'];
    $pi = 3.14;

    $result = $pi * ($raio * $raio);

    echo "Seu resultado para a busca da área é de $pi x $raio ² que resulta em: $result";

?>