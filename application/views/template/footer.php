<!-- Start Footer area-->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2019</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer area-->
    <!-- jquery
		============================================ -->
    <script src="<?=base_url()?>assets/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="<?=base_url()?>assets/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="<?=base_url()?>assets/js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="<?=base_url()?>assets/js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?=base_url()?>assets/js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="<?=base_url()?>assets/js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="<?=base_url()?>assets/js/counterup/jquery.counterup.min.js"></script>
    <script src="<?=base_url()?>assets/js/counterup/waypoints.min.js"></script>
    <script src="<?=base_url()?>assets/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?=base_url()?>assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- jvectormap JS
		============================================ -->
    <script src="<?=base_url()?>assets/js/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?=base_url()?>assets/js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?=base_url()?>assets/js/jvectormap/jvectormap-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="<?=base_url()?>assets/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?=base_url()?>assets/js/sparkline/sparkline-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="<?=base_url()?>assets/js/flot/jquery.flot.js"></script>
    <script src="<?=base_url()?>assets/js/flot/jquery.flot.resize.js"></script>
    <script src="<?=base_url()?>assets/js/flot/curvedLines.js"></script>
    <script src="<?=base_url()?>assets/js/flot/flot-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="<?=base_url()?>assets/js/knob/jquery.knob.js"></script>
    <script src="<?=base_url()?>assets/js/knob/jquery.appear.js"></script>
    <script src="<?=base_url()?>assets/js/knob/knob-active.js"></script>
    <!--  wave JS
		============================================ -->
    <script src="<?=base_url()?>assets/js/wave/waves.min.js"></script>
    <script src="<?=base_url()?>assets/js/wave/wave-active.js"></script>
    <!-- Input Mask JS
        ============================================ -->
    <script src="<?=base_url()?>assets/js/jasny-bootstrap.min.js"></script>
    <!-- datapicker JS
        ============================================ -->
    <script src="<?=base_url()?>assets/js/datapicker/bootstrap-datepicker.js"></script>
    <script src="<?=base_url()?>assets/js/datapicker/datepicker-active.js"></script>
    <!-- bootstrap select JS
        ============================================ -->
    <script src="<?=base_url()?>assets/js/bootstrap-select/bootstrap-select.js"></script>
   
     <!--  chosen JS
        ============================================ -->
    <script src="<?=base_url()?>assets/js/chosen/chosen.jquery.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="<?=base_url()?>assets/js/todo/jquery.todo.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="<?=base_url()?>assets/js/plugins.js"></script>
	<!--  Chat JS
		============================================ -->
    <script src="<?=base_url()?>assets/js/chat/moment.min.js"></script>
    <script src="<?=base_url()?>assets/js/chat/jquery.chat.js"></script>
    <!-- Data Table JS
        ============================================ -->
    <script src="<?=base_url()?>assets/js/data-table/jquery.dataTables.min.js"></script>
    <script src="<?=base_url()?>assets/js/data-table/data-table-act.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?=base_url()?>assets/js/main.js"></script>
	<!-- tawk chat JS
		============================================ -->
    <!-- <script src="<?=base_url()?>assets/js/tawk-chat.js"></script> -->
</body>

</html>

<script type="text/javascript">
    $(document).ready(function(){
        $("#info-alert").fadeTo(3000,50).slideUp(50,function(){
          $("#info-alert").slideUp(50);
        });
    });
</script>

<?php
  if (!empty($script))$this->load->view($script);
?>