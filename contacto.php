
<?php 

	function ValidarVacio($campo, $vacio){
		if (empty($campo)) {
		$mensaje = $vacio. "<br>";
		return $mensaje;
		}
	}

	function ValidarNumero($valorNum, $numVacio){
		if (is_numeric($valorNum)) {
			$mensaje = $numVacio."<br>";
			return $mensaje;
	}
	}
$mensajetexto ="";
$mensajevacios = "";
$mensajenumero = "";



	?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Contacto  by Ghost</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
	</noscript>
	
	</head>
	<body>

	<!-- Header -->
		<div id="header">
			<div class="container">
					
				<!-- Logo -->
					<div id="logo">
						<h1><a href="#">Contactame</a></h1>
						
					</div>
				
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li class="active"><a href="index.html">Inicio</a></li>
							<li><a href="profesional.html">Perfil Profesional</a></li>
							<li><a href="personal.html">Perfil Personal</a></li>
							<li><a href="contacto.php">Contacto</a></li>
					
						</ul>
					</nav>

			</div>
		</div>
	<!-- Header -->
			
	<!-- Main -->
		<div id="main">
			<div class="container">
				<div class="row">
				
					<!-- Content -->
						<div id="content" class="8u skel-cell-important">
							<section>
								<form action="Capturar.php" method="POST">
								<header>
									<h2>Escribeme</h2>
									<span class="byline">A continuacion debes ingresar los datos que se le solicita</span>
								</header>
								<div>
								<p>DATOS PERSONALES</p>
								<div id="datos">

								<p>	<label for="names">Nombres</label><input type="text" required name="names"></p>
										
								</div>
								<div>
									<p>
								<label for="PriApe">Primer Apellido</label><input  type="text" required name="PriApe"></p>
								</div>
								<div>
									<p>
								<label for="SecApe">Segundo Apellido</label><input type="text" required name="SecApe"></p>
								</div>
								<div>
									<p>
										<label>Telefono</label>
										<input type="tel" required name="telefonofami" maxlength="10">
									</p>

								</div>
									<p>
								<label for="correo">Correo Electronico<input type="text" required name="correo" =""></label>
							</p>
								</div>
								<div>
									<p>
								<label for="Asunto">Asunto <input type="text" required name="Asunto" =""></label>
							</p>
								</div>


								Cuerpo del mensaje<br><textarea name="comentario" cols="20" rows="5" style="width:200px;height:100px;font-size:12px;font-family:Comic Sans MS;background-image:url(images/1.jpg);color:red;s"></textarea>
									<input type="submit" value="Enviarlo">
								<input type="reset" value="Reiniciar datos" style="">
				
									
					
				
							</div>
											
		</form>
							</section>
						</div>
					<!-- /Content -->
						
				
				</div>
			
			</div>
		</div>
	<!-- Main -->

	<!-- Footer -->
	
	<!-- Footer -->

	<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				Design By: <a>Ghost-2017</a>
			</div>
		</div>

	</body>
</html>