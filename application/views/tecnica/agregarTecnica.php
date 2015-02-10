<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <fieldset>
                    <h4>
                        Agregar Tecnica
                        <p></p>
                    </h4>
                <form action = <?= base_url('tecnica/agregarTecnica/') ?> method = 'POST'>
                    <div class="control-group">
                        <label class="control-label"  for="descripcion">Descripcion</label>
                        <div class="controls">
                            <input type="text" id="descripcion" name="descripcion" placeholder="" class="form-control input-lg" >
                            <p></p>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="controls">
                            <button class="btn btn-success" type="submit">Agregar</button>
                        </div>
                    </div>
                </form>
                </fieldset>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
