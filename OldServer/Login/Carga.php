<?php
include('config.php');
if($_SESSION["logeado"] != "SI"){
header ("Location: index.php");
exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SITEGUIDES By WTG S&E</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/full-slider.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Ingresar al Sistema</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">acerca de nosotros</a>
                    </li>
                    <li>
                        <a href="#">Servicios</a>
                    </li>
                    <li>
                        <a href="#">Contactenos</a>
                    </li>
					<li>
                        <a href="#">FAQS</a>
                    </li>
                </ul>
				<ul class="nav navbar-nav navbar-right">
              <li><a href="">Fecha:
              	<?php
              	// Establecer la zona horaria predeterminada a usar. Disponible desde PHP 5.1
              	date_default_timezone_set('UTC');
              	//Imprimimos la fecha actual dandole un formato
              	echo date("d / m / Y");
              	?></a></li>
              <li><a href="cerrar.php">Salir</a></li>
            </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

	<br /><br /><br /><br /><br /><br />

    <!-- Page Content -->
    <div class="container">

	
<!-------------------------------------------------------->
	<!-- fin del cuerpo de la pagina-->
	<div class="row">
     <div class="col-md-4"></div><!-- Columna de la derecha-->
       <div class="col-md-4"><!-- Columna central-->
		<p><b><h1>Seleccionar archivo</h1></b></p>
         <div class="panel panel-default"> <!-- panel de logeo-->
          <div class="panel-heading">Datos del Documento:</div>
            <div class="panel-body">  

			  <!-- inicio del formulario-->
	          <form role="form" name="formulario" action="updata.php" method="post" enctype="multipart/form-data">
                <!--=======Codigo que verifica el inicio correcto de la session-->	   
			   <div class="form-group">	
               <input type="hidden" name="800000" value="300000" />
			   <input name="userfile" type="file" />
			   </br>
               <button type="submit" class="btn btn-default">Enviar</button>
              </form><!-- fin del formulario-->
            </div> <!-- fin del panel de logeo-->

               <div class="col-md-4"></div>
         </div>
        </div>
    </div><!-- fin del cuerpo de la pagina-->
	
<!-------------------------------------------------------->	
	
        <!-- Footer -->
        <footer>
            <div class="row">
            							
                <div class="col-lg-12">
        			<img src="../img/wtglogom.png"/>					
					<img src="../img/praxizlogom.jpg"/>
					<img src="../img/artlogom.png"/>
					<p>Copyright &copy; Todos los derechos reservados por <b>WTG SYSTEM AND ELECTRONICS.</b> 2014</p>			    
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

   

</body>

</html>