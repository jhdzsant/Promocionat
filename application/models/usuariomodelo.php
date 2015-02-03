<?php
class UsuarioModelo extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }

    function getUsuarios(){

        $consulta = $this->db->get('users');
        if ($consulta->num_rows() > 0) {
            foreach ($consulta->result() as $fila) {
                $data[] = $fila;
            }
            return $data;
        }
    }

    function addUsuario($email, $password){
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

    function updUsuario($email, $password, $id){
        $upd = array(
            "email"    => $email,
            "password" => $password
        );
        $this->db->where('id',$id);
        $this->db->update('users', $upd);
        return true;
    }

    function delUsuario($id){
        $upd = array(
            "activo" => 0
        );
        $this->db->where('id_usuario', $id_usuario);
        $this->db->update('usuario',$upd);
        return true;
    }
}