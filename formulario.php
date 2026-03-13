<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <main>
        <section>
            <h3>
                <!-- cabeçalho -->
            </h3> 
        </section>
        <section>
            <form action="salvar.php" method="POST">
                <label>Nome</label>
                <input type="text" name="nome" id="nome" placeholder="Digite seu nome..">

                <label>Email</label>
                <input type="email" name="email" id="email" placeholder="Digite seu email..">

                <button type="submit">Enviar</button>
            </form>
        </section>
    </main>
    
</body>
</html>