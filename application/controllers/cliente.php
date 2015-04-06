<?php
/**
 * Created by PhpStorm.
 * User: Juls
 * Date: 01/02/2015
 * Time: 09:47 PM
 */
class Cliente extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('clientemodelo');
        $this->load->model('domiciliomodelo');
    }

    function index(){
        // $sesion busca el valor que alla en la sesion
        $sesion =  ($this->session->userdata('usuario'));

        // Verifica si $sesion esta definido, si no tiene valor o si el valor es nulo
        if(!isset  ($sesion) ||  $sesion == '' ||  $sesion == NULL){
            //redirecciona a la pagina de login
            redirect(base_url('login', 'refresh'));
        }

    }
    function getCliente(){

        $dato['contenido'] 	= 'cliente/clienteconsulta';
        $dato['header'] 	= 'componentes/header';
        $dato['sidebar']    = 'partials/sidebar';
        $dato['titulo'] 	= 'Cliente';
        $dato['datos']		= $this->clientemodelo->getCliente();

        $this->load->view('index', $dato);

    }

    /* En esta seccion hace referencia a la vista de alta de Clientes */
    function altaCliente()
    {
        $dato['contenido'] = 'cliente/clientealta';
        $dato['header'] = 'componentes/header';
        $dato['sidebar'] = 'partials/sidebar';
        $dato['titulo'] = 'Clientes';
        $this->load->view('index',$dato);
    }
    /* Fin de Seccion */
    /* En esta seccion hace carga los datos de la vista de cliente */
    function addCliente(){

        $nombre      = $this->input->post('nombre');
        $clave       = $this->input->post('clave');
        $estatus     = $this->input->post('estatus');
        $rfc         = $this->input->post('rfc');
        $calleNumero       = $this->input->post('calleNumero');
        $colonia     = $this->input->post('colonia');
        $codigoPostal= $this->input->post('codigoPostal');
        $delegacionMunicipio   = $this->input->post('delegacionMunicipio');
        $estado      = $this->input->post('estado');
        $pais        = $this->input->post('pais');
        $telefonoCliente = $this->input->post('telefonoCliente');
        $nombreContacto  = $this->input->post('nombreContacto');
        $telefonoContacto = $this->input->post('telefonoContacto');
        $emailContacto   = $this->input->post('emailContacto');


        $dato = $this->clientemodelo->addCliente($clave, $estatus,$nombre ,$rfc ,$calleNumero ,$colonia ,$codigoPostal,$delegacionMunicipio, $estado, $pais, $telefonoCliente, $nombreContacto, $telefonoContacto, $emailContacto);
        if($dato = TRUE){
            redirect(base_url('cliente/altaCliente'));

        }else{
            echo "Ocurrio un error";
        }
    }
    /* Fin de Seccion */



    function vistaAngu()
    {

        $dato['contenido'] = 'cliente/clienteAngular';
        $dato['header'] = 'componentes/header';
        $dato['sidebar'] = 'partials/sidebar';
        $dato['titulo'] = 'Clientes';
        $this->load->view('index',$dato);
    }

    function angular(){
        $cliente = $this->clientemodelo->getCliente();
        print json_encode($cliente);
    }

    function borrarProveedor( $id ){

        $resultado = $this->proveedormodelo->borrarProveedor($id);

        if($resultado == TRUE ){
            redirect (base_url('proveedor/mostrarProveedor'), 'refresh');
        }

    }

    function editarProveedor( $id ){

        $registro = $this->clientemodelo->buscarPorId( $id );

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