<?php

    require_once 'conexao.php';

    if(isset($_GET['id'])){
        $id = (int) $_GET['id'];

        // elabora query SELECT
        $sql_update = "SELECT * FROM usuarios WHERE id=$id";

        // executar Query
        $resultado = mysqli_query($conexao, $sql_update);

        // 
        $usuario = mysqli_fetch_assoc($resultado);
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar</title>
</head>
<body>
    <form action="atualizar.php" method="POST">
        <input type="hidden" name="id" value="<?=$usuario['id']?>">     <!-- Este puxa o id "escondido" -->
        <input type="text" name="nome" value="<?=$usuario['nome']?>">
        <input type="email" name="email" value="<?=$usuario['email']?>"> 
        <button type="submit">salvar</button>
        <br><br>
        
    <a href="listar.php">Voltar</a>
    </form>
</body>
</html>