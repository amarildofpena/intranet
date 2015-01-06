<!DOCTYPE html>
<html>
  <head>
  
    <title>Intranet GrupoMob</title>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet" media="screen">
	<link href="color/default.css" rel="stylesheet" media="screen">
    <script src="http://static.scripting.com/github/bootstrap2/js/bootstrap-modal.js"></script>
    <script src="http://static.scripting.com/github/bootstrap2/js/bootstrap-transition.js"></script>
	<script src="js/modernizr.custom.js"></script>
    <?php
    
		session_start();
		$_SESSION['empresa'] =  
		$_SESSION['usuario'] = 

		include 'config.php';
		include 'funcoes.php';
		
		
	?>
      </head>
  <body>
  	

	  <!-- intro area -->	  
	 
     <div id="loginModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">�</button>
          <h1 class="text-center">Login</h1>
      </div>
      <div class="modal-body">
          <form class="form col-md-12 center-block">
            <div class="form-group">
              <input type="text" class="form-control input-lg" placeholder="Email" name="email">
            </div>
            <div class="form-group">
              <input type="password" class="form-control input-lg" placeholder="Password" name="senha">
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block">Entrar</button>
              <span class="pull-center"><a href="#">Cadastrar</a></span>
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
      <a class="navbar-brand" href="#">Empresa</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="#tickets">Tickets</a></li>
        <li><a href="#infomob">Infomob</a></li>
        <li><a href="#emails">Emails</a></li>
        <li><a href="#feed">Not�cias</a></li>

      
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
      
      
          <li><a href="#">Usu�rio: </a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-chevron-down"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#" data-toggle="modal" data-target="#loginModal">Logar</a></li>
            <li><a href="#">Fazer Logoff</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
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
      

	  
      
      	  <!-- INFOMOB -->
          
         <?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "intranet";
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			 die("Connection failed: " . $conn->connect_error);
		} 
		
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
                             
                             <p> �ltimas not�cias da MOB! </p>
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
	
	 <!-- Works -->
	<section id="works" class="home-section bg-gray">
			<div class="container">
			  <div class="row">
				  <div class="col-md-offset-2 col-md-8">
					<div class="section-heading">
					 <h2>Works</h2>
					 <p>Dicunt tamquam dissentiet vix ex, ne mei dico reformidans, accumsan gloriatur necessitatibus eu sit.</p>
					</div>
				  </div>
			  </div>
				<div class="row">
					<div class="col-md-offset-2 col-md-8">
					
					<ul class="lb-album">
						<li>
							<a href="#image-1">
								<img src="img/works/thumbs/1.jpg" alt="">
								<span>+</span>
							</a>
							<div class="lb-overlay" id="image-1">
								<a href="#page" class="lb-close">X</a>
								<img src="img/works/1.jpg" alt="" />
								<div>
									<h3>Sleek <span>/Design/</h3>
									<p>Lorem ipsum dolor sit amet, ut decore iracundia urbanitas sit.</p>
								</div>
								
							</div>
						</li>
						<li>
							<a href="#image-2">
								<img src="img/works/thumbs/2.jpg" alt="">
								<span>+</span>
							</a>
							<div class="lb-overlay" id="image-2">
								<a href="#page" class="lb-close">x Close</a>
								<img src="img/works/2.jpg" alt="" />
								<div>
									<h3>Sleek <span>/Design/</h3>
									<p>Lorem ipsum dolor sit amet, ut decore iracundia urbanitas sit.</p>
								</div>
								
							</div>
						</li>
						<li>
							<a href="#image-3">
								<img src="img/works/thumbs/3.jpg" alt="">
								<span>+</span>
							</a>
							<div class="lb-overlay" id="image-3">
								<a href="#page" class="lb-close">x Close</a>
								<img src="img/works/3.jpg" alt="" />
								<div>
									<h3>Sleek <span>/Design/</h3>
									<p>Lorem ipsum dolor sit amet, ut decore iracundia urbanitas sit.</p>
								</div>
								
							</div>
						</li>
						<li>
							<a href="#image-4">
								<img src="img/works/thumbs/4.jpg" alt="">
								<span>+</span>
							</a>
							<div class="lb-overlay" id="image-4">
								<a href="#page" class="lb-close">x Close</a>
								<img src="img/works/4.jpg" alt="" />
								<div>
									<h3>Sleek <span>/Design/</h3>
									<p>Lorem ipsum dolor sit amet, ut decore iracundia urbanitas sit.</p>
								</div>
								
							</div>
						</li>
						
						<li>
							<a href="#image-5">
								<img src="img/works/thumbs/5.jpg" alt="">
								<span>+</span>
							</a>
							<div class="lb-overlay" id="image-5">
								<a href="#page" class="lb-close">X</a>
								<img src="img/works/5.jpg" alt="" />
								<div>
									<h3>Sleek <span>/Design/</h3>
									<p>Lorem ipsum dolor sit amet, ut decore iracundia urbanitas sit.</p>
								</div>
								
							</div>
						</li>
						<li>
							<a href="#image-6">
								<img src="img/works/thumbs/6.jpg" alt="">
								<span>+</span>
							</a>
							<div class="lb-overlay" id="image-6">
								<a href="#page" class="lb-close">x Close</a>
								<img src="img/works/6.jpg" alt="" />
								<div>
									<h3>Sleek <span>/Design/</h3>
									<p>Lorem ipsum dolor sit amet, ut decore iracundia urbanitas sit.</p>
								</div>
								
							</div>
						</li>
						<li>
							<a href="#image-7">
								<img src="img/works/thumbs/7.jpg" alt="">
								<span>+</span>
							</a>
							<div class="lb-overlay" id="image-7">
								<a href="#page" class="lb-close">x Close</a>
								<img src="img/works/7.jpg" alt="" />
								<div>
									<h3>Sleek <span>/Design/</h3>
									<p>Lorem ipsum dolor sit amet, ut decore iracundia urbanitas sit.</p>
								</div>
								
							</div>
						</li>
						<li>
							<a href="#image-8">
								<img src="img/works/thumbs/8.jpg" alt="">
								<span>+</span>
							</a>
							<div class="lb-overlay" id="image-8">
								<a href="#page" class="lb-close">x Close</a>
								<img src="img/works/8.jpg" alt="" />
								<div>
									<h3>Sleek <span>/Design/</h3>
									<p>Lorem ipsum dolor sit amet, ut decore iracundia urbanitas sit.</p>
								</div>
								
							</div>
						</li>
					</ul>
					
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
						<h2 class="wow bounceInDown" data-wow-delay="1s">Details are the key for perfection</h2>
						<p class="lead wow bounceInUp" data-wow-delay="2s">We mix all detailed things together</p>	
						</div>
					</div>				
				</div>
            </div>
		</section>	
	  
	 <!-- Contact -->
	  <section id="contact" class="home-section bg-white">
	  	<div class="container">
			  <div class="row">
				  <div class="col-md-offset-2 col-md-8">
					<div class="section-heading">
					 <h2>Contact us</h2>
					 <p>Contact via form below and we will be get in touch with you within 24 hours. </p>
					</div>
				  </div>
			  </div>

	  		<div class="row">
	  			<div class="col-md-offset-1 col-md-10">

				<form class="form-horizontal" role="form">
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					  <input type="text" class="form-control" id="inputName" placeholder="Name">
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					  <input type="email" class="form-control" id="inputEmail" placeholder="Email">
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					  <input type="text" class="form-control" id="inputSubject" placeholder="Subject">
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					  <textarea name="message" class="form-control" rows="3" placeholder="Message"></textarea>
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					 <button type="button" class="btn btn-theme btn-lg btn-block">Send message</button>
					</div>
				  </div>
				</form>
	
	  			</div>
			
				
	  		</div>
			<div class="row mar-top30 ">
				<div class="col-md-offset-2 col-md-8">
					<h5>We're on social networks</h5>
					<ul class="social-network">
						<li><a href="#">
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
						</span></a>
						</li>
						<li><a href="#">
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-dribbble fa-stack-1x fa-inverse"></i>
						</span></a>
						</li>
						<li><a href="#">
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
						</span></a>
						</li>
						<li><a href="#">
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-pinterest fa-stack-1x fa-inverse"></i>
						</span></a>
						</li>
					</ul>
				</div>				
			</div>

	  	</div>
	  </section>  

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