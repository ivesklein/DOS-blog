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

function table($type, $text, $align="center"){
	
	$return ="";
	$return .= c("C9"); //esquina

	for($i=1;$i<79;$i++){
		$return .= c("CD");	 //	borde superior
	}

	$return .= c("BB");//esquina
	
		
	$end=false;
	$text2 = $text;
	while($end==false){
		if(strlen($text2)>78){
			$cutted=false;
			for($i=78;$i>0;$i--){
				$char = substr( $text2, $i, 1 );
				if($char==" "){
					$line   = substr( $text2, 0, $i );
					$text2  = substr( $text2, $i+1);
					//echo($text2);
					$cutted=true;
					break;
				}
				//echo($text2);
			}
			if($cutted==false){
				$line   = substr( $text2, 0, 78 );
				$text2  = substr( $text2, 78+1);
			}


		}else{
			$line=$text2;
			$end=true;
		}

		$return .= c("BA");//borde izq

		$resto = 78 - strlen($line);
		$izq = floor($resto/2)*9;
		$der = ceil($resto/2)*9;

		if($align=="center"){$return .= "<div class='word' style='width:".$izq."px'></div>";}
		if($align=="right"){$return .= "<div class='word' style='width:".($resto*9)."px'></div>";}
		
		if($type=="ubuntu"){
			$strlen = strlen( $line );
			for( $i = 0; $i <= $strlen; $i++ ) {
			    $char = substr( $line, $i, 1 );
			    if(ord($char)!=0){
					$return .= c(strtoupper(dechex(ord($char))));
				}
			    // $char contains the current character, so do your processing here
			}
		}else{
			$return .= "<div class='word'>".$line."</div>";
		}

		if($align=="center"){$return .= "<div class='word' style='width:".$der."px'></div>";}
		if($align=="left"){$return .= "<div class='word' style='width:".($resto*9)."px'></div>";}

		$return .= c("BA");//borde der

	}

	$return .= c("C8");//esquina
	for($i=1;$i<79;$i++){
		$return .= c("CD");	 //	borde inf
	}
	$return .= c("BC");//esquina

	return $return;

}



echo table("ubuntu", "Hola!! esto es un texto de largo 78 justo, para probar que pasa con la funcion");
echo table("dos","Hola!! esto es un texto de largo 78 justo, para probar que pasa con la funcion");

echo table("ubuntu","Hola!!! esto es un texto de largo 79 justo, para probar que pasa con la funcion", "right");
echo table("dos","Hola!!! esto es un texto de largo 79 justo, para probar que pasa con la funcion", "left");

?></div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="css/dos.js"></script>
</body>
</html>