
<?php 
include_once "contacto.php";
@$mensajetexto ="";
@$mensajenumero = "";
@$mensajevacio ="" ;
@$mensajetexto .=ValidarTexto($_POST['names'], 'Nombres');
@$mensajetexto .=ValidarTexto($_POST['PriApe'], 'Primer Apellido');
@$mensajetexto .=ValidarTexto($_POST['SecApe'], 'Segundo Apellido');
@$mensajenumero .= ValidarNumero($_POST['telefonofami'], 'Telefono');
@$mensajevacio .= ValidarVacio ($_POST['correo'], 'correo');
@$mensajevacio .= ValidarVacio ($_POST['Asunto'], 'Asunto');

if ($mensajetexto!="") {
	echo "<script>";
	echo "alert('error en los siguientes datos \\n $mensajetexto  ')";
	//echo "alert('$mensajetexto')";
	echo "</script>";
}
if ($mensajenumero!="" ) {
	echo "<script>";
	echo "alert('error en los siguientes datos \\n $mensajenumero')";
	//echo "alert('$mensajetexto')";
	echo "</script>";
}
if ($mensajevacio!="" ) {
	echo "<script>";
	echo "alert('error en los siguientes datos \\n $mensajevacio')";
	//echo "alert('$mensajetexto')";
	echo "</script>";
}
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
							<li><a href="contacto.html">Contacto</a></li>
					
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
								<form action="Capturar.php">
								<header>
									<h2>Los datos fueron enviados.</h2>
								</header>

								<p>Nombre(s):  <?php echo $_POST['names']  ?></p>
								<p>Primer Apellido:  <?php echo $_POST['PriApe']  ?></p>
								<p>Segundo Apellido:  <?php echo $_POST['SecApe']  ?></p>
								<p>Telefono:  <?php echo $_POST['telefonofami']  ?></p>
								<p>Correo Electronico:  <?php echo $_POST['correo']  ?></p>
								<p>Asunto:  <?php echo $_POST['Asunto']  ?></p>

							</form>

	</body>
	</html>

