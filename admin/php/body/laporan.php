 <div class="container-fluid">
 	<div class="widget-box">			
 		<h3 style="padding: 10px;"><b>LAPORAN OLTP</b></h3>
 		<div class="widget-content" style="overflow: hidden;">
 			<?php 
 			include 'php/control/koneksi.php';
 			$query = mysql_query("SELECT SUM(total) AS barang FROM barang");
 			$query2 = mysql_query("SELECT SUM(qty) AS qty FROM pemesanan");
 			$total = mysql_fetch_array($query);
 			$total_keluar = mysql_fetch_array($query2);
 			?>

 			<div style="width:50%;" class="text-center pull-left">
 				<img src="img/keranjang.png" width="150" height="150"><br><br> 				
 				<h5>Jumlah Barang </h5><br> 				
 				<div style="font-size: 20px; font-weight: 700; color: #82E0AA;">
 					Jumlah Barang Keseluruhan = <?php echo $total['barang']; ?>
 				</div>
 				<div style="font-size: 20px; font-weight: 700; color: #E74C3C;">
 					Jumlah Barang Keluar = <?php echo $total_keluar['qty']; ?>
 				</div>
 			</div>

 			<?php 
 			$query = mysql_query("SELECT SUM(status) AS sukses FROM pemesanan WHERE status = '1'");
 			$query2 = mysql_query("SELECT COUNT(status) AS proses FROM pemesanan WHERE status = '0'");
 			$sukses = mysql_fetch_array($query);
 			$proses = mysql_fetch_array($query2);
 			?>
 			<div style="width:50%;" class="text-center pull-left">
 				<img src="img/kasir.png" width="150" height="150"><br><br> 				
 				<h5>Jumlah Transaksi Keseluruhan </h5><br> 				
 				<div style="font-size: 20px; font-weight: 700; color: #5DADE2;">
 					Sukses = <?php echo $sukses['sukses']; ?>
 				</div>
 				<div style="font-size: 20px; font-weight: 700; color: #F4D03F;">
 					Proses = <?php echo $proses['proses']; ?>
 				</div>
 			</div>


 			<?php 
 			$query = mysql_query("SELECT SUM(harga) AS harga FROM pemesanan WHERE status = '1'");
 			$total2 = mysql_fetch_array($query);
 			?>
 			<div style="padding-top:100px; padding-bottom:30px;width:100%;" class="text-center pull-left">
 				<img src="img/money.jpg" width="150" height="150"><br><br> 				
 				<h5>Jumlah Pendapatan </h5><br> 	
 				<div style="font-size: 50px; font-weight: 700; color: #82E0AA;">
 					Rp.<?php echo number_format($total2['harga']); ?>,00
 				</div>			
 			</div>


 		</div>
 	</div>
 </div>
