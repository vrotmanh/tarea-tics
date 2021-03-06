<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<title>Mi SPAcio Propio</title>
<link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
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
             <button style="display: inline; margin-left: 10px;" class="btn btn-default" onclick="window.location.href='<?php echo site_url("user_controller/logout");?>'">Cerrar Sesion</button>
          <?php } else { ?>
            <?php echo form_open('user_controller/login',array('class' => 'form-inline', 'style' => 'display: inline;')); ?>
            <?php if(isset($error)){ ?>
              <p style="color: red; margin: 0 10px 0 0; font-size: 15px; display: inline;"> <?php echo print_r($error); ?> </p>
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
	<br>
  <div class="container padding-top-10">
    <div class="panel panel-danger">
      <div class="panel-heading">
        <?php if (isset($error)) { echo print_r($error); }
              else {
                echo "Por Favor Llene Todos Los Campos";
              }?>
      </div>
      <div class="panel-body">

        <?php echo form_open_multipart('user_controller/save_register'); ?>
          <?php echo form_label('Nombre: ', 'dname'); ?>
          <div class="row">
            <div class="col-md-6 padding-top-10">
              <?php echo form_input(array('id' => 'dname', 'class' => 'form-control', 'placeholder' => 'Primer Nombre', 'name' => 'dname')); ?>
            </div>
            <div class="col-md-6 padding-top-10">
              <?php echo form_input(array('id' => 'dlname', 'class' => 'form-control', 'placeholder' => 'Apellido', 'name' => 'dlname')); ?>
              </div>

              <div class="col-md-6 padding-top-10">
              <?php echo form_label('Avatar: ', 'davatar'); ?>
              <input type="file" class="form-control" name="userfile" size="20" >
              </div>
              <div class="col-md-6 padding-top-10">
              <?php echo form_label('Telefono: ', 'dphone'); ?>
              <?php echo form_input(array('id' => 'dphone', 'class' => 'form-control', 'placeholder' => 'Tu Numero Telefonico', 'name' => 'dphone')); ?>
              </div>
            </div>

			<div class="row">
            <div class="col-md-6 padding-top-10">
              <?php echo form_label('Email: ', 'demail'); ?>
              <?php echo form_input(array('id' => 'demail', 'class' => 'form-control', 'placeholder' => 'Direccion Email', 'name' => 'demail')); ?>
            </div>
            <div class="col-md-6 padding-top-10">
              <?php
                $options = array(
                          1  => 'Hombre',
                          0    => 'Mujer',
                        );
                echo form_label('Sexo: ', 'dgender');
                echo form_dropdown('dgender', $options, 'large', 'class="form-control", id="dgender"');
              ?>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 padding-top-10">
              <?php echo form_label('Contraseña: ', 'dpassword'); ?>
              <?php echo form_input(array('id' => 'dpassword', 'type' => 'password', 'class' => 'form-control', 'placeholder' => 'Escribe tu Contraseña', 'name' => 'dpassword')); ?>
            </div>
            <div class="col-md-6 padding-top-10">
              <?php echo form_label('Nombre de Usuario: ', 'dusername'); ?>
              <?php echo form_input(array('id' => 'dusername', 'class' => 'form-control', 'placeholder' => 'Nombre de Usuario', 'name' => 'dusername')); ?>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 padding-top-10">
              <div class="checkbox">
                <label>
                </label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-2 col-md-offset-5">
              <?php echo form_submit(array('id' => 'submit', 'value' => 'Registrarse','class' => "btn btn-success")); ?>
            </div>
          </div>
        <?php echo form_close();?>


      </div>
    </div>
  </div>
  </div>
 <div class="alt3">
         <div class="container">
             <footer>&copy; Grupo Cualquiera Sea Nuestro Numero<br><a href="#">Volver arriba</a></footer>
         </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</body>
</html>
