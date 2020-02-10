<?php

class Post_model extends CI_Model{



    public function post_list(){
        $sql = "SELECT * FROM post";
        $query = $this->db->query($sql);
        $result = $query->result();
        return $result;
    }




    public function insert(){


    
        $config['upload_path']          = './assest/uploads/';
        $config['allowed_types']        = 'gif|jpg|png|mp4';
        $config['max_size']             = 10000000;
        $config['max_width']            = 3024;
        $config['max_height']           = 1768;
    
        $this->load->library('upload', $config);
    
        if($this->upload->do_upload('photo')){
            $upload_data = $this->upload->data();
            $this->photo = "assest/uploads/".$upload_data['file_name'];
        }else{
            $this->photo = "--";
            echo $this->upload->display_errors();
        }
    
    
    
    
         
           $this->title = $this->input->post("title");
           $this->description = $this->input->post("description");
           $this->post_date = date("Y-m-d H:i:s");
           
        //    $this->photo = $this->input->post("photo");
    
           $this->db->insert('post',$this);
    
    
    
    
    }










    
    // public function update(){




    
    //     $config['upload_path']          = './assest/uploads/';
    //     $config['allowed_types']        = 'gif|jpg|png|mp4';
    //     $config['max_size']             = 10000000;
    //     $config['max_width']            = 3024;
    //     $config['max_height']           = 1768;
    
    //     $this->load->library('upload', $config);
    
    //     if($this->upload->do_upload('photo')){
    //         $upload_data = $this->upload->data();
    //         $this->photo = "assest/uploads/".$upload_data['file_name'];
    //     }else{
    //         $this->photo = "--";
    //         echo $this->upload->display_errors();
    //     }
    
    
    
    
         
    //        $this->title = $this->input->post("title");
    //        $this->description = $this->input->post("description");
    //        $this->post_date = date("Y-m-d H:i:s");

           
    //        $data = array(
    //         'title'=>$this->title ,
    //         'description'=> $this->description,
    //         'photo'=>$this->photo,
    //         'post_date'=>$this->post_date


    //        );
           
    //        $this->photo = $this->input->post("photo");
      
    //     $this->db->where('id', $id);
    //     $this->db->update('post',$data);

    //     if($this->db->affected_row()>0){
    //         return true;
    //     }else{
    //         return false;
    //     }

    //        $this->db->insert('post',$this);
    
    
    
    
    // }

    public function getAll_records($id){
        $query = $this->db->get_where('post',array('id'=>$id));

        if($query->num_rows()>0){
            return $query->row();
        }

        // $this->db->where('id', $id);

        // $query = $this->db->get('post');
        // return $query;
        

       
    }

    public function update_records($id){

            
    
        $config['upload_path']          = './assest/uploads/';
        $config['allowed_types']        = 'gif|jpg|png|mp4';
        $config['max_size']             = 10000000;
        $config['max_width']            = 3024;
        $config['max_height']           = 1768;
    
        $this->load->library('upload', $config);
    
        if($this->upload->do_upload('photo')){
            $upload_data = $this->upload->data();
            $this->photo = "assest/uploads/".$upload_data['file_name'];
        }else{
            $this->photo = "--";
            echo $this->upload->display_errors();
        }
    
    
    
    
         
           $this->title = $this->input->post("title");
           $this->description = $this->input->post("description");
           $this->post_date = date("Y-m-d H:i:s");

           
        //    $data = array(
        //     'title'=>$this->title ,
        //     'description'=> $this->description,
        //     'photo'=>$this->photo,
        //     'post_date'=>$this->post_date


        //    );
         



       return $this->db->where('id', $id)
           ->update('post',$this);




    }






    public function delete_r($id){

        $this->db->where('id',$id);
        $this->db->delete('post');

        if($this->db->affected_rows()>0){
                return true;
        }else{
                return false;
        }
    
    
    
    }









}