<?php

    require_once 'conexao.php';

    if(isset($_POST['nome']) && isset($_POST['email'])) {
        
        $nome = mysqli_real_escape_string($_POST['nome']);      // escapa de strings perigosos
        $email = mysqli_real_escape_string($_POST['email']);

        // 2 etapas do CREATE
        // 1ª etapa: Montar a Query
        $sql_insert = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";

        // 2º etapa: Executar a Query (conexao + query)
        // validacao da query ( true ou false )
        $resultadoQuery = mysqli_query($conexao, $sql_insert);

        if($resultadoQuery){
            header("Location: listar.php?msg=criado");
        } else 
        {
            echo "Erro: " . mysqli_error($conexao);
        }
    }

?>