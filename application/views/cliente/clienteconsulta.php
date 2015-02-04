
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
                            <table id="user-signups" class="table table-striped table-bordered" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th class="hidden-xs">Id</th>
                                    <th class="hidden-xs">Clave</th>
                                    <th class="hidden-xs">Estatus</th>
                                    <th class="hidden-xs">Nombre del Cliente</th>
                                    <th class="hidden-xs">RFC del Cliente</th>
                                    <th class="hidden-xs">Calle</th>
                                    <th class="hidden-xs">Colonia</th>
                                    <th class="hidden-xs">Codigo Postal</th>
                                    <th class="hidden-xs">Municipio</th>
                                    <th class="hidden-xs">Estado</th>
                                    <th class="hidden-xs">País</th>
                                    <th class="hidden-xs">Telefono del Cliente</th>
                                    <th class="hidden-xs">Nombre del Contacto</th>
                                    <th class="hidden-xs">Telefono del Contacto</th>
                                    <th class="hidden-xs">E-mail del Contacto</th>

                                </tr>
                                </thead>
                                <tbody class="refresh-container">
                                <?php foreach($cliente as $fila){ ?>

                                    <tr>
                                        <td id="idCliente"><?php echo  $fila->idCliente ?></td>
                                        <td id="clave"><?php echo $fila->clave ?></td>
                                        <td id="estatus"> <?php echo $fila->estatus ?> </td>
                                        <td id="nombre"> <?php echo $fila->nombre ?> </td>
                                        <td id="rfc"> <?php echo $fila->rfc ?> </td>
                                        <td id="calle"> <?php echo $fila->calle ?> </td>
                                        <td id="colonia"> <?php echo $fila->colonia ?> </td>
                                        <td id="codigoPostal"> <?php echo $fila->codigoPostal ?> </td>
                                        <td id="municipio"> <?php echo $fila->municipio ?> </td>
                                        <td id="estado"> <?php echo $fila->estado ?> </td>
                                        <td id="pais"> <?php echo $fila->pais ?> </td>
                                        <td id="telefonoCliente"> <?php echo $fila->telefonoCliente ?> </td>
                                        <td id="nombreContacto"> <?php echo $fila->nombreContacto ?> </td>
                                        <td id="telefonoContacto"> <?php echo $fila->telefonoContacto ?> </td>
                                        <td id="emailContacto"> <?php echo $fila->emailContacto ?> </td>

                                    </tr>
                                <?php } ?>
                                </tbody>
                                <tfoot>
                                <tr><td colspan="6">
                                        <div class="text-center">
                                            <ul class="pagination">
                                                <li ng-class="{disabled: currentPage == 0}">
                                                    <a class="btn btn-default btn-sm" href="" ng-click=""><i class=" fa fa-angle-left"></i> Prev</a>
                                                </li>
                                                <li ng-class="{disabled: currentPage == pagedItems.length - 1}">
                                                    <a class="btn btn-default btn-sm" href="" ng-click="">Next <i class="fa fa-angle-right"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                </tfoot>
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

    <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>