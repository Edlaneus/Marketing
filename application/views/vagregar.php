   <div class="container">

       <form class="form-horizontal" action="<?php echo base_url();?>cagregar/guardar" enctype="multipart/form-data" method="POST" >

       		<div class="form-group">
    		  <label class="col-sm-2 control-label">Nombre</label>
    		  <div class="col-sm-4">
      	     	 <input type="text" class="form-control" name="txtNombreE" placeholder="Nombre">
    		  </div>
  			</div>
        	<div class="form-group">
         	  <label class="col-sm-2 control-label">Fecha</label>
          <div class="col-sm-4">
               <input type="text" class="form-control" name="datFecI" placeholder="Fecha de evento">
            </div>
         </div>
       		<div class="form-group">
    		  <label class="col-sm-2 control-label">Contenido</label>
    		  <div class="col-sm-4">
      	     	 <input type="text" class="form-control" name="txtContenido" placeholder="Descripcion del evento">
    		  </div>
  			</div>
 	

       
       		<div class="form-group">
    		  <label class="col-sm-2 control-label">Titulo</label>
    		  <div class="col-sm-4">
      	     	 <input type="text" class="form-control" name="titImagen" placeholder="Nombre de la Imagen">
    		  </div>
  			</div>

       		<div class="form-group">
    		  <label class="col-sm-2 control-label">Imagen</label>
    		  <div class="col-sm-4">
      	     	 <input type="file" name="fileImagen" >
    		  </div>
  			</div>
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-primary">Guardar</button>
		    </div>
       	</form>
   </div>




