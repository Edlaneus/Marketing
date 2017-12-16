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
                    <form class="form-horizontal" action="<?php echo base_url();?>verusr/actualizaestacion" method="POST">

                    <input type="hidden" id="idPersona" name="idPersona" 
                                value="<?php echo $persona['idPersona']; ?>">

                    <div class="form-group">
                      <label for="nom" class="col-sm-2 control-label">Nombre</label>
                      <div class="col-sm-10">
                         <input type="text" class="form-control" id="nom" name="nom" 
                             value="<?php echo $persona['nombre']; ?>">
                      </div>
                        </div>

                    <div class="form-group">
                      <label for="appaterno" class="col-sm-2 control-label">Apellido Paterno</label>
                      <div class="col-sm-10">
                         <input type="text" class="form-control" id="appaterno" name="appaterno" value="<?php echo $persona['appaterno'] ?>">
                      </div>
                        </div>

                    <div class="form-group">
                      <label for="email" class="col-sm-2 control-label">Correo Electronico</label>
                      <div class="col-sm-10">
                         <input type="text" class="form-control" id="email" name="email" value="<?php echo $persona['email'] ?>">
                      </div>
                        </div>

                    <div class="form-group">
                      <label for="fecnac" class="col-sm-2 control-label">Tipo de usuario</label>
                      <div class="col-sm-10">
                         <input type="text" class="form-control" id="fecnac" name="fecnac" 
                           value="<?php echo $persona['tipo_usuario'] ?>">
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

