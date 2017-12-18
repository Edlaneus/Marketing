            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="pull-left page-title">Publicaciones</h2>
                </div>
            </div>


            <div class="panel">
                <div class="panel-body">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Titulo de la publicacion</th>
                            <th>Contenido</th>
                            <th>Fecha de publicación</th>
                            <th>Archivo</th>
                            <th>Status</th>
                         
                        </tr>
                           <?php
                                for($i=0;$i<count($publicacion);$i++){  ?>
                                    <tr>
                                        <td><?php echo $publicacion[$i]['nombre_evento']; ?></td>
                                        <td><?php echo $publicacion[$i]['descripcion']; ?></td>
                                        <td><?php echo $publicacion[$i]['fecInicio']; ?></td>
                                        <td><?php echo $publicacion[$i]['fileImagen']; ?></td>
                                        <td><?php echo $publicacion[$i]['nombre_status']; ?></td>
                                        <td>
                                            <a href="<?php echo base_url();?>verpublicaciones/editpublicacion/<?php echo $publicacion[$i]['id_evento']; ?> "><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>               
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