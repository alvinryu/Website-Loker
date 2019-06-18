<?php
  class Pendaftar extends CI_Model {

    //fungsi untuk mendapatkan datang
    public function get(){
      $this->load->database();
      return $this->db->get("pendaftar")->result();
    }

    //fungsi untuk mendapatkan 4 data random
    public function getRandom(){
      $this->load->database();
      $this->db->order_by("id", "RANDOM");
      $this->db->limit(4);
      return $this->db->get("pendaftar")->result();
    }

    //fungsi untuk detail data
    public function detail($id){
      $this->load->database();
      $this->db->where("id", $id);
      return $this->db->get("pendaftar")->result();
    }

    //fungsi untuk menambah data
    public function insert($data = array()){
      $this->load->database();
      return $this->db->insert("pendaftar", $data);
    }
  }
 ?>
