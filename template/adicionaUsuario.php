<?php
		include("funcoes.php");
		adicionarUsuario( "default",$_REQUEST['mail'], $_REQUEST['senha'], 1, $_REQUEST['empresa'], $_REQUEST['nome']);
?>