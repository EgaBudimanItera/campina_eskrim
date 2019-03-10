<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Laporanstok extends CI_Controller {
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
         'page'=>'lstok/formcari',
         'link'=>'lstok',
         'barang'=>$this->Persediaan->list_data_all('ref_barang'),
      );
         
       
      $this->load->view('template/wrapper',$data);
   }

   public function prosescari(){
      $kodebarang=$this->input->post('kodebarang',true);
      $daritanggal=date_format(date_create($this->input->post('daritanggal',true)),"Y-m-d");
      $hinggatanggal=date_format(date_create($this->input->post('hinggatanggal',true)),"Y-m-d");

      $query="SELECT * FROM vw_pembelian where tglpembelian between '$daritanggal' and '$hinggatanggal' and kodebarang='$kodebarang'";
      $query2="SELECT * FROM ref_barang where kodebarang='$kodebarang'";
           
      $data=array(
         'stok'=>$this->Persediaan->kueri($query)->result(),
         'stokakhir'=>$this->Persediaan->kueri($query2)->row(),
      );
      
      $this->load->view('lstok/laporanjadi',$data);
   }
}