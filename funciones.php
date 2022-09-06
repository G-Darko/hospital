	<link rel="icon" href="img/logo_hospital.ico">
	<link rel="stylesheet" href="CSS/style.css">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php 
include 'conexion.php'
?>
		<section class="encabezado">
			<div> <img class="logo" src="img/hospital.gif" alt=""> </div>
		</section>
	<header>
		<div class="header">
			<h1>Hospital MG</h1>
			<div class="optionsBar">
			 <p ><script type="text/javascript">
					var d = new Date();
					var mes = d.getMonth()+1;
					var dia=new Array(7);
					dia[0]="Domingo";
					dia[1]="Lunes";
					dia[2]="Martes";
					dia[3]="Miercoles";
					dia[4]="Jueves";
					dia[5]="Viernes";
					dia[6]="Sabado";
					var mm=new Date();
					var m2 = mm.getMonth() + 1;
					var mesok = (m2 < 10) ? '0' + m2 : m2;
					var mesok=new Array(12);
					mesok[0]="Enero";
					mesok[1]="Febrero";
					mesok[2]="Marzo";
					mesok[3]="Abril";
					mesok[4]="Mayo";
					mesok[5]="Junio";
					mesok[6]="Julio";
					mesok[7]="Agosto";
					mesok[8]="Septiembre";
					mesok[9]="Octubre";
					mesok[10]="Noviembre";
					mesok[11]="Diciembre";
					document.write(dia[d.getDay()]+", "+d.getDate(),' de '+mesok[mm.getMonth()],' de '+d.getFullYear());
					</script></p>
					<script type="text/javascript">
						function startTime(){
						today=new Date();
						h=today.getHours();
						m=today.getMinutes();
						s=today.getSeconds();
						m=checkTime(m);
						s=checkTime(s);
						document.getElementById('reloj').innerHTML=h+":"+m+":"+s;
						t=setTimeout('startTime()',500);}
						function checkTime(i)
						{if (i<10) {i="0" + i;}return i;}
						window.onload=function(){startTime();}
						</script></p>
					<div id="reloj" style="font-size:20px; font-family: monospace; color: #000;"></div>   
			</div>
		</div>
		<nav>
			<ul>
				<li class="principal">
				<a href="Bienvenida.html">Bienvenida</a>
				</li> 

				<li class="principal">
					<a href="http://localhost/Hospital/Especialidades.php">Especialidades</a>
				</li>

				<li class="principal">
					<a href="http://localhost/Hospital/Doctores.php">Doctores</a>
				</li>

				<li class="principal">
					<a href="http://localhost/Hospital/Pacientes.php">Pacientes ⬇</a>
					<ul>
						<li><a href="http://localhost/Hospital/Registros.php">Registros</a></li>
						<li><a href="Formulario de Satisfacción.html">Formulario de satisfacción</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</header>