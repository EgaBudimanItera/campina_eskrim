<div id="info-alert1">
    <?=@$this->session->flashdata('msg')?>
</div>
<table class="data-table table table-bordered table-striped" >
  <thead>
    <tr>
      <th class="col-md-1">No</th>
      <th class="col-md-2">Nama Barang</th>
      <th class="col-md-2">Jumlah </th>
      <th class="col-md-2">Harga Satuan (Rp)</th>
      <th class="col-md-3">Subtotal (Rp)</th>
      <th class="col-md-2">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $no=1;
      $total=0;
      foreach($list as $l){
        $sub=$l->jumlahbeli*$l->hargabeli;
    ?>
    <tr>
      <td><?=$no++;?></td>
      <td><?=$l->namabarang;?></td>
      <td><?=number_format($l->jumlahbeli);?></td>
      <td><?=number_format($l->hargabeli);?></td>
      <td><?php echo number_format($sub)?></td>
      <td>
         <center>
          <a href="#" style="color:#DAA520; text-decoration:none;" onclick="if(confirm('Apakah anda yakin?')) hapustemp('<?=$l->iddetpembelian?>');">
            <button type="button" class="btn btn-danger">
              <i class="fa fa-trash"></i>                      
            </button>
          </a> 
        </center>
      </td>
    </tr>
    
    <?php
      $total=$total+($l->jumlahbeli*$l->hargabeli);
      }
    ?>
    <tr>
      <td colspan="4" align="Left">Total Pembelian</td>
      <td colspan="2" align="Right"><?php echo number_format($total)?></td>
    </tr>
  </tbody>
</table>

<script type="text/javascript">
  $(document).ready(function(){
    $("#info-alert1").fadeTo(2000,50).slideUp(50,function(){
          $("#info-alert1").slideUp(50);
      });
  });
</script>