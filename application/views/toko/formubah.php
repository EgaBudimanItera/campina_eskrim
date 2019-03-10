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
										<h2>Data Toko/Pelanggan</h2>
										<p>Form Ubah Toko/Pelanggan <span class="bread-ntd">
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
                        <form action="<?=base_url()?>toko/prosesubah" role="form" method="post">
                        	<div class="form-example-int form-horizental">
	                            <div class="form-group">
	                            	
	                                <div class="row">
	                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
	                                        <label class="hrzn-fm">Kode Toko/Pelanggan</label>
	                                    </div>
	                                    <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
	                                        <div class="nk-int-st">
	                                            <input type="text" value="<?=$list->kodetoko?>" name="kodetoko" class="form-control input-sm" placeholder="Enter Kode Toko" readonly>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>	
	                        <div class="form-example-int form-horizental mg-t-15">
	                            <div class="form-group">
	                                <div class="row">
	                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
	                                        <label class="hrzn-fm">Nama Toko/Pelanggan</label>
	                                    </div>
	                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
	                                        <div class="nk-int-st">
	                                            <input type="text" value="<?=$list->namatoko?>" name="namatoko" class="form-control input-sm" placeholder="Enter Nama Toko">
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="form-example-int form-horizental mg-t-15">
	                            <div class="form-group">
	                                <div class="row">
	                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
	                                        <label class="hrzn-fm">Nama Pemilik Toko/Pelanggan</label>
	                                    </div>
	                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
	                                        <div class="nk-int-st">
	                                            <input type="text" value="<?=$list->pemiliktoko?>" name="pemiliktoko" class="form-control input-sm" placeholder="Enter Nama Pemilik Toko">
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="form-example-int form-horizental mg-t-15">
	                            <div class="form-group">
	                                <div class="row">
	                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
	                                        <label class="hrzn-fm">Alamat</label>
	                                    </div>
	                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
	                                        <div class="nk-int-st">
	                                           <textarea name="alamattoko" class="form-control" placeholder="Alamat Toko"><?=$list->alamattoko?></textarea>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="form-example-int form-horizental mg-t-15">
	                            <div class="form-group">
	                                <div class="row">
	                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
	                                        <label class="hrzn-fm">No Telp</label>
	                                    </div>
	                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
	                                        <div class="nk-int-st">
	                                            <input type="number" value="<?=$list->notelptoko?>" name="notelptoko" class="form-control input-sm" placeholder="Enter No Telp Toko">
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="form-example-int mg-t-15">
	                            <div class="row">
	                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
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