            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="pull-left page-title">Usuarios en Operación</h2>
                </div>
            </div>


            <div class="panel">
                <div class="panel-body">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido Paterno</th>
                            <th>Email</th>
                            <th>Fecha de Registro</th>
                            <th>Tipo de Usuario</th>
                            <th></th>
                            <th></th>
                        </tr>
                            <?php
                                for($i=0;$i<count($persona);$i++){  ?>
                                    <tr>
                                        <td><?php echo $persona[$i]['nombre']; ?></td>
                                        <td><?php echo $persona[$i]['appaterno']; ?></td>
                                        <td><?php echo $persona[$i]['email']; ?></td>
                                        <td><?php echo $persona[$i]['fecnac']; ?></td>
                                        <td><?php echo $persona[$i]['tipo_usuario']; ?></td>
                                        <td>
                                            <a href="<?php echo base_url();?>verusr/editestacion/<?php echo $persona[$i]['idPersona']; ?> "><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>               
                                         </td> 
                                         <td>
                                            <a onclick="abre_modal($(this).attr('data-persona'),$(this).attr('data'));" data-persona="<?php echo $persona[$i]['nombre'] ?>" data="<?php echo base_url();?>verusr/deleteestacion/<?php echo $persona[$i]['idPersona'] ?>">
                                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                            </a>                
                                         </td>           
                                    </tr>
                            <?php }  ?>           
                    </table>
                </div>
            </div>
                <!-- end: page -->

     <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"></h4>
                </div>
            <div class="modal-body">
                    ¿Estas seguro de borra este contacto?
            </div>
            <div class="modal-footer">
                    <button  type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <a id="borra" type="button" class="btn btn-primary" onclick="borrar(this)">Eliminar contacto</a>
            </div>
            </div>
        </div>
     </div>


<script>

    function abre_modal(nom,urlborra) {
        $('#myModalLabel').text(nom);
        $('#borra').attr('data',urlborra);
        $("#myModal").modal('show');
    }

    function borrar(temp){
        enlace = $(temp).attr('data');
        $(temp).attr('href',enlace);    
    }

</script>

<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->