<?php

    require_once 'conexao.php';

    if(isset($_POST['id'])){
        $id = (int) $_POST['id'];
        $nome = mysqli_real_escape_string($_POST['nome']);
        $email = mysqli_real_escape_string($_POST['email']);

        // montar a Query
        $sql_update = "UPDATE usuarios SET nome = '$nome', email = '$email' WHERE id=$id";

        // executar a Query
        $resultado = mysqli_query($conexao, $sql_update);

        header("Location: listar.php?msg=editado");
        exit;

    }

?>