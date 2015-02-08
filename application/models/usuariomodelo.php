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
            "email"    => $email,
            "password" => $password
        );
        $this->db->insert('users', $insert);
        return true;
    }



    function actualizarUsuario( $id, $upd ){
        
        $this->db->where('id', $id);
        $this->db->update('users', $upd);

        return true;
    }

    function borrarUsuario($id){
        // Se crea un arreglo con los datos que iran en el where
        // en este caso se necesita que el id del usuario sea igual al que mando la url
        $where = array(
            "id" => $id
        );
        $this->db->where($where);
        $this->db->delete('users');
        // esto haria la sentencia: DELETE FROM users where id = $id;
        return true;
    }

    function buscarPorId( $id ){

        $this->db->select('*');

        $this->db->from('users');

        $this->db->where('id' , $id);

        return $this->db->get()->row();
    }
}
