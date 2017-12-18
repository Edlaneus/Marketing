<?php include_once('header.php'); ?>
		<div class="container">
			<h3>Campañas</h3>
			<?php echo anchor('Welcome/create','Agregar nueva campaña',['class'=>'btn btn-primary']);?>
			<?php if ($msg = $this->session->flashdata('msg')):?>
				<?php echo $msg; ?>
			<?php endif; ?>
			<table class="table table-striped table-hover "> <!-- Tabla , de la informacion-->
				<thead>
				   <tr>
				   		<th>Id</th>
					  <th>Nombre de la campaña</th>
					  <th>Descripcion</th>
					  <th>Objetivo</th>
					  <th>Hora y fecha</th>
					  <th>Fecha de creacion</th>
					  <th>Accion</th>
					</tr>
				</thead>
				<tbody>
					<?php if(count($posts)):?>
					<?php foreach ($posts as $post): ?>
				    <tr>
				    	<td><?php echo $post->numevento;?></td>
				      <td><?php echo $post->nombre;?></td>
				      <td><?php echo $post->descripcion;?></td>
				      <td><?php echo $post->Objetivo;?></td>
				      <td><?php echo $post->Hora; ?></td>
				      <td><?php echo $post->date_created;?></td>
				      <td>
				      	<?php echo anchor("Welcome/view/{$post->numevento}",'Ver',['class'=>'label label-primary']);?>
				      	<?php echo anchor("Welcome/update/{$post->numevento}",'Actualizar',['class'=>'label label-success']);?>
				      	<?php echo anchor("Welcome/delete/{$post->numevento}",'Eliminar',['class'=>'label label-danger']);?>
				     
				      </td>
				    </tr>
				<?php endforeach; ?>
				    <?php else:?>
				    	<tr>
				    		<td>No se encontro</td>
				    	</tr>
				    <?php endif; ?>
				</tbody>
			</table> <!--Fin de la tablas-->
		</div>

<?php include_once('footer.php'); ?>