
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a id="refreshUserList" class="pull-right refresh-me" data-target="#userListPanel" href="javascript:;"><span class="fa fa-refresh"></span></a>
                        <h4>Tecnica</h4>
                    </div>
                    <div class="panel-body panel-refresh" id="userListPanel">
                        <div class="table-responsive" ng-show="filteredItems > 0">
                            <table id="user-signups" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th class="hidden-xs">Id</th>
                                    <th>Descripcion</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody class="refresh-container">
                                <?php foreach($datos as $fila){ ?>

                                    <tr>
                                        <td class="hidden-xs" ng-click=""><?php echo  $fila->idTecnica;?></td>
                                        <td> <?php echo $fila->descripcionTecnica ?></td>

                                        <td> <a href= <?= "'".base_url('tecnica/editarTecnica/')."/".$fila->idTecnica."'";?> > <button type="button" class="btn btn-primary">Editar</button> </a> <a href= <?= "'".base_url('tecnica/borrarTecnica/')."/".$fila->idTecnica."'";?> ><button type="button" class="btn btn-danger">Eliminar</button></a>
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
