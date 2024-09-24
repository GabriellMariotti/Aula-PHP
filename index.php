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
	
	echo "Está", "string", "foi", "feita", "com", "multiplos", "parametros<br>";
	echo "<br>";
	$txt1 = "Estudo PHP";
	$txt2 = "EPB";
	$x = 5;
	$y = 4;
	echo "<h2>". $txt1."</h2>";
	echo "Estudo PHP na". $txt2 ."<br>";
	echo $x + $y . "<br>";

	$frutinhas = array("Maçã", "Manga", "Açai");

	$lenghFrutinhas = count($frutinhas);
	for($x = 0; $x < $lenghFrutinhas; $x++){
		echo $frutinhas[$x];
		echo "<br>";
	}
	
	$idades =  array("Pedro"=>"19","Gabriel"=>"18", "Paulo"=>"24");
	echo "O Gabriel do desce e quebra tem ". $idades["Gabriel"] ."anos de idade";
	echo "<br>";

	foreach($idades as $x => $x_value){
		echo "Chave= ". $x ." Valor= ". $x_value;
		echo "<br>";
	}

	$numeros = array(1, 6, 3);
	sort($numeros);
	$lenghNumeros = count($numeros);

	for($x = 0; $x < $lenghNumeros; $x++){
		echo $numeros[$x]. ",";
		echo "<br>";
	}

	rsort($numeros);
	for($x = 0; $x < $lenghNumeros; $x++){
		echo $numeros[$x]. ",";
		echo "<br>";
	}

	$nome = array("Gabriel", "Maria", "Sofia");
	sort($nome);
	$lenghNumeros = count($nome);

	for($x = 0; $x < $lenghNumeros; $x++){
		echo $nome[$x]. ",";
		echo "<br>";
	}
	
	echo "<br>";

	$nome = array("Gabriel", "Maria", "Sofia");
	rsort($nome);
	$lenghNumeros = count($nome);

	for($x = 0; $x < $lenghNumeros; $x++){
		echo $nome[$x]. ",";
		echo "<br>";
	}

	echo "<br>";
	
	$idades =  array("Pedro"=>"19","Gabriel"=>"18", "Paulo"=>"24");
	asort($idades);
	foreach($idades as $x => $x_value){
		echo "Chave= ". $x ." Valor= ". $x_value;
		echo "<br>";
	}

	echo "<br>";
	$idades =  array("Pedro"=>"19","Gabriel"=>"18", "Paulo"=>"24");
	ksort($idades);
	foreach($idades as $x => $x_value){
		echo "Chave= ". $x ." Valor= ". $x_value;
		echo "<br>";
	}

	echo "<br>";
	$idades =  array("Pedro"=>"19","Gabriel"=>"18", "Paulo"=>"24");
	arsort($idades);
	foreach($idades as $x => $x_value){
		echo "Chave= ". $x ." Valor= ". $x_value;
		echo "<br>";
	}

	echo "<br>";
	$idades =  array("Pedro"=>"19","Gabriel"=>"18", "Paulo"=>"24");
	krsort($idades);
	foreach($idades as $x => $x_value){
		echo "Chave= ". $x ." Valor= ". $x_value;
		echo "<br>";
	}

	$x = 7;
	$y = 3;

	function adicao(){
		$GLOBALS["z"] = $GLOBALS["x"] + $GLOBALS["y"];
	}
	adicao();
	echo $z;
	echo "<br>";

	function adicao1($a, $b){
		echo $a + $b;

	}

	adicao1(75, 25);
	echo "<br>";
	
	echo $_SERVER['PHP_SELF'];
	echo "<br>";
	echo "PHP_SELF<br>";
	echo $_SERVER['SERVER_NAME'];
	echo "<br>";
	echo "SERVER NAME<br>";
	echo $_SERVER['HTTP_HOST'];
	echo "<br>";
	echo "HTTP_HOST<br>";
	echo $_SERVER['HTTP_REFERER'];
	echo "<br>";
	echo "HTTP_REFERER<br>";
	echo $_SERVER['HTTP_USER_AGENT'];
	echo "<br>";
	echo "HTTP_USER_AGENT<br>";
	echo $_SERVER['SCRIPT_NAME'];
	echo "<br>";
	echo "SCRIPT_NAME'<br>";

?>
</body>
</html>
