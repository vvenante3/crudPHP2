<?php

    // variavel que ira representar a conexao com o Db
    $conexao = mysqli_connect('localhost', 'root', '' ,'crud_estudo'); // 'Onde está o banco?', 'Quem vai acessar?', 'Qual a senha?', 'Qual banco eu qeuro usar?'

    if(!$conexao){
        die ("#Erro de conexão" . mysqli_connect_error());
    }

?>