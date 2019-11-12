<?php

class db{


	private $host = 'localhost';

	private $usuario = 'root';

	private $senha = '';

	private $banco = 'todo_list';// ainda será criado!

	//Criando a conexão com o banco

	public function conecta_mysql(){

		//Estabelecendo conexão
		$conection = mysql_connect($this->host, $this->usuario, $this->senha, $this->banco);

		// Setando o charset que será usado!
		mysqli_set_charset($conection, 'utf8');

		//Testando a conexão
		if(mysqli_connect_errno()){
			echo 'Erro ao tenstar se comunicar com o Banco de Dados!'.mysqli_connect_error();
		}

		return $conection;
	}
}


?>