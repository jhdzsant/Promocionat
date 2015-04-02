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

    function mostrarProveedor(){

        $dato['contenido'] 	= 'cliente/clienteconsulta';
        $dato['header'] 	= 'componentes/header';
        $dato['titulo'] 	= 'Clentes';
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

    function updUsuario(){
        $id          = $this->input->post('id');
        $email       = $this->input->post('nombre');
        $password    = $this->input->post('apellidopaterno');
        $dato = $this->usuariomodelo->updUsuario($email, $password, $id);
        if($dato = TRUE){
            echo "el usuario se áctualizo correctamente";
        }else{
            echo "Ocurrio un error";
        }
    }

    function delUsuario()
    {
        $id = $this->input->post('id');
        $dato = $this->usuariomodelo->delUsuario($id);
        if ($dato = TRUE) {
            echo "el usuario se borro correctamente";
        } else {
            echo "Ocurrio un error";
        }
    }

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

}