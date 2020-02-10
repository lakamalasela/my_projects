<?php

Class Contact_model extends CI_Model{


    
public function contact_list(){
    $sql = "SELECT * FROM customer";
    $query = $this->db->query($sql);
    $result = $query->result();
    return $result;
        
}


public function insert(){


    
     
    $this->name = $this->input->post("Cname");
    $this->email = $this->input->post("Cemail");
    $this->subject =  $this->input->post("Csubject");
    $this->message =  $this->input->post("Cmessage");
    
 //    $this->photo = $this->input->post("photo");

    $this->db->insert('customer',$this);


}




} 