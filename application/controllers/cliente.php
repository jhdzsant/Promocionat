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

            $cliente = $this->clientemodelo->getCliente();
            $dato['contenido'] = 'cliente/clienteconsulta';
            $dato['header'] = 'componentes/header';
            $dato['titulo'] = 'Clientes';
            $dato['cliente'] = $cliente;
            $this->load->view('index',$dato);


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
        $calle       = $this->input->post('calle');
        $colonia     = $this->input->post('colonia');
        $codigoPostal= $this->input->post('codigoPostal');
        $municipio   = $this->input->post('municipio');
        $estado      = $this->input->post('estado');
        $pais        = $this->input->post('pais');
        $telefonoCliente = $this->input->post('telefonoCliente');
        $nombreContacto  = $this->input->post('nombreContacto');
        $telefonoContacto = $this->input->post('telefonoContacto');
        $emailContacto   = $this->input->post('emailContacto');


        $dato = $this->clientemodelo->addCliente($clave, $estatus,$nombre ,$rfc ,$calle ,$colonia ,$codigoPostal,$municipio, $estado, $pais, $telefonoCliente, $nombreContacto, $telefonoContacto, $emailContacto);
        if($dato = TRUE){
            redirect(base_url('cliente/clientealta'));

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

}