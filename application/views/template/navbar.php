<?php
$namauser = $this->session->userdata('namauser');
$akses = $this->session->userdata('akses');
?>

<!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li class="<?php if($link=='home'){echo'active';}?>"><a data-toggle="tab" href="#home"><i class="notika-icon notika-house"></i> Home</a>
                        </li>
                        <?php if($akses=="Gudang"){
                        ?>
                        <li class="<?php if($link=='master'){echo'active';}?>"><a data-toggle="tab" href="#master"><i class="notika-icon notika-mail"></i> Master</a>
                        </li>
                        <li class="<?php if($link=='transaksi'){echo'active';}?>"><a data-toggle="tab" href="#transaksi"><i class="notika-icon notika-edit"></i> Transaksi</a>
                        </li>
                        <li class="<?php if($link=='laporan'){echo'active';}?>"><a data-toggle="tab" href="#laporan"><i class="notika-icon notika-windows"></i> Laporan</a>
                        </li>
                        <?php
                        }elseif($akses=="Sales"){
                        ?>
                        <li class="<?php if($link=='transaksi'){echo'active';}?>"><a data-toggle="tab" href="#transaksi"><i class="notika-icon notika-edit"></i> Transaksi</a>
                        </li>
                        <?php 
                        }elseif($akses=="Pimpinan"){
                        ?>
                        <li class="<?php if($link=='laporan'){echo'active';}?>"><a data-toggle="tab" href="#laporan"><i class="notika-icon notika-windows"></i> Laporan</a>
                        </li>
                        <li class="<?php if($link=='user'){echo'active';}?>"><a data-toggle="tab" href="#user"><i class="notika-icon notika-form"></i> User</a>
                        </li>
                        <?php 
                        }elseif($akses=="Kepala Gudang"){
			?>
			<li class="<?php if($link=='laporan'){echo'active';}?>"><a data-toggle="tab" href="#laporan"><i class="notika-icon notika-windows"></i> Laporan</a>
                        </li>
			<?php
			}
                        ?>
                        
                        
                       
                        
                        
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <div id="home" class="tab-pane in <?php if($link=='home'||$link=='dashboard'){echo'active';}?> notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li class="active"><a href="<?=base_url()?>dashboard">Dashboard</a>
                                </li>
                                
                            </ul>
                        </div>
                        <?php if($akses=="Gudang"){

                        ?>
                        <div id="master" class="tab-pane notika-tab-menu-bg animated flipInX <?php if($link=='master'||$link=='barang'||$link=='sales'||$link=='supplier'||$link=='toko'){echo'active';}?>">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="<?=base_url()?>barang">Barang</a>
                                </li>
                                <li><a href="<?=base_url()?>sales">Sales</a>
                                </li>
                                <li><a href="<?=base_url()?>supplier">Supplier</a>
                                </li>
                                <li><a href="<?=base_url()?>toko">Toko/Pelanggan</a>
                                </li>
                            </ul>
                        </div>
                        <div id="transaksi" class="tab-pane notika-tab-menu-bg animated flipInX <?php if($link=='transaksi'||$link=='pembelian'||$link=='penjualan'){echo'active';}?>">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="<?=base_url()?>pembelian">Pembelian</a>
                                </li>
                                <li><a href="<?=base_url()?>penjualan">Penjualan</a>
                                </li>
                                
                            </ul>
                        </div>
                        <div id="laporan" class="tab-pane notika-tab-menu-bg animated flipInX <?php if($link=='laporan'||$link=='lpembelian'||$link=='lpenjualan'||$link=='lstok'){echo'active';}?>">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="<?=base_url()?>laporanpembelian">Pembelian</a>
                                </li>
                                <li><a href="<?=base_url()?>laporanpenjualan"">Penjualan</a>
                                </li>
                                <li><a href="<?=base_url()?>laporanstok"">Stok Barang</a>
                                </li>
                            </ul>
                        </div>
                        <?php    
                        }elseif($akses=="Kepala Gudang"){
                        ?>
                        <div id="laporan" class="tab-pane notika-tab-menu-bg animated flipInX <?php if($link=='laporan'||$link=='lpembelian'||$link=='lpenjualan'||$link=='lstok'){echo'active';}?>">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="<?=base_url()?>laporanpembelian">Pembelian</a>
                                </li>
                                <li><a href="<?=base_url()?>laporanpenjualan"">Penjualan</a>
                                </li>
                                <li><a href="<?=base_url()?>laporanstok"">Stok Barang</a>
                                </li>
                            </ul>
                        </div>
                        <?php    
                        }elseif($akses=="Pimpinan"){
                        ?>
                        <div id="laporan" class="tab-pane notika-tab-menu-bg animated flipInX <?php if($link=='laporan'||$link=='lpembelian'||$link=='lpenjualan'||$link=='lstok'){echo'active';}?>">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="<?=base_url()?>laporanpembelian">Pembelian</a>
                                </li>
                                <li><a href="<?=base_url()?>laporanpenjualan"">Penjualan</a>
                                </li>
                                <li><a href="<?=base_url()?>laporanstok"">Stok Barang</a>
                                </li>
                            </ul>
                        </div>
                        <div id="user" class="tab-pane notika-tab-menu-bg animated flipInX <?php if($link=='user'||$link=='pengguna'){echo'active';}?>">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="<?=base_url()?>pengguna"">Pengguna</a>
                                </li>
                                
                            </ul>
                        </div>
                        <?php
                        }
                        ?>
                        
                        
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->