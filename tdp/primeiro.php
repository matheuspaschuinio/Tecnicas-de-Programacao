<?php
	$nome = "Maria da Silva";
	$idade = 25;
	$altura = 1.75;
	$casada = true;
	
	echo("<h3 style='color:blue;'>Nome: $nome </h3><br>");
	echo("Idade: $idade <br>");
	echo("Altura: $altura <br>");
	if($casada)
	{
		echo("Estado Civil: Casada");
	}
	else {
		echo("Estado Civil: Solteira");
	}
?>