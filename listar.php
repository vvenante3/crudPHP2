<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Usuários</title>
</head>

    <?php

    require_once 'conexao.php';

    // Fazer a Query -> SELECT
    $sql_read = "SELECT * FROM usuarios";

    // Executar a Query
    $resultado = mysqli_query($conexao, $sql_read);

    ?>

<body>
    
    <h2>Usuários Cadastrados</h2>

    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>

        <tr>
        <?php while($usuario = mysqli_fetch_assoc($resultado)){ ?>
                <tr>
                    <td> <?= $usuario['nome']?> </td>
                    <td> <?= $usuario['email']?> </td>

                    <td><a href="editar.php?id=<?=$usuario['id']?>">Editar</a></td>
                    <td><a href="delete.php?id=<?=$usuario['id']?>">Excluir</a></td>
                </tr>
        <?php } ?>
        </tr>

    </table>

</body>
</html>