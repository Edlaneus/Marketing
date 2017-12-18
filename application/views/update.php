<?php include_once('header.php'); ?>
  <div class="container">
    <?php echo form_open("welcome/change/{$post->numevento}",['class'=>'form-horizontal']);
 ?>
  <fieldset>
    <legend>Actualiza Campaña</legend>
    <div class="form-group"><!--Aqui inicia el input del titulo-->
      <label for="inputEmail" class="col-md-2 control-label">Titulo</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'nombre','placeholder'=>'Titulo','class'=>'form-control','value'=>set_value('nombre',$post->nombre)]); ?>
      </div>

      <div class="col-md-5">
        <?php echo form_error('nombre','<div class="text-danger">','</div>'); ?>
      </div>

    </div><!--Aqui termina el input del titulo-->

    <div class="form-group"><!--Aqui inicia el txtAREA-->
      <label for="textArea" class="col-md-2 control-label">Descripcion</label>
      <div class="col-md-5">
        <?php echo form_textarea(['name'=>'descripcion','placeholder'=>'Descripcion','class'=>'form-control','value'=>set_value('descripcion',$post->descripcion)]); ?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('descripcion','<div class="text-danger">','</div>'); ?>
      </div>
    </div><!--Aqui termina el txtAREA-->
    <div class="form-group"><!--Aqui inicia el input del Objetivo-->
      <label for="inputEmail" class="col-md-2 control-label">Objetivo</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'objetivo','placeholder'=>'Objetivo','class'=>'form-control','value'=>set_value('nombre',$post->Objetivo)]); ?>
      </div>

      <div class="col-md-5">
        <?php echo form_error('nombre','<div class="text-danger">','</div>'); ?>
      </div>

    </div>
    <div class="form-group"><!--Aqui inicia el input de la hora-->
      <label for="inputEmail" class="col-md-2 control-label">Hora</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'hora','placeholder'=>'Hora','class'=>'form-control','value'=>set_value('nombre',$post->Hora)]); ?>
      </div>

      <div class="col-md-5">
        <?php echo form_error('nombre','<div class="text-danger">','</div>'); ?>
      </div>

    </div>


  <div class="form-group"><!--Aqui inicia el input de la hora-->
      <label for="inputEmail" class="col-md-2 control-label">Fecha</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'date_created','placeholder'=>'date_created','class'=>'form-control','value'=>set_value('nombre',$post->date_created)]); ?>
      </div>

      <div class="col-md-5">
        <?php echo form_error('nombre','<div class="text-danger">','</div>'); ?>
      </div>

    </div>


    <div class="form-group"><!--Aqui inicia el boton-->
      <div class="col-md-10 col-md-offset-2">
        <?php echo form_submit(['name'=>'submit','value'=>'Update','class'=>'btn btn-primary']);?>
        <?php echo anchor('welcome/home','Regresar',['class'=>'btn btn-primary']);?>
      </div>
    </div>
  </fieldset>
<?php echo form_close(); ?>
  </div>
<?php include_once('footer.php'); ?>