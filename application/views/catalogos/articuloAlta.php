<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <!-- Comienza grupo -->
            <form class="col-lg-12 form-horizontal"  action ="<?= base_url('catalogos/addArticulo') ?>"method="POST">
                <fieldset>
                    </br>
                    <div class="panel panel-primary">

                        <div class="panel-heading" style=" font-size:20px">Alta de Articulos</div>
                        <div class="panel-body">

                            <div class="control-group">
                                <div class="col-lg-3">
                                    <label class="control-label">Clave</label>

                                    <div class="controls">
                                        <input type="text" name="clave" placeholder="Obligatorio"
                                               class="form-control input-sm" required>

                                        <p></p>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label class="control-label">Descripción</label>

                                    <div class="controls">
                                        <input type="text" name="descripcion" placeholder="Obligatorio"
                                               class="form-control input-sm" required>

                                        <p></p>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    </br>
                                    <input type="submit" class="btn btn-success" value="Guardar">
                                </div>

                                <div class="col-lg-2">
                                    </br>
                                    <input type="reset" class="btn btn-default" value="Limpiar">
                                </div>

                </fieldset>
            </form>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->


