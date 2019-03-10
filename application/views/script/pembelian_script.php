<script type="text/javascript">
	$(document).ready(function(){
		loadTable();
	});
	function loadTable() {
          $('#tampilpembelian').load('<?=base_url()?>pembelian/tabeldetailtemp',function(){})
    };

    function tambahbarang(){
        var kodebarang=$('#kodebarang').val();
        var jumlahbeli=$('#jumlahbeli').val();
        var hargabeli=$('#hargabeli').val();
        if(kodebarang==""||jumlahbeli==""||hargabeli==""){
        	alert("Inputan Nama Barang, Jumlah beli, dan Harga Beli Tidak Boleh kosong");
        }
        $.ajax({
            type: 'POST',
            url: '<?=base_url()?>pembelian/tambahpembeliandet',
            data: 'kodebarang='+kodebarang+'&jumlahbeli='+jumlahbeli+'&hargabeli='+hargabeli,
            dataType: 'JSON',
            success: function(msg){
                loadTable();
                $('#kodebarang').val(null).trigger('change');
               	document.getElementById("jumlahbeli").value = "";
                document.getElementById("hargabeli").value = "";

            }
          });
      };
      function hapustemp(id) {
        $.ajax({
            url: "<?=base_url()?>pembelian/hapusdetail/"+id,
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

