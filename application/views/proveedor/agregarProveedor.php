<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <fieldset>
                    <h4>
                        Agregar Proveedor
                        <p></p>
                    </h4>
                <form action = <?= base_url('proveedor/agregarProveedor/') ?> method = 'POST'>
                    <div class="control-group">
                        <label class="control-label"  for="clave">Clave</label>
                        <div class="controls">
                            <input type="text" id="clave" name="clave" placeholder="" class="form-control input-lg" >
                            <p></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"  for="estatus">Estatus</label>
                        <div class="controls">
                            <input type="text" id="estatus" name="estatus" placeholder="" class="form-control input-lg" >
                            <p></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"  for="nombre">Nombre</label>
                        <div class="controls">
                            <input type="text" id="nombre" name="nombre" placeholder="" class="form-control input-lg" >
                            <p></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"  for="rfc">Rfc</label>
                        <div class="controls">
                            <input type="text" id="rfc" name="rfc" placeholder="" class="form-control input-lg" >
                            <p></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"  for="telefonoCliente">Telefono del Cliente:</label>
                        <div class="controls">
                            <input type="text" id="telefonoCliente" name="telefonoCliente" placeholder="" class="form-control input-lg" >
                            <p></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"  for="calleNumero">Calle y Numero:</label>
                        <div class="controls">
                            <input type="text" id="calleNumero" name="calleNumero" placeholder="" class="form-control input-lg" >
                            <p></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"  for="colonia">Colonia:</label>
                        <div class="controls">
                            <input type="text" id="colonia" name="colonia" placeholder="" class="form-control input-lg" >
                            <p></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"  for="delegacionMunicipio">Delegacion o Municipio:</label>
                        <div class="controls">
                            <input type="text" id="delegacionMunicipio" name="delegacionMunicipio" placeholder="" class="form-control input-lg" >
                            <p></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"  for="codigoPostal">Codigo Postal:</label>
                        <div class="controls">
                            <input type="text" id="codigoPostal" name="codigoPostal" placeholder="" class="form-control input-lg" >
                            <p></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"  for="pais">Pais:</label>
                        <div class="controls">
                            <input type="text" id="pais" name="pais" placeholder="" class="form-control input-lg" >
                            <p></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"  for="nombreContacto">Nombre Contacto</label>
                        <div class="controls">
                            <input type="text" id="nombreContacto" name="nombreContacto" placeholder="" class="form-control input-lg" >
                            <p></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"  for="telefonoContacto">Telefono del Contacto:</label>
                        <div class="controls">
                            <input type="text" id="telefonoContacto" name="telefonoContacto" placeholder="" class="form-control input-lg" >
                            <p></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"  for="emailContacto">Email Contacto</label>
                        <div class="controls">
                            <input type="text" id="emailContacto" name="emailContacto" placeholder="" class="form-control input-lg" >
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
