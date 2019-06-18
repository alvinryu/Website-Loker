<?php
  class Pendaftarkerja extends CI_Controller{
    public function index(){
      $this->load->model("pendaftar");
      $data = array(
        'pendaftar' => $this->pendaftar->get()
      );
      $this->load->view("template/header");
      $this->load->view("pendaftarkerja", $data);
      $this->load->view("template/footer");
    }

    public function detail($id=0){
      $this->load->model("pendaftar");
      $data = array(
        'pendaftar' => $this->pendaftar->detail($id)
      );
      if(count($data["pendaftar"])<1){
        redirect("pendaftarkerja");
      }
      $data["pendaftar"] = $data["pendaftar"][0];

      $this->load->view("template/header");
      $this->load->view("detailpendaftar", $data);
      $this->load->view("template/footer");
    }
  }
 ?>
