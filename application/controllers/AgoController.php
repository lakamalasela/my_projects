<?php

class AgoController extends CI_Controller{



public function login(){
    $this->load->view('templates/header');
    $this->load->view('login');


}


// public function status(){
//     $this->load->view('templates/header');
//     $this->load->view('status');


// }




public function login_action(){

    $this->load->library('form_validation');

    $this->form_validation->set_rules('email','Email','required');
    $this->form_validation->set_rules('password','Password','required');



    

    if($this->form_validation->run()){

        $this->load->model("Autho_model");




        if($this->Autho_model->login()){

            header("Location: ".base_url()."index.php/showcontroller/show_house");
        }else{
            $this->session->set_flashdata('MSG','Invalid UserName/Password');
            header("Location: ".base_url()."index.php/AgoController/login");
        }

    }


}



public function logout(){

    $this->load->model('Autho_model');
    $this->Autho_model->logout_a();
}




}
