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
        if ($consulta->num_rows() > 0) {
            foreach ($consulta->result() as $fila) {
                $data[] = $fila;
            }
           return $data;

        }
    }

    function addCliente($nombreCliente, $rfcCliente,$statusCliente, $telefonoCliente){
        $insert = array(
            "clave"    => $clave,
            "estatus" => $estatus,
            "nombre" => $nombre,
            "rfc" => $rfc,
            "calle" => $calle,
            "colonia" => $colonia,
            "codigoPostal" => $codigoPostal,
            "municipio" => $municipio,
            "estado" => $estado,
            "pais" =>  $pais,
            "telefonoCliente" => $telefonoCliente,
            "nombreContato" => $nombreContacto,
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