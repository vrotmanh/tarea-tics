<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Mi SPAcio Propio</title>
	<link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<link href="../../assets/css/bootstrap-theme.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Amatic+SC"/>
	<link href='https://fonts.googleapis.com/css?family=Indie+Flower|Pacifico|Yellowtail|Satisfy|Playball|Great+Vibes|Alex+Brush|Niconne|Fredericka+the+Great' rel='stylesheet' type='text/css'>
	<link href="../../assets/css/estilo.css" rel="stylesheet">
	<link rel="icon" type="image/png" href="../../assets/img/favicon.png" />
</head>
<body>

<div class="navbar-static-top navbar-inverse">
     <div class="container">
		<div class="row">
        <div class="collapse navbar-collapse navHeaderCollapse"> 
        <div class="navbar-form navbar-left" align="left">
            <button style="display: inline;" class="btn btn-default" onclick="window.location.href='<?php echo site_url("user_controller/index");?>'">Inicio</button>
        </div>
        <div class="navbar-form navbar-right" align="right">
          <?php if(isset($name)){ ?>
            <?php if(isset($info)){ ?>
              <p style="color: #DF4CA2; margin: 0 10px 0 0; font-size: 15px; display: inline;"> <?php echo $info; ?> </p>
              <?php } ?>
             <p style="color: white; margin: 0 0 0px; font-size: 17px; display: inline;"> Bienvenido, <?php echo $name." ".$lastname; ?> </p>
             <button style="display: inline; margin-left: 10px;" class="btn btn-default" onclick="window.location.href='<?php echo site_url("user_controller/edit_profile");?>'">Editar Perfil</button>
             <button style="display: inline; margin-left: 10px;" class="btn btn-default" onclick="window.location.href='<?php echo site_url("user_controller/logout");?>'">Cerrar Sesion</button>
          <?php } else { ?>
            <?php echo form_open('user_controller/login',array('class' => 'form-inline', 'style' => 'display: inline;')); ?>
            <?php if(isset($error)){ ?>
              <p style="color: red; margin: 0 10px 0 0; font-size: 15px; display: inline;"> <?php echo $error; ?> </p>
              <?php } ?>
              <?php if(isset($info)){ ?>
                <p style="color: #DF4CA2; margin: 0 10px 0 0; font-size: 15px; display: inline;"> <?php echo $info; ?> </p>
                <?php } ?>
             <div class="form-group">
               <?php echo form_input(array('id' => 'dusername', 'class' => 'form-control', 'placeholder' => 'Usuario', 'name' => 'dusername')); ?>
             </div>
             <div class="form-group">
               <?php echo form_password(array('id' => 'dpassword', 'class' => 'form-control', 'placeholder' => 'Contraseña', 'name' => 'dpassword')); ?>
             </div>
             <?php echo form_submit(array('id' => 'submit', 'value' => 'Iniciar','class' => "btn btn-default")); ?>
             <?php echo form_close();?>
             <button style="display: inline;" class="btn btn-default" onclick="window.location.href='<?php echo site_url("user_controller/register");?>'">Registrarse</button>
          <?php } ?>
        </div>
        </div>
        </div>
     </div>
</div>


	   <div class="jumbotron">
	   <div class="container">
		<img src="../../assets/img/spacio.jpg" class="img-rounded"  alt="Spacio" width="200" height="200" style="float:left; margin-right: 40px">
	      <h1 class="top-header col-md-offset-4">Servicios para ti</h1>
		  <div class="col-md-4">
		  <h4 class="top-header4 col-md-offset-4">
		  <A href="#ictio">Ictioterapia</A>,<A href="#reduc">Masaje reductor </A>,<A href="#depi">Depilación de piernas</A>,
		  <br>
		  <A href="#braz">Depilación de brazos</A>,<A href="#relaj"> Masaje de relajación</A>,
		  <br><A href="#linf">Masaje drenaje linfático</A>,
		  <A href="#desc">Masaje descontracturante </A>,<A href="#facial">Limpieza facial</A>,
		  <br><A href="#cera">Depilación facial con cera</A>.
		  <br>
		  <A href="#corp">Exfoliación e hidratación corporal</A>,
		  <br><A href="#cejas">Depilación de cejas</A>,<A href="#pedi">Pedicure</A>.
		  <br><A href="#perm">Permanente</A>,<A href="#mani">Manicure</A>
		  </h4>
		  </div>
	      <br>
	    </div>


	   <br><br><br><br><br><br><br><br><br>


		<div class="container">
		<A name="ictio"><h2 class="top-header2 col-md-offset-4">Ictioterapia
		</A></div>
		<br><br><br>
		<div class="container">
	    <div class="row padding">
	        <div class="col-md-4">
	        <img src="../../assets/img/ictioterapia.jpg" class="img-responsive img-circle"  alt="ictioterapia"  width= "500" height="500"/>
	        </div>
	        <div class="col-md-4 col-md-offset-2">
	           <p class="top-header3 text-justify">La ictioterapia se trata de una limpieza profunda de los pies, mediante la inmersión de los mismos en una pecera llena de los peces garra rufa, llamados también peces doctor. Estos peces turcos consiguen eliminar toda la piel muerta de los pies, dejándolos limpios y suaves.

	Esta terapia es ideal para aquellas personas con sobrepeso, que pasan largas horas de pie o que realizan grandes esfuerzos.</p>
	        <a href="#">Volver arriba /</a></footer><a href="#file:///C:/xampp/htdocs/SPA2/reserva.html">Reservar YA</a></footer>
			</div>
	    </div>
		<br><br>
		</div>
		<div class="container">
		<A name="reduc"><h2 class="top-header2 col-md-offset-4">Masaje reductor
		</A></div>
		<br><br><br>
		<div class="container">
	    <div class="row padding">
	        <div class="col-md-4">
	            <p class="top-header3 text-justify">El masaje reductivo elimina la acumulación de grasa localizada y estiliza el contorno de la figura, es decir, crea una silueta más estética. Éste se realiza con una presión fuerte y una velocidad más rápida que la forma tradicional.</p>
	        <a href="#">Volver arriba /</a></footer><a href="#reservar">Reservar YA</a></footer>
			</div>
	        <div class="col-md-4 col-md-offset-2">
			   <img src="../../assets/img/masaje-reductor.jpg" class="img-responsive img-circle"  alt="reductor"  width= "500" height="500"/>
	        </div>
	    </div>
		<br><br>
		</div>
	    <div class="container">
		<A name="depi"><h2 class="top-header2 col-md-offset-4">Depilación de piernas
		</A></div>
		<br><br><br>
		<div class="container">
	    <div class="row padding">
	        <div class="col-md-4">
	        <img src="../../assets/img/depilacion-piernas.jpg" class="img-responsive img-circle"  alt="piernas"  width= "500" height="500"/>
	        </div>
	        <div class="col-md-4 col-md-offset-2">
	           <p class="top-header3 text-justify">La depilación de piernas es una técnica cosmética que consiste en eliminar el vello de alguna zona de las piernas.</p>
	        <a href="#">Volver arriba /</a></footer><a href="#reservar">Reservar YA</a></footer>
			</div>
	    </div>
		<br><br>
		</div>
		<div class="container">
		<A name="braz"><h2 class="top-header2 col-md-offset-4">Depilación de brazos
		</A></div>
		<br><br><br>
		<div class="container">
	    <div class="row padding">
	        <div class="col-md-4">
	            <p class="top-header3 text-justify">La depilación de brazos es una técnica cosmética que consiste en eliminar el vello de alguna zona de los brazos</p>
	        <a href="#">Volver arriba /</a></footer><a href="#reservar">Reservar YA</a></footer>
			</div>
	        <div class="col-md-4 col-md-offset-2">
			   <img src="../../assets/img/depilacion-brazos.jpg" class="img-responsive img-circle"  alt="brazos"  width= "500" height="500"/>
	        </div>
	    </div>
	    <br><br>
		</div>
	    <div class="container">
		<A name="relaj"><h2 class="top-header2 col-md-offset-4">Masaje de relajación
		</A></div>
		<br><br><br>
		<div class="container">
	    <div class="row padding">
	        <div class="col-md-4">
	        <img src="../../assets/img/masaje-relajacion.jpg" class="img-responsive img-circle"  alt="relajacion"  width= "500" height="500"/>
	        </div>
	        <div class="col-md-4 col-md-offset-2">
	           <p class="top-header3 text-justify">El masaje relajante es una técnica manual milenaria que existe en casi todas las culturas.La función básica y principal del masaje relajante como su nombre indica es relajar, no tratar dolencias, aunque indirectamente provoquen mejoría en problemas musculares leves.</p>
	        <a href="#">Volver arriba /</a></footer><a href="#reservar">Reservar YA</a></footer>
			</div>
	    </div>
		<br><br>
		</div>
		<div class="container">
		<A name="linf"><h2 class="top-header2 col-md-offset-4">Masaje drenaje linfático
		</A></div>
		<br><br><br>
		<div class="container">
	    <div class="row padding">
	        <div class="col-md-4">
	            <p class="top-header3 text-justify">El drenaje linfático manual es una técnica de masoterapia que se engloba en el campo de la fisioterapia y la estética, uno como técnica de masaje terapéutico, y el otro de masaje estético, ambos van orientados a la "activación del funcionamiento del sistema linfático superficial para mejorar la eliminación de líquido intersticial y de las moléculas de gran tamaño y facilitar su evacuación".</p>
	        <a href="#">Volver arriba /</a></footer><a href="#reservar">Reservar YA</a></footer>
			</div>
	        <div class="col-md-4 col-md-offset-2">
			   <img src="../../assets/img/masaje-linfatico.jpg" class="img-responsive img-circle"  alt="linfatico"  width= "500" height="500"/>
	        </div>
	    </div>
		<br><br>
		</div>
	    <div class="container">
		<A name="desc"><h2 class="top-header2 col-md-offset-4">Masaje descontracturante
		</A></div>
		<br><br><br>
		<div class="container">
	    <div class="row padding">
	        <div class="col-md-4">
	        <img src="../../assets/img/masaje-descontracturante.jpg" class="img-responsive img-circle"  alt="descontracturante"  width= "500" height="500"/>
	        </div>
	        <div class="col-md-4 col-md-offset-2">
	           <p class="top-header3 text-justify">El masaje descontracturante consiste en eliminar las contracturas que provocamos al realizar nuestra actividad con estrés o crispación, sea cual se la causa de la contractura hay que eliminarla porque crea una descompensaión estructural, porque dicho musculo donde se ubica la contractura deja de funcionar correctamente.</p>
	        <a href="#">Volver arriba /</a></footer><a href="#reservar">Reservar YA</a></footer>
			</div>
	    </div>
		<br><br>
		</div>
		<div class="container">
		<A name="facial"><h2 class="top-header2 col-md-offset-4">Limpieza facial
		</A></div>
		<br><br><br>
		<div class="container">
	    <div class="row padding">
	        <div class="col-md-4">
	            <p class="top-header3 text-justify">Como su nombre lo indica, consiste en un limpieza profunda de la piel de la cara (del cutis). Se realizan extracciones de puntos negros, puntos blancos, comedones y pústulas. Se aplica una máscara descongestiva y luego una máscara diferente para cada tipo de piel. También se realizan topicaciones con ácidos y se nutre e hidrata la piel por medio de un masaje con cremas y emulsiones adecuadas a cada caso.</p>
	        <a href="#">Volver arriba /</a></footer><a href="#reservar">Reservar YA</a></footer>
			</div>
	        <div class="col-md-4 col-md-offset-2">
			   <img src="../../assets/img/limpieza-facial.jpg" class="img-responsive img-circle"  alt="limpieza"  width= "500" height="500"/>
	        </div>
	    </div>
		<br><br>
		</div>
	    <div class="container">
		<A name="cera"><h2 class="top-header2 col-md-offset-4">Depilación facial con cera
		</A></div>
		<br><br><br>
		<div class="container">
	    <div class="row padding">
	        <div class="col-md-4">
	        <img src="../../assets/img/depilacion-facial.jpg" class="img-responsive img-circle"  alt="facial-cera"  width= "500" height="500"/>
	        </div>
	        <div class="col-md-4 col-md-offset-2">
	           <p class="top-header3 text-justify">La depilación facial es una técnica cosmética que consiste en eliminar el vello de alguna zona de la cara tanto exceso de bellos en la zona de los labios, como cualquier otra zona del rostro.</p>
	        <a href="#">Volver arriba /</a></footer><a href="#reservar">Reservar YA</a></footer>
			</div>
	    </div>
		<br><br>
		</div>
		<div class="container">
		<A name="corp"><h2 class="top-header2 col-md-offset-4">Exfoliación e hidratación corporal
		</A></div>
		<br><br><br>
		<div class="container">
	    <div class="row padding">
	        <div class="col-md-4">
	            <p class="top-header3 text-justify">Exfoliación es un proceso que se realiza de manera artificial siendo muy utilizado en cosmética para rejuvenecimiento facial y consiste en eliminar esas escamas o células muertas de piel mediante una acción química o física. Se usa para mejorar el aspecto de la piel dañada por el sol, disminuir arrugas, mejorar cicatrices de acné o varicela, y decolorar o eliminar manchas.</p>
	        <a href="#">Volver arriba /</a></footer><a href="#reservar">Reservar YA</a></footer>
			</div>
	        <div class="col-md-4 col-md-offset-2">
			   <img src="../../assets/img/exfolacion.jpg" class="img-responsive img-circle"  alt="exfolacion"  width= "500" height="500"/>
	        </div>
	    </div>
		<br><br>
		</div>
	    <div class="container">
		<A name="cejas"><h2 class="top-header2 col-md-offset-4">Depilación cejas
		</A></div>
		<br><br><br>
		<div class="container">
	    <div class="row padding">
	        <div class="col-md-4">
	        <img src="../../assets/img/depilacion-cejas.jpg" class="img-responsive img-circle"  alt="cejas"  width= "500" height="500"/>
	        </div>
	        <div class="col-md-4 col-md-offset-2">
	           <p class="top-header3 text-justify">La depilación facial es una técnica cosmética que consiste en eliminar el vello (exceso de cejas).</p>
	        <a href="#">Volver arriba /</a></footer><a href="#reservar">Reservar YA</a></footer>
			</div>
	    </div>
		<br><br>
		</div>
		<div class="container">
		<A name="pedi"><h2 class="top-header2 col-md-offset-4">Pedicure
		</A></div>
		<br><br><br>
		<div class="container">
	    <div class="row padding">
	        <div class="col-md-4">
	            <p class="top-header3 text-justify">El pedicure generalmente se refiere a la eliminación de células muertas de la piel, en la parte inferior de los pies, y  se  realiza frotándolos usado una áspera piedra llamada piedra pómez. El pedicure SPA consiste en una desinfección, exfoliación, tratamiento de cutícula y uñas y por último un masaje..</p>
	        <a href="#">Volver arriba /</a></footer><a href="#reservar">Reservar YA</a></footer>
			</div>
	        <div class="col-md-4 col-md-offset-2">
			   <img src="../../assets/img/pedicure.jpg" class="img-responsive img-circle"  alt="pedicure"  width= "700" height="700"/>
	        </div>
	    </div>
		<br><br>
		</div>
	    <div class="container">
		<A name="perm"><h2 class="top-header2 col-md-offset-4">Permanente
		</A></div>
		<br><br><br>
		<div class="container">
	    <div class="row padding">
	        <div class="col-md-4">
	        <img src="../../assets/img/permanente.jpg" class="img-responsive img-circle"  alt="permanente"  width= "500" height="500"/>
	        </div>
	        <div class="col-md-4 col-md-offset-2">
	           <p class="top-header3 text-justify">El proceso que llamamos olas permanente utiliza productos químicos para romper y alterar las cadenas de sulfuro del cabello. Cuando el cabello se lava y se enrolla alrededor de una especie de varilla (el tamaño de la vara se utiliza para determinar el tamaño del rizo), definimos con esta la forma que queremos que tome.</p>
	        <a href="#">Volver arriba /</a></footer><a href="#reservar">Reservar YA</a></footer>
			</div>
	    </div>
		</div>
		<br><br>
		<div class="container">
		<A name="mani"><h2 class="top-header2 col-md-offset-4">Manicure
		</A></div>
		<br><br><br>
		<div class="container">
	    <div class="row padding">
	        <div class="col-md-4">
	            <p class="top-header3 text-justify">El manicure consiste en el embellecimiento y cuidado de las manos, la palabra manicure viene del latín " manus i curare" mano i curar "manicura". Las uñas representan el espejo de nuestro estado de salud, del cuidado personal y de nuestra personalidad.</p>
	        <a href="#">Volver arriba /</a></footer><a href="#reservar">Reservar YA</a></footer>
			</div>
	        <div class="col-md-4 col-md-offset-2">
			   <img src="../../assets/img/manicure.jpg" class="img-responsive img-circle"  alt="manicure"  width= "500" height="500"/>
	        </div>
	    </div>
		</div>
		</div>
		<div class="alt3">
	         <div class="container">
	             <footer>&copy; Grupo Cualquiera Sea Nuestro Numero<br><a href="#">Volver arriba</a></footer>
	         </div>
	    </div>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</body>
</html>
