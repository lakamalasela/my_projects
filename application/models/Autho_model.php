<?php

class Autho_model extends CI_Model{


  

    public function login(){
            $email = $this->input->post("email");
            $password = $this->input->post("password");

            $sql = "SELECT * FROM autho WHERE email='$email' AND password='$password'";

            $query = $this->db->query($sql);


            if($query->num_rows()>0){
                $row = $query->row();
                $this->session->set_userdata("EMAIL",$row->email);
                $this->session->set_userdata("ROLE",$row->role);
                
                return true;
            }else{
                return false;
            }


    }




    
public function logout_a(){

    $this->session->unset_userdata('EMAIL');
   

    redirect('AgoController/login');

}





    }
