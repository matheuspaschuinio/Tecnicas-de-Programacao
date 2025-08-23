<?php
	if($_GET)
	{
		echo "{$_GET['nome']} <br> {$_GET['idade']}";
	}
	else {
		//redirecionar para a página index.html
		header("location:index.html");
	}
		
?>