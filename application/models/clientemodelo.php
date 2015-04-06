<?php
/**
 * Created by PhpStorm.
 * User: Juls
 * Date: 02/02/2015
 * Time: 09:43 PM
 */
class ClienteModelo extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }

    function getCliente(){
       $consulta =  $this->db->query('select * from cliente join domicilios on cliente.idDomicilios = domicilios.idDomicilios ');

        return $consulta->result();
    }

    function addCliente($clave, $estatus,$nombre ,$rfc ,$calleNumero ,$colonia ,$codigoPostal,$delegacionMunicipio, $estado, $pais, $telefonoCliente, $nombreContacto, $telefonoContacto, $emailContacto){
        $insertDomicilio = array(
            "calleNumero"           => $calleNumero,
            "colonia"               => $colonia,
            "delegacionMunicipio"   => $delegacionMunicipio,
            "estado"                => $estado,
            "codigoPostal"          => $codigoPostal,
            "pais"                  => $pais
        );
        //domicilioID recibe lo que se haya regresado del domiciliomodelo.
        $domicilioId = $this->domiciliomodelo->agregarDomicilio( $insertDomicilio );


        $insert = array(
            "clave"    => $clave,
            "estatus" => $estatus,
            "nombre" => $nombre,
            "rfc" => $rfc,
            "idDomicilios"      => $domicilioId,
            "telefonoCliente" => $telefonoCliente,
            "nombreContacto" => $nombreContacto,
            "telefonoContacto" => $telefonoContacto,
            "emailContacto" => $emailContacto
        );
        $this->db->insert('cliente', $insert);
        return true;
    }

    function borrarCliente( $id ){

        $this->db->where('idCliente', $id );
        $this->db->delete('cliente');

        return $this->db->trans_status();
    }
    function buscarPorId( $id ){

        $this->db->select('*');
        $this->db->from('cliente');
        $this->db->join('domicilios','cliente.idDomicilios=domicilios.idDomicilios');
        $this->db->where('idCliente', $id );

        return $this->db->get()->row();

    }


    function actualizarCliente($id,$clave, $estatus,$nombre ,$rfc ,$calleNumero ,$colonia ,$codigoPostal,$delegacionMunicipio, $estado, $pais, $telefonoCliente, $nombreContacto, $telefonoContacto, $emailContacto){
        $insertDomicilio = array(
            "calleNumero"           => $calleNumero,
            "colonia"               => $colonia,
            "delegacionMunicipio"   => $delegacionMunicipio,
            "estado"                => $estado,
            "codigoPostal"          => $codigoPostal,
            "pais"                  => $pais
        );
        //domicilioID recibe lo que se haya regresado del domiciliomodelo.
        $domicilioId = $this->domiciliomodelo->actualizarDomicilio( $insertDomicilio );


        $upd = array(

            "clave"    => $clave,
            "estatus" => $estatus,
            "nombre" => $nombre,
            "rfc" => $rfc,
            "idDomicilios"      => $domicilioId,
            "telefonoCliente" => $telefonoCliente,
            "nombreContacto" => $nombreContacto,
            "telefonoContacto" => $telefonoContacto,
            "emailContacto" => $emailContacto
        );
        $this->db->update('cliente', $upd);
        $this->db->where('idCliente', $id);
        return true;
    }
}