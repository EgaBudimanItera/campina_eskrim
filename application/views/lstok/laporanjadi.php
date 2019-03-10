
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
table {
    border-collapse: collapse;
}
td.garis {
  border-bottom: 1pt solid black;
}

</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Laporan Stok Barang</title>
</head>
<body onload="window.print()" background="<?=base_url()?>/assets/bgh.jpg" >	
	<table width="100%" border="1px">
		<tr>
        	<td colspan="2">
          		PT Yunikar Jaya Sakti
        	</td>
      	</tr>  
      	<tr rowspan=2>
	        <td colspan="2">
	          <table border="0" width="100%">
	            <tr>
	              <td>&nbsp</td>
	            </tr>
	            <tr>
	              <td align="center"><strong>LAPORAN Stok ES KRIM</strong></td>
	            </tr>
	            <tr>
	              <td align="center">(Dalam Rupiah)</td>
	            </tr>
	            <tr>
	              <td>&nbsp</td>
	            </tr>
	          </table>
	        </td>
	    </tr>
      	<tr>
        	<td colspan="2" align="center">
        		<table width="100%" border="0">
        			<tr>
		              <td>&nbsp</td>  
		            </tr>
		            <tr>
		            	<td>Kode Produk : <?=$stokakhir->kodebarang?></td>
		            </tr>
		            <tr>
		            	<td>Nama Produk : <?=$stokakhir->namabarang?></td>
		            </tr>
		            <tr>
		            	<td>Harga Jual Produk : <?=$stokakhir->harga?></td>
		            </tr>
		            <tr>
		              <td>
		                <table width="100%" border="1px">
		                	<tr>
		                		<td align="center" width="5%"><b>No</b></td>
                    			<td align="center" width="10%"><b>Kode Pembelian</b></td>
                    			<td align="center" width="10%"><b>Tanggal Pembelian</b></td>
                    			
                    			<td align="center" width="10%"><b>Jumlah Beli</b></td>
                    			<td align="center" width="15%"><b>Jumlah Keluar</b></td>
                    			<td align="center" width="15%"><b>Sisa Produk</b></td>
                    			<td align="center" width="10%"><b>Harga Beli</b></td>
		                	</tr>
		                	<?php
		                		$no=1;
		                		
		                		foreach($stok as $p){
		                	?>
		                	<tr>
		                		<td><?=$no++?></td>
		                		<td><?=$p->kodepembelian?></td>
		                		<td><?=$p->tglpembelian?></td>
		                		
		                		
		                		<td align="center"><?=number_format($p->jumlahbeli)?></td>
		                		<td align="center"><?=number_format($p->keluarbarang)?></td>
		                		<td align="right"><?=number_format($p->sisabarang)?></td>
		                		<td align="right"><?=number_format($p->hargabeli)?></td>
		                	</tr>
		                	<?php
		                		}
		                	?>
		                	<tr>
		                		<td colspan="5" align="right">Stok Akhir</td>
		                		<td colspan="2" align="right"><?=number_format($stokakhir->stok)?></td>
		                	</tr>
		                </table>
		               </td>
		            </tr>
        		</table>
        	</td>
       </tr>
	</table>
</body>
</html>
