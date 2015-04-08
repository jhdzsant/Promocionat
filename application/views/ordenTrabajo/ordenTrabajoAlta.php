<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <!-- Comienza grupo -->
            <form class="col-lg-12 form-horizontal"  action ="<?= base_url('ordenTrbajo/addOrdenTrabajo') ?>"method="POST">
                <fieldset>
                    </br>
                    <div class="panel panel-primary">

                        <div class="panel-heading" style=" font-size:20px">Alta de Cliente</div>
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
                                    <label class="control-label">Nombre</label>

                                    <div class="controls">
                                        <input type="text" name="nombre" placeholder="Obligatorio"
                                               class="form-control input-sm" required>

                                        <p></p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <label class="control-label">Estatus</label>
                                    <div class="controls">
                                        <input type="text" name="estatus" placeholder="Obligatorio" class="form-control input-sm" required>
                                        <p></p>
                                    </div>
                                </div>

                            </div>
                            <!-- Termina grupo -->




                            <!-- comienza grupo -->

                            <div class="control-group">
                                <div class="col-lg-2">
                                    <label class="control-label">RFC</label>
                                    <div class="controls">
                                        <input type="text" name="rfc" placeholder="Obligatorio" class="form-control input-sm" required>
                                        <p></p>
                                    </div>
                                </div>


                                <div class="col-lg-3">
                                    <label class="control-label">Calle y Número</label>
                                    <div class="controls">
                                        <input type="text" name="callenumero" placeholder="Obligatorio" class="form-control input-sm" required>
                                        <p></p>
                                    </div>
                                </div>

                                <div class="col-lg-2">
                                    <label class="control-label">Colonia</label>
                                    <div class="controls">
                                        <input type="text" name="colonia" placeholder="Obligatorio" class="form-control input-sm" required>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <label class="control-label">Delegación/Municipio</label>
                                    <div class="controls">
                                        <input type="text"  name="delegacionMunicipio" placeholder="Obligatorio" class="form-control input-sm" required>
                                        <p ></p>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <label class="control-label">Estado</label>
                                    <div class="controls">
                                        <input type="text"name="estado" placeholder="" class="form-control input-sm">
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <!-- Termina grupo -->



                            <!-- Comienza grupo -->

                            <div class="control-group">
                                <div class="col-lg-2">
                                    <label class="control-label">Código Postal</label>
                                    <div class="controls">
                                        <input type="text"name="codigoPostal" placeholder="" class="form-control input-sm">
                                        <p></p>
                                    </div>
                                </div>


                                <div class="col-lg-2">
                                    <label class="control-label">País</label>
                                    <div class="controls">
                                        <input type="text" name="pais" placeholder="Obligatorio" class="form-control input-sm" required>
                                        <p></p>
                                    </div>
                                </div>


                                <div class="col-lg-3">
                                    <label class="control-label">Telefono del Cliente</label>
                                    <div class="controls">
                                        <input type="text" name="telefonoCliente" placeholder="Obligatorio" class="form-control input-sm" required>
                                        <p></p>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label class="control-label">Nombre del Contacto</label>
                                    <div class="controls">
                                        <input type="text" name="nombreContacto" placeholder="" class="form-control input-sm">
                                        <p></p>
                                    </div>
                                </div>

                                <div class="col-lg-2">
                                    <label class="control-label">Telefono Contacto</label>
                                    <div class="controls">
                                        <input type="text"name="telefonoContacto" placeholder="Obligatorio" class="form-control input-sm" required>
                                        <p></p>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <label class="control-label">E-mail Contacto</label>
                                    <div class="controls">
                                        <input type="email"name="emailContacto" placeholder="Obligatorio" class="form-control input-sm" required>
                                        <p></p>
                                    </div>
                                </div>

                                <!-- Termina grupo -->





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