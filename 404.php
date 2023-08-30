<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylelogin.css">
    <title>Login</title>
</head>
<body>
    <div class="loginPage">
        <div class="left-login">
        <form method="POST" action="testLogin.php">
            <h1>Faça seu pedido <br> e seja feliz!</h1>
            <img src="fried-chicken-animate.svg" class="image" alt="chicken">
        </div>
        <div class="righ-login">
            <div class="card-login">
                <h1>LOGIN</h1>
                <div class="textfield">
                    <label for="user">Usuário:</label>
                    <input type="text" name="Usuário" placeholder="Usuário">
                </div>
                <div class="textfield">
                    <label for="senha">Senha:</label>
                    <input type="password" name="Senha" placeholder="Senha">
                </div>
                <button type="submit" class="buttonE">ENTRAR</button>
                <p>Não tem conta?
                <a href="Register.php" class="reg">Registre-se aqui</a>
                </p>
                
            </div>
        </div>
        </form>
    </div>
    
</body>
</html>
