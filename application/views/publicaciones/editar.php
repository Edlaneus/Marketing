<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->                      
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Usuarios</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Editar Datos</h3>
                        </div>
                    <div class="panel-body">
                    <div class="container" style="margin-left: -5%;">
                    <form class="form-horizontal" action="<?php echo base_url();?>verpublicaciones/actualizar" method="POST">

                    <input type="hidden" id="idPersona" name="idPersona" 
                                value="<?php echo $publicacion['id_evento']; ?>">

                    <div class="form-group">
                      <label for="nom" class="col-sm-2 control-label">Titulo de la publicación</label>
                      <div class="col-sm-10">
                         <input type="text" class="form-control" id="nom" name="nom" 
                             value="<?php echo $publicacion['nombre_evento']; ?>">
                      </div>
                        </div>

                    <div class="form-group">
                      <label for="appaterno" class="col-sm-2 control-label">Contenido</label>
                      <div class="col-sm-10">
                         <input type="text" class="form-control" id="appaterno" name="appaterno" value="<?php echo $publicacion['descripcion'] ?>">
                      </div>
                        </div>

                    <div class="form-group">
                      <label for="email" class="col-sm-2 control-label">Fecha de publicación</label>
                      <div class="col-sm-10">
                         <input type="date" class="form-control" id="email" name="email" value="<?php echo $publicacion['fecInicio'] ?>">
                      </div>
                        </div>

                    <div class="form-group">
                      <label for="fecnac" class="col-sm-2 control-label">Status(Ingrese 1 para aprobar o 3 para desaprobar)</label>
                      <div class="col-sm-10">
                         <input type="number" class="form-control" id="fecnac" name="fecnac" 
                           value="<?php echo $publicacion['status'] ?>">
                      </div>
                        </div>

                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-primary">Actualizar</button>
                    </div>
                  </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End row -->
        </div> <!-- container -->
                   
    </div> <!-- content -->
</div>
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->

