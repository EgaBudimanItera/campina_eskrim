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
										<h2>Data Sales</h2>
										<p>Form Tambah Sales <span class="bread-ntd">
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
                        <form action="<?=base_url()?>sales/prosessimpan" role="form" method="post">
                        	<div class="form-example-int form-horizental">
	                            <div class="form-group">
	                            	
	                                <div class="row">
	                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
	                                        <label class="hrzn-fm">Kode Sales</label>
	                                    </div>
	                                    <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
	                                        <div class="nk-int-st">
	                                            <input type="text" value="<?=$kodesales?>" name="kodesales" class="form-control input-sm" placeholder="Enter Kode Sales" readonly>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>	
	                        <div class="form-example-int form-horizental mg-t-15">
	                            <div class="form-group">
	                                <div class="row">
	                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
	                                        <label class="hrzn-fm">Nama Sales</label>
	                                    </div>
	                                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
	                                        <div class="nk-int-st">
	                                            <input type="text" name="namasales" class="form-control input-sm" placeholder="Enter Nama Sales">
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        
	                        <div class="form-example-int form-horizental mg-t-15">
	                            <div class="form-group">
	                                <div class="row">
	                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
	                                        <label class="hrzn-fm">No Telp</label>
	                                    </div>
	                                    <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
	                                        <div class="nk-int-st">
	                                           <input type="number" class="form-control" name="notelpsales" placeholder="No Telp Sales">
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