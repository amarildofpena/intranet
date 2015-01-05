<?php        
		function adicionarUsuario($id,$email,$senha,$n_acesso,$USUARIO_ID_EMPRESA,$nome){
			
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "intranet";
			$conn = new mysqli($servername, $username, $password, $dbname);
			
			$senha = sha1($senha);
			$stmt = $conn->prepare("INSERT INTO usuario(ID_USUARIO,EMAIL,SENHA,n_acesso,USUARIO_ID_EMPRESA,nome) values(?,?,?,?,?,?)");
			$stmt->bind_param('sssiis',$id, $email, $senha, $n_acesso,$USUARIO_ID_EMPRESA,$nome);
			$stmt->execute();
			
			echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=index.php'>";
				}
	
		function pegaEmpresa(){
			$nome_empresas = array();
			$sql = "SELECT NOME_EMPRESA FROM empresa";
			$result = $conn->query($sql);
			
			if ($result->num_rows > 0) {
				 // output data of each row
				 while($row = $result->fetch_assoc()) {
					 $nome_empresas[] = $row["NOME_EMPRESA"];
				 }
			 }
			 echo $nome_empresas;
		} 
?>  