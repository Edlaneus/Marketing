   
   <div class="container">
      <h1 align="center" style="margin-top: 5%;">Agregar Publicación</h1>
       <form class="form-horizontal" style="position: relative; margin-top: 5%; left: 18%;" action="<?php echo base_url();?>cagregar/guardar" enctype="multipart/form-data" method="POST" >

       		<div class="form-group" >
    		  <label class="col-sm-2 control-label">Nombre</label>
    		  <div class="col-sm-4">
      	     	 <input type="text" class="form-control" name="txtNombreE" placeholder="Nombre">
    		  </div>
  			</div>
        	<div class="form-group">
         	  <label class="col-sm-2 control-label">Fecha</label>
          <div class="col-sm-4">
               <input type="date" class="form-control" name="datFecI" placeholder="Fecha de evento">
            </div>
         </div>
       		<div class="form-group">
    		  <label class="col-sm-2 control-label">Contenido</label>
    		  <div class="col-sm-4">
      	     	 <input type="text" class="form-control" name="txtContenido" placeholder="Contenido de la Publicación">
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
		    <div class="col-sm-offset-2 col-sm-10" align="center" style="left: -25%; margin-top: 2%;">
		      <button type="submit" class="btn btn-primary">Guardar</button>
		    </div>
       	</form>
   </div>




