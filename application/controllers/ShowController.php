<?php

class ShowController extends CI_Controller{




    


    public function show_house(){

        if(!($this->session->has_userdata("EMAIL")) || ($this->session->userdata("EMAIL"))!="asela@gmail.com"){
            header("Location: ".base_url()."index.php/Agocontroller/login");
        }

        $this->load->model('Post_model');
        $data["details"] = $this->Post_model->post_list();
        $this->load->view('show',$data);

        // if(!($this->session->has_userdata("ROLE")) || ($this->session->userdata("ROLE"))!="a"){
        //     header("Location: ".base_url()."index.php/Agocontroller/login");
        // }
    }

    public function show_contact(){
        if(!($this->session->has_userdata("EMAIL")) || ($this->session->userdata("EMAIL"))!="asela@gmail.com"){
            header("Location: ".base_url()."index.php/Agocontroller/login");
        }

        $this->load->model('Contact_model');
        $data["contacts"] = $this->Contact_model->contact_list();
        $this->load->view('status',$data);


    }


    // public function home(){
    //     $this->load->view('home');
    // }




    
public function update(){

    $house_id = $this->uri->segment(3);
    $this->load->model('Post_model');
    $data["user_data"] =  $this->Post_model->get_id($home_id);
    $data["details"] = $this->Post_model->post_list();
    $this->load->view('post',$data);


    // $this->load->model('Post_model');
    // $result = $this->Post_model->update();

    // if($result){
    //     $this->session->set_flashdata('Success_msg','Record Update');
    // }else{
    //     $this->session->set_flashdata('Error_msg','Fail update');
    // }

    // redirect(base_url('index.php/ShowController/show_house'));
    
}





}