<?php 
##INCLUDES GERAIS


	include ("../../includes/classes/headers.class.php");
	include ("../../includes/classes/conecta.class.php");
	include ("../../includes/classes/auth.class.php");
	include ("../../includes/classes/dateOpers.class.php");
 	include ("../../includes/config.inc.php");
	include ("../../includes/versao.php");

 	include ("../../includes/languages/".LANGUAGE.""); //TEMPORARIAMENTE
 	include ("../../includes/menu/menu.php");
	include ("../../includes/functions/funcoes.inc");

	print "<style>"; //type='text/css'

	print "</style>";


	print "<link rel='shortcut icon' href='../../includes/icons/favicon.ico'>";

	$conec = new conexao;
	$conec->conecta('MYSQL');


	if (isset($_SESSION['s_uid'])) {
		$qry = "SELECT * FROM temas t, uthemes u  WHERE u.uth_uid = ".$_SESSION['s_uid']." and t.tm_id = u.uth_thid";
		$exec = mysql_query($qry) or die('ERRO NA TENTATIVA DE RECUPERAR AS INFORMAÃ‡Ã•ES DO TEMA!<BR>'.$qry);
		$row = mysql_fetch_array($exec);
		$regs = mysql_num_rows($exec);
		if ($regs==0){ //SE NÃƒO ENCONTROU TEMA ESPECÃ�FICO PARA O USUÃ�RIO
			$qry = "SELECT * FROM styles";
			$exec = mysql_query($qry);
			$row = mysql_fetch_array($exec);
		}
	} else {
		$qry = "SELECT * FROM styles";
		$exec = mysql_query($qry);
		$row = mysql_fetch_array($exec);
	}


	define ( "BODY_COLOR", $row['tm_color_body']);
	define ( "TD_COLOR", $row['tm_color_td']);

?>