<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>método Post</p>
    <form action="cliente.php" method="post">
        Nome: <input type="text" name="nome"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>
    <p>Método GET</p>
    <form action="cliente_get.php" method="get">
        Nome: <input type="text" name="nome"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>
</body>
</html>