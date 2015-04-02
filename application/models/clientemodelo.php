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

        $consulta = $this->db->get('cliente');

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

    function updCliente($email, $password, $id){
        $upd = array(
            "email"    => $email,
            "password" => $password
        );
        $this->db->where('id',$id);
        $this->db->update('users', $upd);
        return true;
    }

    function delCliente($id){
        $upd = array(
            "activo" => 0
        );
        $this->db->where('id_usuario', $id_usuario);
        $this->db->update('usuario',$upd);
        return true;
    }
}