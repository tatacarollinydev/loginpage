<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Página inicial</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
</head>
<body>
    <div class="container">
        <div class="esquerdo">
            <h1>BEM VINDO</h1>
            <div>
                <button style="margin-bottom: 20px; margin-left: 15px" type="button" class="botao">
                    <a href="./criarconta.php">Criar conta</a>
                </button>
                <button type="button" class="botao">
                    <a href="./index.php">Página Inicial</a>
                </button>
            </div>
        </div>
        <div class="direito">
            <h1>FAÇA LOGIN</h1>
            <div class="input">
                <img src="usuario.png">
                <input type="text" placeholder="USUÁRIO" class="input-item">
            </div>
            <div class="input">
                <img src="senha.png">
                <input type="password" placeholder="●●●●●●●●●●●●" class="input-item">
            </div>
            <a href="">Esqueceu a senha?</a>
            <button class="botao-entrar" type="button">ENTRAR</button>
            <div class="social">
                <img src="facebook.png">
                <img src="instagram.png">
            </div>
        </div>
    </div>
</body>
</html>