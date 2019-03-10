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
										<h2>Data Barang</h2>
										<p>Form Ubah Barang <span class="bread-ntd">
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
                        <form action="<?=base_url()?>barang/prosesubah" role="form" method="post">
                        	<div class="form-example-int form-horizental">
	                            <div class="form-group">
	                            	
	                                <div class="row">
	                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
	                                        <label class="hrzn-fm">Kode Barang</label>
	                                    </div>
	                                    <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
	                                        <div class="nk-int-st">
	                                            <input type="text" value="<?=$list->kodebarang?>" name="kodebarang" class="form-control input-sm" placeholder="Enter Kode Barang" readonly>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>	
	                        <div class="form-example-int form-horizental mg-t-15">
	                            <div class="form-group">
	                                <div class="row">
	                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
	                                        <label class="hrzn-fm">Nama Barang</label>
	                                    </div>
	                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
	                                        <div class="nk-int-st">
	                                            <input type="text" name="namabarang" value="<?=$list->namabarang?>" class="form-control input-sm" placeholder="Enter Nama Barang">
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="form-example-int form-horizental mg-t-15">
	                            <div class="form-group">
	                                <div class="row">
	                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
	                                        <label class="hrzn-fm">Satuan</label>
	                                    </div>
	                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
	                                        <div class="nk-int-st">
	                                            <div class="chosen-select-act fm-cmp-mg">
				                                    <select class="chosen" name="satuan" data-placeholder="Pilih Satuan">
															<option value=""></option>
															<option value="Buah" <?=$list->satuan == 'Buah' ? ' selected="selected"' : '';?>>Buah</option>
															<option value="Dus" <?=$list->satuan == 'Dus' ? ' selected="selected"' : '';?>>Dus</option>
															<option value="Box" <?=$list->satuan == 'Box' ? ' selected="selected"' : '';?>>Box</option>
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
	                                        <label class="hrzn-fm">Harga</label>
	                                    </div>
	                                    <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
	                                        <div class="nk-int-st">
	                                           <input type="text" value="<?=$list->harga?>" class="form-control" name="harga"  placeholder="Currency">
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                         <div class="form-example-int form-horizental mg-t-15">
	                            <div class="form-group">
	                                <div class="row">
	                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
	                                        <label class="hrzn-fm">Keterangan Isi</label>
	                                    </div>
	                                    <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
	                                        <div class="nk-int-st">
	                                           <textarea name="isi"  class="form-control"><?=$list->isi?></textarea>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="form-example-int mg-t-15">
	                            <div class="row">
	                                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
	                                </div>
	                                <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
	                                    <button class="btn btn-success notika-btn-success">Simpan</button>
	                                </div>
	                            </div>
	                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>