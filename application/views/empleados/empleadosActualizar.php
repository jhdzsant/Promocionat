<!-- Page Content -->
<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
     
         <form class="col-lg-12 form-horizontal" action = <?= base_url('empleados/empleadosActualizar/')."/".$registro->idEmpleado?> method="POST">
            <fieldset>
</br>
                <div class="panel panel-primary">

                    <div class="panel-heading" style=" font-size:20px">Modificar datos de Empleado
                    <label class="control-label" style=" font-size:10px">*Campo Obligatorio</label> 
                    </div>
                       
                        <div class="panel-body">

                        <!-- 1 -->    
                        <div class="control-group">
                            <div class="col-lg-6">
                                <label class="control-label">Nombre's *</label>

                                <div class="controls">
                                    <input type="text" name="nombre" placeholder="" class="form-control input-sm" value = <?= $registro->nombre ?> requiered >

                                    <p></p>
                                </div>
                            </div>

                            <!-- 2 -->  
                            <div class="col-lg-3">
                                <label class="control-label">Apellido Paterno *</label>

                                <div class="controls">
                                    <input type="text" name="ApellidoPaterno" placeholder=""  class="form-control input-sm" value = <?= $registro->apellidoPaterno ?> requiered>

                                    <p></p>
                                </div>
                            </div>
                            
                            <!-- 3 -->  
                            <div class="col-lg-3">
                                <label class="control-label">Apellido Materno *</label>
                                <div class="controls">
                                    <input type="text" name="ApellidoMaterno" placeholder="" class="form-control input-sm" value = <?= $registro->apellidoMaterno ?> required>
                                    <p></p>
                                </div>
                            </div>

                        </div>
                            <!-- Termina grupo -->




                            <!-- comienza grupo -->
                    
                    <div class="control-group">
                           
                            <!-- 4 --> 
                        <div class="col-lg-2">
                            <label class="control-label">Departamento *</label>
                            <div class="controls">
                      <!-- Combo Box -->
                      <select required class="form-control input-sm" name="idDepartamento" value="1">;
                        <?php
                        
                          echo "<option value=> </option>";
                              foreach ($departamentoVar as $list) {

                                if( $registro->idDepartamento == $list->idDepartamento){

                                    echo "<option value='". $list->idDepartamento . "' selected>" . $list->descripcion . "</option>";
                                    
                                } else{
                                    echo "<option value='". $list->idDepartamento . "'>" . $list->descripcion . "</option>";
                                }
                            }
                        ?>
                        </select>
                            <p></p>
                            </div>
                        </div>

                        <!-- 5 -->  
                          <div class="col-lg-2">
                            <label class="control-label">Puesto *</label>
                            <div class="controls">
                      <!-- Combo Box -->
                      <select required class="form-control input-sm" name="idPuesto">";
                        <?php
                          echo "<option value=></option>";
                            if (count($puestoVar)) {
                              foreach ($puestoVar as $list) {
                              echo "<option value='". $list['idPuesto'] . "'>" . $list['descripcion'] . "</option>";
                            }
                        }
                        ?>
                        </select>
                            <p></p>
                            </div>
                        </div>

                        <!-- 6 -->
                        <div class="col-lg-2">
                                    <label class="control-label">Turno *</label>
                            <div class="controls">
                      <!-- Combo Box -->
                      <select required class="form-control input-sm" name="idTurno">";
                        <?php
                          echo "<option value=></option>";
                            if (count($turnoVar)) {
                              foreach ($turnoVar as $list) {
                              echo "<option value='". $list['idTurno'] . "'>" . $list['descripcion'] . "</option>";
                            }
                        }
                        ?>
                        </select>
                                <p></p>
                            </div>
                        </div>

                        <!-- 7 -->
                        <div class="col-lg-3">
                                    <label class="control-label">Grado de Estudios *</label>
                            <div class="controls">
                        <!-- Combo Box -->
                          <select required class="form-control input-sm" name="idNivelEstudios">";
                            <?php
                                 echo "<option value=></option>";
                                    if (count($nivelVar)) {
                                    foreach ($nivelVar as $list) {
                                    echo "<option value='". $list['idNivelEstudios'] . "'>" . $list['descripcion'] . "</option>";
                            }
                        }
                        ?>
                        </select>
                                <p ></p>
                            </div>
                        </div>

                        <!-- 8 -->  
                        <div class="col-lg-3">
                            <label class="control-label">Profesión</label>
                            <div class="controls">
                                <input type="text"name="profesion" placeholder="" class="form-control input-sm">
                                <p></p>
                            </div>
                        </div>
                    </div>
                            <!-- Termina grupo -->



                            <!-- Comienza grupo -->

                    <!-- 9 -->
                    <div class="control-group">
                        <div class="col-lg-2">
                            <label class="control-label">Sueldo Mensual</label>
                            <div class="controls">
                                <input type="text"name="sueldoMensual" placeholder="" class="form-control input-sm">
                                <p></p>
                            </div>
                        </div>

                        <!-- 10 -->  
                        <div class="col-lg-2">
                            <label class="control-label">Contrato *</label>
                            <div class="controls">
                                <input type="text" name="contrato" placeholder="" class="form-control input-sm" required>
                                <p></p>
                            </div>
                        </div>

                        <!-- 11 -->
                        <div class="col-lg-2">
                            <label class="control-label">Fecha de ingreso *</label>
                            <div class="controls">
                                <input type="date" style=" font-size:11px" name="fechaAlta" placeholder="" class="form-control input-sm" required>
                                <p></p>
                            </div>
                        </div>

                        <!-- 12 -->  
                        <div class="col-lg-2">
                            <label class="control-label">Fecha de baja</label>
                            <div class="controls">
                                <input type="date" style=" font-size:11px" name="fechaBaja" placeholder="" class="form-control input-sm">
                                <p></p>
                            </div>
                        </div>

                        <!-- 13 -->
                        <div class="col-lg-2">
                                             <label class="control-label">Status *</label>
                            <div class="controls">
                        <!-- Combo Box -->
                          <select required class="form-control input-sm" name="idStatusEmpleado">";
                            <?php
                                 echo "<option value=></option>";
                                    if (count($statusempVar)) {
                                    foreach ($statusempVar as $list) {
                                    echo "<option value='". $list['idStatusEmpleado'] . "'>" . $list['descripcion'] . "</option>";
                            }
                        }
                        ?>
                        </select>
                                <p></p>
                            </div>
                        </div>

                        <!-- 14 -->
                        <div class="col-lg-2">
                            <label class="control-label">Perfil *</label>
                            <div class="controls">
                        <!-- Combo Box -->
                          <select required class="form-control input-sm" name="idPerfil">";
                            <?php
                                 echo "<option value=></option>";
                                    if (count($perfilVar)) {
                                    foreach ($perfilVar as $list) {
                                    echo "<option value='". $list['idPerfil'] . "'>" . $list['descripcion'] . "</option>";
                            }
                        }
                        ?>
                        </select>
                       
                                <p></p>
                            </div>
                        </div>

                        <!-- Termina grupo -->



                        <!-- Comienza grupo -->

                        <!-- 15 -->
                        <div class="control-group">
                            <div class="col-lg-3">
                                <label class="control-label">Correo Electrónico</label>

                                <div class="controls">
                                    <input type="text" name="correoElectronico" placeholder="Usuario del sistema"
                                           class="form-control input-sm">

                                    <p></p>
                                </div>
                            </div>

                            <!-- 16 -->
                            <div class="col-lg-2">
                                <label class="control-label">Contraseña</label>

                                <div class="controls">
                                    <input type="text" name="contrasena" placeholder=" Contraseña sistema"
                                           class="form-control input-sm">

                                    <p></p>
                                </div>
                            </div>

                            <!-- 17 -->
                            <div class="col-lg-7">
                                <label class="control-label">Calle y Número *</label>
                                <div class="controls">
                                    <input type="text" name="calleNumero" placeholder="" class="form-control input-sm" required>
                                    <p></p>
                                </div>
                            </div>

                        </div>

                        <!-- Termina grupo -->





  <!-- Comienza grupo -->


                        <div class="control-group">
                        <div class="col-lg-3">
                            <label class="control-label">Colonia</label>
                            <div class="controls">
                                <input type="text" name="colonia" placeholder="" class="form-control input-sm">
                                <p></p>
                            </div>
                        </div>

                            <div class="col-lg-3">
                                <label class="control-label">Delegación/Municipio</label>
                                <div class="controls">
                                    <input type="text" name="delegacionMunicipio" placeholder="" class="form-control input-sm">
                                    <p></p>
                                </div>
                            </div>


                            <div class="col-lg-2">
                                <label class="control-label">Estado</label>
                                <div class="controls">
                                    <input type="text" name="estado" placeholder="" class="form-control input-sm">
                                    <p></p>
                                </div>
                            </div>


                            <div class="col-lg-2">
                                <label class="control-label">Codigo Postal</label>
                                <div class="controls">
                                    <input type="text" name="codigoPostal" placeholder="" class="form-control input-sm">
                                    <p></p>
                                </div>
                            </div>


                              <div class="col-lg-2">
                                <label class="control-label">Pais</label>
                                <div class="controls">
                                    <input type="text" name="pais" placeholder="" class="form-control input-sm">
                                    <p></p>
                                </div>
                            </div>


                            <!-- Termina grupo -->



                        <!-- Comienza grupo -->


                        <div class="control-group">
                        <div class="col-lg-3">
                            <label class="control-label">Tel Celular</label>
                            <div class="controls">
                                <input type="text" name="telCelular" placeholder="" class="form-control input-sm">
                                <p></p>
                            </div>
                        </div>

                            <div class="col-lg-3">
                                <label class="control-label">Tel Casa</label>
                                <div class="controls">
                                    <input type="text" name="telCasa" placeholder="" class="form-control input-sm">
                                    <p></p>
                                </div>
                            </div>


                            <div class="col-lg-3">
                                <label class="control-label">RFC</label>
                                <div class="controls">
                                    <input type="text" name="rfc" placeholder="" class="form-control input-sm">
                                    <p></p>
                                </div>
                            </div>


                            <div class="col-lg-3">
                                <label class="control-label">N° Imss</label>
                                <div class="controls">
                                    <input type="text" name="imss" placeholder="" class="form-control input-sm">
                                    <p></p>
                                </div>
                            </div>


                            <!-- Termina grupo -->


                            <!-- Comienza grupo -->


                            <div class="control-group">
                                <div class="col-lg-2">
                                    <label class="control-label">Edo Civil *</label>
                                        <div class="controls">
                        <!-- Combo Box -->
                          <select required class="form-control input-sm" name="idCivil">";
                            <?php
                                 echo "<option value=></option>";
                                    if (count($civilVar)) {
                                    foreach ($civilVar as $list) {
                                    echo "<option value='". $list['idCivil'] . "'>" . $list['descripcion'] . "</option>";
                            }
                        }
                        ?>
                        </select>
                                        <p></p>
                                    </div>
                                </div>

                                <div class="col-lg-2">
                                    <label class="control-label">Tipo de Sangre</label>
                                    <div class="controls">
                                        <input type="text" name="tipoSangre" placeholder="" class="form-control input-sm">
                                        <p></p>
                                    </div>
                                </div>


                                <div class="col-lg-3">
                                    <label class="control-label">Pensión Alimenticia</label>
                                    <div class="controls">
                                        <select requiered name="pesionAlimen" class="form-control input-sm">
                                          <option value=""></option>
                                          <option value="Si">Si</option>
                                          <option value="No">No</option>
                                        </select>
                                        <p></p>
                                    </div>
                                </div>


                                <div class="col-lg-3">
                                    <label class="control-label">Emergencia</label>
                                    <div class="controls">
                                        <input type="text" name="nombreEmergencia" placeholder="Avisar a:" class="form-control input-sm">
                                        <p></p>
                                    </div>
                                </div>

                                <div class="col-lg-2">
                                    <label class="control-label">Telefono</label>
                                    <div class="controls">
                                        <input type="text" name="telEmergencia" placeholder="Tel de emergencia" class="form-control input-sm">
                                        <p></p>
                                    </div>
                                </div>


                                <!-- Termina grupo -->


                               </br>
                                </br>
                                </br>



                                <div class="col-lg-2">
                                    </br>
                                    <input type="submit" class="btn btn-success" value="Guardar">
                                </div>

                                <div class="col-lg-2">
                                    </br>
                                    <input type="reset" class="btn btn-default" value="Limpiar">
                                </div>


                    </div>
                        </div>


            </fieldset>




        </form>



</div>
<!-- /#page-wrapper -->
