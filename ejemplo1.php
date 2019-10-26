<?php 
	$nombre = "Mauricio";   //Esto es un texto
	$edad = 25;				//Esto es un entero
	$salario = 1000.55;		//Esto es un float
	$vehiculos = ['Volvo','BMW','Mercedes']; // Array

	$numero1 = 50;
	$numero2 = 100;

	//Operadores aritméticos
	$suma = $numero1 + $numero2;
	$resta = $numero1 - $numero2;
	$multiplicacion = $numero1 * $numero2;
	$division = $numero1 / $numero2;

	//Condiciones
	if($numero1 > $numero2){
		echo "Numero 1 es mayor";
	} else {
		echo "Numero 2 es mayor";
	}

	//Bucle for
	for($i=0;$i<=10;$i++){
		echo $i . "<br>";
	}

	//Bucle while
	$i=1;
	while($i<=10){
		echo $i."<br>";
		$i++;
	}

?>