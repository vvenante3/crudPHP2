<?php

    require_once 'conexao.php';

    // Fazer a Query -> SELECT
    $sql_read = "SELECT * FROM usuarios";

    // Executar a Query
    $resultado = mysqli_query($conexao, $sql_read);

    // Percorrer os resultados
    while($usuario = mysqli_fetch_assoc($resultado)){
        echo "Nome: " . $usuario['nome'] . "<br>";          // somente para visualização teste
        echo "Email: " . $usuario['email'] . "<br>";
        echo "----------------------<br>";
    }

    echo $usuario;
        
?>