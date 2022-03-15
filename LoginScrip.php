<?php

    SESSION_START();

    //CONECTANDO COM A BD
    $host= "localhost";
    $user= "root";
    $pass= "";
    $dbname= "community";
    $port= 3306;

    $conn= mysqli_connect($host, $user, $pass, $dbname);
    if(mysqli_connect_error()){
        echo "Falha na conexão".mysqli_connect_error();
    }

    //INICIANDO VALIDAÇÃO
    $erros= array();
    $email= mysqli_escape_string($conn, $_POST['email']);
    $senha= mysqli_escape_string($conn, $_POST['senha']);

    if(empty($email) or empty($senha)):
        header("Location: Sessao.php");
    else:
        $sql= "SELECT email_usuario.email FROM email_usuario WHERE email_usuario.email= '$email'";
        $resultado= mysqli_query($conn, $sql);

        if(mysqli_num_rows($resultado) > 0):
            $senha= md5($senha);
           $sql= "SELECT email_usuario.email, usuario.senha, usuario.id FROM email_usuario INNER JOIN usuario WHERE email_usuario.email= '$email' AND usuario.senha= '$senha'";
            $resultado= mysqli_query($conn, $sql);
            if(mysqli_num_rows($resultado) == 1):
                echo "Conferem";
            else:
                echo "Não conferem";
            endif;
        else:
            echo "Não existe";
        endif;
    endif;


?>