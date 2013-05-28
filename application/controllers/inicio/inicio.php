
<?php

class Inicio extends CI_Controller{
    
    function index(){
        $this->load->helper("url");
        
        $this->load->view("common/header_v");
        $this->load->view("inicio/inicio_v");
        $this->load->view("common/footer_v");
    }
    
    
    
}
?>
    
