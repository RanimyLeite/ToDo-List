<?php

	require_once('db.config.php');




?>



<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Gerenciamento de Tarefas</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
	    <nav class="navbar navbar-expand-lg navbar-light " style="background: #9900ff;">
	  <a class="navbar-brand" style="color: white;" href="index.php">Cadastrar</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	    </ul>
	    <div>
	    	<a class="navbar-brand" style="color: white;" href="#">Listar</a>
	    </div>
	  </div>
	</nav>
	<div class="row">
		<div class="col-md-1" style="margin-top: 20px;"></div>
		<div class="col-md-10" style="margin-top: 20px;">
			<div style="text-align: center; border: 1px solid black;  border-radius: 4px">
				<h3>Lista de Tarefas!</h3>	
			</div>
			<div class="listagem" style="margin-top: 10px;">
				<ul class="list-group">
				  <li class="list-group-item d-flex justify-content-between align-items-center">
				  	Estudar para a prova de Sistemas de Comunicações
				  	<div>
					  	<button type="button" class="btn btn-primary">Editar</button>
					  	<button type="button" class="btn btn-danger">Deletar</button>
					  	<button type="button" class="btn btn-success">Concluido</button>
				  	</div>
				  </li>

				  <li class="list-group-item d-flex justify-content-between align-items-center">
				  	Estudar para a prova de Sistemas Operacionais
				  	<div>
					  	<button type="button" class="btn btn-primary">Editar</button>
					  	<button type="button" class="btn btn-danger">Deletar</button>
					  	<button type="button" class="btn btn-success">Concluido</button>
				  	</div>
				  </li>
				  <li class="list-group-item d-flex justify-content-between align-items-center">
				  	Estudar para a prova de Antenas de Propagação
				  <div>
					  	<button type="button" class="btn btn-primary">Editar</button>
					  	<button type="button" class="btn btn-danger">Deletar</button>
					  	<button type="button" class="btn btn-success">Concluido</button>
				  	</div></li>
				  <li class="list-group-item d-flex justify-content-between align-items-center">
				  	PEstudar para as 50 questões de Economia
				  <div>
					  	<button type="button" class="btn btn-primary">Editar</button>
					  	<button type="button" class="btn btn-danger">Deletar</button>
					  	<button type="button" class="btn btn-success">Concluido</button>
				  	</div>
				  </li>
				  <li class="list-group-item d-flex justify-content-between align-items-center">
				  	Estudar para a prova de Sinais e Sistemas
				  	<div>
					  	<button type="button" class="btn btn-primary">Editar</button>
					  	<button type="button" class="btn btn-danger">Deletar</button>
					  	<button type="button" class="btn btn-success">Concluido</button>
				  	</div>
				  </li>
				</ul>
								
			</div>
		</div>
		<div class="col-md-1" style="margin-top: 20px;"></div>
	</div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>