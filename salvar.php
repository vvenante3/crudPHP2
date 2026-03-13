<?php

    require_once 'conexao.php';

    if(isset($_POST['nome']) && isset($_POST['email'])) {
        
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        // 2 etapas do CREATE
        // 1ª etapa: Montar a Query
        $sql_insert = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";

        // 2º etapa: Executar a Query (conexao + query)
        // validacao da query ( true ou false )
        $resultadoQuery = mysqli_query($conexao, $sql_insert);

        if($resultadoQuery){
            echo "Usuário cadastrado com sucesso!";
        } else 
        {
            echo "Erro: " . mysqli_error($conexao);
        }
    }

?>