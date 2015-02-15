<?php

class Proveedor extends CI_Controller{
	
	public function __construct()
    {
        parent::__construct();

        $this->load->model('proveedormodelo');
        $this->load->model('domiciliomodelo');
    }


    function index(){

    	$session = $this->session->userdata('usuario');

    	if( empty($session)){
    		redirect (base_url('login'), 'refresh');
    	}
    	$this->mostrarProveedor();
    }

    function agregarProveedor(){
        // Recibe parametros para insertar en proveedor
        $clave = $this->input->post('clave');
        $estatus = $this->input->post('estatus');
        $nombre = $this->input->post('nombre');
        $rfc = $this->input->post('rfc');
        $telefonoCliente = $this->input->post('telefonoCliente');
        $nombreContacto = $this->input->post('nombreContacto');
        $telefonoContacto = $this->input->post('telefonoContacto');
        $emailContacto = $this->input->post('emailContacto');
        // Recibe parametros para insertar en domicilios
        $calleNumero = $this->input->post('calleNumero');
        $colonia = $this->input->post('colonia');
        $delegacionMunicipio = $this->input->post('delegacionMunicipio');
        $estado = $this->input->post('estado');
        $codigoPostal = $this->input->post('codigoPostal');
        $pais = $this->input->post('pais');

        $insertDomicilio = array(
            "calleNumero"           => $calleNumero,
            "colonia"               => $colonia,
            "delegacionMunicipio"   => $delegacionMunicipio,
            "estado"                => $estado,
            "codigoPostal"          => $codigoPostal,
            "pais"                  => $pais
            );
        //domicilioID recibe lo que se haya regresado del domiciliomodelo.
        $domicilioId = $this->domiciliomodelo->agregarDomicilio( $insertDomicilio );

        $insertProveedor = array(
            "clave"             => $clave,
            "estatus"           => $estatus,
            "nombre"            => $nombre,
            "rfc"               => $rfc,
            "idDomicilios"      => $domicilioId,
            "telefonoCliente"   => $telefonoCliente,
            "nombreContacto"    => $nombreContacto,
            "telefonoContacto"  => $telefonoContacto,
            "emailContacto"     => $emailContacto
            );

        $resultado = $this->proveedormodelo->agregarProveedor( $insertProveedor );

        if( $resultado == TRUE ){

            redirect (base_url('proveedor/mostrarProveedor'), 'refresh');

        }

    }

    function proveedorAlta(){
        $dato['contenido']  = 'proveedor/agregarProveedor';
        $dato['header']     = 'componentes/header';
        $dato['sidebar']    = 'partials/sidebar';
        $dato['titulo']     = 'Alta Proveedor';
        $this->load->view('index', $dato);
    }


    function mostrarProveedor(){

    	$dato['contenido'] 	= 'proveedor/mostrarProveedor';
        $dato['header'] 	= 'componentes/header';
        $dato['sidebar']    = 'partials/sidebar';
        $dato['titulo'] 	= 'Proveedor';
        $dato['datos']		= $this->proveedormodelo->mostrarProveedor();

        $this->load->view('index', $dato);
    }

    function borrarProveedor( $id ){

        $resultado = $this->proveedormodelo->borrarProveedor($id);

        if($resultado == TRUE ){
            redirect (base_url('proveedor/mostrarProveedor'), 'refresh');
        }

    }

    function editarProveedor( $id ){

        $registro = $this->proveedormodelo->buscarPorId( $id );

        $dato['contenido']  = 'proveedor/actualizarProveedor';
        $dato['header']     = 'componentes/header';
        $dato['sidebar']    = 'partials/sidebar';
        $dato['titulo']     = 'Actualizar Proveedor';
        $dato['registro']   = $registro;

        $this->load->view('index', $dato);

    }

    function actualizarProveedor( $id ){

        $descripcionTecnica = $this->input->post('descripcionProveedor');

        $respuesta = $this->proveedormodelo->actualizarProveedor ( $descripcionTecnica , $id );

        if( $respuesta == TRUE)
        redirect (base_url('proveedor/mostrarProveedor'), 'refresh');

    }

}
