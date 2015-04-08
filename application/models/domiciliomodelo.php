<?php

class DomicilioModelo extends CI_Model{
	
	public function __construct()
    {
        parent::__construct();
    }

    function agregarDomicilio($insert){

        $this->db->insert('domicilios', $insert );

        return $this->db->insert_id();
        
    }

    function actualizarDomicilio( $updDomicilio , $idDomicilio ){

        $this->db->where('idDomicilio', $idDomicilio);
        $this->db->update('domicilios', $updDomicilio );

        return $this->db->true;

    }


}


