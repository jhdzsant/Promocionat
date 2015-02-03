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

        $dato['contenido'] = 'cliente/clienteconsulta';
        $dato['header'] = 'componentes/header';
        $dato['sidebar'] = 'partials/sidebar';

        $dato['titulo'] = 'Clientes';

        $this->load->view('index',$dato);

    }
    function getCliente(){
        $respuesta = $this->clientemodelo->getCliente();
        print $respuesta;

    }
    function altaCliente()
    {
        $dato['contenido'] = 'cliente/altaCliente';
        $dato['header'] = 'partials/header';
        $dato['sidebar'] = 'partials/sidebar';
        $dato['footer'] = 'partials/footer';
        $dato['menu_items'] = 'partials/menu_items';
        $dato['titulo'] = 'Alta Clientes';
        $dato['menu_items_sm'] = 'partials/menu_items_sm';
        $this->load->view('template',$dato);
    }

    function addCliente(){


        $nombreCliente  = $this->input->post('nombreCliente');
        $rfcCliente     = $this->input->post('rfcCliente');
        $statusCliente   = $this->input->post('statusCliente');
        $telefonoCliente= $this->input->post('telefonoCliente');
        $dato = $this->clientemodelo->addCliente($nombreCliente, $rfcCliente,$statusCliente,$telefonoCliente);
        if($dato = TRUE){
            redirect(base_url('cliente/altaCliente'));

        }else{
            echo "Ocurrio un error";
        }
    }

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