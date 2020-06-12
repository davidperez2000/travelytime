<!DOCTYPE html>
<html lang="es">
<head>

    <title> Travel and Time - Andorra </title>
    <meta charset="UTF-8" name="author" content="Travel and Time">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
    <link rel="stylesheet" href="../estilos/index.css">
    <link rel="stylesheet" href="../estilos/ciudades.css">
	
</head>

<body>

	<div id="todo">

	<div class="hed">
      
		<nav class="navbar navbar-expand-lg navbar-light">
		<a class="navbar-brand" href='../index.php'><img src="../img/travel.jpg"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		<div class="navbar-nav">
		<a class="nav-item active" href='../index.php'>Inicio <span class="sr-only">(current)</span></a>
		<a class="nav-item" href='../controllers/contactanos.php'>Contactanos</a>
		<a class="nav-item" href='../controllers/ayuda.php'>Ayuda</a>
		 <?php
		   //Index
           session_start();
           if(!isset($_SESSION['user'])){
                echo " <a class='nav-item' href='../controllers/login.php'>Login</a>";
            }else {
                echo " <a class='nav-item' href='../controllers/cerrarsession.php'>Cerrar Sesion</a>";
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
				
				<h3>Andorra</h3>
				
				<hr/>
				<form id="formulario"  action="next.php" method="post" class="card-body">
				<div class="tod">

				<div class="responsive">
					<div class="gallery">
						<a href='#alham'><img src="../img/andorra.jpg" alt="Cinque Terre" width="600" height="400"></a>
					<div class="desc">
					
					<h6>Andorra: Pirineo Aragonés</h6>
					
					<p>5 días / 4 noches recorriendo la zona de los Pirineos cercana a Andorra. Zonas de esquí incuidas.</p>
					
					<input type="text" name="dest1" id="dest1" value=">Andorra: Pirineo Aragonés" hidden>
					<input type="text" name="pre1" id="pre1" value="320" hidden>
					<input type="submit" name="r1" class="btn btn-warning" value="RESERVA YA">
					<p>Precio:</p><h4 class="precio">320€</h4> 
					
					</div>
					</div>
				</div>

				<div class="responsive">
					<div class="gallery">
						<a href='#sierra'><img src="../img/andorra2.jpg" alt="Cinque Terre" width="600" height="400"></a>
					<div class="desc">
					
					<h6>Andorra: Andorra la Vella</h6>
					
					<p>7 días / 6 noches en Andorra la Vella. Se organizarán recorridos por las zonas de interés de Andorra.</p>
					
					<input type="text" name="dest2" id="dest2" value="Andorra: Andorra la Vella" hidden>
					<input type="text" name="pre2" id="pre2" value="450" hidden>
					<input type="submit" name="r2" class="btn btn-warning" value="RESERVA YA">
					<p>Precio:</p><h4 class="precio">450€</h4> 
					
					</div>
					</div>
				</div>
				</form>
				<div class="responsive">
					<div class="gallery">
						<img src="../img/andorramapa.jpg"" alt="Forest" width="600" height="400">
						
						<div class="desc">
						
							<p>Ubicación: Norte de España.</p>
						
						</div>
						
					</div>
				</div>
				
				<div class="descr">
				
				<h5>Itinerarios</h5>
				
				<hr class="dividi">
				
				<h5 id="alham">Andorra: Pirineo Aragonés</h5>
 
				<p class="titu">Día 1: Origen - Andorra</p>

				<p>Salida desde origen realizando breves paradas en ruta (almuerzo por cuenta del cliente). Llegada al hotel a última hora de la tarde y distribución de habitaciones. Cena y alojamiento.</p>

				<p class="titu">Día 2: Andorra la Vella</p>

				<p>Desayuno. Excursión a Vigo, la ciudad más importante del sur de Galicia. Visitaremos el Mirador del Castro, donde tendremos una panorámica perfecta de la ciudad y su importante puerto. Regreso al hotel para el almuerzo. Tarde libre con posibilidad de realizar excusión opcional a la Comarca de O Salnés y Cambados, con visita a bodega denominación Rías Baixas con degustación de vino albariño. Cena y alojamiento.</p>

				<p class="titu">Día 3: Pistas de Nieve</p>

				<p>Desayuno y cena en el hotel. Posibilidad de realizar excursión opcional al norte de Portugal - Santa Tecla - Baiona con almuerzo en restaurante y Mirador del Monte de Santa Tecla (entradas incluidas).</p>

				<p class="titu">Día 4: Día Libre</p>

				<p>Desayuno. Excursión a O Grove, capital del marisco. Opcionalmente se podrá efectuar un recorrido en catamarán por la Ría de Arousa con degustación a bordo de mejillones y vino joven. Cruzaremos el puente de principios del s. XX que une la Península de O Grove con la Isla de La Toja. Regreso al hotel para el almuerzo. Por la tarde excursión a la ciudad de Pontevedra con guía oficial, que nos sorprenderá por la riqueza de su casco monumental. Posteriormente emprenderemos camino a la Villa de Combarro, declarada Recinto Histórico Artístico por su arquitectura típica y pintoresca, con más de 30 hórreos en primera línea de mar y las casas construidas sobre la propia roca ganando terreno al mar. Regreso al hotel. Cena y alojamiento.</p>

				<p class="titu">Día 5: Andorra - Origen</p>

				<p>Desayuno. Salida a las 5 h. de la mañana (salvo indicación contraria por parte del asistente en destino) hacia origen. Breves paradas en ruta (almuerzo por cuenta del cliente). Llegada y fin de nuestros servicios.</p>
				
				<hr class="dividi">
				
				<h5 id="sierra">Andorra: Andorra la Vella</h5>
				
				<p class="titu">Día 1: Ciudad de origen - Andorra</p> 
				
				<p>Salida con destino Granada. Llegada y traslado desde el aeropuerto al hotel seleccionado en Granada. Resto del día libre. Alojamiento.</p> 

				<p class="titu">Día 2: Andorra</p> 
				
				<p>Día libre. Alojamiento.</p> 

				<p class="titu">Día 3: Andorra la Bella</p> 
				
				<p>Traslado desde el hotel seleccionado en Granada al hotel seleccionado en Sierra Nevada por cuenta propia. Resto del día libre. Alojamiento.</p> 

				<p class="titu">Día 4: Andorra la Bella</p> 
				
				<p>Día libre. Alojamiento.</p> 

				<p class="titu">Día 5: Andorra la Bella</p> 
				
				<p>Día libre. Alojamiento.</p> 
				
				<p class="titu">Día 6: Andorra la Bella</p> 
				<p>Día libre. Alojamiento.</p> 

				<p class="titu">Día 7: Andorra - Ciudad de origen</p>
				
				<p>A la hora acordada, traslado al aeropuerto. Vuelo con destino a la ciudad de origen. Llegada. Fin del viaje y de nuestros servicios.</p> 
				
				<hr>
				
				</div>
				
				</div>
				
            </article>
        </section>
    </main>
	
    <footer id="fut">
	
		<div id="fut1">
		
			<p> - Realizado por <a href='../index.php'>TravelandTime</a> | Copyright ©2020 -  <h6>TODOS LOS DERECHOS RESERVADOS.</h6> </p>
			
			<div id="redes">
		
			<a href="https://twitter.com/" target="_blank"><img src="../img/gorjeo.png"></img></a>
			<a href="https://instagram.com/" target="_blank"><img src="../img/instagram.png"></img></a>
			<a href="https://facebook.com/" target="_blank"><img src="../img/facebook.png"></img></a>
		
			</div>
	
		</div>
	
	</footer>
	
	</div>
	
</body>

</html>