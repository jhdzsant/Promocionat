<?php
/**
 * Created by PhpStorm.
 * User: Julian
 * Date: 03/02/2015
 * Time: 09:16 AM
 */

class Empleados extends CI_Controller{

    public function __construct(){
        parent::__construct();
        /* va a mandar a llamar el modelo de empleados
        $this->load->model('empleadoModelo');
    */

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


    function empleadosAlta(){

        $dato['contenido'] = 'empleados/empleadosAlta';
        $dato['header'] = 'componentes/header';
        $dato['sidebar'] = 'partials/sidebar';
        $dato['titulo'] = 'Alta de Empleados';
        $this->load->view('index',$dato);
    }




}