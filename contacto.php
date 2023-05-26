<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="main.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/fontello.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>base de datos</title>
</head>
<body>
	<nav>
			<ul>
				<img src="imagenes/logo.jpg" alt=""><br>
				<li><a href="index.html">Inicio</a></li>				
				<li><a href="Noticias.html">Noticias</a></li>		
				<li><a href="Contacto.html">Contacto</a></li>				
			</ul>	
		</nav>
	<!---CONEXION A BASE DE DATOS Y SERVIDOR-->
<?php
$conexion = mysqli_connect('localhost','root','','imprenta_vaz') or die(misql_error($mysqli));

	contacto2($conexion);

	function contacto2($conexion){
	$nombre=$_POST['Nombre'];
	$correo=$_POST['Correo'];
	$tel=$_POST['Telefono'];
	$mensaje=$_POST['Mensaje'];

	mysqli_query($conexion, "INSERT INTO contacto2(nombre, correo, tel, mensaje) 
	VALUES('$nombre','$correo','$tel','$mensaje')");
	
	}

?>
  <style>
    .opinion {
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .message {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-family: Arial, sans-serif;
      font-size: 14px;
      color: #000000;
      text-align: center;
      animation: thankYouAnimation 3s ease-in-out;
    }

    @keyframes thankYouAnimation {
      0% {
        opacity: 0;
        transform: translateX(-100%);
      }
      50% {
        opacity: 1;
        transform: translateX(0%);
      }
      100% {
        opacity: 0;
        transform: translateX(100%);
      }
    }
  </style>
 <div class="opinion">
    <br>
    <p class="message">Gracias. Le escribiremos pronto.</p>
  </div>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
<footer>
			<div class="copy">
					<p>Todos los derechos reservados</p>
					<p>&copy;Imprenta Vázquez</p>
			</div>
			<div class="Redes">
							<a href="https://www.facebook.com/guillermo.vazquez.547"target="blank"><span class="icon-facebook"></span></a>
							<a href="http://www.twitter.com"target="blank"><span class="icon-twitter"></span></a>
							<a href="https://www.instagram.com/vazquezhimpresores/"target="blank"><span class="icon-instagram"></span></a>
						</div>	
	</footer>
</body>
</html>
