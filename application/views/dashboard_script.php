<script type="text/javascript" src="<?=base_url()?>assets_chart/canvasjs/canvasjs.min.js"></script>

<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartblnskr", {
	animationEnabled: true,
	exportEnabled: true,
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	title: {
		text: ""
	},
	axisY: {
		title: "Penjualan (Rp)",
		// suffix: "%",
		// includeZero: false
	},
	axisX: {
		title: "Produk"
	},
	data: [{
		type: "column",
		// yValueFormatString: "#,##0.0#\"%\"",
		dataPoints: [
			<?php foreach($row->result() as $data){?>
			{ label: "<?=$data->namabarang?>", y: <?=$data->totalpenjualan?> },
			<?php }?>
				
			
			
		]
	}]
});
chart.render();


}
</script>