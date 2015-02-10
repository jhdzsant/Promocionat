<?php

class Tecnica extends CI_Controller{
	
	public function __construct()
    {
        parent::__construct();

        $this->load->model('tecnicamodelo');
    }


    function index(){

    	$session = $this->session->userdata('usuario');

    	if( empty($session)){
    		redirect (base_url('login'), 'refresh');
    	}
    	$this->mostrarTecnica();
    }

    function agregarTecnica(){

        $descripcion = $this->input->post('descripcion');

        $insert = array(
            "descripcionTecnica" => $descripcion
            );

        $resultado = $this->tecnicamodelo->agregarTecnica($insert);
        if( $resultado == TRUE ){

            redirect (base_url('tecnica/mostrarTecnica'), 'refresh');

        }

    }

    function tecnicaAlta(){
        $dato['contenido']  = 'tecnica/agregarTecnica';
        $dato['header']     = 'componentes/header';
        $dato['sidebar']    = 'partials/sidebar';
        $dato['titulo']     = 'Alta Tecnicas';
        $this->load->view('index', $dato);
    }


    function mostrarTecnica(){

    	$dato['contenido'] 	= 'tecnica/mostrarTecnica';
        $dato['header'] 	= 'componentes/header';
        $dato['sidebar']    = 'partials/sidebar';
        $dato['titulo'] 	= 'Tecnicas';
        $dato['datos']		= $this->tecnicamodelo->mostrarTecnica();

        $this->load->view('index', $dato);
    }

    function borrarTecnica( $id ){

        $resultado = $this->tecnicamodelo->borrarTecnica($id);

        if($resultado == TRUE ){
            redirect (base_url('tecnica/mostrarTecnica'), 'refresh');
        }

    }

    function editarTecnica( $id ){

        $registro = $this->tecnicamodelo->buscarPorId( $id );

        $dato['contenido']  = 'tecnica/actualizarTecnica';
        $dato['header']     = 'componentes/header';
        $dato['sidebar']    = 'partials/sidebar';
        $dato['titulo']     = 'Actualizar Tecnicas';
        $dato['registro']   = $registro;

        $this->load->view('index', $dato);

    }

    function actualizarTecnica( $id ){

        $descripcionTecnica = $this->input->post('descripcionTecnica');

        $respuesta = $this->tecnicamodelo->actualizarTecnica ( $descripcionTecnica , $id );

        if( $respuesta == TRUE)
        redirect (base_url('tecnica/mostrarTecnica'), 'refresh');

    }

}
