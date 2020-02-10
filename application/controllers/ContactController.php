<?php 


class ContactController extends CI_Controller{


    

public function contact(){



    $this->load->view('contact');
}



public function contact_action(){
    $this->load->library('form_validation');

    $this->form_validation->set_rules('Cname','Name','required');
    $this->form_validation->set_rules('Cemail','Email','required');
    $this->form_validation->set_rules('Csubject','Subject','required');

    
    if($this->form_validation->run()){
        $this->load->model('Contact_model');
        $this->Contact_model->insert();
        
      
        header("Location: ".base_url()."index.php/AboutController/about");
    }else{
        $this->load->view('post');
    
    }


}





}



?>