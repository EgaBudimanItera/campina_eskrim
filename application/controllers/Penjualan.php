<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Controller {
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
         'page'=>'penjualan/data',
         'link'=>'penjualan',
         'penjualan'=>$this->Persediaan->kueri("SELECT penjualan.*,sum(jumlahjual*hargajual) as totaljual,namasales,namatoko FROM penjualan join ref_sales on (penjualan.kodesales=ref_sales.kodesales) join det_penjualan on (penjualan.kodepenjualan=det_penjualan.kodepenjualan) join ref_toko on(penjualan.kodetoko=ref_toko.kodetoko) GROUP by kodepenjualan ORDER BY tglpenjualan DESC")->result(),
      );
      $this->load->view('template/wrapper',$data);
   }

   public function formdetail($kodepenjualan){
      $data=array(
         'page'=>'penjualan/formdetail',
         'link'=>'penjualan',
         'detpenjualan'=>$this->Persediaan->kueri("SELECT * FROM det_penjualan join penjualan on (det_penjualan.kodepenjualan=penjualan.kodepenjualan) JOIN ref_barang on (det_penjualan.kodebarang=ref_barang.kodebarang) JOIN ref_sales on(penjualan.kodesales=ref_sales.kodesales) JOIN ref_toko on(penjualan.kodetoko=ref_toko.kodetoko) WHERE det_penjualan.kodepenjualan='$kodepenjualan'")->result(),
         'penjualan'=>$this->Persediaan->kueri("SELECT penjualan.*,sum(jumlahjual*hargajual) as totaljual,namatoko,namasales,alamattoko,notelptoko FROM penjualan join ref_sales on (penjualan.kodesales=ref_sales.kodesales) join det_penjualan on (penjualan.kodepenjualan=det_penjualan.kodepenjualan) JOIN ref_toko on(penjualan.kodetoko=ref_toko.kodetoko) where penjualan.kodepenjualan='$kodepenjualan' GROUP by kodepenjualan ORDER BY tglpenjualan DESC")->row(),
      );
     
      $this->load->view('template/wrapper',$data);
   }

   public function formtambah(){
      $data=array(
         'page'=>'penjualan/formtambah',
         'link'=>'penjualan',
         'script'=>'script/penjualan_script',
         'sales'=>$this->Persediaan->list_data_all('ref_sales'),
         'barang'=>$this->Persediaan->list_data_all('ref_barang'),
         'toko'=>$this->Persediaan->list_data_all('ref_toko'),
         'kodepenjualan'=>$this->Persediaan->kodepenjualan(),
      );
      $this->load->view('template/wrapper',$data);
   }

   public function tabeldetailtemp(){
      $id=$this->session->userdata('iduser');
      $query="SELECT * FROM det_penjualantemp join ref_barang on(det_penjualantemp.kodebarang=ref_barang.kodebarang) where iduser='$id'";
      $data=array(
         'list'=>$this->Persediaan->kueri($query)->result(),
      );
      $this->load->view('penjualan/tempdata',$data);
   }

   public function tambahpenjualandet(){
      $iduser=$this->session->userdata('iduser');
      $data=array(
         'kodebarang'=>$this->input->post('kodebarang',true),
         'jumlahjual'=>$this->input->post('jumlahjual',true),
         'hargajual'=>$this->input->post('hargajual',true),
         'iduser'=>$iduser
      );
      $simpandetailtemp=$this->Persediaan->simpan_data($data,'det_penjualantemp');
      if($simpandetailtemp){
         $this->session->set_flashdata(
             'msg', 
             '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil ditambah !</div>'
         );
         echo json_encode(array('status'=>'success'));
      }else{
        $this->session->set_flashdata(
             'msg', 
             '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Peringatan!</strong> Data gagal ditambah !</div>'
         );
        echo json_encode(array('status'=>'fail'));
      }
   }

   public function hapusdetail($id){
      $hapusdetailtemp=$this->Persediaan->hapus('iddetpenjualan',$id,'det_penjualantemp');
      if($hapusdetailtemp){
         $this->session->set_flashdata(
            'msg', 
            '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Success!</strong> Data berhasil dihapus !</div>'
         );
         echo json_encode(array('status'=>'success'));
      }else{
         $this->session->set_flashdata(
            'msg', 
            '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Peringatan!</strong> Data gagal dihapus !</div>'
         );
         echo json_encode(array('status'=>'fail'));
      }      
   }

   public function simpanpenjualan(){
      $id=$this->session->userdata('iduser');;
      //cek isi detailpenjualan temp
      $query="SELECT COALESCE((SUM(jumlahjual*hargajual)),0) AS total from det_penjualantemp where iduser='$id'";
      $totalpenjualan=$this->Persediaan->kueri($query)->row()->total;
      $kodepenjualan=$this->Persediaan->kodepenjualan();
      if($totalpenjualan==0){
         $this->session->set_flashdata(
            'msg', 
            '<div class="alert alert-warning"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Warning!</strong> Simpan Data Gagal Karena Data Kosong </div>'
        );
        redirect(base_url().'penjualan/formtambah'); //location
      }else{
         $datapenjualan=array(
            'kodepenjualan'=>$kodepenjualan,
            'tglpenjualan'=>date_format(date_create($this->input->post('tglpenjualan',true)),"Y-m-d"),
            'kodesales'=>$this->input->post('kodesales',true),
            'kodetoko'=>$this->input->post('kodetoko',true),
            'keterangan'=>$this->input->post('keterangan',true),
         );

         $simpanpenjualan=$this->Persediaan->simpan_data($datapenjualan,'penjualan');
        


         $querytemp="SELECT * FROM det_penjualantemp join ref_barang on(det_penjualantemp.kodebarang=ref_barang.kodebarang) where iduser='$id'";
         $penjualan_temp=$this->Persediaan->kueri($querytemp)->result();

         $i=0;
         foreach ($penjualan_temp as $row) {
            $ins[$i]['kodepenjualan']       = $kodepenjualan;
            $ins[$i]['kodebarang']          = $row->kodebarang;
            $ins[$i]['jumlahjual']          = $row->jumlahjual;
            $ins[$i]['hargajual']           = $row->hargajual;
            $i++;  
         } 

        
         //simpan ke det penjualan
        $simpandet=$this->Persediaan->insertbatch('det_penjualan',$ins);

        
        //hapus det penjualan temp
        $hapustem=$this->Persediaan->hapus('iduser',$id,'det_penjualantemp');

        if ($this->db->trans_status() === FALSE)
        {
            $this->db->trans_rollback();
            $this->session->set_flashdata(
            'msg', 
            '<div class="alert alert-warning"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Warning!</strong> Simpan Data Penjualan Gagal </div>'
        );
        }
        else
        {
            $this->db->trans_commit();
            $this->session->set_flashdata(
            'msg', 
            '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Succes</strong> Simpan Data Penjualan Berhasil </div>'
        );
            redirect(base_url().'penjualan');
        }

      }
   }
}