
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a id="refreshUserList" class="pull-right refresh-me" data-target="#userListPanel" href="javascript:;"><span class="fa fa-refresh"></span></a>
                        <h4>Clientes</h4>
                    </div>
                    <div class="panel-body panel-refresh" id="userListPanel">
                        <div class="table-responsive" ng-show="filteredItems > 0">
                            <table id="user-signups" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th class="hidden-xs">Clave</th>
                                    <th class="hidden-xs">Estatus</th>
                                    <th class="hidden-xs">Nombre</th>
                                    <th class="hidden-xs">RFC</th>
                                    <th class="hidden-xs">Calle y Numero</th>
                                    <th class="hidden-xs">Colonia</th>
                                    <th class="hidden-xs">Delegación/Municipio</th>
                                    <th class="hidden-xs">Estado</th>
                                    <th class="hidden-xs">Código Postal</th>
                                    <th class="hidden-xs">País</th>
                                    <th class="hidden-xs">Telefono del Cliente</th>
                                    <th class="hidden-xs">Nombre del Contacto</th>
                                    <th class="hidden-xs">Telefono del Contacto</th>
                                    <th class="hidden-xs">E-mail del Contacto</th>
                                    <th class="hidden-xs">Acciones</th>
                                </tr>
                                </thead>
                                <tbody class="refresh-container">
                                <?php foreach($datos as $fila){ ?>

                                    <tr>
                                        <td class="hidden-xs"><?php echo  $fila->clave;?></td>
                                        <td class="hidden-xs"><?php echo  $fila->estatus;?></td>
                                        <td class="hidden-xs"><?php echo  $fila->nombre;?></td>
                                        <td class="hidden-xs"><?php echo  $fila->rfc;?></td>
                                        <td class="hidden-xs"><?php echo  $fila->calleNumero;?></td>
                                        <td class="hidden-xs"><?php echo  $fila->colonia;?></td>
                                        <td class="hidden-xs"><?php echo  $fila->delegacionMunicipio;?></td>
                                        <td class="hidden-xs"><?php echo  $fila->estado;?></td>
                                        <td class="hidden-xs"><?php echo  $fila->codigoPostal;?></td>
                                        <td class="hidden-xs"><?php echo  $fila->pais;?></td>
                                        <td class="hidden-xs"><?php echo  $fila->telefonoCliente;?></td>
                                        <td class="hidden-xs"><?php echo  $fila->nombreContacto;?></td>
                                        <td class="hidden-xs"><?php echo  $fila->telefonoContacto;?></td>
                                        <td class="hidden-xs"><?php echo  $fila->emailContacto;?></td>

                                        <td> <a href= <?= "'".base_url('tecnica/editarTecnica/')."/".$fila->idProveedor."'";?> > <button type="button" class="btn btn-primary">Editar</button> </a> <a href= <?= "'".base_url('tecnica/borrarProveedor/')."/".$fila->idProveedor."'";?> ><button type="button" class="btn btn-danger">Eliminar</button></a>
                                    </tr>
                                <?php } ?>
                                </tbody>

                            </table>
                        </div> <!--/.table-responsive-->
                    </div><!--/.panel-body-->
                </div><!--/.panel
                                            </div>
            <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
