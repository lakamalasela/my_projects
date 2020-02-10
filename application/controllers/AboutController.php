<?php

class AboutController extends CI_Controller{

    public function about(){

        $this->load->model('Post_model');
        $data["houses"] = $this->Post_model->post_list();
        $this->load->view('about_us',$data);
    }


    // public function home(){
    //     $this->load->view('home');
    // }




}