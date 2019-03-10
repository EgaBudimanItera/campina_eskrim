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
										<p>Form Tambah Pembelian <span class="bread-ntd">
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
                    <div class="form-example-wrap mg-t-30">
                        <div id="info-alert"><?=@$this->session->flashdata('msg')?></div>
                        <form action="<?=base_url()?>pembelian/simpanpembelian" role="form" method="post">
                        	<div class="form-example-int form-horizental">
	                            <div class="form-group">
	                            	
	                                <div class="row">
	                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
	                                        <label class="hrzn-fm">Kode Pembelian</label>
	                                    </div>
	                                    <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
	                                        <div class="nk-int-st">
	                                            <input type="text" value="<?=$kodepembelian?>" name="kodepembelian" class="form-control input-sm" placeholder="Enter Kode Sales" readonly>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>	

	                        <div class="form-example-int form-horizental mg-t-15">
	                            <div class="form-group">
	                                <div class="row">
	                                    
                                			<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
	                                        	<label class="hrzn-fm">Tanggal Pembelian</label>
	                                    	</div>
                                			<div class="col-lg-4 col-md-3 col-sm-3 col-xs-12" id="data_1">
                                    			<div class="input-group date nk-int-st">
                                        			<span class="input-group-addon"></span>
                                        			<input type="text" class="form-control" name="tglpembelian" value="<?=date('m/d/Y')?>">
                                    			</div>
                                			</div>
	                                </div>
	                            </div>
	                        </div>
	                        
	                        <div class="form-example-int form-horizental mg-t-15">
	                            <div class="form-group">
	                                <div class="row">
	                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
	                                        <label class="hrzn-fm">Supplier</label>
	                                    </div>
	                                    <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
	                                        <div class="nk-int-st">
	                                           	<div class="chosen-select-act fm-cmp-mg">
				                                    <select class="chosen" name="kodesupplier" required="" data-placeholder="Pilih Supplier">
														<option value=""></option>
														<?php
								                            foreach($supplier as $s){
								                          ?>
								                          <option value="<?=$s->kodesupplier?>"><?=$s->namasupplier?></option>
								                          <?php    
								                            }
								                          ?>
													</select>
				                                </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>

	                        <div class="form-example-int form-horizental mg-t-15">
	                            <div class="form-group">
	                                <div class="row">
	                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
	                                        <label class="hrzn-fm">Keterangan</label>
	                                    </div>
	                                    <div class="col-lg-8 col-md-3 col-sm-3 col-xs-12">
	                                        <div class="nk-int-st">
				                                <textarea class="form-control" name="keterangan"></textarea>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <hr>
	                        
	                       
	                        <div class="row">
	                        	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
	                                <div class="nk-int-mk sl-dp-mn">
	                                    <h2>Nama Barang</h2>
	                                </div>
	                                <div class="chosen-select-act fm-cmp-mg">
	                                    <select class="chosen" name="kodebarang"  id="kodebarang" data-placeholder="Pilih Barang">
											<option value=""></option>
											<?php
					                            foreach($barang as $s){
					                          ?>
					                          <option value="<?=$s->kodebarang?>"><?=$s->namabarang?></option>
					                          <?php    
					                            }
					                          ?>
										</select>
	                                </div>
	                            </div>
	                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
	                                <div class="nk-int-mk sl-dp-mn">
	                                    <h2>Jumlah Beli</h2>
	                                </div>
	                                <div class="nk-int-st">
		                                <input type="number" name="jumlahbeli"  id="jumlahbeli" class="form-control input-sm">
                                    </div>
	                            </div>
	                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
	                                <div class="nk-int-mk sl-dp-mn">
	                                    <h2>Harga Satuan Beli</h2>
	                                </div>
	                                <div class="nk-int-st">
		                                <input type="number" name="hargabeli"  id="hargabeli" class="form-control input-sm">
                                    </div>
	                            </div>
	                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
	                                <div class="nk-int-mk sl-dp-mn">
	                                    <h2></h2>
	                                </div>
	                                <div class="nk-int-st">
		                                
		                                <a href="#" class="btn btn-success notika-btn-success" onclick="tambahbarang()">Tambahkan Barang</a>
                                    </div>
	                            </div>
	                        </div>
	                        <hr>

	                        <div id="tampilpembelian"></div>
	                        <div class="form-example-int mg-t-15">
	                            <div class="row">
	                                <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
	                                </div>
	                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
	                                    <button class="btn btn-warning notika-btn-danger">Simpan Transaksi</button>
	                                </div>
	                            </div>
	                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>