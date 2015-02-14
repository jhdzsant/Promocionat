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
}