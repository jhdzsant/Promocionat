<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <form class="col-lg-12 form-horizontal" action='<?= base_url('cliente/addCliente') ?>' method="POST">
                <fieldset>
                    <h4>
                        Registro de Cliente
                        <p></p>
                    </h4>
                    <div class="control-group">
                        <div class="col-lg-6">
                            <label class="control-label" for="nombre">Nombre</label>

                            <div class="controls">
                                <input type="text" id="nombre" name="nombre" placeholder=""
                                       class="form-control input-lg" required>

                                <p></p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <label class="control-label" for="clave">Clave</label>

                            <div class="controls">
                                <input type="text" id="clave" name="clave" placeholder=""
                                       class="form-control input-lg" required>

                                <p></p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                        <label class="control-label" for="rfc">RFC</label>
                        <div class="controls">
                            <input type="text" id="rfc" name="rfc" placeholder="" class="form-control input-lg" required>
                            <p class="small help-block"></p>
                        </div>
                        </div>


                        <div class="col-lg-6">
                            <label class="control-label" for="calle">Calle</label>
                            <div class="controls">
                                <input type="text" id="calle" name="calle" placeholder="" class="form-control input-lg" required>
                                <p class="small help-block"></p>
                            </div>
                        </div>


                        <div class="col-lg-3">
                            <label class="control-label" for="estatus">Estatus</label>
                            <div class="controls">
                                <input type="text" id="estatus" name="estatus" placeholder="" class="form-control input-lg" required>
                                <p class="small help-block"></p>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <label class="control-label" for="colonia">Colonia</label>
                            <div class="controls">
                                <input type="text" id="colonia" name="colonia" placeholder="" class="form-control input-lg" required>
                                <p class="small help-block"></p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <label class="control-label" for="codigoPostal">Codigo Postal</label>
                            <div class="controls">
                                <input type="text" id="codigoPostal" name="codigoPostal" placeholder="" class="form-control input-lg" required>
                                <p class="small help-block"></p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <label class="control-label" for="municipio">Municipio</label>
                            <div class="controls">
                                <input type="text" id="municipio" name="municipio" placeholder="" class="form-control input-lg" required>
                                <p class="small help-block"></p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <label class="control-label" for="estado">Estado</label>
                            <div class="controls">
                                <input type="text" id="estado" name="estado" placeholder="" class="form-control input-lg" required>
                                <p class="small help-block"></p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <label class="control-label" for="pais">Pais</label>
                            <div class="controls">
                                <input type="text" id="pais" name="pais" placeholder="" class="form-control input-lg" required>
                                <p class="small help-block"></p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <label class="control-label" for="telefonoCliente">Telefono del Cliente</label>
                            <div class="controls">
                                <input type="text" id="telefonoCliente" name="telefonoCliente" placeholder="" class="form-control input-lg" required>
                                <p class="small help-block"></p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="control-label" for="nombreContacto">Nombre del Contacto</label>
                            <div class="controls">
                                <input type="text" id="nombreContacto" name="nombreContacto" placeholder="" class="form-control input-lg" required>
                                <p class="small help-block"></p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <label class="control-label" for="telefonoContacto">Telefono del Contacto</label>
                            <div class="controls">
                                <input type="text" id="telefonoContacto" name="telefonoContacto" placeholder="" class="form-control input-lg">
                                <p class="small help-block"></p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="control-label" for="emailContacto">E-mail del Contacto</label>
                            <div class="controls">
                                <input type="email" id="emailContacto" name="emailContacto" placeholder="" class="form-control input-lg">
                                <p class="small help-block"></p>
                            </div>
                        </div>
                    </div>

                </fieldset>
                    <div class="col-lg-3">
                        <div class="control-group">
                            <div class="controls">
                                <button class="btn btn-success" type="submit">Register</button>
                            </div>
                        </div>
                    </div>
                </form>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
