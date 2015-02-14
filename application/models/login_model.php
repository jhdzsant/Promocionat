<?php
/**
 * Created by PhpStorm.
 * User: Juls
 * Date: 02/02/2015
 * Time: 05:03 PM
 */
class Login_model extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    public function loginUser($email,$password){
        $this->db->where("correoElectronico", $email);
        $this->db->where("contraseña", $password);
        $query = $this->db->get("empleados");
        if($query->num_rows() == 1){
            return true;
        }else{
            return false;
        }
    }
}