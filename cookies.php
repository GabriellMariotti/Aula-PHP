<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $cookie_nome = "user";
        $cookie_valor = "José Souza";

        setcookie($cookie_nome, $cookie_valor, time() + (86400 * 30), "/");
    ?>
    <?php
        if(!isset($_COOKIE[$cookie_nome])){
            echo "Cookie". $cookie_nome. " não atribuido!";
        }else{
            echo "Cookie ". $cookie_nome ." está atribuido!<br>";
            echo "O valor é: ". $_COOKIE[$cookie_nome];
        }

    ?>
</body>
</html>