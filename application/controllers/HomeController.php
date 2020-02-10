<?php


class HomeController extends CI_Controller{

        public function home(){
            $this->load->view('home');
        }



      public function show_more(){
          $this->load->view('house');
      }  

}
