<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cliente
 *
 * @author rodrigo
 */
class Cliente extends CI_Controller {
    
    function index(){
        $this->load->library("session");
        $userData = $this->session->userdata("userData");
        if($userData){
            $data["nombre"] = $userData['nombre'];
            $this->load->helper("url");
            $this->load->view("common/header_v");        
            $this->load->view("cliente/cuenta_v",$data);
            $this->load->view("common/footer_v");
        }
        else{
            $this->load->helper("url");
            redirect('/accesodenegado/accesodenegado/','refresh');
        }
        
        
    }
}

?>
