<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Mi SPAcio Propio</title>
	<link href='https://fonts.googleapis.com/css?family=Indie+Flower|Pacifico|Yellowtail|Satisfy|Playball|Great+Vibes|Alex+Brush|Niconne|Fredericka+the+Great' rel='stylesheet' type='text/css'>
  	<link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
  	<link href="../../assets/css/basic-template.css" rel="Stylesheet" />
  	<link href="../../assets/css/estilo.css" rel="stylesheet">
	<link rel="icon" type="image/png" href="../../assets/img/favicon.png" />
</head>
<body>
	<div class="navbar-static-top navbar-inverse">
	<div class="navbar-brand">
	     Administrador de clientes
	</div>
	     <div class="container">
			<div class="row">
	        <div class="collapse navbar-collapse navHeaderCollapse"> <div class="navbar-form navbar-right" align="right">
							 <p style="display: inline; color: #EFDFDF;"><?php if(isset($msg)) { echo $msg; } ?></p>
	             <button style="display: inline; margin-left: 10px;" class="btn btn-default" onclick="window.location.href='<?php echo site_url("user_controller/logout");?>'">Cerrar Sesion</button>
	        </div>
	        </div>
	        </div>
	     </div>
	</div>


	  <div class="jumbotron">
	  <div class="container">
	  <h1 class="top-header col-md-offset-4">Lista de clientes y reservas</h1>
	  <br><br><br><br>

	  <table class="table table-striped">
	  <thead>
	    <tr>
	      <th>#</th>
				<th>Avatar</th>
				<th>Nombre de usuario</th>
	      <th>Primer nombre</th>
	      <th>Apellido</th>
	      <th>Telefono</th>
		  <th>Email</th>
		  <th>Control de acceso</th>
	    </tr>
	  </thead>
	  <tbody>

		<?php echo form_open('user_controller/save_admin'); ?>
		<?php
			$count = 0;
			if (isset($users)){
			foreach ($users as &$value) {
				$count++;
		?>
	    <tr>
	      <td><?php	echo $count;?></td>
				<td><img style="width: 90px;" src="<?php echo "../../uploads/".$value['avatar']; ?>"></td>
				<td><?php	echo $value['username'];?></td>
	      <td><?php	echo $value['name'];?></td>
	      <td><?php	echo $value['lastname'];?></td>
	      <td><?php	echo $value['phone'];?></td>
		  	<td><?php	echo $value['email'];?></td>
		  <td>
		<label>Baneado</label>
		<?php if($value['ban'] == 1){ ?>
			<input type="checkbox" name="<?php	echo $value['username'];?>" checked>
		<?php } else { ?>
			<input type="checkbox" name="<?php	echo $value['username'];?>">
		<?php } ?>
		</div></td>
	  </tr>
		<?php }} ?>

	  </tbody>
	  </table>
		<?php echo form_submit(array('id' => 'submit', 'value' => 'Guardar cambios','class' => "btn btn-success", 'style' => 'float: right')); ?>
		<?php echo form_close();?>

		<br/> <br/>

	<table class="table table-striped">
	<thead>
	<tr>
		<th>Nombre</th>
	    <th>Apellido</th>
	    <th>Fecha</th>
	    <th>Bloque</th>
		<th>Email</th>
		<th>Teléfono</th>
		<th>Servicio</th>
		<th>Comentario</th>
	</tr>
	</thead>
	<tbody>
	<?php
		$count2 = 0;
		if (isset($reservations)) {
			foreach ($reservations as &$value) {
				$count2++;
	?>
	<tr>
		<td><?php	echo $value['name'];?></td>
	    <td><?php	echo $value['lastname'];?></td>
	    <td><?php	echo $value['date'];?></td>
	    <td><?php	echo $value['block'];?></td>
		<td><?php	echo $value['email'];?></td>
		<td><?php	echo $value['phone'];?></td>
		<td><?php	echo $value['service'];?></td>
		<td><?php	echo $value['comment'];?></td>
	</tr>

	<?php } } ?>



	</tbody>
	</table>




	</div>
	</div>

	    <div class="alt3">
	         <div class="container">
	             <footer>&copy; Grupo 7<br><a href="#">Volver arriba</a></footer>
	         </div>
	    </div>
</body>
</html>
