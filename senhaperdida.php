<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="senhaperdida.css">
    <title>Recuperando Senha</title>
</head>
<body>
<div class="wrapper">
        <form action="Testandologin.php" method = "POST">
            <h1>Recuperar Senha</h1>
            <div class="input-box">
                <input type="text" name="email" placeholder="Digite seu Email para recuperar" required>
                <i class='bx bxs-user' ></i>
            </div>
            <input class="btn_recuperar" type="submit" name= "SendRecupSenha" value= "Recuperar">
            <br>
            <br>
            <div class="voltar">
            <a href="login.php" id ="voltar" class="voltar">Voltar</a>
            </div>
        </form>
    </div>
</body>
</html>