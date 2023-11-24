<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de Clientes | 4 Patas shop</title>
    <link rel="stylesheet" href="loginFun.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <form action="Testandologinfunc.php" method = "POST">
            <h1>Login Funcionarios</h1>
            <div class="input-box">
                <input type="text" name="email" placeholder="Email" required>
                <i class='bx bxs-user' ></i>
            </div>
            <div class="input-box">
                <input type="password" name= "senha"placeholder="Senha" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>
            <div class="lembrar-senha">
                <label ><input type="checkbox">Lembrar-me</label>
                <br>
                <a href="/">Esqueci minha senha</a>
            </div>
            <input class="btn" type="submit" name= "submit_func" value= "Entrar">
            <div class="sem-login">
            </div>
            <div class="voltar">
            <a href="entrar.php" id ="voltar" class="voltar">Voltar</a>
            </div>
        </form>
    </div>
</body>
</html>