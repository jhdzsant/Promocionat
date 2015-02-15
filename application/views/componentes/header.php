<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?= base_url('home') ?>"><strong>Promocionat</strong><span style="opacity:0.3"> admin</span></a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                </li>
                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li><a href="<?= base_url('login/logoutUser') ?>"><i class="fa fa-sign-out fa-fw"></i> Salir</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                 <li>
                    <a href="<?= base_url('home') ?>"><i class="fa fa-dashboard fa-fw"></i> Inicio</a>
                </li>

                <!-- Seccion de Usuarios -->
                <li>
                    <a href="#"><i class="fa fa-users fa-fw"></i> Usuarios<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?= base_url('usuario/getUsuarios') ?>">Consulta</a>
                        </li>
                        <li>
                            <a href="<?= base_url('usuario/vistaAddUsuario') ?>">Alta</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <!-- Seccion de proveedores -->
                <li>
                    <a href="#"><i class="fa fa-users fa-fw"></i> Proveedores<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?= base_url('proveedor/proveedorAlta') ?>">Alta</a>
                        </li>
                        <li>
                            <a href="<?= base_url('proveedor/mostrarProveedor') ?>">Consulta</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>


                <!-- Seccion de clientes -->
                <li>
                    <a href="#"><i class="fa fa-male fa-fw"></i> Cliente<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?= base_url('cliente/altaCliente') ?>">Alta</a>
                        </li>
                        <li>
                            <a href="<?= base_url('cliente/getCliente') ?>">Consulta</a>
                        </li>
                        <li>
                            <a href="<?= base_url('cliente/vistaAngu') ?>">ConsultaA</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>


                <!-- Seccion de empleados-->
                <li>
                    <a href="#"><i class="fa fa-male fa-fw"></i> Empleados<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?= base_url('empleados/empleadosAlta') ?>">Alta</a>
                        </li>

                        <li>
                            <a href="<?= base_url('cliente/getCliente') ?>">Consulta</a>
                        </li>


                        <!-- Tercer nivel -->
                        <li>
                            <a href="#"><i class="fa fa-male fa-fw"></i> Catalogos<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">

                                <li>
                                    <a href="<?= base_url('empleados/nivelEstudios') ?>">Nivel de Estudios</a>
                                </li>
                            </ul>
                        </li>


                    </ul>
                    <!-- /.nav-second-level -->
                </li>





                <!-- Seccion de tecnica-->
                <li>
                    <a href="#"><i class="fa fa-users fa-fw"></i> Tecnicas<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="<?= base_url('tecnica/tecnicaAlta') ?>">Alta</a>
                        </li>
                        <li>
                            <a href="<?= base_url('tecnica/mostrarTecnica') ?>">Consulta</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>

            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>
