<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
   public function __construct(){
   	parent::__construct();
   	$this->load->model(array('Persediaan'));
   // if($this->session->userdata('status') != "login"){
   //     echo '<script>alert("Maaf, anda harus login terlebih dahulu");window.location = "'.base_url().'";</script>';
   // }else{
   //     $userNama = $this->session->userdata('userNama');
   //     $where=array('userNama'=>$userNama);
   //     $cek=$this->Museraplikasi->cek_login($where)->num_rows(); 
   //     if($cek == 0){
   //         echo '<script>alert("User tidak ditemukan di database");window.location = "'.base_url().'";</script>';
   //     }
   // }   
   }

   public function index()
   {
      $this->load->view('login/formlogin');
   }

   public function proseslogin(){
      $namauser=$this->input->post('namauser',true);
      $password=$this->input->post('password',true);
      $where=array(
           'namauser'=>$namauser,
           'password'=>$password,
      );
      
      $cek=$this->Persediaan->cek_login($where)->num_rows(); 
      if($cek!=0){
         $data_session = array(
           'namauser' => $namauser,
           'akses'=>$this->Persediaan->cek_login($where)->row()->akses,
           'iduser'=>$this->Persediaan->cek_login($where)->row()->iduser,
           'status' => "login",
         );

      $this->session->set_userdata($data_session);
      echo '<script>alert("user ditemukan!");window.location = "'.base_url().'dashboard";</script>';
       
      }
      else{
       echo '<script>alert("Maaf, username atau password salah!");window.location = "'.base_url().'login";</script>';
       
      }   
   }

   public function logout(){
      $this->session->sess_destroy();
      echo '<script>alert("Terima Kasih!");window.location = "'.base_url().'";</script>';
    }
}