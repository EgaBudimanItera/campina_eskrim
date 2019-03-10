<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
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
      $tanggal=date("Y-m",strtotime("-1 month"));
      $tglskr=date("Y-m");
      $tahun=date("Y");
      $queryterlaris="SELECT det_penjualan.*,sum(hargajual*jumlahjual) as totalpenjualan,namabarang FROM det_penjualan join ref_barang on(det_penjualan.kodebarang=ref_barang.kodebarang) join penjualan on(det_penjualan.kodepenjualan=penjualan.kodepenjualan) where tglpenjualan like '$tanggal%' group by kodebarang order by sum(hargajual*jumlahjual) desc limit 1";
      $querychart="SELECT det_penjualan.*,sum(hargajual*jumlahjual) as totalpenjualan,namabarang FROM det_penjualan join ref_barang on(det_penjualan.kodebarang=ref_barang.kodebarang) join penjualan on(det_penjualan.kodepenjualan=penjualan.kodepenjualan) where tglpenjualan like '$tglskr%' group by kodebarang order by kodebarang asc";
      
      $data=array(
         'page'=>'contoh1',
         'link'=>'dashboard',
         'barang'=>$this->Persediaan->kueri("SELECT count(*) as total from ref_barang")->row(),
         'toko'=>$this->Persediaan->kueri("SELECT count(*) as total from ref_toko")->row(),
         'sales'=>$this->Persediaan->kueri("SELECT count(*) as total from ref_sales")->row(),
         'supplier'=>$this->Persediaan->kueri("SELECT count(*) as total from ref_supplier")->row(),
         'terlaris'=>$this->Persediaan->kueri($queryterlaris)->row(),
         'row'=>$this->Persediaan->kueri($querychart),
         'script' => 'dashboard_script',
         'penjualan'=>$this->Persediaan->kueri("SELECT coalesce(sum(jumlahjual*hargajual),0) as penjualan from vw_penjualan where YEAR(tglpenjualan)='$tahun'group by YEAR(tglpenjualan)")->row(),
         'pembelian'=>$this->Persediaan->kueri("SELECT coalesce(sum(jumlahbeli*hargabeli),0) as pembelian from vw_pembelian where YEAR(tglpembelian)='$tahun'group by YEAR(tglpembelian)")->row(),
         'persediaanakhir'=>$this->Persediaan->kueri("SELECT coalesce(sum(sisabarang*hargabeli),0) as sisa from vw_pembelian where YEAR(tglpembelian)='$tahun'group by YEAR(tglpembelian)")->row(),
      
      );
      
     
       
      $this->load->view('template/wrapper',$data);
   }
}