<script type="text/javascript">
	$(document).ready(function(){
		loadTable();

		//untuk event onclick barang
	  	$("#kodebarang").change(function () {     
	        var kode = $(this).val()
	      	$.ajax({
	          	url: "<?=base_url()?>barang/getbarang/"+kode,
	          	type: 'GET',
	          	success: function(res) {
	              	var res_ = JSON.parse(res);
	              	$('#hargajual').val(res_.harga);
                	$('#stokbarang').val(res_.stok);
	        	}
	      	})
	  	});
	});
	function loadTable() {
          $('#tampilpenjualan').load('<?=base_url()?>penjualan/tabeldetailtemp',function(){})
    };

    function tambahbarang(){
        var jumlahjual=$('#jumlahjual').val();
        var hargajual=$('#hargajual').val();
        var kodebarang=$('#kodebarang').val();
       	var stok=$('#stokbarang').val();
       	if(jumlahjual==""||hargajual==""||kodebarang==""||stok==""){
       		alert("Inputan Tidak Boleh Kosong");
       	}else{
       		if(parseInt(jumlahjual)>parseInt(stok)){
	       		alert("Stok Tidak Cukup");
	       	}else{
	       		$.ajax({
		            type: 'POST',
		            url: '<?=base_url()?>penjualan/tambahpenjualandet',
		            data: 'jumlahjual='+jumlahjual+'&hargajual='+hargajual+'&kodebarang='+kodebarang,
		            dataType: 'JSON',
		            success: function(msg){
		                loadTable();
	                	$('#kodebarang').val(null).trigger('change');
	               		document.getElementById("jumlahjual").value = "";
	                	document.getElementById("hargajual").value = "";
	                	document.getElementById("stokbarang").value = "";
		            }
	          	});
	       	}
       	}
    };
    function hapustemp(id) {
        $.ajax({
            url: "<?=base_url()?>penjualan/hapusdetail/"+id,
            type: "GET",
            dataType: 'JSON',
            success: function(msg) {
                if(msg.status == 'success'){
                    loadTable();                    
                }else if(msg.status == 'fail'){
                   loadTable();
                   alert('gagal hapus data');
                }
            }
        })
    } ;
</script>