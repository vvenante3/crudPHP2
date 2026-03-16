<?php

    require_once 'conexao.php';

    // verificar se id existe na URL
    if(isset($_GET['id'])){
        $id = (int) $_GET['id'];

        // montar query DELETE    
        $sql_delete = "DELETE FROM usuarios WHERE id=$id";

        // executar Query
        $resultado = mysqli_query($conexao, $sql_delete);
        
        // voltar pra listar.php
        header("Location: listar.php");
        exit;
    }

?>