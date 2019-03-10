
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
<title>Laporan Penjualan Barang</title>
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
	              <td align="center"><strong>LAPORAN Penjualan ES KRIM</strong></td>
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
		              <td>
		                <table width="100%" border="1px">
		                	<tr>
		                		<td align="center" width="5%"><b>No</b></td>
                    			<td align="center" width="10%"><b>Kode Penjualan</b></td>
                    			<td align="center" width="10%"><b>Tanggal Penjualan</b></td>
                    			<td align="center" width="10%"><b>Toko/Pelanggan</b></td>
                    			<td align="center" width="10%"><b>Nama Produk</b></td>
                    			<td align="center" width="10%"><b>Jumlah Jual</b></td>
                    			<td align="center" width="10%"><b>Harga Jual</b></td>
                    			<td align="center" width="15%"><b>Subtotal</b></td>
		                	</tr>
		                	<?php
		                		$no=1;
		                		$total=0;
		                		foreach($penjualan as $p){
		                	?>
		                	<tr>
		                		<td><?=$no++?></td>
		                		<td><?=$p->kodepenjualan?></td>
		                		<td><?=$p->tglpenjualan?></td>
		                		<td><?=$p->namatoko?></td>
		                		<td><?=$p->namabarang?></td>
		                		<td align="center"><?=number_format($p->jumlahjual)?></td>
		                		<td align="right"><?=number_format($p->hargajual)?></td>
		                		<td align="right"><?=number_format($p->jumlahjual*$p->hargajual)?></td>
		                	</tr>
		                	<?php
		                		$total=$total+($p->jumlahjual*$p->hargajual);
		                		}
		                	?>
		                	<tr>
		                		<td colspan="6" align="right">Total Penjualan</td>
		                		<td colspan="2" align="right"><?=number_format($total)?></td>
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
