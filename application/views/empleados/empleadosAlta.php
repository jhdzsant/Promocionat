<!-- Page Content -->
<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <form class="col-lg-12 form-horizontal" action='<?= base_url('empleados/addEmpleados') ?>' method="POST">
        <fieldset>
          <h4>
            INGRESE LOS DATOS DEL EMPLEADO
            <p></p>
          </h4>
          <br>
          <br>

          <div class="panel panel-primary">
            <div class="panel-heading">Nombre Completo del Empleado *</div>
            <div class="panel-body">

              <div class="control-group">
                <div class="col-lg-6">
                  <label class="control-label" for="nombre">Nombres</label>

                  <div class="controls">
                    <input type="text" id="nombre" name="nombre" placeholder=""
                           class="form-control input-lg" required>

                    <p></p>
                  </div>
                </div>

                <div class="col-lg-3">
                  <label class="control-label" for="ApellidoPaterno">Apellido Paterno</label>

                  <div class="controls">
                    <input type="text" id="apellido" name="ApellidoPaterno" placeholder=""
                           class="form-control input-lg" required>

                    <p></p>
                  </div>
                </div>
                <div class="col-lg-3">
                  <label class="control-label" for="ApellidoMaterno">Apellido Materno</label>
                  <div class="controls">
                    <input type="text" id="rfc" name="ApellidoMaterno" placeholder="" class="form-control input-lg" required>
                    <p class="small help-block"></p>
                  </div>
                </div>

            </div>
          </div>




            <div class="control-group">
                <div class="col-lg-2">
                  <label class="control-label" for="idDepartamento">Departameto</label>
                  <div class="controls">
                    <input type="text" id="calle" name="idDepartamento" placeholder="" class="form-control input-lg" required>
                    <p class="small help-block"></p>
                  </div>
                </div>


                <div class="col-lg-3">
                  <label class="control-label" for="status">Estado del Empleado</label>
                  <div class="controls">
                    <input type="text" id="Status" name="status" placeholder="" class="form-control input-lg" required>
                    <p class="small help-block"></p>
                  </div>
                </div>

                <div class="col-lg-4">
                  <label class="control-label" for="correoElectronico">Correo</label>
                  <div class="controls">
                    <input type="text" id="correoElectronico" name="correoElectronico" placeholder="" class="form-control input-lg" required>
                    <p class="small help-block"></p>
                  </div>
                </div>
                <div class="col-lg-3">
                  <label class="control-label" for="contraseña">Contraseña</label>
                  <div class="controls">
                    <input type="text" id="contraseña" name="contraseña" placeholder="Necesario solo si accede al sistema web" class="form-control input-lg" required>
                    <p class="small help-block"></p>
                  </div>
                </div>
              </div>




            <div class="control-group">
              <div class="col-lg-4">
                <label class="control-label" for="idPerfil">Perfil Asignado</label>
                <div class="controls">
                  <input type="text" id="idPerfil" name="idPerfil" placeholder="poner cero si no tiene acceso al sistema web" class="form-control input-lg" required>
                  <p class="small help-block"></p>
                </div>
              </div>


              <div class="col-lg-3">
                <label class="control-label" for="status">Estado del Empleado</label>
                <div class="controls">
                  <input type="text" id="Status" name="status" placeholder="" class="form-control input-lg" required>
                  <p class="small help-block"></p>
                </div>
              </div>

              <div class="col-lg-4">
                <label class="control-label" for="correoElectronico">Correo</label>
                <div class="controls">
                  <input type="text" id="correoElectronico" name="correoElectronico" placeholder="" class="form-control input-lg" required>
                  <p class="small help-block"></p>
                </div>
              </div>
              <div class="col-lg-3">
                <label class="control-label" for="contraseña">Contraseña</label>
                <div class="controls">
                  <input type="text" id="contraseña" name="contraseña" placeholder="" class="form-control input-lg" required>
                  <p class="small help-block"></p>
                </div>
              </div>
            </div>

              <!--
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

                -->


        </fieldset>
      </div>
      <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->









/////////////////////////////////////////////////////////////////////

<!-- com
<table align="center">




  <tr valign="baseline">
    <td nowrap="nowrap" align="right">CorreoElectronico:</td>
    <td><input type="text" name="correoElectronico" value="" size="32" /></td>
  </tr>
  <tr valign="baseline">
    <td nowrap="nowrap" align="right">Contraseña:</td>
    <td><input type="text" name="contrasea" value="" size="32" /></td>
  </tr>
  <tr valign="baseline">
    <td nowrap="nowrap" align="right">IdPerfil:</td>
    <td><input type="text" name="idPerfil" value="" size="32" /></td>
  </tr>
  <tr valign="baseline">
    <td nowrap="nowrap" align="right">Calle:</td>
    <td><input type="text" name="calle" value="" size="32" /></td>
  </tr>
  <tr valign="baseline">
    <td nowrap="nowrap" align="right">Colonia:</td>
    <td><input type="text" name="colonia" value="" size="32" /></td>
  </tr>
  <tr valign="baseline">
    <td nowrap="nowrap" align="right">Municipio:</td>
    <td><input type="text" name="municipio" value="" size="32" /></td>
  </tr>
  <tr valign="baseline">
    <td nowrap="nowrap" align="right">Estado:</td>
    <td><input type="text" name="estado" value="" size="32" /></td>
  </tr>
  <tr valign="baseline">
    <td nowrap="nowrap" align="right">FechaAlta:</td>
    <td><input type="text" name="fechaAlta" value="" size="32" /></td>
  </tr>
  <tr valign="baseline">
    <td nowrap="nowrap" align="right">FechaBaja:</td>
    <td><input type="text" name="fechaBaja" value="" size="32" /></td>
  </tr>
  <tr valign="baseline">
    <td nowrap="nowrap" align="right">TelCelular:</td>
    <td><input type="text" name="telCelular" value="" size="32" /></td>
  </tr>
  <tr valign="baseline">
    <td nowrap="nowrap" align="right">TelCasa:</td>
    <td><input type="text" name="telCasa" value="" size="32" /></td>
  </tr>
  <tr valign="baseline">
    <td nowrap="nowrap" align="right">Rfc:</td>
    <td><input type="text" name="rfc" value="" size="32" /></td>
  </tr>
  <tr valign="baseline">
    <td nowrap="nowrap" align="right">Puesto:</td>
    <td><input type="text" name="puesto" value="" size="32" /></td>
  </tr>
  <tr valign="baseline">
    <td nowrap="nowrap" align="right">Imss:</td>
    <td><input type="text" name="imss" value="" size="32" /></td>
  </tr>
  <tr valign="baseline">
    <td nowrap="nowrap" align="right">Contrato:</td>
    <td><input type="text" name="contrato" value="" size="32" /></td>
  </tr>
  <tr valign="baseline">
    <td nowrap="nowrap" align="right">Turno:</td>
    <td><input type="text" name="turno" value="" size="32" /></td>
  </tr>
  <tr valign="baseline">
    <td nowrap="nowrap" align="right">EdoCivil:</td>
    <td><input type="text" name="edoCivil" value="" size="32" /></td>
  </tr>
  <tr valign="baseline">
    <td nowrap="nowrap" align="right">TipoSangre:</td>
    <td><input type="text" name="tipoSangre" value="" size="32" /></td>
  </tr>
  <tr valign="baseline">
    <td nowrap="nowrap" align="right">PesionAlimen:</td>
    <td><input type="text" name="pesionAlimen" value="" size="32" /></td>
  </tr>
  <tr valign="baseline">
    <td nowrap="nowrap" align="right">NivelEstudios:</td>
    <td><input type="text" name="nivelEstudios" value="" size="32" /></td>
  </tr>
  <tr valign="baseline">
    <td nowrap="nowrap" align="right">Profesion:</td>
    <td><input type="text" name="profesion" value="" size="32" /></td>
  </tr>
  <tr valign="baseline">
    <td nowrap="nowrap" align="right">NombreEmergencia:</td>
    <td><input type="text" name="nombreEmergencia" value="" size="32" /></td>
  </tr>
  <tr valign="baseline">
    <td nowrap="nowrap" align="right">TelEmergencia:</td>
    <td><input type="text" name="telEmergencia" value="" size="32" /></td>
  </tr>
  <tr valign="baseline">
    <td nowrap="nowrap" align="right">&nbsp;</td>
    <td><input type="submit" value="Insertar registro" /></td>
  </tr>
</table>
<input type="hidden" name="MM_insert" value="form1" />
</form>


-->


</div>
<!-- /#page-wrapper -->
