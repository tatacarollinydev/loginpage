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
    <div class="container criarconta">
        <div class="esquerdo">
            <h1>BEM VINDO</h1>
            <div>
                <button style="margin-bottom: 20px; margin-left: 5px" type="button" class="botao">
                    <a href="./entrarconta.php">Entrar conta</a>
                </button>
                <button type="button" class="botao">
                    <a href="./index.php">Página Inicial</a>
                </button>
            </div>
        </div>
        <div class="direito">
            <h1>CRIE SUA CONTA</h1>

            <div class="grid">
                <input type="text" placeholder="Primeiro nome" class="inputCriar">
                <input type="text" placeholder="Último nome" class="inputCriar">
                <input type="email" placeholder="E-mail" class="inputCriar">
                <input type="tel" placeholder="Telefone" class="inputCriar">
            </div>

            <input type="password" placeholder="Senha" class="campoLargo">
            <input type="password" placeholder="Confirmar senha" class="campoLargo">

            <div class="termos">
                <label class="cl-checkbox">
                    <input type="checkbox">
                    <span></span>
                </label>
                <h2>
                    Eu aceito os <span>Termos</span> e <span>Política de Privacidade</span>
                </h2>
            </div>

            <button class="botao-entrar" type="button">ENTRAR</button>
            <div class="social">
                <img src="facebook.png">
                <img src="instagram.png">
            </div>
        </div>
    </div>
</body>
</html>