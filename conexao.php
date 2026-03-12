<?php

    // variavel que ira representar a conexao com o Db
    $conexao = mysqli_connect('localhost', 'root', '' ,'crud_estudo');

    if(!$conexao){
        die ("#Erro de conexão" . mysqli_connect_error());
    }

?>