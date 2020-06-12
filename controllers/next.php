<html>
    <head>
    
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Travel and Time</title>
		
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
    <link rel="stylesheet" href="../estilos/index.css">
	<link rel="stylesheet" href="../estilos/next.css">
		
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
      session_start();
           if(!isset($_SESSION['user'])){
                echo "<a class='nav-item' href='../controllers/login.php'>Login</a>";
                $value="Para continuar y comprar tu viaje logeate";
                setcookie("login", $value, time()+5);
                header("Location:login.php");
            }else {
				if(isset($_SESSION['comprar'])){
					$_SESSION['compra'][]=array();
				}
				if (isset($_POST['r1'])) {
					$_SESSION['compra']['pago']=$_POST['pre1'];
					$_SESSION['compra']['destino']=$_POST['dest1'];
				}elseif (isset($_POST['r2'])) {
					$_SESSION['compra']['pago']=$_POST['pre2'];
					$_SESSION['compra']['destino']=$_POST['dest2'];
				}
                echo " <a class='nav-item' href='../controllers/cerrarsession.php'>Cerrar Sesion</a>";
            }
           ?>
		
		
		</div>
		</div>
		</nav>
		
    </div>
	
	<div id="next1">
	
    <h1>¡RESERVA SU FECHA Y SALIDA PARA EL DESTINO!</h1>
	
	<div id="next2">
	
	<p>¡Regístrate y forma parte de nuestros aventureros!</p>
			
	<hr class="hrreg">
	
    <form id="" name="" action="../tpv/tpv.php" method="post" class="card-body">
		
		<div>
		
			<p>Pasajeros</p>
			
			<select name="pasajeros" id="pasajeros">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
			</select>
			
		</div>
		
			<br>
			
		<div>
		
			<p>Ciudad De Salida</p>  
			
			<select name="salida" id="salida">
				<option>Madrid</option>
				<option>Barcelona</option>
				<option>Bilbao</option>
			</select>
			
		</div>
		
			<br><br>
			<p>Fechas De Salida Disponibles</p> 
			
			<div>
			
				<select id="dia" >
					<option value="elige" id="elige">Día de salida </option>
					<option id="D1" value="Miercoles">Miércoles</option>
					<option id="D2" value="Sabado">Sábado</option>
				</select>
				
			</div>
			
			<br>
			
			<div id ="x">
			
				<p>Dias disponibles: Escoja un día de salida.</p> 
			
				<div id ="x1">
					<input type="submit" class='' name="1" id="1"  >
				</div>

				<div id ="x1">
					<input type="submit" class='' name="2" id="2" >
				</div>

				<div id ="x1">
					<input type="submit" class='' name="3" id="3" >
				</div>

				<div id ="x1">
					<input type="submit" class='' name="4" id="4" >
				</div>
				
			</div>

</form>

<hr>

</div>

</div>

</div>

 
<script type="text/javascript">
$(document).ready(function() {
	$("#x").hide();
	$("#salida").change(salida);
	$("#salida").change(dia);
	$("#dia").change(dia);
	function salida(){
		var x = $("#salida>option:selected").text();
		if (x=="Barcelona") {
			$("#D1").val("Domingo");
			$("#D1").text("Domingo");
			$("#D2").val("Martes");
			$("#D2").text("Martes");
		}else {
		if(x=="Madrid"){
			$("#D1").val("Miercoles");
			$("#D1").text("Miercoles");
			$("#D2").val("Sabado");
			$("#D2").text("Sabado");
		}
		if (x=="Bilbao"){
			$("#D1").val("Viernes");
			$("#D1").text("Viernes");
			$("#D2").val("Lunes");
			$("#D2").text("Lunes");
		}
		}
	}
	function dia() {
		$("#elige").hide();	
		var x = $("#dia>option:selected").val();
		var days = ["Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado"];
		for (var j = 0; j < days.length; j++) {
			if (x==days[j]) {
				numero=j;
			}
		}
	var hoy = new Date();
	var fecha = new Date();
	var dia= hoy.getDay();
	n=numero-dia;
	hoy.setDate(hoy.getDate() + n);
	for (var i = 1; i <= 4; i++) {
		fecha.setDate(hoy.getDate() + 14*i);
		$("#"+i).val(fecha.toLocaleDateString());
		}
		$("#x").show();
	}
});
</script>
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