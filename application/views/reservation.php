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
</head>
<body>
	<div class="navbar-static-top navbar-inverse">
	     <div class="container">
	        <div class="navbar-brand">
	           Reserva de servicio
	        </div>
			<div class="row">
	        <div class="collapse navbar-collapse navHeaderCollapse"> <div class="navbar-form navbar-right" align="right">
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
					<?php if (isset($error)) { echo $error; }
								else {
									echo "Para un mejor servicio completa todos los datos";
								}?>
	      </div>
	      <div class="panel-body">
	        <?php echo form_open('reservation_controller/save'); ?>
						<?php echo form_label('Nombre: ', 'dname', array('class' => 'control-label')); ?>
	          <div class="row">
	            <div class="col-md-6 padding-top-10">
								<?php
								if(isset($name)){echo form_input(array('id' => 'dname', 'class' => 'form-control', 'placeholder' => 'Primer Nombre', 'name' => 'dname'), $name);
								}else{echo form_input(array('id' => 'dname', 'class' => 'form-control', 'placeholder' => 'Primer Nombre', 'name' => 'dname'));} ?>
	            </div>
	            <div class="col-md-6 padding-top-10">
								<?php
								if(isset($lastname)){echo form_input(array('id' => 'dlname', 'class' => 'form-control', 'placeholder' => 'Apellido', 'name' => 'dlname'), $lastname);
								}else {echo form_input(array('id' => 'dlname', 'class' => 'form-control', 'placeholder' => 'Apellido', 'name' => 'dlname'));} ?>
	              </div>
	              <div class="col-md-6 padding-top-10">
	              	<label style="display: inline;" for="datetime" class="control-label">Fecha y Bloque</label>
									<div>
	              		<input type="datetime-local" class="form-control" style="display: inline; width: 70%" id="datetime" name="datetime">
										<?php
											$options2 = array(
																1    => '9:00',
																2    => '9:30',
																3    => '10:00',
																4    => '10:30',
																5    => '11:00',
																6    => '11:30',
																7    => '12:00',
																8    => '12:30',
																9    => '13:00',
																10   => '13:30',
														    11   => '14:00',
																12    => '14:30',
																13    => '15:00',
																14    => '15:30',
																15    => '16:00',
																16    => '16:30',
																17    => '17:00',
																18    => '17:30',
																19    => '18:00',
																20    => '18:30',
																21    => '19:00',
																22    => '19:30',
																23    => '20:00',
																24    => '20:30',
																25    => '21:00'
															);
											echo form_dropdown('dblock', $options2, 'large', 'class="form-control", id="dblock", style="display: inline; width: 20%"');
										?>
									</div>
	              </div>
	              <div class="col-md-6 padding-top-10">
								<?php echo form_label('Telefono: ', 'dphone', array('class' => 'control-label')); ?>
								<?php
								if(isset($phone)){echo form_input(array('id' => 'dphone', 'class' => 'form-control', 'placeholder' => 'Tu Numero Telefonico', 'name' => 'dphone'), $phone);
								}else {echo form_input(array('id' => 'dphone', 'class' => 'form-control', 'placeholder' => 'Tu Numero Telefonico', 'name' => 'dphone'));} ?>
	              </div>
	            </div>

	            <div class="row">
	            <div class="col-md-6 padding-top-10">
								<?php echo form_label('Email: ', 'demail', array('class' => 'control-label')); ?>
								<?php
								if(isset($email)){echo form_input(array('id' => 'demail', 'class' => 'form-control', 'placeholder' => 'Direccion Email', 'name' => 'demail'), $email);
								}else {echo form_input(array('id' => 'demail', 'class' => 'form-control', 'placeholder' => 'Direccion Email', 'name' => 'demail'));} ?>
	            </div>
	            <div class="col-md-6 padding-top-10">
								<?php
									$options = array(
														0  => 'Ictioterapia',
														1    => 'Masaje Reductor',
														2    => 'Depilación De Piernas',
														3    => 'Depilación De Brazos',
														4    => 'Masaje De Relajación',
														5    => 'Masaje De Drenaje Linfático',
														6    => 'Masaje Descontracturante',
														7    => 'Limpieza Facial',
														8    => 'Depilación Facial Con Cera',
														9    => 'Exfoliación e Hidratación Corporal',
														10    => 'Depilación De Cejas',
														11    => 'Pedicure',
														12    => 'Permanente',
														13    => 'Manicure'
													);
									echo form_label('Servicio: ', 'dservice', array('class' => 'control-label'));
									echo form_dropdown('dservice', $options, 'large', 'class="form-control", id="dservice"');
								?>
	            </div>
	          </div>
			          <div class="form-group">
									<?php echo form_label('Comentarios adicionales: ', 'dmsg', array('class' => 'control-label')); ?>
									<?php echo form_textarea(array('id' => 'dmsg', 'class' => 'form-control', 'placeholder' => 'Observaciones', 'name' => 'dmsg')); ?>
	        </div>

	          <br>
	          <div class="row">
	            <div class="col-md-2 col-md-offset-5">
								<?php echo form_submit(array('id' => 'submit', 'value' => 'Realizar Reserva','class' => "btn btn-success")); ?>
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
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</body>
</html>
