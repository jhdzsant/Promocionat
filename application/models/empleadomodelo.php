<?php
/**
 * Created by PhpStorm.
 * User: Julian
 * Date: 13/02/2015
 * Time: 12:41 PM
 */



class EmpleadoModelo extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }



    function addNivelEstudios($insert)
    {

        $this->db->insert('nivel_estudios', $insert);

        return $this->db->trans_status();

    }

                       //1          //2                //3              //4           //5        //6        //7            //8            //9            //10       //11          //12           //13          //14       //15                  //16        //17          //18    //19      //20  //21     //22        //23           //24            //25          //26              //27        //28        //29               //30     //31          //32
    function agregar($nombre, $ApellidoPaterno, $ApellidoMaterno, $idDepartamento, $idPuesto, $idTurno, $idNivelEstudios, $profesion,  $sueldoMensual, $contrato, $fechaAlta, $fechaBaja, $idStatusEmpleado, $idPerfil, $correoElectronico, $contrasena, $telCelular, $telCasa, $rfc, $imss, $idCivil, $tipoSangre, $pesionAlimen, $nombreEmergencia, $telEmergencia, $calleNumero, $colonia, $delegacionMunicipio, $estado, $codigoPostal, $pais)
    {

    	$insertDomicilio= array(
    	"calleNumero" 		  => $calleNumero,
    	"colonia"             => $colonia,
    	"delegacionMunicipio" => $delegacionMunicipio,
    	"estado"              => $estado,
    	"codigoPostal"        => $codigoPostal,
    	"pais"	              => $pais


    		);

    	//recibe el id de lo que se inserto en la tabla domicilio mediante el domiciliomodelo
        $idDomicilios = $this->domiciliomodelo->agregarDomicilio($insertDomicilio);


        $insert = array(
        "nombre"            => $nombre, 
        "ApellidoPaterno"   => $ApellidoPaterno, 
        "ApellidoMaterno"   => $ApellidoMaterno, 
        "idDepartamento"    => $idDepartamento,  
        "idPuesto" 		    => $idPuesto, 
        "idTurno"		    => $idTurno, 
        "idNivelEstudios"   => $idNivelEstudios, 
        "profesion"         => $profesion, 
        "sueldoMensual"     => $sueldoMensual, 
        "contrato"          => $contrato, 
        "fechaAlta"         => $fechaAlta,  
        "fechaBaja"         => $fechaBaja,  
        "idStatusEmpleado"  => $idStatusEmpleado, 
        "idPerfil"          => $idPerfil, 
        "correoElectronico" => $correoElectronico, 
        "contrasena"        => $contrasena, 
        "idDomicilios"      => $idDomicilios, 
        "telCelular"        => $telCelular,
        "telCasa"           => $telCasa,
        "rfc"               => $rfc,
        "imss"              => $imss,
        "idCivil"           => $idCivil,
        "tipoSangre"        => $tipoSangre,
        "pesionAlimen"      => $pesionAlimen,
        "nombreEmergencia"  => $nombreEmergencia,
        "telEmergencia"     => $telEmergencia


            );

		



    	$this->db->insert('empleados', $insert);
    	return $this->db->trans_status();

  
    }




    function comboboxDepartamentoBuscar() {
        
        $data = $this->db->get('departamento');

        $data = $data->result();

        return $data;
        
    }




      function comboboxPuestoBuscar() {
        $data = array();
        $query = $this->db->get('puesto');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row){
                    $data[] = $row;
                }
        }
        $query->free_result();
        return $data;
    }



    function comboboxTurnoBuscar() {
        $data = array();
        $query = $this->db->get('turno');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row){
                    $data[] = $row;
                }
        }
        $query->free_result();
        return $data;
    }


    function comboboxEstudiosBuscar() {
        $data = array();
        $query = $this->db->get('nivel_estudios');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row){
                    $data[] = $row;
                }
        }
        $query->free_result();
        return $data;
    }


    function comboboxStatusBuscar() {
        $data = array();
        $query = $this->db->get('status_empleado');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row){
                    $data[] = $row;
                }
        }
        $query->free_result();
        return $data;
    }



    function comboboxPerfilBuscar() {
        $data = array();
        $query = $this->db->get('perfiles');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row){
                    $data[] = $row;
                }
        }
        $query->free_result();
        return $data;
    }



    function comboboxcivilBuscar() {
        $data = array();
        $query = $this->db->get('civil');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row){
                    $data[] = $row;
                }
        }
        $query->free_result();
        return $data;
    }

     public function consulta(){
        /*
        $where = array(
            "estatus" => 1
            );
        */

        $this->db->select("*");
        $this->db->from("empleados");

        /*
        if( $this->session->userdata('perfil') != "admin"){
            $this->db->where( $where );
        }
        */

        // El get() se utiliza para ejecutar el query.
        $resultado = $this->db->get();

        // El result() se utiliza para enviar solamente los datos de la consulta.
        return $resultado->result();

    }

    function borrarEmpleado( $id ){

        $this->db->where('idEmpleado', $id );
        $this->db->delete('Empleados');

        return $this->db->trans_status();
    }

      function buscarPorId( $id ){

        $this->db->select('*');
        $this->db->from('empleados');
        $this->db->where('idEmpleado', $id );

        return $this->db->get()->row();

    }


    
    



}