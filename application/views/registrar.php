 <!-- Basic Form Wizard -->
<div class="row">
    <div class="col-md-12">

        <div class="panel panel-default">
            <div class="panel-heading"> 
                <h3 class="panel-title" style="text-align: center; font-size: 25px">Agregar usuario</h3> 
            </div> 
            <div class="panel-body"> 
                <form id="basic-form" action="<?php echo base_url();?>registro/newusuario" method="POST">
                    <div>
                        <h3>Cuenta</h3>
                        <section>
                            <div class="form-group clearfix">
                                <label class="col-lg-2 control-label " for="userName">Nombre de usuario *</label>
                                <div class="col-lg-10">
                                    <input class="form-control required" id="userName" name="userName" type="text">
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <label class="col-lg-2 control-label " for="password">Contraseña*</label>
                                <div class="col-lg-10">
                                    <input id="password" name="password" type="password" class="required form-control">

                                </div>
                            </div>

                            <div class="form-group clearfix">
                                <label class="col-lg-2 control-label " for="confirm">Confirmar contraseña*</label>
                                <div class="col-lg-10">
                                    <input id="confirm" name="confirm" type="password" class="required form-control">
                                </div>
                            </div>
                        </section>
                        <h3>Perfil</h3>
                        <section>
                            <div class="form-group clearfix">

                                <label class="col-lg-2 control-label" for="name">Nombre*</label>
                                <div class="col-lg-10">
                                    <input id="name" name="name" type="text" class="required form-control">
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <label class="col-lg-2 control-label " for="app">Apellido*</label>
                                <div class="col-lg-10">
                                    <input id="app" name="app" type="text" class="required form-control">

                                </div>
                            </div>

                            <div class="form-group clearfix">
                                <label class="col-lg-2 control-label " for="email">Correo Electronico*</label>
                                <div class="col-lg-10">
                                    <input id="email" name="email" type="text" class="required email form-control">
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <label class="col-lg-2 control-label " for="wfirstName2"> Tipo de usuario: <span class="danger"></span> </label>
                                <div class="col-lg-10">
                                    <input id="usuario" name="usuario" type="text" class="required email form-control">
                                </div>                                                    
                            </div>
                            <!--<div class="form-group clearfix">
                                <label class="col-lg-2 control-label " for="wfirstName2"> Fecha de Registro: <span class="danger"></span> </label>
                                <div class="col-lg-10">
                                    <input id="email" name="fRegistro" type="date" class="required email form-control">
                                </div>                                                    
                            </div>-->
                            <div class="form-group clearfix" style="margin-top: 2%;">
                                <label class="col-lg-12 control-label ">(*) Campos Obligatorios</label>
                            </div>
                        </section>
                            <div class="col-sm-offset-2 col-sm-10" align="center" style="left: 36%; margin-top: -4%; font-size: 25px;">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                    </div>
                </form> 
            </div>  <!-- End panel-body -->
        </div> <!-- End panel -->

    </div> <!-- end col -->

</div> <!-- End row -->

<script type="text/javascript">
    var baseurl = "<?php echo base_url(); ?>";
</script>
