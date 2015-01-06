<!DOCTYPE html>
<html>
      <Title>Intranet GrupoMob</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet" media="screen">
	<link href="color/default.css" rel="stylesheet" media="screen">
    <script src="http://static.scripting.com/github/bootstrap2/js/bootstrap-modal.js"></script>
    <script src="http://static.scripting.com/github/bootstrap2/js/bootstrap-transition.js"></script>
	<script src="js/modernizr.custom.js"></script>
    <?php
    
		include 'config.php';
		include 'funcoes.php';
		
	?>
      </head>
  <body>
       <div id="loginModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
       <div class="modal-dialog">
       <div class="modal-content">
       <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
          <h1 class="text-center">Login</h1>
      </div>
      <div class="modal-body">
          <form class="form col-md-12 center-block" method="post" action="autenticaUsuario.php">
            <div class="form-group">
              <input type="text" class="form-control input-lg" placeholder="Email" name="email">
            </div>
            <div class="form-group">
              <input type="password" class="form-control input-lg" placeholder="Password" name="senha">
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-lg btn-block">Entrar</button>
              <span class="pull-center"><a href="cadastroUsuario.php">Cadastrar</a></span>
            </div>
          </form>
      </div>
      <div class="modal-footer">
          <div class="col-md-12">
		  </div>	
      </div>
  </div>
  </div>
</div>
     
     
     
     
<nav class="navbar navbar-default navbar-fixed-top" style="background:white">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">GRUPOMOB</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="#tickets">Tickets</a></li>
        <li><a href="#infomob">Infomob</a></li>
        <li><a href="#emails">Emails</a></li>
        <li><a href="#feed">Notícias</a></li>

      
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
      
      
          <li><a href="#">Usuário: </a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-chevron-down"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#" data-toggle="modal" data-target="#loginModal">Logar</a></li>
            <li style="visibility: hidden"><a href="#">Fazer Logoff</a></li>
            <li class="divider"></li>
            <li><a href="#">Cadastro de Notícia</a></li>
            <li><a href="#">Cadastro de Infomob</a></li>
            <li><a href="#">Cadastro de Cardápio</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	  
	  <!-- TICKET ME -->
      <br/>
      <br/>
      <br/>
	  <section id="tickets"  class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
 
              
		<div class="container">
			  <div class="row">
				  <div class="col-md-offset-2 col-md-8">
					<div  class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					 <h2>TICKET ME</h2>
                     <p>
                     	Abertura de atendimento para os setores internos do Grupo MOB!
                     </p>
					</div>
				  </div>
			  </div>
              <div class="row" align="center">
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"  >
					<div class="box-team wow bounceInDown">
                        <a href="http://suporte.mobinteligencia.com.br"> <img src="img/team/suporte.jpg" alt="" class="img-responsive" />
                        <h3>Suporte</h3></a>
         			</div>	
                  </div>	
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="box-team wow bounceInDown" data-wow-delay="0.1s">
                            <a href="http://suporte.mobinteligencia.com.br/staff"> <img src="img/team/staff.jpg" alt="" class="img-responsive" />
                            <h3>Staff</h3></a>
					</div>
               		</div>
              </div>
             
              </div>
              
	  </section>
      

         <?php
                include 'config.php';
	
		$sql = "SELECT TITULO,CONTEUDO,AUTOR,DATE_FORMAT(data_infomob,'%d/%m/%Y') AS DATA_INFOMOB FROM infomob";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			 // output data of each row
			 while($row = $result->fetch_assoc()) {
				 $titulo = $row["TITULO"] ;
				 $dataI= $row["DATA_INFOMOB"];
				 $conteudo= $row["CONTEUDO"];
				 $autor= $row["AUTOR"];
			 }
			 
		$result = "";
		} 
		?>  
        
              
   	  <section id="infomob" class="col-md-offset-2 col-md-8"  >
                <img alt="" src="img/header.jpg" style="width:100%" >	
     
            <div>
            	<div class="row">
            		<h2><?php echo $titulo ?></h2>
                    <h5><?php echo $dataI. " - ". $autor?></h5>
                    <p><?php echo $conteudo ?></p>
                </div>
                <BR/>
                <BR/>
                <BR/>
                <BR/>
                <BR/>
                <BR/>
                <div class="row">
		<BR/>
                <BR/>
                <BR/>
                <BR/>
                <BR/>
                <BR/>
                </div>
            </div>
      </section>
		<!--  
		<section id="spacer1" class="home-section spacer">	
           <div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="color-light">
						<h2 class="wow bounceInDown" data-wow-delay="1s">Details are the key for perfection</h2>
						<p class="lead wow bounceInUp" data-wow-delay="2s">We mix all detailed things together</p>	
						</div>
					</div>				
				</div>
            </div>
		</section>	  
	  spacer -->	 
	  <?php
	  	$conn->close();
	  	$conn = new mysqli($servername, $username, $password, $dbname);
		$sql = "SELECT TITULO,CONTEUDO,AUTOR,DATE_FORMAT(data_noticia,'%d/%m/%Y') AS DATA_NOTICIA FROM noticias";
		$result = $conn->query($sql);
		$titulos = array();
		$datas= array();
		$conteudos =array();
		$autores= array();
		if ($result->num_rows > 0) {
			 // output data of each row
			 while($row = $result->fetch_assoc()) {
				 $titulos[] = $row["TITULO"];
				 $datas[] = $row["DATA_NOTICIA"];
				 $conteudos[] = $row["CONTEUDO"];
				 $autores[] = $row["AUTOR"];
			 }
		} 
	  ?>
      
      <section id="feed"  class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <div  class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                             <h2>Noticias</h2>
                             
                             <p> Últimas notícias EMPRESA! </p>
                             <br/>
                             <br/>
                            </div>
                          </div>
			  <div class="row">
					<div  class="col-xs-12 col-sm-12 col-md-6 col-lg-12">
                    	<h
      					<div STYLE=" height: 700px; width:auto ; overflow: auto;" >
                        	
                            <?php
							$saida = " ";
							$i = 0;
							for($i ; $i<count($titulos) ; $i++){
								echo "<p>{$titulos[$i]}</p>";
								echo "<p>{$datas[$i]} - {$autores[$i]}</p>";
								echo "<p>{$conteudos[$i]}</p>";
								echo "<p><li></li></p>";								
							}
                            ?>
                            
                        </div>
            		</div>
              </div>
              
      </section>
      
	  <!-- Emails -->
	 <section id="emails" class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				  <div class="row">
				  <div class="col-md-offset-2 col-md-8">
					<div class="section-heading">
					<h2>EMAIL</h2>
					 <p>Selecione sua empresa para acessar o e-mail.</p>
					</div>
				  </div>
			  </div>
			  <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<div class="service-box wow bounceInDown" data-wow-delay="0.1s">
						<a href="http://mail.mobinteligencia.com.br"><i class="fa fa-mail-reply-all fa-4x"></i>
						<h4>MOB INTELIGENCIA</h4></a>
					
					</div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<div class="service-box wow bounceInDown" data-wow-delay="0.1s">
						<a href="http://mail.mobtelecom.com.br"><i class="fa fa-mail-reply-all fa-4x"></i>
						<h4>MOB TELECOM</h4></a>
						
				</div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4" data-wow-delay="0.3s">
					<div class="service-box wow bounceInDown" data-wow-delay="0.1s">
						<a href="http://mail.mobtecnologia.com.br"><i class="fa fa-mail-reply-all fa-4x"></i>
						<h4>MOB TECNOLOGIA</h4></a>
						 	 	
					</div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" data-wow-delay="0.5s">
					<div class="service-box wow bounceInDown" data-wow-delay="0.1s">
						<a href="http://mail.db3telecom.com.br"><i class="fa fa-mail-reply-all fa-4x"></i>
						<h4>DB3 TELECOM</h4></a>
						
					</div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" data-wow-delay="0.7s">
					<div class="service-box wow bounceInDown" data-wow-delay="0.1s">
						<a href="http://mail.argohost.net"><i class="fa fa-mail-reply-all fa-4x"></i>
						<h4>ARGOHOST</h4></a>
						
					</div>
                </div>
			  </div>	
		</div>
	</section>
	
	 
	<section id="cardápio" class="home-section bg-white">
			<div class="container">
			  <div class="row">
				  <div class="col-md-offset-2 col-md-8">
					<div class="section-heading">
					 <h2>Cardápio</h2>
					 <p>Segue o Cardápio da semana servido no refeitório do  GrupoMOB de segunda a sexta a partir das 11:30h.</p>
                                         <?php
                                                    $semana = date('w');
                                                    switch ($semana) {

                                                    case 0: $semana = "DOMINGO"; break;
                                                    case 1: $semana = "SEGUNDA FEIRA"; break;
                                                    case 2: $semana = "TERÇA-FEIRA"; break;
                                                    case 3: $semana = "QUARTA-FEIRA"; break;
                                                    case 4: $semana = "QUINTA-FEIRA"; break;
                                                    case 5: $semana = "SEXTA-FEIRA"; break;
                                                    case 6: $semana = "SÁBADO"; break;

                                                    }
                                                    
                                                    echo $semana;
                                         ?>
					</div>
				  </div>
			  </div>
				<div class="row">
					<div class="col-md-offset-2 col-md-8">
					
					
					
					</div>
				</div>
			</div>
		</section>	  

		<!-- spacer 2 -->	  
		<section id="spacer2" class="home-section spacer">	
           <div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="color-light">
						<h2 class="wow bounceInDown">Detalhes são a chave para a perfeição</h2>
						<p class="lead wow bounceInUp">Nós misturamos todos os detalhes juntos!</p>	
						</div>
					</div>				
				</div>
            </div>
		</section>	
	  
	 <!-- Contact -->
	 

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p>Copyright &copy;2014 Grupo MOB. Todos os direitos reservados. <br/><a href="http://bootstraptaste.com">Bootstraped</a></p>
				</div>
			</div>		
		</div>	
	</footer>
  
	 
	 <!-- js -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.smooth-scroll.min.js"></script>
	<script src="js/jquery.dlmenu.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/custom.js"></script>
  	
</html>