<?php
/**
 * Created by PhpStorm.
 * User: Juls
 * Date: 02/02/2015
 * Time: 07:03 PM
 */

class Usuario extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('usuariomodelo');
    }

    function index (){

        // Verifica si $sesion esta definido, si no tiene valor o si el valor es nulo
        if(!isset  ($sesion) ||  $sesion == '' ||  $sesion == NULL){
            //redirecciona a la pagina de login
            redirect(base_url('login', 'refresh'));
        }

    }

    function vistaAddUsuario(){

        $dato['contenido'] = 'usuario/addUsuario';
        $dato['header'] = 'componentes/header';
        $dato['titulo'] = 'Alta Usuario';

        //Con esta varible es como se debe puede pasar la variable de sesion $session
        $this->load->view('index',$dato);
    }
    function getUsuarios(){
        $usuario = $this->usuariomodelo->getUsuarios();
        $dato['contenido'] = 'usuario/getUsuario';
        $dato['header'] = 'componentes/header';
        $dato['titulo'] = 'Alta Usuario';
        $dato['usuario'] = $usuario;
        $this->load->view('index',$dato);
    }
}