
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <fieldset>
                    <h4>
                        Actualizar Proveedor
                        <p></p>
                    </h4>
                <form action = <?= base_url('tecnica/actualizarProveedor/')."/".$registro->idProveedor ?> method = 'POST'>
                    <div class="control-group">
                        <label class="control-label"  for="descripcionProveedor">Email</label>
                        <div class="controls">
                            <input type="text" id="descripcionProveedor" name="descripcionProveedor" placeholder="" class="form-control input-lg" value = <?= $registro->descripcionProveedor ?> >
                            <p></p>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="controls">
                            <button class="btn btn-success" type="submit">Actualizar</button>
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
