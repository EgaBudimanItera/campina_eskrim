<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Toko extends CI_Controller {
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
         'page'=>'toko/data',
         'link'=>'toko',
         'toko'=>$this->Persediaan->list_data_all('ref_toko'),
      );
         
       
      $this->load->view('template/wrapper',$data);
   }

   public function formtambah(){
      $data=array(
         'page'=>'toko/formtambah',
         'link'=>'toko',
         'kodetoko'=>$this->Persediaan->kodetoko(),
         
      );
         
       
      $this->load->view('template/wrapper',$data);
   }

   public function formubah($kodetoko){
      $data = array(
            'page' => 'toko/formubah',
            'link' => 'toko',
            'script'=>'',
            'list'=>$this->Persediaan->list_data_where('kodetoko',$kodetoko,'ref_toko')->row(),
        );
       $this->load->view('template/wrapper',$data);
   }

   public function prosessimpan(){
      $data=array(
         'kodetoko'=>$this->input->post('kodetoko',true),
         'namatoko'=>$this->input->post('namatoko',true),
         'notelptoko'=>$this->input->post('notelptoko',true),
         'alamattoko'=>$this->input->post('alamattoko',true),
         'pemiliktoko'=>$this->input->post('pemiliktoko',true),
      );
      $simpan=$this->Persediaan->simpan_data($data,'ref_toko');
      if($simpan){
         echo '<script>alert("Data Berhasil Disimpan");window.location = "'.base_url().'toko";</script>';
      }
      else{
         echo '<script>alert("Data Gagal Disimpan");window.location = "'.base_url().'toko/formtambah";</script>';
      }
   }
   public function prosesubah(){
      $data=array(
         'namatoko'=>$this->input->post('namatoko',true),
         'notelptoko'=>$this->input->post('notelptoko',true),
         'alamattoko'=>$this->input->post('alamattoko',true),
         'pemiliktoko'=>$this->input->post('pemiliktoko',true),
      );
      $ubah=$this->Persediaan->update('kodetoko',$this->input->post('kodetoko'),'ref_toko',$data);
      if($ubah){
         echo '<script>alert("Data Berhasil Diedit");window.location = "'.base_url().'toko";</script>';
      }
      else{
         echo '<script>alert("Data Gagal Diedit");window.location = "'.base_url().'toko";</script>';
      }
   }
   public function proseshapus($kodetoko){
      $hapus=$this->Persediaan->hapus('kodetoko',$kodetoko,'ref_toko');
      if($hapus){
         echo '<script>alert("Data Berhasil Dihapus");window.location = "'.base_url().'toko";</script>';
      }
      else{
         echo '<script>alert("Data Gagal Dihapus");window.location = "'.base_url().'toko";</script>';
      }
   }
}