<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of nouser
 *
 * @author rodrigo
 */
class Nouser extends CI_Controller {
    function index(){
        $this->load->helper("url");
        $data["msg_nouser"] = "No eres usuario del sistema";
        $this->load->view("common/header_v");
        $this->load->view("nouser/nouser_v",$data);
        $this->load->view("common/footer_v");
    }
}

?>
