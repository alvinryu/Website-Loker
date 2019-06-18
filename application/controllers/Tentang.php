<?php
  class Tentang extends CI_Controller {
    public function index(){
      $this->load->view("template/header");
      $this->load->view("tentang");
      $this->load->view("template/footer");
    }
  }
 ?>
