<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="ASSETS/IMG/favLogo.png">
    <link rel="stylesheet" href="ASSETS/BOOTSTRAP/bootstrap.min.css">
    <link rel="stylesheet" href="ASSETS/CSS/sessão.css">
    <link rel="stylesheet" href="ASSETS/CSS/all.min.css">
    <link rel="stylesheet" href="ASSETS/CSS/fontawesome.min.css">
    <title>Community | Log in</title>
</head>
<body>
    <section class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-4 bg-dark p-4 logDiv">
                <div class="logoArea offset-3">
                    <a href="#" class="logo">
                        <img src="ASSETS/IMG/logo.png" alt="" class="off">
                    </a>
                </div>
                <form action="LoginScrip.php" method="POST">
                    <div class="mb-2">
                        <label for="email">E-mail</label><br>
                        <input type="email" name="email" id="email">
                    </div>
                    <div class="divSenha">
                        <label for="senha">Senha</label><br>
                        <input type="password" name="senha" id="senha">
                        <a href="#" class="redefinirSenha">Esqueceu a senha? Alterar</a>
                    </div>
                    <div class="mt-4 mb3 offset-3">
                        <input type="submit" value="Iniciar sessão" name="Login"><br>
                        <a href="Registar.php" class="iniciarSessao offset-2">Registar-se</a>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="ASSETS/JS/bootstrap.bundle.min.js"></script>
</body>
</html>