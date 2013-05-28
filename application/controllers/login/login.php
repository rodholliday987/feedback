<?php

class Login extends CI_Controller {

    function index() {
        $this->load->helper("url");
        $this->load->helper("form");
        $this->load->library('form_validation');

        $this->form_validation->set_rules('login', 'login', 'required|trim|xss_clean');
        $this->form_validation->set_rules('password', 'password', 'required|xss_clean|md5');
        $this->form_validation->set_error_delimiters('<div class="row"><div class="four columns centered"><span class="danger alert">', '</span></div></div>');


        $this->load->view("common/header_v");
        if ($this->form_validation->run() == false) {
            $this->load->view("login/login_v");
        } else {
            $this->_autentica($_POST['login'], $_POST['password']);
        }
        $this->load->view("common/footer_v");
    }

    function _autentica($login, $password) {
        $this->load->helper("url");
        $this->load->model("login/login", "Login", TRUE);
        $usuario = $this->Login->autentica($login, $password);
        if($usuario){
            
        }
        else{
            
        }
        //redirect('/login/usuario/'.$login.'/'.$password,'refresh');
    }

}

?>
