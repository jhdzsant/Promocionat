
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a id="refreshUserList" class="pull-right refresh-me" data-target="#userListPanel" href="javascript:;"><span class="fa fa-refresh"></span></a>
                        <h4>Usuarios</h4>
                    </div>
                    <div class="panel-body panel-refresh" id="userListPanel">
                        <div class="table-responsive" ng-show="filteredItems > 0">
                            <table id="user-signups" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th class="hidden-xs">Id</th>
                                    <th class="hidden-xs">Email</th>
                                    <th>Password</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody class="refresh-container">
                                <?php foreach($usuario as $fila){ ?>

                                    <tr>
                                        <td class="hidden-xs" ng-click=""><?php echo  $fila->id;?></td>
                                        <td class="hidden-xs" ng-click=""><?php echo $fila->email ?></td>
                                        <td> <?php echo $fila->password ?> </td>
                                        <td> <a href= <?= "'".base_url('usuario/editarUsuario/')."/".$fila->id."'";?> > <button type="button" class="btn btn-primary">Editar</button> </a> <a href= <?= "'".base_url('usuario/borrarUsuario/')."/".$fila->id."'";?> ><button type="button" class="btn btn-danger">Eliminar</button></a>
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
