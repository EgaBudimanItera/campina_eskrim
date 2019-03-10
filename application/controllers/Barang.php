<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {
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
         'page'=>'barang/data',
         'link'=>'barang',
         'barang'=>$this->Persediaan->list_data_all('ref_barang'),
      );
         
       
      $this->load->view('template/wrapper',$data);
   }

   public function formtambah(){
      $data=array(
         'page'=>'barang/formtambah',
         'link'=>'barang',
         'kodebarang'=>$this->Persediaan->kodebarang(),
         
      );
         
       
      $this->load->view('template/wrapper',$data);
   }

   public function formubah($kodebarang){
      $data = array(
            'page' => 'barang/formubah',
            'link' => 'barang',
            'script'=>'',
            'list'=>$this->Persediaan->list_data_where('kodebarang',$kodebarang,'ref_barang')->row(),
        );
       $this->load->view('template/wrapper',$data);
   }

   public function prosessimpan(){
      $data=array(
         'kodebarang'=>$this->input->post('kodebarang',true),
         'namabarang'=>$this->input->post('namabarang',true),
         'harga'=>$this->input->post('harga',true),
         'satuan'=>$this->input->post('satuan',true),
         'stok'=>0,
         'hargabelifirst'=>0,
         'isi'=>$this->input->post('isi',true),
      );
      $simpan=$this->Persediaan->simpan_data($data,'ref_barang');
      if($simpan){
         echo '<script>alert("Data Berhasil Disimpan");window.location = "'.base_url().'barang";</script>';
      }
      else{
         echo '<script>alert("Data Gagal Disimpan");window.location = "'.base_url().'barang/formtambah";</script>';
      }
   }
   public function prosesubah(){
      $data=array(
         'namabarang'=>$this->input->post('namabarang',true),
         'harga'=>$this->input->post('harga',true),
         'satuan'=>$this->input->post('satuan',true),
         'isi'=>$this->input->post('isi',true),
      );
      $ubah=$this->Persediaan->update('kodebarang',$this->input->post('kodebarang'),'ref_barang',$data);

      if($ubah){
         echo '<script>alert("Data Berhasil Diedit");window.location = "'.base_url().'barang";</script>';
      }
      else{
         echo '<script>alert("Data Gagal Diedit");window.location = "'.base_url().'barang";</script>';
      }
   }
   public function proseshapus($kodebarang){
      $hapus=$this->Persediaan->hapus('kodebarang',$kodebarang,'ref_barang');
      if($hapus){
         echo '<script>alert("Data Berhasil Dihapus");window.location = "'.base_url().'barang";</script>';
      }
      else{
         echo '<script>alert("Data Gagal Dihapus");window.location = "'.base_url().'barang";</script>';
      }
   }

   public function getbarang($kodebarang){
      $data=$this->Persediaan->ambil('kodebarang',$kodebarang,'ref_barang')->row_array();
      echo json_encode($data);
   }
}