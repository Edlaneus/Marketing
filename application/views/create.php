<?php include_once('header.php'); ?>
	<div class="container">
    <?php echo form_open('welcome/save',['class'=>'form-horizontal']);
 ?>
  <fieldset>
    <legend>Campaña</legend>
    <div class="form-group"><!--Aqui inicia el input del titulo-->
      <label for="inputEmail" class="col-md-2 control-label">Titulo</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'nombre','placeholder'=>'Titulo','class'=>'form-control']); ?>
      </div>

      <div class="col-md-5">
        <?php echo form_error('nombre','<div class="text-danger">','</div>'); ?>
      </div>

    </div><!--Aqui termina el input del titulo-->

    <div class="form-group"><!--Aqui inicia el txtAREA-->
      <label for="textArea" class="col-md-2 control-label">Descripcion</label>
      <div class="col-md-5">
        <?php echo form_textarea(['name'=>'descripcion','placeholder'=>'Descripcion','class'=>'form-control']); ?>
      </div>
      <div class="col-md-5">
        <?php echo form_error('descripcion','<div class="text-danger">','</div>'); ?>
      </div>
    </div><!--Aqui termina el txtAREA-->
    <div class="form-group"><!--Aqui inicia el input del titulo-->
      <label for="inputEmail" class="col-md-2 control-label">Objetivo</label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'Objetivo','placeholder'=>'Objetivo','class'=>'form-control']); ?>
      </div>

      <div class="col-md-5">
        <?php echo form_error('objetivo','<div class="text-danger">','</div>'); ?>
      </div>

    </div>
    <div class="form-group"><!--Aqui inicia el input del titulo-->
      <label for="inputEmail" class="col-md-2 control-label">Hora </label>
      <div class="col-md-5">
        <?php echo form_input(['name'=>'Hora','placeholder'=>'Hora','class'=>'form-control']); ?>
      </div>

      <div class="col-md-5">
        <?php echo form_error('hora','<div class="text-danger">','</div>'); ?>
      </div>

    </div>


    <div class="form-group" ><!--Aqui inicia el input del titulo-->
      <label for="inputEmail" class="col-md-2 control-label">fecha</label>
      <div class="col-md-5 ">
        <?php echo form_input(['name'=>'date_created','placeholder'=>'fecha','class'=>'form-control']); ?>
      </div>

      <div class="col-md-5">
        <?php echo form_error('date_created','<div class="text-danger">','</div>'); ?>
      </div>

    </div>



    <div class="form-group"><!--Aqui inicia el boton-->
      <div class="col-md-10 col-md-offset-2">
        <?php echo form_submit(['name'=>'submit','value'=>'submit','class'=>'btn btn-primary']);?>
        <?php echo anchor('welcome/home','Regresar',['class'=>'btn btn-primary']);?>
      </div>
    </div>
  </fieldset>
<?php echo form_close(); ?>
	</div>
<?php include_once('footer.php'); ?>