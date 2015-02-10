<?php

class TecnicaModelo extends CI_Model{
	
	public function __construct()
    {
        parent::__construct();
    }

    function agregarTecnica($insert){

        $this->db->insert('tecnica', $insert );

        return $this->db->trans_status();
        
    }

    function mostrarTecnica(){

    	$consulta = $this->db->get('tecnica');

        return $consulta->result();

    	/*if ($consulta->num_rows() > 0) {

            foreach ($consulta->result() as $fila) {
                $datos[] = $fila;

            }
            
            return $datos;
        }*/

    }



    function borrarTecnica( $id ){

        $this->db->where('idTecnica', $id );
        $this->db->delete('tecnica');

        return $this->db->trans_status();
    }

    function buscarPorId( $id ){

        $this->db->select('*');
        $this->db->from('tecnica');
        $this->db->where('idTecnica', $id );

        return $this->db->get()->row();

    }

    function actualizarTecnica ( $descripcionTecnica , $id ){
        $upd = array (
            "descripcionTecnica" => $descripcionTecnica
            );

        $this->db->where('idTecnica', $id );
        $this->db->update('tecnica', $upd);

        return $this->db->trans_status();
    }

}


