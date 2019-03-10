<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pembelian extends CI_Controller {
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
         'page'=>'pembelian/data',
         'link'=>'pembelian',
         'pembelian'=>$this->Persediaan->kueri("SELECT pembelian.*,sum(jumlahbeli*hargabeli) as totalbeli,namasupplier FROM pembelian join ref_supplier on (pembelian.kodesupplier=ref_supplier.kodesupplier) join det_pembelian on (pembelian.kodepembelian=det_pembelian.kodepembelian) GROUP by kodepembelian ORDER BY tglpembelian DESC")->result(),
      );
      $this->load->view('template/wrapper',$data);
   }

   public function formtambah(){
      $data=array(
         'page'=>'pembelian/formtambah',
         'link'=>'pembelian',
         'script'=>'script/pembelian_script',
         'supplier'=>$this->Persediaan->list_data_all('ref_supplier'),
         'barang'=>$this->Persediaan->list_data_all('ref_barang'),
         'kodepembelian'=>$this->Persediaan->kodepembelian(),
      );
      $this->load->view('template/wrapper',$data);
   }

   public function tabeldetailtemp(){
      $id=$this->session->userdata('iduser');
      $query="SELECT * FROM det_pembeliantemp join ref_barang on(det_pembeliantemp.kodebarang=ref_barang.kodebarang) where iduser='$id'";
      $data=array(
         'list'=>$this->Persediaan->kueri($query)->result(),
      );
      $this->load->view('pembelian/tempdata',$data);
   }

   public function tambahpembeliandet(){
      $iduser=$this->session->userdata('iduser');
      $data=array(
         'kodebarang'=>$this->input->post('kodebarang',true),
         'jumlahbeli'=>$this->input->post('jumlahbeli',true),
         'hargabeli'=>$this->input->post('hargabeli',true),
         'iduser'=>$iduser
      );
      $simpandetailtemp=$this->Persediaan->simpan_data($data,'det_pembeliantemp');
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
      $hapusdetailtemp=$this->Persediaan->hapus('iddetpembelian',$id,'det_pembeliantemp');
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

   public function formdetail($kodepembelian){
      $data=array(
         'page'=>'pembelian/formdetail',
         'link'=>'pembelian',
         'detpembelian'=>$this->Persediaan->kueri("SELECT * FROM det_pembelian join pembelian on (det_pembelian.kodepembelian=pembelian.kodepembelian) JOIN ref_barang on (det_pembelian.kodebarang=ref_barang.kodebarang) JOIN ref_supplier on(pembelian.kodesupplier=ref_supplier.kodesupplier) WHERE det_pembelian.kodepembelian='$kodepembelian'")->result(),
         'pembelian'=>$this->Persediaan->kueri("SELECT pembelian.*,sum(jumlahbeli*hargabeli) as totalbeli,namasupplier,alamat,notelp FROM pembelian join ref_supplier on (pembelian.kodesupplier=ref_supplier.kodesupplier) join det_pembelian on (pembelian.kodepembelian=det_pembelian.kodepembelian)  where pembelian.kodepembelian='$kodepembelian' GROUP by kodepembelian ORDER BY tglpembelian DESC")->row(),
      );
     
      $this->load->view('template/wrapper',$data);
   }


   public function proseshapus($kodepembelian){
      $hapuspembelian=$this->Persediaan->hapus('kodepembelian',$kodepembelian,'pembelian');
      $hapusdetpembelian=$this->Persediaan->hapus('kodepembelian',$kodepembelian,'det_pembelian');
      if($hapusdetpembelian&&$hapuspembelian){
         echo '<script>alert("Data Berhasil Dihapus");window.location = "'.base_url().'pembelian";</script>';
      }
      else{
         echo '<script>alert("Data Gagal Dihapus");window.location = "'.base_url().'pembelian";</script>';
      }
   }

   public function simpanpembelian(){
      $id=$this->session->userdata('iduser');;
      //cek isi detailpembelian temp
      $query="SELECT COALESCE((SUM(jumlahbeli*hargabeli)),0) AS total from det_pembeliantemp where iduser='$id'";
      $totalpembelian=$this->Persediaan->kueri($query)->row()->total;
      $kodepembelian=$this->Persediaan->kodepembelian();
      if($totalpembelian==0){
         $this->session->set_flashdata(
            'msg', 
            '<div class="alert alert-warning"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Warning!</strong> Simpan Data Gagal Karena Data Kosong </div>'
        );
        redirect(base_url().'pranota/formtambah'); //location
      }else{
         $datapembelian=array(
            'kodepembelian'=>$kodepembelian,
            'tglpembelian'=>date_format(date_create($this->input->post('tglpembelian',true)),"Y-m-d"),
            'kodesupplier'=>$this->input->post('kodesupplier',true),
            'keterangan'=>$this->input->post('keterangan',true),
         );

         $simpanpembelian=$this->Persediaan->simpan_data($datapembelian,'pembelian');
        


         $querytemp="SELECT * FROM det_pembeliantemp join ref_barang on(det_pembeliantemp.kodebarang=ref_barang.kodebarang) where iduser='$id'";
         $pembelian_temp=$this->Persediaan->kueri($querytemp)->result();

         $i=0;
         foreach ($pembelian_temp as $row) {
            $ins[$i]['kodepembelian']       = $kodepembelian;
            $ins[$i]['kodebarang']          = $row->kodebarang;
            $ins[$i]['jumlahbeli']          = $row->jumlahbeli;
            $ins[$i]['hargabeli']           = $row->hargabeli;
            $ins[$i]['keluarbarang']        = 0;
            $ins[$i]['sisabarang']          = $row->jumlahbeli;
            $i++;  
         } 

        
         //simpan ke det pembelian
        $simpandet=$this->Persediaan->insertbatch('det_pembelian',$ins);

        
        //hapus det pembelian temp
        $hapustem=$this->Persediaan->hapus('iduser',$id,'det_pembeliantemp');

        if ($this->db->trans_status() === FALSE)
        {
            $this->db->trans_rollback();
            $this->session->set_flashdata(
            'msg', 
            '<div class="alert alert-warning"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Warning!</strong> Simpan Data Pembelian Gagal </div>'
        );
        }
        else
        {
            $this->db->trans_commit();
            $this->session->set_flashdata(
            'msg', 
            '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a><strong>Succes</strong> Simpan Data Pembelian Berhasil </div>'
        );
            redirect(base_url().'pembelian');
        }

      }
   }
}