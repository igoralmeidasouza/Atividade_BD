<?php
	$localhost = 'localhost';
	$user_name = 'root';
	$user_senha = "";
	$db = "db_livraria";

	$con = mysqli_connect($localhost,$user_name,$user_senha,$db);

	if (mysqli_connect_error($con)){

		echo "Erro ao conectar com o banco de dados: " . mysqli_connect_error();

	}
	else{

	//echo "Banco de dados conectado. ";
	}

 ?>
