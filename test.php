<html>
<head>
	<title>test</title>
	<link href="css/dos.css" rel="stylesheet">
	<link href="css/ubuntu.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Ubuntu+Mono' rel='stylesheet' type='text/css'>
</head>
<body>	<div class="content"><?php

function c($n){
	return "<i class='c".$n."'></i>";
}

function table($text){
	
	$return ="";
	$return .= c("C9"); //esquina

	for($i=1;$i<79;$i++){
		$return .= c("CD");	 //	borde superior
	}

	$return .= c("BB");//esquina
	

	$long = strlen($text);

	//if($long<=78){
	if(true){
		$return .= c("BA");//borde izq

		$resto = 78 - $long;
		$izq = floor($resto/2)*9;
		$der = ceil($resto/2)*9;
		
		$return .= "<div class='word' style='width:".$izq."px'></div>";
		$return .= "<div class='word'>".$text."</div>";
		$return .= "<div class='word' style='width:".$der."px'></div>";

		$return .= c("BA");//borde izq
		$return .= c("C8");//esquina
		for($i=1;$i<79;$i++){
			$return .= c("CD");	 //	borde inf
		}
		$return .= c("BC");//esquina

	}

	return $return;

}

echo table("Hola!! esto es un texto de largo 78 justo, para probar que pasa con la funcion");

echo table("Hola!!! esto es un texto de largo 79 justo, para probar que pasa con la funcion");

?></div>
</body>
</html>