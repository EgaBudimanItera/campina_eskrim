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
										<h2>Data Barang Masuk(Pembelian)</h2>
										<p>Campina Es Krim <span class="bread-ntd">
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
	<!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <a data-toggle="tooltip" data-placement="bottom" title="Add Pembelian" class="btn btn-success notika-btn-success waves-effect" href="<?=base_url()?>pembelian/formtambah"><i class="fa fa-plus"> Add Pembelian</i></a>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Pembelian</th>
                                        <th>Tanggal</th>
                                        <th>Nama Supplier</th>
                                        <th>Keterangan</th>
                                        <th>Total Pembelian(Rp)</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  	<?php
				                      	$no=1;
				                      	foreach($pembelian as $l){
				                    ?>  
				                    <tr>
				                    	<td><?=$no++?></td>
				                    	<td><?=$l->kodepembelian?></td>
				                    	<td><?=$l->tglpembelian?></td>
				                    	<td><?=$l->namasupplier?></td>
				                    	<td><?=$l->keterangan?></td>
				                    	<td align="right"><?=number_format($l->totalbeli)?></td>
				                    	<td>
				                    		<a data-toggle="tooltip" data-placement="bottom" title="Detail" class="btn btn-warning" href="<?=base_url()?>pembelian/formdetail/<?=$l->kodepembelian?>"><i class="fa fa-pencil"></i></a>
                       
                        					<!-- <a data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger" href="<?=base_url()?>pembelian/proseshapus/<?=$l->kodepembelian?>" onclick="return confirm('yakin akan menghapus data ini?')"><i class="fa fa-trash"></i></a> -->
				                    	</td>
				                    </tr>
				                	<?php 
				                		}
				                	?>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->