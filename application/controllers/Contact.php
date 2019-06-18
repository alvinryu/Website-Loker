<?php
  class Contact extends CI_Controller {
    public function index(){
      $this->load->view("template/header");
      $this->load->view("contact");
      $this->load->view("template/footer");
    }
  }
 ?>
