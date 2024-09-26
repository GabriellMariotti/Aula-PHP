<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Nome: <input type="text" name="nome"><br>
        E-mail: <input type="text" name="email"><br>
        Website: <input type="text" name="website"><br>
        Comentario: <br>
        <textarea name="coment" rows="5" cols="40"></textarea><br>
        Género: <br>
        <input type="radio" name="genero" value="feminino">feminino
        <input type="radio" name="genero" value="Masculino">Masculino
        <input type="radio" name="genero" value="Outro">Outro
    </form>
</body>
</html>