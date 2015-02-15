<?php

class ProveedorModelo extends CI_Model{
	
	public function __construct()
    {
        parent::__construct();
    }

    function agregarProveedor($insert){

        $this->db->insert('proveedor', $insert );

        return $this->db->trans_status();
        
    }

    function mostrarProveedor(){

    	$consulta = $this->db->get('proveedor');

        return $consulta->result();

    }



    function borrarProveedor( $id ){

        $this->db->where('idProveedor', $id );
        $this->db->delete('proveedor');

        return $this->db->trans_status();
    }

    function buscarPorId( $id ){

        $this->db->select('*');
        $this->db->from('proveedor');
        $this->db->where('idProveedor', $id );

        return $this->db->get()->row();

    }

    function actualizarProveedor ( $descripcionProveedor , $id ){
        $upd = array (
            "descripcionProveedor" => $descripcionProveedor
            );

        $this->db->where('idProveedor', $id );
        $this->db->update('proveedor', $upd);

        return $this->db->trans_status();
    }

}


