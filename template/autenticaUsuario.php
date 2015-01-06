?<?php
		include("funcoes.php");
                if (autentica($_REQUEST['email'], $_REQUEST['senha'])){
                   echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=index.php'>";
                   
                }else{
                   echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=cadastroUsuario.php'>";
                }
?>