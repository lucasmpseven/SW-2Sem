<?php
    $nome = $_REQUEST['nome'];
    $email = $_REQUEST['email'];
    $idade = $_REQUEST['idade'];

    echo "Bom dia <span style='color:red;'>" . $nome . "</span>";
    echo "<br>";
    echo "Seu email é " . $email;
    echo "<br>";
    echo "Sua idade é $idade anos";
    echo "<br>";


?>