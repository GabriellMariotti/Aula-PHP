<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    echo "<strong>Ola mundo!</strong>";
    $color = "vermelho";
     
    echo "A minha casa é" . $color ."<br>"; 
    echo "O meu barco é" . $color . "<br>";
	echo "O meu carro é" . $color ."<br>";

	$x = 5;
	$y = 4;
	
	echo $x + $y . "<br>";
	echo $x - $y . "<br>";
	echo $x * $y . "<br>";
	echo $x / $y . "<br>";
	echo $x % $y . "<br>";
	
	echo strlen("Conta o numero de caracters"). "<br>";
	echo str_word_count("Conta o numero de palavras") . "<br>";
	echo strrev("Inverte a string") . "<br>";
	echo strpos("Procura o texto", "texto") . "<br>";
	echo str_replace("nada", "texto", "substitui  nada") . "<br>";
	
	echo ucfirst("Converte o primeiro caracter de uma string para maiuscula <br>");
	echo ucwords("Converte o primeiro caracter de cada palavra de uma letra maiusculas <br>");
	echo strtoupper("Converte uma string para maiuscula <br>");
	echo strtolower("Converte uma string para minuscula <br>");	
	
	$t = date("H");
	if($t < "20"){
		echo "Boa pra nois";
	}else{
		echo "Boa noite";
	}
	echo "<br>";
	$favcolor = "red";

	switch ($favcolor){
		case "vermelho":
			echo "vermelho";
			break;
		case "azul":
			echo "azul";
			break;
		case "verde":
			echo "verde";
			break;
		default:
			echo "Sua cor favorita não é vermelho, verde, nem azul";
	}
	echo "<br>";
	$a = 1;

	while($a <= 5){
		echo "O numero  é $a <br>";
		$a++;
	}
	
	echo "<br>";
	$b = 1;
    do{
		echo "O numero  é $b <br>";
		$b++;
	}while($b <= 5);

	echo "<br>";
	$b = 6;
    do{
		echo "O numero  é $b <br>";
		$b++;
	}while($b <= 5);

	echo "<br>";

	for($x = 0; $x <= 10; $x++){
		echo "O numero é $x <br>";
	}

	echo "<br>";

	$cores = array("vermelho", "azul", "amarelo");
	foreach($cores as $valor){
		echo"$valor <br>";
	}

	echo "<br>";

	function escreverMsg(){
		echo "Olá mundo!";
	}
	escreverMsg();
	
	echo "<br>";

	function familiaNome($nome){
		echo "$nome Silva <br>";
	}

	familiaNome("Joana");
	familiaNome("Gonçalo");

	echo "<br>";

	function familiaAno($nome, $ano){
		echo "$nome Silva, nasceu em $ano <br>";
	}

	familiaAno("Gonçalo", "2006");

	function altura($altura = 170){
		echo "A altura é: $altura";
	}

	echo "<br>";

	altura(180);
	
	echo "<br>";

	altura();
?>
</body>
</html>
