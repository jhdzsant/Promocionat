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
        $sesion = ($this->session->userdata('usuario'));
        // Verifica si $sesion esta definido, si no tiene valor o si el valor es nulo
        if(!isset  ($sesion) ||  $sesion == '' ||  $sesion == NULL) {
            //redirecciona a la pagina de login
            redirect(base_url('login', 'refresh'));
        }
        $this->getUsuarios();
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

        $dato['contenido']  = 'usuario/getUsuario';
        $dato['header']     = 'componentes/header';
        $dato['titulo']     = 'Alta Usuario';
        $dato['usuario']    = $usuario;

        $this->load->view('index',$dato);
    }

    // Tiene la variable id recibida por que se la esta enviando en la url el id del usuario que se quiere borrar
    function borrarUsuario( $id ){
        // Se manda llamar el metodo borrarUsuario en el modelo, pasandole el $id de el usuario a borrar
        $resultado = $this->usuariomodelo->borrarUsuario( $id );

        if( $resultado == true ){

            redirect ( base_url( 'usuario', 'refresh' ) );

        }

    }

    function editarUsuario( $id ){

        $registro = $this->usuariomodelo->buscarPorId( $id );

        $dato['contenido']  = 'usuario/actualizarUsuario';
        $dato['header']     = 'componentes/header';
        $dato['titulo']     = 'Actualizar Usuario';
        $dato['registro']   = $registro;

        $this->load->view( 'index' , $dato );

    }
    
    function actualizarUsuario( $id ){
        $email = $this->input->post( 'email' );
        $upd = array (
            "email" => $email
            );
        $this->usuariomodelo->actualizarUsuario( $id, $upd);

        redirect('usuario', 'refresh');
    }
}
