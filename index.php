<!DOCTYPE html>
<html lang="es">

<head>
    <title> Travel and Time - Index </title>
    <meta charset="UTF-8" name="author" content="Travel and Time">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
    <link rel="stylesheet" href="estilos/index.css">
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
	
</head>

<body>

	<div id="todo">

    <div class="hed">
      
		<nav class="navbar navbar-expand-lg navbar-light">
		<a class="navbar-brand" href='index.php'><img src="img/travel.jpg"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		<div class="navbar-nav">
		<a class="nav-item active" href='index.php'>Inicio <span class="sr-only">(current)</span></a>
		<a class="nav-item" href='controllers/contactanos.php'>Contactanos</a>
		<a class="nav-item" href='controllers/ayuda.php'>Ayuda</a>
		 <?php
		   //Index
           session_start();
           if(!isset($_SESSION['user'])){
                echo " <a class='nav-item' href='controllers/login.php'>Login</a>";
            }else {
                echo " <a class='nav-item' href='controllers/cerrarsession.php'>Cerrar Sesion</a>";
            }
           ?>
		
		
		</div>
		</div>
		</nav>
		
    </div>
	
    <main>
	
        <section>
		
            <article>
			
			<div id="catalogo">
				
				<h3>¡Bienvenido a Travel and Time!</h3>
				
				<p>¡Donde tus viajes se hacen realidad!</p>
				
				<hr/>
				
				<div class="contimg">
				
				<img class="imarb" src="img/segovia.jpg"></img>
				
				</div>
				
				<h5>¿Quiénes Somos?</h5>
				
				<p>Travel and Time es una empresa de viajes española, especializada en proporcionar a sus clientes experiencias y viajes inolvidables por todo el territorio español. ¿Deseas conocer y vivir todas las oportunidades que brinda España al mejor precio? ¡Déjanos ayudarte!</p>
				
				<div id="eligdest">
				
				<h5>¿Deseando viajar? Elige tu destino > ¡Miles de circuitos te esperan!</h5>
				
				<form id="formulario"  action="" method="post" class="card-body">
				
				<select id="destino">
				
				<option value="elige" id="elige">Seleccione su destino deseado . . .</option>
				
				<option id="destino1" value="granada">Granada</option>
				
				<option id="destino2" value="malaga">Málaga</option>

				<option id="destino3" value="sevilla">Sevilla</option>

				<option id="destino4" value="palma">Palma</option>

				<option id="destino5" value="merida">Mérida</option>

				<option id="destino6" value="andorra">Andorra</option>			

				</select>

				<input id="botbuscar" type="submit" class='' value="BUSCAR DESTINO">

				</form>
				
				</div> 
				
				<h5>Circuitos Destacados</h5>
				
				<hr/>
				
				<p>¿Deseando un destino capaz de saciar tu necesidad de montaña? ¿O eres de los que disfruta pasar el tiempo en la playa? ¡Aquí te dejamos una selección de nuestros mejores destinos!</p> 
				
				<div id="low">
				
				<div class="responsive">
				
				<div class="container">
					
					<img class="image" src="img/granada.jpg"></img>
					
					<div class="overlay">
						
						<a href="controllers/granada.php"><div class="text">Granada</div></a>
					</div>
				</div>
				
				<div class="desc">
					
					<h6>Granada: La Joya del Sur</h6>
					
					<p>Descubre la más bella ciudad del sur de España. Los mejores circuitos para descubrir Granada y sus secretos.</p>
					
					<a class="btn btn-warning" href="controllers/granada.php">MÁS INFO</a>
					
					<p>Desde:<h4 class="precio">300€</h4></p>
					
				</div>
				
				</div>
					
				<div class="responsive">
				
				<div class="container">
					
					<img class="image" src="img/andorra.jpg"></img>
					
					<div class="overlay">
						
						<a href="controllers/andorra.php"><div class="text">Andorra</div></a>
					</div>
				</div>
				
				<div class="desc">
					
					<h6>Andorra: Pirineos</h6>
					
					<p>Los mejores circuitos para los más aventureros y atrevidos. ¡El mejor destino para los amantes de la nieve!</p>
					
					<a class="btn btn-warning" href="controllers/andorra.php">MÁS INFO</a>
					
					<p>Desde:<h4 class="precio">320€</h4></p>
					
				</div>
				
				</div>
					
				<div class="responsive">
				
				<div class="container">
					
					<img class="image" src="img/palma.jpg"></img>
					
					<div class="overlay">
						
						<a href="controllers/palma.php"><div class="text">Palma</div></a>
					</div>
				</div>
				
				<div class="desc">
					
					<h6>Palma: Playa y Turismo</h6>
					
					<p>¿Enamorado del sol y el buen tiempo? ¿Deseando encontrar un rincón perfecto para descansar? ¡Esta es tu isla!</p>
					
					<a class="btn btn-warning" href="controllers/palma.php">MÁS INFO</a>
					
					<p>Precio:<h4 class="precio">290€</h4></p>
					
				</div>
				
				</div>
					
				<div class="responsive">
				
				<div class="container">
					
					<img class="image" src="img/malaga.jpg"></img>
					
					<div class="overlay">
						
						<a href="controllers/malaga.php"><div class="text">Málaga</div></a>
					</div>
				</div>
				
				<div class="desc">
					
					<h6>Málaga: Costa del Sol</h6>
					
					<p>¿Deseas descubrir las maravillas de la afamada e interesante Costa del Sol? ¡Este es el momento!</p>
					
					<a class="btn btn-warning" href="controllers/malaga.php">MÁS INFO</a>
					
					<p>Precio:<h4 class="precio">325€</h4></p>
					
				</div>
				
				</div>
					
				</div>
				
				
			
			<hr/>
			
			</div>
               
            </article>
			
        </section>
		
    </main>
	
	</div>
	
	<footer id="fut">
	
		<div id="fut1">
		
			<p> - Realizado por <a href='index.php'>TravelandTime</a> | Copyright ©2020 -  <h6>TODOS LOS DERECHOS RESERVADOS.</h6> </p>
			
			<div id="redes">
		
			<a href="https://twitter.com/" target="_blank"><img src="img/gorjeo.png"></img></a>
			<a href="https://instagram.com/" target="_blank"><img src="img/instagram.png"></img></a>
			<a href="https://facebook.com/" target="_blank"><img src="img/facebook.png"></img></a>
		
			</div>
	
		</div>
	
	</footer>
	
</body>

<script type="text/javascript">
$(document).ready(function() {
	$("#formulario").submit(enviar);
	$("#destino").change(destino);
	function enviar() {
		var x = $("#destino>option:selected").val();
		verdad=true;
		if (x=="elige") {
			alert("Elige destino");
			verdad=false;
		}
		return verdad;
	}
	function destino() {
		$("#elige").hide();	
		var x = $("#destino>option:selected").val();
		x = "controllers/"+x+".php";
		 $('#formulario').attr('action', x);
	}
});
</script>

</html>