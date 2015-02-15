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


}


