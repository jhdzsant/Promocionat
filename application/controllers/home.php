<?php
/**
 * Created by PhpStorm.
 * User: Juls
 * Date: 02/02/2015
 * Time: 05:14 PM
 */
class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $sesion = ($this->session->userdata('usuario'));

        if (!isset  ($sesion) || $sesion == '' || $sesion == NULL) {
            redirect(base_url('login', 'refresh'));
        }
        $session = $this->session->userdata('usuario');
        //Esta seccion es donde se declara la vista con un arreglo que componen los componenetes principales del template
        $dato['contenido'] = 'componentes/inicio';
        $dato['header'] = 'componentes/header';
        $dato['titulo'] = 'Inicio';


        //Con esta varible es como se debe puede pasar la variable de sesion $session
        $this->load->view('index',$dato);

    }
}