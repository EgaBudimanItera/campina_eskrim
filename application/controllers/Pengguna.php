<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {
   public function __construct(){
   	parent::__construct();
   	$this->load->model(array('Persediaan'));
      if($this->session->userdata('status') != "login"){
          echo '<script>alert("Maaf, anda harus login terlebih dahulu");window.location = "'.base_url().'";</script>';
      }else{
          $namauser = $this->session->userdata('namauser');
          $where=array('namauser'=>$namauser);
          $cek=$this->Persediaan->cek_login($where)->num_rows(); 
          if($cek == 0){
              echo '<script>alert("User tidak ditemukan di database");window.location = "'.base_url().'";</script>';
          }
      }   
   }

   public function index()
   {
      $data=array(
         'page'=>'pengguna/data',
         'link'=>'pengguna',
         'pengguna'=>$this->Persediaan->list_data_all('ref_user'),
      );
         
       
      $this->load->view('template/wrapper',$data);
   }

   public function formtambah(){
      $data=array(
         'page'=>'pengguna/formtambah',
         'link'=>'pengguna',
         
      );
         
       
      $this->load->view('template/wrapper',$data);
   }

   public function prosessimpan(){
      $data=array(
         
         'namauser'=>$this->input->post('namauser',true),
         'password'=>"12345678",
         'akses'=>$this->input->post('akses',true),
      );
      $simpan=$this->Persediaan->simpan_data($data,'ref_user');
      if($simpan){
         echo '<script>alert("Data Berhasil Disimpan");window.location = "'.base_url().'pengguna";</script>';
      }
      else{
         echo '<script>alert("Data Gagal Disimpan");window.location = "'.base_url().'pengguna/formtambah";</script>';
      }
   }

   public function proseshapus($iduser){
      $hapus=$this->Persediaan->hapus('iduser',$iduser,'ref_user');
      if($hapus){
         echo '<script>alert("Data Berhasil Dihapus");window.location = "'.base_url().'pengguna";</script>';
      }
      else{
         echo '<script>alert("Data Gagal Dihapus");window.location = "'.base_url().'pengguna";</script>';
      }
   }
}