<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Despliega el contenido del acceso denegado
 *
 * @author rodrigo
 */
class Accesodenegado extends CI_Controller {
    function index(){
        $data["msg_denegado"] = "No tienes acceso a este contenido";
        $this->load->helper("url");
        $this->load->view("common/header_v");
        $this->load->view("accesodenegado/accesodenegado_v", $data);
        $this->load->view("common/footer_v");
    }
}

?>
