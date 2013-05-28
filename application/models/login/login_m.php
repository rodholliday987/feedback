<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of autentica
 *
 * @author rodrigo
 */
class Login_m extends CI_Model {

    function __construct() {
        // Llamar al constructor de CI_Model
        parent::__construct();
    }
    
    function autentica($login,$password){
        $this->db->select('*');
        $this->db->from('cliente');
        $this->db->where('login',$login);
        $this->db->where('password',$password);
        $query = $this->db->get();
        return $query->row();
    }

}

?>
