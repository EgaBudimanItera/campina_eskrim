<!-- Breadcomb area Start-->
	<div class="breadcomb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="notika-icon notika-windows"></i>
									</div>
									<div class="breadcomb-ctn">
										<h2>Data Pembelian</h2>
										<p>Invoice Pembelian <span class="bread-ntd">
									</div>
								</div>
							</div>
							<!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
									<button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i></button>
								</div>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcomb area End-->
	<div class="form-element-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="invoice-wrap">
                    	<div class="invoice-img">
                            <img src="img/logo/logo.png" alt="" />
                        </div>
                        <div class="invoice-hds-pro">
                        	<div class="row">
                        		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="invoice-cmp-ds ivc-frm">
                                        <div class="invoice-frm">
                                            <span>Invoice Dari</span>
                                        </div>
                                        <div class="comp-tl">
                                            <h2><?=$pembelian->namasupplier?></h2>
                                            <p><?=$pembelian->alamat?></p>
                                        </div>
                                        <div class="cmp-ph-em">
                                            <span><?=$pembelian->notelp?></span>
                                            
                                        </div>
                                    </div>
                                </div>
                        	</div>
                        	<div class="row">
	                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
	                                <div class="invoice-hs">
	                                    <span>No Pembelian</span>
	                                    <h2><?=$pembelian->kodepembelian?></h2>
	                                </div>
	                            </div>
	                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
	                                <div class="invoice-hs date-inv sm-res-mg-t-30 tb-res-mg-t-30 tb-res-mg-t-0">
	                                    <span>Tanggal</span>


	                                    <h2><?=date_format(date_create($pembelian->tglpembelian),"d M Y")?></h2>
	                                </div>
	                            </div>
	                            
	                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
	                                <div class="invoice-hs gdt-inv sm-res-mg-t-30 tb-res-mg-t-30 tb-res-mg-t-0">
	                                    <span>Grand Total (Rp)</span>
	                                    <h2><?=number_format($pembelian->totalbeli)?></h2>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="row">
                            	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                	<div class="invoice-sp">
                                		<table class="table table-hover">
                                			<thead>
											    <tr>
											      <th class="col-md-1">No</th>
											      <th class="col-md-2">Nama Barang</th>
											      <th class="col-md-2">Jumlah </th>
											      <th class="col-md-2">Harga Satuan (Rp)</th>
											      <th class="col-md-3">Subtotal (Rp)</th>
											      
											    </tr>
											  </thead>
											  <tbody>
											    <?php
											      $no=1;
											      $total=0;
											      foreach($detpembelian as $l){
											        $sub=$l->jumlahbeli*$l->hargabeli;
											    ?>
											    <tr>
											      <td><?=$no++;?></td>
											      <td><?=$l->namabarang;?></td>
											      <td ><?=number_format($l->jumlahbeli);?></td>
											      <td  align="Right"><?=number_format($l->hargabeli);?></td>
											      <td align="Right"><?php echo number_format($sub)?></td>
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
                                	</div>
                                </div>
                            </div>
                       	</div>   
                    </div>
                </div>
            </div>
        </div>
    </div>