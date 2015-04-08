<!-- Page Content -->
<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <form class="col-lg-12 form-horizontal" action='<?= base_url('empleados/addNivelEstudios') ?>' method="POST">
        <fieldset>
          <h2 class="page-header">
            <img src="http://localhost/Promocionat/img/diploma-128.png" width="53" height="50">
            Nivel de estudios <small></small>
          </h2>

          <br>

          <div class="panel panel-primary">
            <div class="panel-heading">Agregar Datos *</div>
            <div class="panel-body">

              <div class="control-group">
                <div class="col-lg-6">
                  <label class="control-label" for="nivelEstudios">Escolaridad</label>

                  <div class="controls">
                    <input type="text" id="nivelEstudios" name="nivelEstudios" placeholder=""
                           class="form-control input-lg" required>
                           <br/>
                        <button class="btn btn-success" type="submit">ingresar</button>

                    <p></p>
                  </div>
                </div>


                </div>

              </div>
            </div>


        </fieldset>
    </div>


    
    <!-- impresion en tablas de base de datos -->
    
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <a id="refreshUserList" class="pull-right refresh-me" data-target="#userListPanel" href="javascript:;"><span class="fa fa-refresh"></span></a>
          <h4>Catalogo</h4>
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


    <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->
