<?php include_once('header.php'); ?>
  <div class="container">
	<h3>Campaña</h3>
	<h4><?php echo $post->nombre; ?></h4>
	<p><?php echo $post->descripcion; ?></p>
	<p><?php echo $post->Objetivo; ?></p>
	<p><?php echo $post->Hora; ?></p>
	<p><?php echo $post->date_created; ?></p>
	        <?php echo anchor('welcome/home','Regresar',['class'=>'btn btn-primary']);?>

  </div>
<?php include_once('footer.php'); ?>
