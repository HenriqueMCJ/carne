<?php


	session_start();

	// ModeloCarne 1 = Modelo de Baependi
	
	if($_SESSION['modelocarne'] == 1) {

		// Impress�o do Capa
		if(!empty($_POST['tipoimpressao']) && $_POST['tipoimpressao'] == 1) {
			// Redireciono com o metodo POST
			header("Location: geracapacarneparcelamento.php", TRUE, 307);
		}
	
		// Impress�o do carn�	
		if(!empty($_POST['tipoimpressao']) && $_POST['tipoimpressao'] == 2) {
			// Redireciono com o metodo POST
			header("Location: geracarnecodbarraparcelamento.php", TRUE, 307);
		}
	}

	// ModeloCarne 1 = Modelo de Passa Tempo
	
	if($_SESSION['modelocarne'] == 2) {

		// Impress�o do Capa
		if(!empty($_POST['tipoimpressao']) && $_POST['tipoimpressao'] == 1) {
			// Redireciono com o metodo POST
			header("Location: geracapacarneparcelamento_2.php", TRUE, 307);
		}
	
		// Impress�o do carn�	
		if(!empty($_POST['tipoimpressao']) && $_POST['tipoimpressao'] == 2) {
			// Redireciono com o metodo POST
			header("Location: geracarnecodbarraparcelamento_2.php", TRUE, 307);
		}
	}
	
?>
