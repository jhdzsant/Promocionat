<!-- Page Content -->
<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <form class="col-lg-12 form-horizontal" action='<?= base_url('empleados/addNivelEstudios') ?>' method="POST">
        <fieldset>


          <h1 class="page-header">
            <img src="http://localhost/Promocionat/img/diploma-128.png" width="73" height="69">
            Nivel de estudios <small></small>
          </h1>

          <br>
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

                    <p></p>
                  </div>
                </div>


                </div>

              </div>
            </div>


        </fieldset>
    </div>
    <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->
