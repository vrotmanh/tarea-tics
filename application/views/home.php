<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<title>Mi SPAcio Propio</title>
<link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link href="../../assets/css/bootstrap-theme.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Amatic+SC"/>
<link href='https://fonts.googleapis.com/css?family=Indie+Flower|Pacifico|Yellowtail|Satisfy|Playball|Great+Vibes|Alex+Brush|Niconne|Fredericka+the+Great' rel='stylesheet' type='text/css'>
<link href="../../assets/css/estilo.css" rel="stylesheet">
</head>

<body>

<div class="navbar-static-top navbar-inverse">
     <div class="container">
		<div class="row">
        <div class="collapse navbar-collapse navHeaderCollapse"> <div class="navbar-form navbar-right" align="right">
          <?php if(isset($name)){ ?>
            <?php if(isset($info)){ ?>
              <p style="color: #DF4CA2; margin: 0 10px 0 0; font-size: 15px; display: inline;"> <?php echo $info; ?> </p>
              <?php } ?>
             <p style="color: white; margin: 0 0 0px; font-size: 17px; display: inline;"> Bienvenido, <?php echo $name." ".$lastname; ?> </p>
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
      <h1 class="top-header col-md-offset-4">Tu lugar de relajo y belleza</h1>
      <br>
    </div>
    </div>

    <hr />

    <div class="jumbotron">
    <div class="container">
      <h1 class="top-header col-md-offset-4">Quienes somos</h1>
      <br>
    </div>
    <div class="row padding">
        <div class="col-md-6">
        <img src="../../assets/img/spacio2.jpg" class="img-responsive img-thumbnail"  alt="sede" width= "1000000" height="1000000"/>
        </div>
        <div class="col-md-6">
           <p class="top-header3 text-justify">Somos una empresa compromedita con tu bienestar con servicios pensados para tu cuerpo y alma.<br>Descubre todo lo que tenemos para ti...</p>
		   <center><button type="submit" name="reserve" class="btn btn-info">Conocer más</button><center>
        </div>
    </div>
    </div>
    </div>

    <hr />

    <div class="jumbotron">
    <div class="row">
        <div class="container">
		<h1 class="top-header col-md-offset-4">Quiero mi espacio...</h1>
        <div class="col-md-6">
		<p class="top-header3">Conoce nuestros servicios diseñados para tu satisfacción</p>
         <center><button type="submit" name="register" class="btn btn-info" onclick="window.location.href='<?php echo site_url("layouts_controller/services");?>'">Ver servicios</button></center>
        </div>
        <div class="col-md-6">
		<center><p class="top-header3">Pide tu cita y ven a pasar un rato estupendo</p></center>
        <center><button type="submit" name="reserve" class="btn btn-info" onclick="window.location.href='<?php echo site_url("reservation_controller/index");?>'">Reservar</button><center>
        </div>
        </div>
    </div>
    </div>

    <hr />

	<div class="jumbotron">
    <div class="row">
	<h1 class="top-header col-md-offset-4"> Dejanos un comentario</h1>
    <div class="container">
    <form role="form">
        <div class="form-group">
             <label for="email">Email:</label>
             <input type="email" class="form-control" id="email" placeholder="Email">
        </div>
        <div class="form-group">
             <label for="name">Nombre:</label>
             <input type="text" class="form-control" id="name" placeholder="Su Nombre">
        </div>
        <div class="form-group">
             <label for="message">Mensaje:</label>
             <textarea class="form-control" name="message" id="message" placeholder="Escriba Su Mensaje"></textarea>
        </div>
        <center><button type="submit" class="btn btn-default">Enviar</button></center>
    </form>
    </div>
	</div>
	</div>
    <br>
    <div class="alt3">
         <div class="container">
             <footer>&copy; Grupo Cualquiera Sea Nuestro Numero<br><a href="#">Volver arriba</a></footer>
         </div>
     </div>

</body>
</html>
