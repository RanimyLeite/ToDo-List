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
	<nav class="navbar navbar-expand-lg navbar-light" style="background: #9900ff";>
	  <a class="navbar-brand" style="color: white;" href="index.php">Cadastrar</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	    </ul>
	    <div>
	    	<a class="navbar-brand" style="color: white;" href="listar_tarefas.php">Listar</a>
	    </div>
	  </div>
	</nav>
	<div class="container">
		<form style="border: 1px solid black; margin-top: 50px; padding: 20px;">
		  <div class="form-group">
		    <label for="exampleFormControlInput1">Tarefa</label>
		    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Estudar / Correr / Malhar etc...">
		  </div>
		  <div class="form-group">
		    <label for="exampleFormControlTextarea1">Descrição da tarefa</label>
		    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
		  </div>
		  <div class="form-group">
		    <label for="exampleFormControlInput1">Data - Inicio </label>
		     <input type="date" name="bday" max="3000-12-31" min="1000-01-01" class="form-control">
		  </div>
		  <div class="form-group">
		    <label for="exampleFormControlInput1">Data - Final </label>
		     <input type="date" name="bday" max="3000-12-31" min="1000-01-01" class="form-control">
		  </div>
		  <button type="button" class="btn btn-block" style="background: #9900ff; color: white;">Cadastrar Tarefa</button>

		</form>
	</div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>