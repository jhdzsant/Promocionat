<?php
/**
 * Created by PhpStorm.
 * User: Julian
 * Date: 02/04/2015
 * Time: 09:16 AM
 */

class Empleados extends CI_Controller{

    public function __construct(){
        parent::__construct();
        /* va a mandar a llamar el modelo de empleados
        */
        $this->load->model('empleadomodelo');
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


    function empleadosAlta(){

        $dato['contenido'] = 'empleados/empleadosAlta'; //vista
        $dato['header'] = 'componentes/header'; //componente
        $dato['sidebar'] = 'partials/sidebar'; //componente
        $dato['titulo'] = 'Alta de Empleados'; //Titulo de esa pagina web
        $dato['departamentoVar'] = $this->empleadomodelo->comboboxDepartamentoBuscar();
        $dato['puestoVar'] = $this->empleadomodelo->comboboxPuestoBuscar();
        $dato['turnoVar'] = $this->empleadomodelo->comboboxTurnoBuscar();
        $dato['nivelVar'] = $this->empleadomodelo->comboboxEstudiosBuscar();
        $dato['statusempVar'] = $this->empleadomodelo->comboboxStatusBuscar();  
        $dato['perfilVar'] = $this->empleadomodelo->comboboxPerfilBuscar();
        $dato['civilVar'] = $this->empleadomodelo->comboboxcivilBuscar();
        $this->load->view('index',$dato);
    }


    function empleadosAgregar(){


        $nombre                 = $this->input->post('nombre');
        $ApellidoPaterno        = $this->input->post('ApellidoPaterno');
        $ApellidoMaterno        = $this->input->post('ApellidoMaterno');
        $idDepartamento         = $this->input->post('idDepartamento');
        $idPuesto               = $this->input->post('idPuesto');
        $idTurno                = $this->input->post('idTurno');
        $idNivelEstudios        = $this->input->post('idNivelEstudios');
        $profesion              = $this->input->post('profesion');
        $sueldoMensual          = $this->input->post('sueldoMensual');
        $contrato               = $this->input->post('contrato');
        $fechaAlta              = $this->input->post('fechaAlta');
        $fechaBaja              = $this->input->post('fechaBaja');
        $idStatusEmpleado       = $this->input->post('idStatusEmpleado');
        $idPerfil               = $this->input->post('idPerfil');
        $correoElectronico      = $this->input->post('correoElectronico');
        $contrasena             = $this->input->post('contrasena');
        //$idDomicilios           = $this->input->post('idDomicilios'); este no por que lo esta retonando despues de insertar
        $telCelular             = $this->input->post('telCelular');
        $telCasa                = $this->input->post('telCasa');
        $rfc                    = $this->input->post('rfc');
        $imss                   = $this->input->post('imss');
        $idCivil                = $this->input->post('idCivil');
        $tipoSangre             = $this->input->post('tipoSangre');
        $pesionAlimen           = $this->input->post('pesionAlimen');
        $nombreEmergencia       = $this->input->post('nombreEmergencia');
        $telEmergencia          = $this->input->post('telEmergencia');
        $calleNumero            = $this->input->post('calleNumero');
        $colonia                = $this->input->post('colonia');
        $delegacionMunicipio    = $this->input->post('delegacionMunicipio');
        $estado                 = $this->input->post('estado');
        $codigoPostal           = $this->input->post('codigoPostal');
        $pais                   = $this->input->post('pais');


                                                      //1         //2                //3              //4            //5        //6           //7           //8           //9           //10      //11         //12           //13            //14       //15                    //16        //17                                                                                                              
        $resultado = $this->empleadomodelo->agregar($nombre, $ApellidoPaterno, $ApellidoMaterno, $idDepartamento, $idPuesto, $idTurno, $idNivelEstudios, $profesion,  $sueldoMensual, $contrato, $fechaAlta, $fechaBaja, $idStatusEmpleado, $idPerfil, $correoElectronico, $contrasena, $telCelular, $telCasa, $rfc, $imss, $idCivil, $tipoSangre, $pesionAlimen, $nombreEmergencia, $telEmergencia, $calleNumero, $colonia, $delegacionMunicipio, $estado, $codigoPostal, $pais);


        if( $resultado == TRUE ){
            redirect( base_url('empleados/empleadosAlta'), 'refresh');
        }else{
            echo "Ocurrio un error al insertar el articulo"; // Falta crear vista de error.
        }

    }



    


    function nivelEstudios(){

        $dato['contenido'] = 'empleados/nivelEstudios';
        $dato['header'] = 'componentes/header';
        $dato['sidebar'] = 'partials/sidebar';
        $dato['titulo'] = 'Nivel de estudios';
        $this->load->view('index',$dato);
    }





    function addNivelEstudios(){


        $descripcion = $this->input->post('nivelEstudios');



        $insert = array(
            "descripción" => $descripcion
        );

        $resultado = $this->empleadomodelo->addNivelEstudios($insert);
        if( $resultado == TRUE ){

            redirect (base_url('empleados/nivelEstudios'), 'refresh');

        }

    }



    //borrar esta mierda solo sive para probarlo independientemete

       function comboboxDepartamento(){
     // retrieve the album and add to the data array
   
        $data['departamentoVar'] = $this->empleadomodelo->comboboxDepartamentoBuscar();
        //

       // $this->load->view('combobox/combobox', $data);
   }


   function comboboxPuesto(){
     // retrieve the album and add to the data array
   
        $data['puestoVar'] = $this->empleadomodelo->comboboxPuestoBuscar();
        
       // $this->load->view('combobox/combobox', $data);
   }


   function comboboxTurno(){


    $data['turnoVar'] = $this->empleadomodelo->comboboxTurnoBuscar();

   $this->load->view('combobox/combobox', $data);

   }



    function consultaEmpleados(){

        $dato['contenido']  = 'empleados/empleadosConsulta';
        $dato['header']     = 'componentes/header';
        $dato['sidebar']    = 'partials/sidebar';
        $dato['titulo']     = 'Tecnicas';
        $dato['datos']      = $this->empleadomodelo->consulta();

        $this->load->view('index', $dato);
    

    }


        function borrarEmpleado( $id ){

        $resultado = $this->empleadomodelo->borrarEmpleado($id);

        if($resultado == TRUE ){
            redirect (base_url('empleados/consultaEmpleados'), 'refresh');
        }

    }

        function editarEmpleados( $id ){

        $registro = $this->empleadomodelo->buscarPorId( $id );

        $dato['contenido']  = 'empleados/EmpleadosActualizar';
        $dato['header']     = 'componentes/header';
        $dato['sidebar']    = 'partials/sidebar';
        $dato['titulo']     = 'Actualizar Empleados';
        $dato['registro']   = $registro;
        $dato['departamentoVar'] = $this->empleadomodelo->comboboxDepartamentoBuscar();

        $this->load->view('index', $dato);

    }


// aca voy
        function Empleadosactualizar( $id ){

      
        $nombre                 = $this->input->post('nombre');
        $ApellidoPaterno        = $this->input->post('ApellidoPaterno');
        $ApellidoMaterno        = $this->input->post('ApellidoMaterno');
        $idDepartamento         = $this->input->post('idDepartamento');
        $idPuesto               = $this->input->post('idPuesto');
        $idTurno                = $this->input->post('idTurno');
        $idNivelEstudios        = $this->input->post('idNivelEstudios');
        $profesion              = $this->input->post('profesion');
        $sueldoMensual          = $this->input->post('sueldoMensual');
        $contrato               = $this->input->post('contrato');
        $fechaAlta              = $this->input->post('fechaAlta');
        $fechaBaja              = $this->input->post('fechaBaja');
        $idStatusEmpleado       = $this->input->post('idStatusEmpleado');
        $idPerfil               = $this->input->post('idPerfil');
        $correoElectronico      = $this->input->post('correoElectronico');
        $contrasena             = $this->input->post('contrasena');

        $respuesta = $this->tecnicamodelo->actualizarTecnica ( $nombre, $id );


        if( $respuesta == TRUE)
        redirect (base_url('empleados/consultaEmpleados'), 'refresh');

    }



 



}






