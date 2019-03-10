<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {
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
         'page'=>'supplier/data',
         'link'=>'supplier',
         'supplier'=>$this->Persediaan->list_data_all('ref_supplier'),
      );
         
       
      $this->load->view('template/wrapper',$data);
   }

   public function formtambah(){
      $data=array(
         'page'=>'supplier/formtambah',
         'link'=>'supplier',
         'kodesupplier'=>$this->Persediaan->kodesupplier(),
         
      );
         
       
      $this->load->view('template/wrapper',$data);
   }

   public function formubah($kodesupplier){
      $data = array(
            'page' => 'supplier/formubah',
            'link' => 'supplier',
            'script'=>'',
            'list'=>$this->Persediaan->list_data_where('kodesupplier',$kodesupplier,'ref_supplier')->row(),
        );
       $this->load->view('template/wrapper',$data);
   }

   public function prosessimpan(){
      $data=array(
         'kodesupplier'=>$this->input->post('kodesupplier',true),
         'namasupplier'=>$this->input->post('namasupplier',true),
         'notelp'=>$this->input->post('notelp',true),
         'alamat'=>$this->input->post('alamat',true),
         
      );
      $simpan=$this->Persediaan->simpan_data($data,'ref_supplier');
      if($simpan){
         echo '<script>alert("Data Berhasil Disimpan");window.location = "'.base_url().'supplier";</script>';
      }
      else{
         echo '<script>alert("Data Gagal Disimpan");window.location = "'.base_url().'supplier/formtambah";</script>';
      }
   }
   public function prosesubah(){
      $data=array(
         'namasupplier'=>$this->input->post('namasupplier',true),
         'notelp'=>$this->input->post('notelp',true),
         'alamat'=>$this->input->post('alamat',true),
      );
      $ubah=$this->Persediaan->update('kodesupplier',$this->input->post('kodesupplier'),'ref_supplier',$data);
      if($ubah){
         echo '<script>alert("Data Berhasil Diedit");window.location = "'.base_url().'supplier";</script>';
      }
      else{
         echo '<script>alert("Data Gagal Diedit");window.location = "'.base_url().'supplier";</script>';
      }
   }
   public function proseshapus($kodesupplier){
      $hapus=$this->Persediaan->hapus('kodesupplier',$kodesupplier,'ref_supplier');
      if($hapus){
         echo '<script>alert("Data Berhasil Dihapus");window.location = "'.base_url().'supplier";</script>';
      }
      else{
         echo '<script>alert("Data Gagal Dihapus");window.location = "'.base_url().'supplier";</script>';
      }
   }
}