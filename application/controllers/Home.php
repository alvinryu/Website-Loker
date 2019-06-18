<?php
  class Home extends CI_Controller {
    public function index(){
      $this->load->model("pendaftar");
      $data = array(
        //panggil fungsi yang sudah kita buat di model
        'pendaftar' => $this->pendaftar->getRandom()
      );
      $this->load->view("template/header");
      $this->load->view("home", $data);
      $this->load->view("template/footer");
    }
  }
 ?>
