<?php


class PostController extends CI_Controller{

public function post_action(){

    $this->load->library('form_validation');

    $this->form_validation->set_rules('title','Title','required');
    $this->form_validation->set_rules('description','Description','required');



    if($this->form_validation->run()){
        $this->load->model('Post_model');
        $this->Post_model->insert();
      
        header("Location: ".base_url()."index.php/AboutController/about");
    }else{
        $this->load->view('post');
    }







}




public function create_post(){

   
    $this->load->view('create_post');
}








public function edit($id){
    // echo $id;
    $this->load->model('Post_model');
    $record = $this->Post_model->getAll_records($id);
    // var_dump($record);
    $this->load->view('Post',['record'=>$record]);
// echo $id;
    // $this->load->library('form_validation');

    // $this->form_validation->set_rules('title','Title','required');
    // $this->form_validation->set_rules('description','Description','required');

//     $this->load->model('Post_model');
//  $mydata['blog'] = $this->Post_model->update($id);
 
//     $this->load->view('post',$mydata);

    // if($this->form_validation->run()){
        
      
    //     header("Location: ".base_url()."index.php/AboutController/about");
    // }else{
    //     $this->load->view('post');
     







}


public function update($id){



    
    $this->form_validation->set_rules('title','Title','required');
    $this->form_validation->set_rules('description','Description','required');



    if($this->form_validation->run()){
        $this->load->model('Post_model');
        $this->Post_model->update_records($id);
      
        header("Location: ".base_url()."index.php/AboutController/about");
    }else{
        $this->load->view('post');
    }


}



public function delete($id){

    $this->load->model('Post_model');
    $result = $this->Post_model->delete_r($id);

    if($result){
        $this->session->set_flashdata('Succses_msg','Rcord deleted Successfuly');
    }else{
        $this->session->set_flashdata('error_msg','Fail to delete');
    }

    redirect('/ShowController/Show_house');

}


public function show_r($id){
    $this->load->model('Post_model');
  $myhouse = $this->Post_model-> getAll_records($id);
  $this->load->view('house',['myhouse'=> $myhouse]);

 
}












}





