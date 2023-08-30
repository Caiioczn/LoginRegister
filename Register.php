<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleregister.css">
    <title>Registre-se</title>
</head>
<body>
    <div class="container">
        <div class="card">
        <form method="POST" action="config.php">
            <a href="404.php" class="back">←</a>
            <h1>REGISTRE-SE</h1>
            <div class="textfield">
                <label for="nome">Nome:</label>
                <input type="text" placeholder="Nome" name="Nome">
            </div>
            <div class="textfield">
                <label for="senha">Senha:</label>
                <input type="password" placeholder="Senha" name="senha">
            </div>
            <div class="textfield">
                <label for="senha2">Confirme a senha:</label>
                <input type="password" placeholder="Senha" name="senha2">
            </div>
            <div>
                <button type="submit" class="buttonR">ENTRAR</button>
            </div>
        </form>
        </div>
    </div>
</body>
</html>