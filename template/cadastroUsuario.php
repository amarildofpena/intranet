<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <?php 
					include 'config.php';
					include 'funcoes.php';
					?>
</head>
<body>

	  <section id="Cadastro de Usuário"  class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
 		<div class="container">
                <form class="form-horizontal" action="adicionaUsuario.php" method="post">
                <fieldset>
                
                <!-- Form Name -->
                <legend>Cadastro de Usuário</legend>
                
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Como prefere ser chamado?</label>  
                  <div class="col-md-6">
                  <input id="nome" name="nome" type="text" placeholder="Daniel Ricarte" class="form-control input-md">
                    
                  </div>
                  </div>
                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">E-mail</label>  
                  <div class="col-md-6">
                  <input id="mail" name="mail" type="text" placeholder="daniel.ricarte@mobinteligencia.com.br" class="form-control input-md">
                    
                  </div>
                </div>
                
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Confirmar e-mail</label>  
                  <div class="col-md-6">
                  <input id="confmail" name="confmail" type="text" placeholder="daniel.ricarte@mobinteligencia.com.br" class="form-control input-md">
                    
                  </div>
                </div>
                
                <!-- Password input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="passwordinput">Senha</label>
                  <div class="col-md-6">
                    <input id="senha" name="senha" type="password" placeholder="password" class="form-control input-md">
                    
                  </div>
                </div>
                
                <!-- Password input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="passwordinput">Confirmar Senha</label>
                  <div class="col-md-6">
                    <input id="confsenha" name="confsenha" type="password" placeholder="password" class="form-control input-md">
                    
                  </div>
                </div>
              
                <!-- Select Basic -->
			
            <?php
			$sql = "SELECT ID_EMPRESA,NOME_EMPRESA FROM empresa";
			$result = $conn->query($sql);
            $ids = array();
			$nomes = array();
			 while($row = $result->fetch_assoc()) {
				 $ids[] = $row["ID_EMPRESA"];
				 $nomes[] = $row["NOME_EMPRESA"];
			 }
			 
			?>
            
            
                <div class="form-group">
                  <label class="col-md-4 control-label" for="selectbasic">Empresa</label>
                  <div class="col-md-6">
                    <select name="empresa" size="1" class="form-control" id="empresa">
	                     <option>Selecione..</option>
                         
						 <?php 
	                            $i = 0;
                            for($i ; $i<count($ids) ; $i++){
								echo "<option value=".$ids[$i].">".$nomes[$i]."</option>";
							}
                            ?>
                    
                    </select>
                  </div>
                </div>
                <input type="submit">
                
                
                </fieldset>
                </form>
                
 </div>
 </section>
</body>
</html>
