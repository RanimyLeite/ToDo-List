<?php

	// require_once('db.config.php');

	//Recebendo dados do cadastro de tarefas
	 echo $_POST['tarefa']; //Esse indice está ligado ao atributo name aplicado nos inputs do cadastro de tarefas
	 echo '<br>';

	echo $_POST['descricao'];

	// //instanciando a classe db e gerando um objeto de conexão com o banco
	// $objDb = new db();

	// //Chamando a função de conexão com o banco
	// $link = $objDb->conecta_mysql();

	// //Query de inserção de tarefas no banco
	// $sql = " INSERT INTO todo_list(tarefa, descricao) VALUES ('$tarefa', '$descricao') ";

	// //A função mysqli_query(conexão, query) recebe 2 parametros, como $link retorna a conexão como o bd ele é o primeiro parametro e $sql é a query
	// if(mysqli_query($link, $sql)){
	// 	echo 'Tarefa inserida com sucesso!';
	// } else {
	// 	echo 'Erro ao Registrar a Tarefa!';
	//}



?>