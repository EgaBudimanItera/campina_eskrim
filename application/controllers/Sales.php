<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sales extends CI_Controller {
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
         'page'=>'sales/data',
         'link'=>'sales',
         'sales'=>$this->Persediaan->list_data_all('ref_sales'),
      );
         
       
      $this->load->view('template/wrapper',$data);
   }

   public function formtambah(){
      $data=array(
         'page'=>'sales/formtambah',
         'link'=>'sales',
         'kodesales'=>$this->Persediaan->kodesales(),
         
      );
         
       
      $this->load->view('template/wrapper',$data);
   }

   public function formubah($kodesales){
      $data = array(
            'page' => 'sales/formubah',
            'link' => 'sales',
            'script'=>'',
            'list'=>$this->Persediaan->list_data_where('kodesales',$kodesales,'ref_sales')->row(),
        );
       $this->load->view('template/wrapper',$data);
   }

   public function prosessimpan(){
      $data=array(
         'kodesales'=>$this->input->post('kodesales',true),
         'namasales'=>$this->input->post('namasales',true),
         'notelpsales'=>$this->input->post('notelpsales',true),
         
      );
      $simpan=$this->Persediaan->simpan_data($data,'ref_sales');
      if($simpan){
         echo '<script>alert("Data Berhasil Disimpan");window.location = "'.base_url().'sales";</script>';
      }
      else{
         echo '<script>alert("Data Gagal Disimpan");window.location = "'.base_url().'sales/formtambah";</script>';
      }
   }
   public function prosesubah(){
      $data=array(
         'namasales'=>$this->input->post('namasales',true),
         'notelpsales'=>$this->input->post('notelpsales',true),
         
      );
      $ubah=$this->Persediaan->update('kodesales',$this->input->post('kodesales'),'ref_sales',$data);
      if($ubah){
         echo '<script>alert("Data Berhasil Diedit");window.location = "'.base_url().'sales";</script>';
      }
      else{
         echo '<script>alert("Data Gagal Diedit");window.location = "'.base_url().'sales";</script>';
      }
   }
   public function proseshapus($kodesales){
      $hapus=$this->Persediaan->hapus('kodesales',$kodesales,'ref_sales');
      if($hapus){
         echo '<script>alert("Data Berhasil Dihapus");window.location = "'.base_url().'sales";</script>';
      }
      else{
         echo '<script>alert("Data Gagal Dihapus");window.location = "'.base_url().'sales";</script>';
      }
   }
}