<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Nome: <input type="text" name="fnome">
        <input type="submit">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $nome = $_REQUEST['fnome'];
            if (empty($nome)){
                echo "Nome não prenchido";
            }else{
                echo "<p>Bom dia". $nome ."</p>";
            }
        }
    ?>
</body>
</html>
