﻿<!DOCTYPE html>
<html lang="en">
<head>
   <?php header("Content-Type: text/html; charset=ISO-8859-1",true) ?> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
                                        <?php 
                                            $logado = false;
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
                <legend>Cadastro de Cardápio do Dia</legend>
                
                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Cardápio do dia</label>  
                  <div class="col-md-6">
                      <textarea rows="4" cols="50" id="conteudo" name="conteudo" type="text" placeholder="daniel.ricarte@mobinteligencia.com.br" class="form-control input-md"> </textarea>
                    
                  </div>
                </div>
                
               
                
                <!-- Password input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="passwordinput">data</label>
                  <div class="col-md-6">
                      <input id="data" disabled="" name="data" type="text" placeholder="" class="form-control input-md" value="<?php echo date("d/m/y"); ?>">
                    
                  </div>
                </div>
              
                <!-- Select Basic -->
			
                 <div class="col-lg-12">
                   
                    <input type="submit">
                
                  </div>
                
                </fieldset>
                </form>
                
 </div>
 </section>
</body>
</html>
