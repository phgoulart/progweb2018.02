<?php
    // Detalhando Super global
    var_dump($_GET);

    echo "<br>";

    // efetuando o casting em tempo de execução
    var_dump((int)$_GET["a"]);

    echo "<br>";

    // imprimindo o valor pela chave
    echo($_GET["a"]);
?>