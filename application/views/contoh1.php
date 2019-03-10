
 <!-- Start Status area -->
    <div class="notika-status-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter"><?php if(!empty($barang)){number_format($barang->total);}?></span></h2>
                            <p>Total Produk</p>
                        </div>
                        <div class="sparkline-bar-stats1">9,4,8,6,5,6,4,8,3,5,9,5</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter"><?php if(!empty($sales)){number_format($sales->total);}?></span></h2>
                            <p>Total Sales</p>
                        </div>
                        <div class="sparkline-bar-stats2">1,4,8,3,5,6,4,8,3,3,9,5</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter"><?php if(!empty($toko)){number_format($toko->total);}?></span></h2>
                            <p>Total Pelanggan</p>
                        </div>
                        <div class="sparkline-bar-stats3">4,2,8,2,5,6,3,8,3,5,9,5</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter"><?php if(!empty($supplier)){number_format($supplier->total);}?></span></h2>
                            <p>Total Supplier</p>
                        </div>
                        <div class="sparkline-bar-stats4">2,4,8,4,5,7,4,7,3,5,7,5</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Status area-->
    <!-- Start Sale Statistic area-->
    <div class="sale-statistic-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                    <div class="sale-statistic-inner notika-shadow mg-tb-30">
                        <div class="curved-inner-pro">
                            <div class="curved-ctn">
                                <h2>Statistic Penjualan</h2>
                                <p>Bulan <?=date("M Y")?></p>
                            </div>
                        </div>
                        <div id="chartblnskr" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-7 col-xs-12">
                    <div class="sale-statistic-inner notika-shadow mg-tb-30">
                        <div class="curved-inner-pro">
                            <div class="curved-ctn">
                                <h2>Laporan Laba Rugi (dalam Rupiah)</h2>
                                <p>Tahun <?=date("Y")?></p>
                            </div>
                        </div>
                        <table class="table">
                            <tr>
                                <td>Penjualan</td>
                                <td>&nbsp</td>
                                <td>&nbsp</td>
                                <td align="right"><?php if($penjualan!=NULL){number_format($penjualan->penjualan);}?></td>
                            </tr>
                            <tr>
                                <td>Pembelian</td>
                                <td>&nbsp</td>
                                <td align="right"><?php if($pembelian!=NULL){number_format($pembelian->pembelian);}?></td>
                                <td>&nbsp</td>
                            </tr>
                            <tr>
                                <td>Persediaan Akhir</td>
                                <td>&nbsp</td>
                                <td align="right"><?php if($persediaanakhir!=NULL){number_format($persediaanakhir->sisa);}?></td>
                                <td>&nbsp</td>
                            </tr>
                            <tr>
                                <td>HPP</td>
                                <td>&nbsp</td>
                                <td>&nbsp</td>
                                <td align="right"><?php if($pembelian!=NULL && $persediaanakhir!=NULL){number_format($pembelian->pembelian-$persediaanakhir->sisa);}?></td>
                            </tr>
                            <hr>
                            <tr>
                                <td>Laba Kotor</td>
                                <td>&nbsp</td>
                                <td>&nbsp</td>
                                <td align="right"><?php if($pembelian!=NULL && $persediaanakhir!=NULL&&$penjualan!=NULL){number_format($penjualan->penjualan+$persediaanakhir->sisa-$pembelian->pembelian);}?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sale Statistic area-->
   